// delay function
function delay(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }
  
  const slideList = document.querySelectorAll('.slide-item');
  const dotList = document.querySelectorAll('.dot');
  
  // init slider
  let activeKey = 0;
  slideList[activeKey].classList.add('active');
  
  // change slide
  async function onSlideChange(key) {
    if (key === activeKey) return;
    slideList[activeKey].classList.add('leave');
    await delay(400);
    slideList[activeKey].classList.remove('leave', 'active');
    activeKey = key;
    slideList[key].classList.add('active');
  }
  dotList.forEach((dot, key) => {
    dot.addEventListener('click', () => onSlideChange(key))
  })
  