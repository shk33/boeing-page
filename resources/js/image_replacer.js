(() => {
    'use strict';
    // Page is loaded
    const objects = document.getElementsByClassName('async-image');
    Array.from(objects).map((item) => {
      // Start loading image
      const img = new Image();
      img.src = item.dataset.src;
      // Once image is loaded replace the src of the HTML element
      img.onload = () => {
        item.classList.remove('async-image');
        return item.nodeName === 'IMG' ? 
          item.src = item.dataset.src :
          item.style.backgroundImage = `url(${item.dataset.src})`;
      };
    });
  })();