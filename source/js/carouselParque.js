document.addEventListener("DOMContentLoaded", function () {
  // 1. Carrusel Principal
  const carouselContainer = document.querySelector(".park-carousel-items");
  if (carouselContainer) {
    cargarMedios();
  }

  // 2. Carrusel de Servicios
  const serviciosContainer = document.querySelector(
    ".park-carousel-items-service",
  );
  if (serviciosContainer) {
    cargarMediosCarrusel(
      ".galeria-container-service",
      ".park-carousel-items-service",
    );
    inicializarCarouselConSelectores({
      carouselSelector: ".park-carousel-service",
      itemsSelector: ".park-carousel-items-service",
      prevSelector: ".carousel-prev-service",
      nextSelector: ".carousel-next-service",
      indicatorsSelector: ".carousel-indicators-service",
    });
  }

  // 3. Carrusel de Promociones
  const promoContainer = document.querySelector(".promo-carousel-items");
  if (promoContainer) {
    cargarMediosCarrusel(".galeria-container-promo", ".promo-carousel-items");
    inicializarCarouselConSelectores({
      carouselSelector: ".promo-carousel",
      itemsSelector: ".promo-carousel-items",
      prevSelector: ".carousel-prev-promo",
      nextSelector: ".carousel-next-promo",
      indicatorsSelector: ".carousel-indicators-promo",
    });
  }
});

// Detectar dispositivo táctil
function isTouchDevice() {
  return (
    "ontouchstart" in window ||
    navigator.maxTouchPoints > 0 ||
    navigator.msMaxTouchPoints > 0
  );
}

// Función reutilizable para cargar imágenes y videos dinámicamente
function cargarMediosCarrusel(galeriaSelector, itemsSelector) {
  const carouselItems = document.querySelector(itemsSelector);
  const galeriaContainer = document.querySelector(galeriaSelector);

  if (!carouselItems || !galeriaContainer) {
    console.warn(
      `No se encontró el contenedor: ${itemsSelector} o ${galeriaSelector}`,
    );
    return;
  }

  carouselItems.innerHTML = "";

  try {
    const rawData = galeriaContainer.getAttribute("data-imagenes");
    if (!rawData) return;

    const medios = JSON.parse(rawData);
    const whatsappGeneral = galeriaContainer.getAttribute("data-whatsapp");
    const whatsappEspecial = galeriaContainer.getAttribute(
      "data-whatsapp-especial",
    );

    medios.forEach((src, index) => {
      const itemDiv = document.createElement("div");
      itemDiv.classList.add("park-carousel-item");
      if (index === 0) itemDiv.classList.add("active");

      // Verificación mejorada para videos (compatible con enlaces con parámetros/Drive)
      const isVideo =
        src.includes(".mp4") || src.includes(".webm") || src.includes(".ogg");

      let linkFinal = whatsappGeneral;
      if (src.includes("Fiestasinfantiles") && whatsappEspecial) {
        linkFinal = whatsappEspecial;
      }

      let content;

      if (isVideo) {
        content = document.createElement("video");
        content.classList.add("park-image-media");
        content.controls = false;
        content.preload = "metadata";
        content.autoplay = true;
        content.loop = true;
        content.muted = true;

        const source = document.createElement("source");
        source.src = src;
        source.type = `video/${src.split(".").pop().split("?")[0]}`;
        content.appendChild(source);
      } else {
        const img = document.createElement("img");
        img.src = src;
        img.alt = "Imagen del carrusel";
        if (itemsSelector === ".promo-carousel-items") {
          img.classList.add("park-image-media-promo");
        } else if (itemsSelector === ".park-carousel-items-service") {
          img.classList.add("park-image-media-service");
        } else {
          img.classList.add("park-image-media");
        }

        if (linkFinal) {
          const link = document.createElement("a");
          link.href = linkFinal;
          link.target = "_blank";
          link.appendChild(img);
          content = link;
        } else {
          content = img;
        }
      }

      itemDiv.appendChild(content);
      carouselItems.appendChild(itemDiv);
    });

    console.log(`Cargados ${medios.length} elementos en ${itemsSelector}`);
  } catch (error) {
    console.error(`Error al procesar el JSON en ${galeriaSelector}:`, error);
  }
}

// Mantener cargarMedios() para retrocompatibilidad con el primer carrusel
function cargarMedios() {
  cargarMediosCarrusel(".galeria-container", ".park-carousel-items");
  inicializarCarousel();
}

