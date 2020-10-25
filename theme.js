const $btnThemeToggler = document.querySelector(".theme-toggler");
const $lightBg = document.querySelector(".light_bg");
const $darkBg = document.querySelector(".dark_bg");
const $lightBgCircle = $lightBg.querySelector("span");
const $darkBgCircle = $darkBg.querySelector("span");

const MAX_SIZE = 300;
const MAX_SIZE_CSS = `${MAX_SIZE}vmax`;

let bDarkTheme = false;

const resetCirclesPositions = () => {
  const rect = $btnThemeToggler.getBoundingClientRect();
  $lightBg.style.top = `${rect.top+rect.height/2}px`;
  $lightBg.style.left = `${rect.left+rect.width/2}px`;
  $darkBg.style.top = `${rect.top+rect.height/2}px`;
  $darkBg.style.left = `${rect.left+rect.width/2}px`;
}

const setCirclesSize = (ratio) => {
  const sizeCSS = `${MAX_SIZE*Math.min(ratio, 1)}vmax`;
  if(bDarkTheme){
    $lightBgCircle.style.width = MAX_SIZE_CSS;
    $lightBgCircle.style.height = MAX_SIZE_CSS;
    $darkBgCircle.style.width = sizeCSS;
    $darkBgCircle.style.height = sizeCSS;
  }else{
    $darkBgCircle.style.width = MAX_SIZE_CSS;
    $darkBgCircle.style.height = MAX_SIZE_CSS;
    $lightBgCircle.style.width = sizeCSS;
    $lightBgCircle.style.height = sizeCSS;
  }
}

let tweenStart = 0;
const tween = (duration, reset = false) => {
  if(reset){
    tweenStart = performance.now();
    
    resetCirclesPositions();
  }
  const now = performance.now();
  const ratio = (now - tweenStart) / duration;
  
  if(ratio < 1){
    requestAnimationFrame(() => tween(duration));
  }
  setCirclesSize(ratio);
}

const toggleTheme = () => {
  document.body.classList.toggle("darkmode");
  bDarkTheme = !bDarkTheme;
  tween(700, true);
}
$btnThemeToggler.addEventListener("click", toggleTheme);