<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$configFile = '/etc/starpark-instagram.conf';
$cacheFile = '/var/www/starpark-web/source/cache/instagram-reels.json';
$cacheSeconds = 900; // 15 minutos

function readConfig(string $path): array
{
    if (!is_readable($path)) {
        throw new RuntimeException('No se puede leer la configuración de Instagram.');
    }

    $config = parse_ini_file($path, false, INI_SCANNER_RAW);

    if (
        !is_array($config) ||
        empty($config['INSTAGRAM_ACCESS_TOKEN']) ||
        empty($config['INSTAGRAM_USER_ID'])
    ) {
        throw new RuntimeException('La configuración de Instagram está incompleta.');
    }

    return $config;
}

function returnJsonFile(string $path): never
{
    readfile($path);
    exit;
}

try {
    if (
        is_file($cacheFile) &&
        (time() - filemtime($cacheFile)) < $cacheSeconds
    ) {
        returnJsonFile($cacheFile);
    }

    $config = readConfig($configFile);

    $fields = implode(',', [
        'id',
        'caption',
        'media_type',
        'media_product_type',
        'media_url',
        'thumbnail_url',
        'permalink',
        'timestamp'
    ]);

    $endpoint = sprintf(
        'https://graph.instagram.com/%s/media?fields=%s&limit=12&access_token=%s',
        rawurlencode($config['INSTAGRAM_USER_ID']),
        rawurlencode($fields),
        rawurlencode($config['INSTAGRAM_ACCESS_TOKEN'])
    );

    $ch = curl_init($endpoint);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_HTTPHEADER => ['Accept: application/json']
    ]);

    $response = curl_exec($ch);
    $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);

    curl_close($ch);

    if ($response === false || $statusCode < 200 || $statusCode >= 300) {
        if (is_file($cacheFile)) {
            returnJsonFile($cacheFile);
        }

        throw new RuntimeException(
            'Instagram respondió con error ' . $statusCode . ': ' . $curlError
        );
    }

    $decoded = json_decode($response, true, 512, JSON_THROW_ON_ERROR);
    $media = $decoded['data'] ?? [];

    $reels = array_values(array_filter(
        $media,
        static fn(array $item): bool =>
            ($item['media_product_type'] ?? '') === 'REELS'
            || ($item['media_type'] ?? '') === 'VIDEO'
    ));

    $result = json_encode(
        ['data' => array_slice($reels, 0, 6)],
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
    );

    if ($result === false) {
        throw new RuntimeException('No fue posible preparar la respuesta.');
    }

    $cacheDirectory = dirname($cacheFile);

    if (!is_dir($cacheDirectory)) {
        mkdir($cacheDirectory, 0775, true);
    }

    file_put_contents($cacheFile, $result, LOCK_EX);

    echo $result;
} catch (Throwable $exception) {
    http_response_code(500);

    echo json_encode([
        'data' => [],
        'error' => 'No fue posible cargar las novedades.'
    ]);
}
