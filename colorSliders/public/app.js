const red = document.getElementById("red");
const green = document.getElementById("green");
const blue = document.getElementById("blue");

const canv = document.getElementById("canv");
let ctx = canv.getContext("2d");


var outputR = document.getElementById("outR");
var outputG = document.getElementById("outG");
var outputB = document.getElementById("outB");

// outputR.innerHTML = red.value;
  
red.oninput = function() {
  outputR.innerHTML = this.value;
  r = this.value;
  ctx.beginPath();
  ctx.rect(0, 0, 400, 400);
  ctx.fillStyle = (`rgba(${r}, ${g}, ${b}, 0.5)`);
  ctx.fill();
}
green.oninput = function() {
  outputG.innerHTML = this.value;
  g = this.value;
  ctx.beginPath();
  ctx.rect(0, 0, 400, 400);
  ctx.fillStyle = (`rgba(${r}, ${g}, ${b}, 0.5)`);
  ctx.fill();
}
blue.oninput = function() {
  outputB.innerHTML = this.value;
  b = this.value;
  ctx.beginPath();
  ctx.rect(0, 0, 400, 400);
  ctx.fillStyle = (`rgba(${r}, ${g}, ${b}, 0.5)`);
  ctx.fill();
}
