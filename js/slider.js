// WARNING! This file contains some subset of JS that is not supported by type inference.
// You can try checking 'Transpile to ES5' checkbox if you want the types to be inferred
'use strict';
const swiffyslider = {
  version : "1.6.0",
  init(containerEl = document.body) {
    for (let sType of containerEl.querySelectorAll(".swiffy-slider")) {
      this.initSlider(sType);
    }
  },
  initSlider(options) {
    for (let el of options.querySelectorAll(".slider-nav")) {
      let item = el.classList.contains("slider-nav-next");
      el.addEventListener("click", () => {
        return this.slide(options, item);
      }, {
        passive : true
      });
    }
    for (let openLoginScreenBtn of options.querySelectorAll(".slider-indicators")) {
      openLoginScreenBtn.addEventListener("click", () => {
        return this.slideToByIndicator();
      });
      this.onSlideEnd(options, () => {
        return this.handleIndicators(options);
      }, 60);
    }
    if (options.classList.contains("slider-nav-autoplay")) {
      const artistTrack = options.getAttribute("data-slider-nav-autoplay-interval") ? options.getAttribute("data-slider-nav-autoplay-interval") : 2500;
      this.autoPlay(options, artistTrack, options.classList.contains("slider-nav-autopause"));
    }
    if (["slider-nav-autohide", "slider-nav-animation"].some((tenantsWithPrincipals) => {
      return options.classList.contains(tenantsWithPrincipals);
    })) {
      const artistTrack = options.getAttribute("data-slider-nav-animation-threshold") ? options.getAttribute("data-slider-nav-animation-threshold") : .3;
      this.setVisibleSlides(options, artistTrack);
    }
  },
  setVisibleSlides(e, threshold = .3) {
    let actualObserver = new IntersectionObserver((wrappersTemplates) => {
      wrappersTemplates.forEach((r) => {
        if (r.isIntersecting) {
          r.target.classList.add("slide-visible");
        } else {
          r.target.classList.remove("slide-visible");
        }
      });
      if (e.querySelector(".slider-container>*:first-child").classList.contains("slide-visible")) {
        e.classList.add("slider-item-first-visible");
      } else {
        e.classList.remove("slider-item-first-visible");
      }
      if (e.querySelector(".slider-container>*:last-child").classList.contains("slide-visible")) {
        e.classList.add("slider-item-last-visible");
      } else {
        e.classList.remove("slider-item-last-visible");
      }
    }, {
      root : e.querySelector(".slider-container"),
      threshold : threshold
    });
    for (let playerSelector of e.querySelectorAll(".slider-container>*")) {
      actualObserver.observe(playerSelector);
    }
  },
  slide(slide, leftOfCenter = true) {
    const element = slide.querySelector(".slider-container");
    const s = slide.classList.contains("slider-nav-page");
    const hasDynamicAttributes = slide.classList.contains("slider-nav-noloop");
    const immediately = slide.classList.contains("slider-nav-nodelay");
    const songTimeVisualizations = element.children;
    const pageX = parseInt(window.getComputedStyle(element).columnGap);
    const textOffset = songTimeVisualizations[0].offsetWidth + pageX;
    let _extraRepetitionsLeft = leftOfCenter ? element.scrollLeft + textOffset : element.scrollLeft - textOffset;
    if (s) {
      _extraRepetitionsLeft = leftOfCenter ? element.scrollLeft + element.offsetWidth : element.scrollLeft - element.offsetWidth;
    }
    if (element.scrollLeft < 1 && !leftOfCenter && !hasDynamicAttributes) {
      _extraRepetitionsLeft = element.scrollWidth - element.offsetWidth;
    }
    if (element.scrollLeft >= element.scrollWidth - element.offsetWidth && leftOfCenter && !hasDynamicAttributes) {
      _extraRepetitionsLeft = 0;
    }
    element.scroll({
      left : _extraRepetitionsLeft,
      behavior : immediately ? "auto" : "smooth"
    });
  },
  slideToByIndicator() {
    const e = window.event.target;
    const d = Array.from(e.parentElement.children).indexOf(e);
    const k = e.parentElement.children.length;
    const to = e.closest(".swiffy-slider");
    const duration = to.querySelector(".slider-container").children.length / k * d;
    this.slideTo(to, duration);
  },
  slideTo(container, index) {
    const elem = container.querySelector(".slider-container");
    const pageX = parseInt(window.getComputedStyle(elem).columnGap);
    const tileWidth = elem.children[0].offsetWidth + pageX;
    const immediately = container.classList.contains("slider-nav-nodelay");
    elem.scroll({
      left : tileWidth * index,
      behavior : immediately ? "auto" : "smooth"
    });
  },
  onSlideEnd(ui, position, ajaxInterval = 125) {
    let timer;
    ui.querySelector(".slider-container").addEventListener("scroll", function() {
      window.clearTimeout(timer);
      timer = setTimeout(position, ajaxInterval);
    }, {
      capture : false,
      passive : true
    });
  },
  autoPlay(val, n, e) {
    n = n < 750 ? 750 : n;
    let t = setInterval(() => {
      return this.slide(val);
    }, n);
    const loading = () => {
      return this.autoPlay(val, n, e);
    };
    return e && (["mouseover", "touchstart"].forEach(function(t) {
      val.addEventListener(t, function() {
        window.clearTimeout(t);
      }, {
        once : true,
        passive : true
      });
    }), ["mouseout", "touchend"].forEach(function(t) {
      val.addEventListener(t, function() {
        loading();
      }, {
        once : true,
        passive : true
      });
    })), t;
  },
  handleIndicators(pxPhysicalNode) {
    if (!pxPhysicalNode) {
      return;
    }
    const detector = pxPhysicalNode.querySelector(".slider-container");
    const zoomFactor = detector.scrollWidth - detector.offsetWidth;
    const ipw = detector.scrollLeft / zoomFactor;
    for (let oCalen of pxPhysicalNode.querySelectorAll(".slider-indicators")) {
      let tabs = oCalen.children;
      let i = Math.abs(Math.round((tabs.length - 1) * ipw));
      for (let tab of tabs) {
        tab.classList.remove("active");
      }
      tabs[i].classList.add("active");
    }
  }
};
window.swiffyslider = swiffyslider, document.currentScript.hasAttribute("data-noinit") || (document.currentScript.hasAttribute("defer") ? swiffyslider.init() : document.onreadystatechange = () => {
  if ("interactive" === document.readyState) {
    swiffyslider.init();
  }
});
