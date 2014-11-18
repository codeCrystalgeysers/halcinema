//canpas.js

   window.onload = function(){
   	draw();
   }

   function draw(){
   	var canvas = document.getElementById('mycanvas');
   	if(!canvas || !canvas.getContext) return false;
   	var ccc = canvas.getContext('2d');
   	ccc.strokeRect(10,10,50,50);
   	}
