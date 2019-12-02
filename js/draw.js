// function setup() {
//     let canvas = createCanvas(400, 400);
//     canvas.parent('sketch-holder');
// }

// setup();

// function draw() {
//     background(240, 248, 255);
//     // scale(0.90);
//     stroke("red");
//     strokeWeight(10);
//     line(2, 2, 2, 300);

//     fill(255, 255, 255);
//     stroke("black");
//     text('axe y', 0, 310);

//     stroke("red");
//     strokeWeight(10);
//     line(2, 2, 300, 2);


//     fill(255, 255, 255);
//     stroke("black");
//     text('axe x', 310, 10);

//     let point1 = addPoint(100, 200, "purple");
//     let point2 = addPoint(76, 150, "black");
//     let point3 = addPoint(240, 190, "red");
//     // let point4 = addPoint(30,100,'green');

//     return drawShape(point1, point2, point3);
// }

// function addPoint(x, y, color) {
//     stroke(color); // Change the color
//     strokeWeight(5);
//     point(x, y);

//     strokeWeight(1);
//     line(0, y, x, y);
//     line(x, y, x, 0);

//     return [x, y];
// }

// function drawShape(...coor) {
//     if (coor.length == 2) {
//         let [x1, y1] = coor[0];
//         let [x2, y2] = coor[1];
//         line(x1, y1, x2, y2);
//     }

//     if (coor.length == 3 && Array.isArray(coor[1])) {
//         let [x1, y1] = coor[0];
//         let [x2, y2] = coor[1];
//         let [x3, y3] = coor[2];

//         fill(0, 255, 0, 160);
//         triangle(x1, y1, x2, y2, x3, y3);
//     }

//     if (coor.length == 3) {
//         let [x1, y1] = coor[0];
//         let width = coor[1];
//         let height = coor[2];

//         fill(0, 255, 0, 160);
//         rect(x1, y1, width, height);
//     }
// }