// Lógica de controles para el primer carrusel
function inicializarCarousel() {
  inicializarCarouselConSelectores({
    carouselSelector: ".park-carousel",
    itemsSelector: ".park-carousel-items",
    prevSelector: ".carousel-prev",
    nextSelector: ".carousel-next",
    indicatorsSelector: ".carousel-indicators",
  });
}

// Inicializador de carrusel reutilizable
function inicializarCarouselConSelectores({
  carouselSelector,
  itemsSelector,
  prevSelector,
  nextSelector,
  indicatorsSelector,
}) {
  const carousel = document.querySelector(carouselSelector);
  const carouselItems = document.querySelectorAll(
    itemsSelector + " .park-carousel-item",
  );
  const prevBtn = document.querySelector(prevSelector);
  const nextBtn = document.querySelector(nextSelector);
  const indicatorsContainer = document.querySelector(indicatorsSelector);

  if (
    !carousel ||
    !carouselItems.length ||
    !prevBtn ||
    !nextBtn ||
    !indicatorsContainer
  ) {
    console.error(
      `Faltan elementos para inicializar el carrusel: ${carouselSelector}`,
    );
    return;
  }

  let currentIndex = 0;
  let intervalId;
  const totalItems = carouselItems.length;
  const isTouchDeviceFlag = isTouchDevice();

  indicatorsContainer.innerHTML = "";
  carouselItems.forEach((_, index) => {
    const indicator = document.createElement("div");
    indicator.classList.add("indicator");
    if (index === currentIndex) indicator.classList.add("active");
    indicator.addEventListener("click", () => goToSlide(index));
    indicatorsContainer.appendChild(indicator);
  });
  const indicators = indicatorsContainer.querySelectorAll(".indicator");

  function updateCarousel() {
    carouselItems.forEach((item) => {
      item.classList.remove(
        "active",
        "prev",
        "next",
        "far-prev",
        "far-next",
        "back",
      );
    });
    indicators.forEach((indicator, index) => {
      indicator.classList.toggle("active", index === currentIndex);
    });
    for (let i = 0; i < totalItems; i++) {
      const distance = calculateDistance(currentIndex, i, totalItems);
      if (distance === 0) {
        carouselItems[i].classList.add("active");
      } else if (distance === 1) {
        carouselItems[i].classList.add("next");
      } else if (distance === -1) {
        carouselItems[i].classList.add("prev");
      } else if (distance === 2) {
        carouselItems[i].classList.add("far-next");
      } else if (distance === -2) {
        carouselItems[i].classList.add("far-prev");
      } else {
        carouselItems[i].classList.add("back");
      }
    }
  }

  function calculateDistance(current, target, total) {
    const direct = target - current;
    const throughEnd = direct > 0 ? direct - total : direct + total;
    return Math.abs(direct) < Math.abs(throughEnd) ? direct : throughEnd;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateCarousel();
  }

  function goToSlide(index) {
    currentIndex = index;
    updateCarousel();
  }

  function startAutoplay() {
    stopAutoplay();
    intervalId = setInterval(nextSlide, 3000);
  }

  function stopAutoplay() {
    if (intervalId) clearInterval(intervalId);
  }

  updateCarousel();

  if (!isTouchDeviceFlag) {
    startAutoplay();
    carousel.addEventListener("mouseenter", stopAutoplay);
    carousel.addEventListener("mouseleave", startAutoplay);
  }

  prevBtn.addEventListener("click", prevSlide);
  nextBtn.addEventListener("click", nextSlide);

  let touchStartX = 0;
  let touchEndX = 0;

  carousel.addEventListener(
    "touchstart",
    (e) => {
      touchStartX = e.changedTouches[0].screenX;
      if (!isTouchDeviceFlag) stopAutoplay();
    },
    { passive: true },
  );

  carousel.addEventListener(
    "touchend",
    (e) => {
      touchEndX = e.changedTouches[0].screenX;
      const difference = touchStartX - touchEndX;
      if (difference > 50) nextSlide();
      else if (difference < -50) prevSlide();
      if (!isTouchDeviceFlag) startAutoplay();
    },
    { passive: true },
  );

  carouselItems.forEach((item, index) => {
    item.addEventListener("click", () => {
      if (index !== currentIndex) goToSlide(index);
    });
  });
}
