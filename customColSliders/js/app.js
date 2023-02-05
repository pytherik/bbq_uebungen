const container = document.querySelector('.slider-container');
const progressR = document.querySelector('#red-value');
const progressG = document.querySelector('#green-value');
const progressB = document.querySelector('#blue-value');
const sliderR = document.querySelector('#red-shape');
const sliderG = document.querySelector('#green-shape');
const sliderB = document.querySelector('#blue-shape');
const val_R = document.querySelector('#val_R');
const val_G = document.querySelector('#val_G');
const val_B = document.querySelector('#val_B');

let r = 50;
let g = 50;
let b = 50;

const canv = document.getElementById("canv");
let ctx = canv.getContext("2d");


const styles = window.getComputedStyle(container);
const maxWidth = styles.width.slice(0,-2);
const valFactor = 255 / maxWidth;

let sliderValue = 50;
progressR.style.width = `50px`;
progressG.style.width = `50px`;
progressB.style.width = `50px`;
val_R.innerHTML = `00${sliderValue}`.slice(-3);
val_G.innerHTML = `00${sliderValue}`.slice(-3);
val_B.innerHTML = `00${sliderValue}`.slice(-3);

let mouseDownR = false;
let mouseDownG = false;
let mouseDownB = false;

//: RED click
sliderR.addEventListener('click', (e) => {
  e.preventDefault();
  sliderValue = Math.round(e.offsetX * valFactor);
  r = `00${sliderValue}`.slice(-3);
  changeColor('r', r);
  val_R.innerHTML = r;
  progressR.style.width = `${e.offsetX}px`;
})

//: RED mousemove
sliderR.addEventListener('mousedown', (e) => {
   mouseDownR = true;
})

sliderR.addEventListener('mousemove', (e) => {
  e.preventDefault();
  if (mouseDownR == true) {
    sliderValue = Math.round(e.offsetX * valFactor);
    r = `00${sliderValue}`.slice(-3);
    changeColor('r', r);
    val_R.innerHTML = r;
    progressR.style.width = `${e.offsetX}px`;
  }
})

//: RED mouseup 
sliderR.addEventListener('mouseup', () => {
  mouseDownR = false;
})



//: GREEN click
sliderG.addEventListener('click', (e) => {
  e.preventDefault();
  sliderValue = Math.round(e.offsetX * valFactor);
  g = `00${sliderValue}`.slice(-3);
  changeColor('g', g);
  val_G.innerHTML = g;
  progressG.style.width = `${e.offsetX}px`;
})

//: GREEN mousemove
sliderG.addEventListener('mousedown', (e) => {
   mouseDownG = true;
})

sliderG.addEventListener('mousemove', (e) => {
  e.preventDefault();
  if (mouseDownG == true) {
    sliderValue = Math.round(e.offsetX * valFactor);
    g = `00${sliderValue}`.slice(-3);
    changeColor('g', g);
    val_G.innerHTML = g;
      progressG.style.width = `${e.offsetX}px`;
  }
})

//: GREEN mouseup
sliderG.addEventListener('mouseup', () => {
  mouseDownG = false;
})


//: BLUE click
sliderB.addEventListener('click', (e) => {
  e.preventDefault();
  sliderValue = Math.round(e.offsetX * valFactor);
  b = `00${sliderValue}`.slice(-3);
  changeColor('b', b);
  val_B.innerHTML = b;
  progressB.style.width = `${e.offsetX}px`;
})

//: BLUE mousemove
sliderB.addEventListener('mousedown', (e) => {
   mouseDownB = true;
})

sliderB.addEventListener('mousemove', (e) => {
  e.preventDefault();
  if (mouseDownB == true) {
    sliderValue = Math.round(e.offsetX * valFactor);
    b = `00${sliderValue}`.slice(-3);
    changeColor('b', b);
    val_B.innerHTML = b;
    progressB.style.width = `${e.offsetX}px`;
  }
})

//: BLUE mouseup
sliderB.addEventListener('mouseup', () => {
  mouseDownB = false;
})

const changeColor = (color, val) => {
  switch (color) {
    case 'r':
      r = val;
      break;
    case 'g':
      g = val;
      break;
    case 'b':
      b = val;
      break;
  }
  ctx.beginPath();
  ctx.rect(0, 0, 400, 400);
  ctx.fillStyle = (`rgba(${r}, ${g}, ${b}, 1)`);
  ctx.fill();
}

(() => {
  r = Math.floor(Math.random() * 256);
  g = Math.floor(Math.random() * 256);
  b = Math.floor(Math.random() * 256);
  
  changeColor('r', r);
  val_R.innerHTML = r;
  progressR.style.width = `${r}}px`;
  
  changeColor('g', g);
  val_G.innerHTML = g;
  progressG.style.width = `${g}px`;
  
  changeColor('b', b);
  val_B.innerHTML = b;
  progressB.style.width = `${b}px`;

})()