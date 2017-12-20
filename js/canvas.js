	window.onload =function draw() {
  var canvas = document.getElementById('canvas');
  if (canvas.getContext){
    var ctx = canvas.getContext('2d');
	 ctx.strokeStyle="white";
   ctx.beginPath();
     ctx.moveTo(50, 25 );
     ctx.lineTo(100	,25);
     ctx.lineTo(100,50);
     ctx.lineTo(75, 50);
     ctx.lineTo(75,125);
     ctx.lineTo(50, 125);
     ctx.lineTo(50,50);
     ctx.lineTo(25,50);
     ctx.lineTo(25,37);
     ctx.lineTo(50,25);

	ctx.lineWidth="7";
	ctx.lineCap="round";
	ctx.stroke();

	ctx.fillStyle="white";
	ctx.font=" 30pt Arial"
	 ctx.beginPath();

     ctx.fillText("Shoe" , 120,50);
     ctx.fillText("Repair" , 120,90);
     ctx.fillText("Shop" , 120,130);

     ctx.lineWidth="7";

    
  }
}