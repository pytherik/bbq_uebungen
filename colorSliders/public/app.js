const red = document.getElementById("red");
const green = document.getElementById("green");
const blue = document.getElementById("blue");

const canv = document.getElementById("canv");
let ctx = canv.getContext("2d");

let r = red.value;
let g = green.value;
let b = blue.value;

var outputR = document.getElementById("outR");
var outputG = document.getElementById("outG");
var outputB = document.getElementById("outB");



red.oninput = function () {
  r = this.value;
  outputR.innerHTML = `00${r}`.slice(-3);
  changeColor('r', r);
}

green.oninput = function () {
  g = this.value;
  outputG.innerHTML = `00${g}`.slice(-3);
  changeColor('g', g);
}

blue.oninput = function () {
  b = this.value;
  outputB.innerHTML = `00${b}`.slice(-3);
  changeColor('b', b);
}


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
