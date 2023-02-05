const progress = document.querySelector('.slider-value');
const slider = document.querySelector('.slider-shape');
const container = document.querySelector('.slider-container');
const val_1 = document.querySelector('#val_1');

const styles = window.getComputedStyle(container);
const maxWidth = styles.width.slice(0,-2);
const valFactor = 255 / maxWidth;

let mouseDown = false;

slider.addEventListener('click', (e) => {
  e.preventDefault();
  val_1.innerHTML = sliderValue;
  progress.style.width = `${e.offsetX}px`;
})

slider.addEventListener('mousedown', (e) => {
   mouseDown = true;
})

slider.addEventListener('mousemove', (e) => {
  e.preventDefault();
  if (mouseDown == true) {
    const sliderValue = Math.round(e.offsetX * valFactor);
    val_1.innerHTML = sliderValue;
    progress.style.width = `${e.offsetX}px`;
  }
})

slider.addEventListener('mouseup', () => {
  mouseDown = false;
})