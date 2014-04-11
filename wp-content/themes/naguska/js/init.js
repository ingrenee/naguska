// JavaScript Document
$(document).ready(function() 
{
	
	/* forzar orde de idiomas*/
	$("#qtranslate-2-chooser li.lang-es").after($("#qtranslate-2-chooser li.lang-en"));
	console.log("reodenando");
	
	
  $("#form_contact").validate({
	  rules: {
		  nombres: {
			  required: true
		  },	
		  apellidos: {
			  required: true
		  },		
		  email: {
			  required: true,
			  email: true
		  },
		  empresa: {
			  required: true
		  },
		  mensaje: {
			  required: true
		  },		
	  },
	  messages: {
		  nombres: "*",
		  apellidos: "*",
		  email: "*",
		  empresa: "*",
		  mensaje: "*",
	  },
  });	
});
