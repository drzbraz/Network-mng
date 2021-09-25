$(document).ready(function(){
   $("#login-form").on("submit", function(e){
       e.preventDefault();
	   //------Obtendo dados dos campos
	   var modelo = $("#modelo option:selected").val();
	   var cor = $('#cor option:selected').val();
	   var anode = $('#anode option:selected').val();
	   var anoate = $('#anoate option:selected').val();
	   var km = $('#km option:selected').val();
	   //-----end
	   var arrayDados = {"modelo": modelo, "cor": cor, "anode": anode, "anoate": anoate, "km": km}; //array com dados do form
	   
	   var objectAtiv = JSON.stringify(arrayDados);	//array convertido para json
	   
	   console.log(arrayDados);
	   
	   // $.ajax({ // mandar objeto json por url
			// type: "POST",
			// data: objectAtiv,
			// url: "../product/save",
			// contentType: "application/json"
		// }).done(function(msg) {       
			// console.log(msg);
			//recebendo retorno
		// });
   });
});