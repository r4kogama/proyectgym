	  
		//mayusculas a minusculas
		var inputclass = document.getElementsByClassName("inLow");
		function minuscula(){
			for(var i = 0; i < inputclass.length;i++){
				inputclass[i].value = inputclass[i].value.toLowerCase();
			}
		}

		for (var i = 0; i < inputclass.length; i++) {
			inputclass[i].addEventListener('keyup', minuscula,false);
		}

		//validar nombre
		 function validarNombre(input){
			 if(input != undefined){
			   var exp =/^[a-z\d_]{4,15}$/i;
			   var msg = input.parentElement.querySelectorAll("span")[1];
				   if(input.name == "nom"){
					   if(exp.test(input.value) == false){
							msg.classList.add("invalid");
						    msg.innerHTML = "Minimo 3 letras";
					   }else{
							msg.style.display = "none";
							msg.innerHTML = "";
					   }
				   }
			   }		
	   }
	   //validar apellido
	   function validarApellido(input)	{
		   if(input != undefined){
			   var exp =/^[a-z\d_]{6,49}$/i;
			   var msg = input.parentElement.querySelectorAll("span")[1];
			   if(input.name == "lastname"){
				   if(exp.test(input.value) == false){
						msg.classList.add("invalid");
					    msg.innerHTML = "Escribe el apellido completo";
				   }else{
						msg.style.display = "none";
					    msg.innerHTML = "";
				   }
			   }
		   }
	   }
		 
	   //validar edad
	   function validarEdad(input){		
			   if(input != undefined){
				   var msg = input.parentElement.querySelectorAll("span")[1];
				   if(input.name == "edad"){
					   if(input.value == ""){
							msg.classList.add("invalid");
							msg.innerHTML = "Indica tu edad";
					   }else{
							msg.style.display = "none";
							msg.innerHTML = "";
					   }
				   }
			   }
	   }

		//validar check
	   function comprobarCheck(input) {
			var msg =  input.parentElement.querySelector("span");
				if(input.checked == true){
					msg.style.display = "none";
					msg.innerHTML = "";
				}else{
					msg.classList.add("invalid");
					msg.innerHTML = "Acepta las condiciones para continuar";
				}
		}	

	   //validar email
	   function validarEmail(input){
		   var expr = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		   var msg = input.parentElement.querySelectorAll("span")[1]; 
		   if(input.name == "mail"){
			   if(expr.test(input.value) ==  false){
					msg.classList.add("invalid");
				    msg.innerHTML = "El email no es valido";
				   //se ha introducido mal el mail
			   }else{
					msg.style.display = "none";
				    msg.innerHTML ="";
			   }
		   }
		   //es correcto
		   return true;
	   }

	   //validar pass
	   var  enablepass = document.getElementById("repass");
	   var inputpass = document.getElementById("pass");
	   inputpass.onblur = function() {
		   console.log('onblur');
		   var exp = /(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
		   var msg = inputpass.parentElement.querySelectorAll("span")[1];
			   if(exp.test(inputpass.value) ==  false){
					msg.classList.add("invalid");
				    msg.innerHTML = "Password invalido";
				   //se ha introducido mal el pass
			   }else{
					msg.classList.add("valid");
				    msg.innerHTML ="Valido";
				    enablepass.disabled= false;	
					return inputpass.value;
			   }
	   }

	   //repetir password
	   function repPass(passrep){
		   var pasvalid = inputpass.onblur();//contraseña usuario
		   var msg = passrep.parentElement.querySelectorAll("span")[1];
		   if(pasvalid === passrep.value){
				msg.classList.add("valid");
				msg.innerHTML = "Coincide";
		   }else{
				msg.classList.add("invalid");
				msg.innerHTML = "Password no coincide";
		   }
	   }


	   //caracteristicas del password
	   function validarPass(input){
		   var msgmin = input.parentElement.querySelectorAll("span")[1]; 
		   var msgmay = input.parentElement.querySelectorAll("span")[2];
		   var msgnum = input.parentElement.querySelectorAll("span")[3];
		   var msglett = input.parentElement.querySelectorAll("span")[4];
			   // validad minuscula

			   var lowLetter = /[a-z]/;
			   if(lowLetter.test(input.value)){
					msgmin.innerHTML = "";
			   }else{
					msg.classList.add("invalid");
					msgmin.innerHTML = "Incluye minusculas";

			   }
			   // validad mayuscula
			   var upperLetter = /[A-Z]/;
			   if(upperLetter.test(input.value)){
					msgmay.innerHTML = "";
			   }else{
					msg.classList.add("invalid");
					msgmay.innerHTML = "Incluye  mayusculas";
			   }
			   //validar numero
			var number = /[0-9]\d/;
			   console.log(number.test(input.value));
			   if(number.test(input.value) == true){
				
					msgnum.innerHTML = "";
			   }else{
					msg.classList.add("invalid");
					msgnum.innerHTML = "Minimo 2 numeros";
			   }
			   // validar longitud
			   if(input.value.length >= 6 && input.value.length <= 15) {
					msglett.innerHTML = "";
			   }else{
					msg.classList.add("invalid");
					msglett.innerHTML = "Entre 6 y 15 caracteres";
			   }
	
	   	}
		 

		   
		   //borrar error  preventdefault
			   function borrarRevision(input){
					var msg = input.parentElement.querySelectorAll("span")[1];
					msg.innerHTML = "";
			   }


			 //funcion validar  campos del formulario
		   	function validaSubmit(ev) {
				var expemail = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
				var exppass = /(?=^.{6,15}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
				var pass = document.getElementById("pass");
				var repas = document.getElementById("repass");
				var mail = document.getElementById("email");
				var name = document.getElementById("nombre");
				var edad = document.getElementById("años");
				var check = document.getElementById("privacidad");
				var lastname = document.getElementById("apellido");
				var err = document.querySelectorAll(".campo");


			
				for(var i = 0; i < err.length; i++){
				if(mail.value.length == 0 || !expemail.test(mail.value) ){ //si esta vacio y no es una expr regular
					err[i].classList.add("invalid");
					err[i].innerHTML ="Revisa campo email para continuar.";
					ev.preventDefault(); // desabilita el submit y no envia el formulario
				}else if(pass.value.length == 0 || !exppass.test(pass.value) ){ //si esta vacio y no es una expr regular
					err[i].classList.add("invalid");
					err[i].innerHTML = "Revisa campo password para continuar.";
					ev.preventDefault(); // desabilita el submit y no envia el formulario
				}else if(repas.value.length == 0 || !exppass.test(repas.value)){
					err.classList.add("invalid");
					err[i].innerHTML = "Revisa repeticion de password para continuar.";
					ev.preventDefault(); // desabilita el submit y no envia el formulario
				}else if(name.value.length == 0 || name.value.length  < 3 || name.value.length > 15 ){
					err.classList.add("invalid");
					err[i].innerHTML = "Revisa campo nombre 16 caracteres max.";
					ev.preventDefault();
				}else if(lastname.value.length == 0 || lastname.value.length < 5 ||  lastname.value.length > 50 ){
					err.classList.add("invalid");
					err[i].innerHTML = "Revisa campo apellido 50 caracteres max.";
					ev.preventDefault();
				}else if(edad.value == ""){
					err.classList.add("invalid");
					err[i].innerHTML = "Revisa campo edad para continuar.";
					ev.preventDefault();
				}else if(check.checked == false){
					err.classList.add("invalid");
					err[i].innerHTML = "Acepta los terminos y condiciones.";
					ev.preventDefault();
				}
				}	
			}   