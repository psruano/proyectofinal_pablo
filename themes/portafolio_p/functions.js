$(document).ready (function(){
	$('.proyecto').mouseenter(function(){
		$(this).stop(true,true).animate({
				    height: "+=120"
				},
				{
					duration: 500,
				});
			}).mouseleave(function(){
				$(this).stop(true,true).animate({
				    height: "-=120"
				},
				{
					duration: 500,
				});
			});

			/// Back body

      var pathname = window.location.pathname;
      //console.log(pathname);

      var arraypath = pathname.split('/');
      console.log(arraypath[1]); 

var Random = Math.round(Math.random()*20);  
	$('body').css('background', 'url(http://localhost:8888/' + arraypath[1] + '/wp-content/themes/portafolio_p/images/fondo/mp' + Random + '.png)');

	$(function(){
    $('#img_wrap').on( 'mouseenter', function() {
         $(this).toggleClass('animated', 'static');
    })
})
	$(function(){
    $('#img_wrap').on( 'mouseleave', function() {
         $(this).toggleClass('static', 'animated');
    })
})


	/*
var c=document.getElementById("circulos_l");
var ctx=c.getContext("2d");
ctx.moveTo(0,0);
ctx.lineTo(200,100);
ctx.stroke();
*/

var pattern= new Image();  

function animar(){   
   pattern.src = '/images/logoGIFstatic.png'; 
   setInterval(drawShape, 20);
} 

function drawShape(){
  // get the canvas element using the DOM
  var canvas = document.getElementById('circulos_l');
 
  // Make sure we don't execute when canvas isn't supported
  if (canvas.getContext){
 
    // use getContext to use the canvas for drawing
    var ctx = canvas.getContext('2d');

    ctx.fillStyle = 'rgba(0,0,0,0.4)';   
    ctx.strokeStyle = 'rgba(0,153,255,0.4)';   
    ctx.save();   
    ctx.translate(150,150); 

    var time = new Date(); 
    ctx.rotate( ((2*Math.PI)/6)*time.getSeconds() + 
              ( (2*Math.PI)/6000)*time.getMilliseconds() );   
    ctx.translate(0,28.5);   
    ctx.drawImage(pattern,-3.5,-3.5);   
    ctx.restore(); 
}
}

    // Target your .container, .wrapper, .post, etc.
    $("#slider").fitVids();


    /// IMAGEN DE LOGO

   $("#letra a").mouseenter(function(){
      $(this).css('background','url(http://localhost:8888/' + arraypath[1] + '/wp-content/themes/portafolio_p/images/logoGIFenter_02.gif)');

   });

   $("#letra a").mouseleave(function(){
      $(this).css('background','url(http://localhost:8888/' + arraypath[1] + '/wp-content/themes/portafolio_p/images/logoGIFleave_02.gif)');

   });
});