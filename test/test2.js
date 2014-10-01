var dim;

function setup() {
  createCanvas(400, 400);
  dim = width/2;
  background(0);
  colorMode(HSB, 360, 100, 100);
  noStroke();
  ellipseMode(RADIUS);
  frameRate(1);
}

function draw() {
  background(0);
  ellipse(width/2, height/2, 10, 10)
}