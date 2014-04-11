// JavaScript Document

$(document).ready(function(e) {
	
var sl=$('.slider-home-01').bxSlider({auto:true,autoStart:true,onSliderLoad:function(){
	
	$('.slider-home-01 li').removeClass('decolorar');

	$('.slider-home-01 li').eq(1).addClass('decolorar');
	
	},onSlideAfter:function(slide,oldIndex,newIndex){
	
	$('.slider-home-01 li').removeClass('decolorar');
	var index=(sl.getCurrentSlide());
	$('.slider-home-01 li').eq(index+1).addClass('decolorar');
	
	
	}});	
$('#menu2').slicknav({prependTo:'#menu-main'});

$('.googlemap').fancybox();

$('.slider-catalogo').bxSlider({pagerCustom: '#bx-pager',
nextSelector: '#next-galeria',
  prevSelector: '#prev-galeria',
  
  nextText: 'Onward →',
  prevText: '← Go back',
  onSlidePrev:function($slideElement, oldIndex, newIndex){
	   var clases=$('#galeria-miniaturas li').eq(newIndex).attr('class').split(/\s+/);
	  			$('.miniatura').hide();
				$('.'+clases[1]).show();
				$('#miniaturas-paginacion li').removeClass('active');
				$('#miniaturas-paginacion li a[data-page=".'+clases[1]+'"]').parent('li').addClass('active');
	  },
  onSlideNext:function($slideElement, oldIndex, newIndex){
	   var clases=$('#galeria-miniaturas li').eq(newIndex).attr('class').split(/\s+/);
	  			$('.miniatura').hide();
				$('.'+clases[1]).show();
				$('#miniaturas-paginacion li').removeClass('active');
				$('#miniaturas-paginacion li a[data-page=".'+clases[1]+'"]').parent('li').addClass('active');
	  }
  });
  
  /* crear paginacion */
  /*obtenemos el numero de miniaturas en cada pagina*/
  var num=parseInt($('#galeria-miniaturas').attr("data-num"));
  num++;
  /*le damos una clase a todos los elemntos de la lista -miniaturas-*/
  $('#galeria-miniaturas li').addClass("miniatura");
  var tem=0;

/*inicializamos un primer elemento de la paginacion*/  
//  $('#miniaturas-paginacion').append('<li><a href="#" data-page=".miniatura-0">1</a></li>');
  
  /* iteramos para formar grupos de n miniaturas */
  
  var total_miniaturas=$('#galeria-miniaturas li').length;
  paginas=Math.ceil(total_miniaturas/num);
  for(i=0;i<paginas;i++)
  {$('#miniaturas-paginacion').append('<li><a href="#" data-page=".miniatura-'+i+'">'+(i+1)+'</a></li>');}
  
$('#galeria-miniaturas li').each(function(index, element) {
$(this).addClass('miniatura-'+tem);
	if( ((index+1)%(num))==0)
	{tem++;}
});


$('#miniaturas-paginacion li a').click(function(e) {
	e.preventDefault();
	$('#miniaturas-paginacion li').removeClass('active');
	var galeria=$(this).attr('data-page');
	$('.miniatura').hide();
	$(this).parent('li').addClass('active');
	$(galeria).fadeIn(1000);
});

/*mostrando los primeros n items de miniatura */
$('.miniatura').hide();  
$('.miniatura-0').show();  
$('#miniaturas-paginacion li').eq(0).addClass('active');
  
  
 /* fin galeria*/ 
  
  
});


