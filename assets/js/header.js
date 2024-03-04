(() => {
  document.addEventListener("DOMContentLoaded", () => {
    const headerElem = document.querySelector(".header");

    if (!headerElem) {
      return;
    }

    const burgerButtonElem = document.querySelector('.burger');

    const onScroll = () => {
      // const headerBodyHeight = getComputedStyle(document.documentElement)
      //   .getPropertyValue("--header-body-height")
      //   .replace("px", "");

      if (document.documentElement.scrollTop > 198) {
        headerElem.classList.add("scrollOn");
      } else {
        headerElem.classList.remove("scrollOn");
      }
    };

    const onResize = () => {

      if (window.innerWidth < 980) {
        document.removeEventListener("scroll", onScroll);
        headerElem.classList.remove("scrollOn");

        document.body.classList.remove('mobileMenu');

      } else {
        document.addEventListener("scroll", onScroll);
        onScroll();
      }
    };

    window.addEventListener("resize", onResize);

    onResize();


    burgerButtonElem.addEventListener("click", () => {
      document.body.classList.toggle('mobileMenu');
    })
  });
})();
