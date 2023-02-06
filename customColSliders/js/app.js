const container = document.querySelector('.slider-container');

const progressR = document.querySelector('#red-value');
const progressG = document.querySelector('#green-value');
const progressB = document.querySelector('#blue-value');
const progressT = document.querySelector('#trans-value');

const sliderR = document.querySelector('#red-shape');
const sliderG = document.querySelector('#green-shape');
const sliderB = document.querySelector('#blue-shape');
const sliderT = document.querySelector('#trans-shape');

const val_R = document.querySelector('#val_R');
const val_G = document.querySelector('#val_G');
const val_B = document.querySelector('#val_B');
const val_T = document.querySelector('#val_T');

const service = document.querySelector('.service');

let r;
let g;
let b;
let t = 255;

const canv = document.getElementById("canv");
let ctx = canv.getContext("2d");

const styles = window.getComputedStyle(container);

const maxWidth = styles.width.slice(0, -2);
const valFactor = 255 / maxWidth;

let sliderValue = 50;
// 
let mouseDownR = false;
let mouseDownG = false;
let mouseDownB = false;
let mouseDownT = false;


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

//: RED mousewheel
sliderR.addEventListener('wheel', (e) => {
  e.preventDefault();
  r = Math.round(parseInt(progressR.style.width.slice(0, -2)) * valFactor);
  
  if (e.deltaY == 120 && r > 0) {
    r -= 1;
  } else if (r < 255) {
    r += 1;
  }
  changeColor('r', r);
  val_R.innerHTML = `00${r}`.slice(-3);
  progressR.style.width = `${Math.round(r / valFactor)}px`
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

//: GREEN mousewheel
sliderG.addEventListener('wheel', (e) => {
  e.preventDefault();
  g = Math.round(parseInt(progressG.style.width.slice(0, -2)) * valFactor);
  
  if (e.deltaY == 120 && g > 0) {
    g -= 1;
  } else if (g < 255) {
    g += 1;
  }
  changeColor('g', g);
  val_G.innerHTML = `00${g}`.slice(-3);
  progressG.style.width = `${Math.round(g / valFactor)}px`
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

//: BLUE mousewheel
sliderB.addEventListener('wheel', (e) => {
  e.preventDefault();
  b = Math.round(parseInt(progressB.style.width.slice(0, -2)) * valFactor);
  
  if (e.deltaY == 120 && b > 0) {
    b -= 1;
  } else if (b < 255) {
    b += 1;
  }
  changeColor('b', b);
  val_B.innerHTML = `00${b}`.slice(-3);
  progressB.style.width = `${Math.round(b / valFactor)}px`
})


//: TRANSPARENCY click
sliderT.addEventListener('click', (e) => {
  e.preventDefault();
  sliderValue = Math.round(e.offsetX * valFactor);
  t = `00${sliderValue}`.slice(-3);
  changeColor('t', t);
  val_T.innerHTML = t;
  progressB.style.width = `${e.offsetX}px`;
})

//: T mousemove
sliderT.addEventListener('mousedown', (e) => {
   mouseDownT = true;
})

sliderT.addEventListener('mousemove', (e) => {
  e.preventDefault();
  if (mouseDownT == true) {
    sliderValue = Math.round(e.offsetX * valFactor);
    t = `00${sliderValue}`.slice(-3);
    changeColor('t', t);
    val_T.innerHTML = t;
    progressT.style.width = `${e.offsetX}px`;
  }
})

//: T mouseup
sliderT.addEventListener('mouseup', () => {
  mouseDownT = false;
})

//: T mousewheel
sliderT.addEventListener('wheel', (e) => {
  e.preventDefault();
  t = Math.round(parseInt(progressT.style.width.slice(0, -2)) * valFactor);
  
  if (e.deltaY == 120 && t > 0) {
    t -= 1;
  } else if (t < 255) {
    t += 1;
  }
  changeColor('t', t);
  val_T.innerHTML = `00${t}`.slice(-3);
  progressT.style.width = `${Math.round(t / valFactor)}px`
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
    case 't':
      t = val;
      break;
  }
  
  const xr = r.toString(16).slice(-2);
  const xg = g.toString(16).slice(-2);
  const xb = b.toString(16).slice(-2);
  const xt = t.toString(16).slice(-2);
  
  t = (t / 255).toFixed(2);

  console.log(t, typeof (t));
  ctx.beginPath();
  ctx.rect(0, 0, 800, 500);
  ctx.fillStyle = (`rgba(${r}, ${g}, ${b}, ${t})`);
  ctx.fill();
  service.innerHTML = `rgba(${r}, ${g}, ${b}, ${t})            #${xr}${xg}${xb}${xt}`
}

(() => {
  r = Math.floor(Math.random() * 256);
  g = Math.floor(Math.random() * 256);
  b = Math.floor(Math.random() * 256);
  t = Math.floor(Math.random() * 256);
  
  changeColor('r', r);
  val_R.innerHTML = `00${r}`.slice(-3);
  progressR.style.width = `${r / valFactor}px`;
  
  changeColor('g', g);
  val_G.innerHTML = `00${g}`.slice(-3);
  progressG.style.width = `${g / valFactor}px`;
  
  changeColor('b', b);
  val_B.innerHTML = `00${b}`.slice(-3);
  progressB.style.width = `${b / valFactor}px`;

  changeColor('t', t);
  val_T.innerHTML = `00${t}`.slice(-3);
  progressT.style.width = `${t / valFactor}px`;

})()