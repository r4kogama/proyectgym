<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Fitness">
	 <!-- Mobile viewport -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<link rel="icon" href="img/" type="image/png" sizes="16x16">
	 <!-- CSS-->
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="fontawesome/webfonts/fa-solid-900.woff2" rel="stylesheet">
	<link href="fontawesome/fontawesome-all.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/shortcut.css" rel="stylesheet" type="text/css">
	<!-- JS-->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/slideout-1.0.1/dist/slideout.min.js" type="text/javascript"></script>
	
	<title>gym</title>
</head>
<body id="body-login">
	<header>
		<nav id="menu" class="menu-oculto">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#">pag2</a></li>
				<li><a href="#">pag3</a></li>
				<li><a href="#">pag4</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</nav>
	</header>
    <main id="main" class="panel panel-header principal main-login">
		<div class="background">	
		<section id="header" class="f-around-hor">
			<div class="box-bur  f-row-cer-star w w-33">
				<button class="btn-hamburger toggle-button js-slideout-toggle"></button>
				<h2>Menu</h2>
			</div>
			<div id="logo" class="w-33 box-logo f-col-center-ver-hor">
				<img  class="logo" src="img/logo.png" alt="logo">
				<h1 class="f-24">PRO<span class="">FITNESS</span></h1>
			</div>
			<div class="content-login-cesta f-row-cer-end w-33">
				<div class="box-login">
					<div id="log" class="btn-login">
						<h2><a href="#">LOGIN,</a></h2>
					</div>
				</div>
				<div class="box-cesta">
					<a href="#" id="cesta" onclick="cesta(document.querySelector('.cart'))" class="btn-cesta">
						<img src="img/bag.svg" alt="cesta">
						
					</a>
					<div class="caja-display-items cart empty none" role="dialog">
							<div id="mini-content-items">
								<div class="bag-items">
									<p>
										<span class="qty-item" title="Items en la cesta" >0</span>
										<span class="text">Articulo/s en la cesta</span>
									</p>
									<p class="btn-close" title="cerrar" ><i onclick="cerrarcesta(document.querySelector('.cart'))" class="fas iclose fa-plus"></i></p>
								</div>
								<div class="info-content-items">
									<p>No tienes articulos en tu cesta de la compra.</p>
								</div>	
							</div>	
						</div>
					<h3 class="ctn-articulo">0</h3>
				</div>
			</div>
		</section>
		<section id="content-log-registro" class="min-100vh p-t8 f-evenly-hor w-100">
		<?php
            echo "hola";
            ?>
			<section id="clientenuevo" class="clientereg  w w-40">
				<div class="text-left f-col-center-ver-hor">
					<div class="w-100 m-t2 f-row-left">
						<h2 class="f-24 newcuenta ">Nueva cuenta</h2>
					</div>
					<div class="w-100 min-w200">
						<p class="">Crea tu cuenta PROFITNESS con ello podrás disfrutar de nuestro catalogo de productos, apuntarte a nuestas clases, ver y rastrear tus pedidos en tu cuenta y mucho más.</p>
					</div>
					<div>
						<span class="btn"><button class="btn-cuenta f-15  relleno ">Crear una cuenta</button></span>
					</div>
					<div id="formreg" class="contenedor-formulario w-100 formreg">
						<form action="registro.php" method="post" id="registro"  class="" onSubmit="validaSubmit(event)">
							<section class="info-personal">
								<h3 class="w">Informacion Personal</h3>
								<i onclick="cerrarcesta(document.getElementById('formreg'))" class="fas iclose fa-plus"></i>
								<ul>
									<li class="in-name">
										<label for="nombre">Nombre:<span>*</span></label>
										<input type="text"  name="nom" onfocus="borrarRevision(this)" class="input-style w-50"  onBlur="validarNombre(this)" id="nombre" value="" >
										<span class="errornom campo"></span>
									</li>
									<li class="in-lastname ">
										<label for="apellido">Apellidos:<span>*</span></label>
										<input type="text"  name="lastname"  onBlur="validarApellido(this)" class="input-style w-50" id="apellido" value="">
										<span class="errorlast campo"></span>

									</li>
									<li class="year ">
										<label for="años">Edad:<span>*</span></label>
										<input type="date"  onBlur="validarEdad(this)" class="input-style w-25" name="edad" id="años" >
										<span class="erroredad campo"></span>
									</li>
									<li class="sex ">
										<label for="men">Hombre:</label>
										<input type="radio" name="sexo" id="men" value="H">
										<label for="woman">Mujer:</label>
										<input type="radio" name="sexo" id="woman" value="M">
									</li>
								</ul>	
							</section>
							<section class="info-credencial w">
								<h3>Informacion Cuenta</h3>
								<ul>
									<li class="mail">
										<label for="email">Direccion Email:<span>*</span></label>
										<input type="text" class="inLow input-style w-50" onBlur="validarEmail(this)" name="mail" id="email" value="" >
										<span class="errormail campo"></span>
									</li>
									<li class="pass">
										<label for="pass">Password<span>*</span></label>
										<input type="date"  onBlur="validarEdad(this)" class="input-style w-50" name="edad" id="años" >
										<input type="password" name="pass" onkeyup="validarPass(this)" class="input-style " id="pass" value="" >
										<span class="errorpass campo"></span>
										<span class="errorpass"></span>
										<span class="errorpass"></span>
										<span class="errorpass"></span>
									</li>
									<li class="repass">
										<label for="pass">Confirmar password:<span>*</span></label>
										<input type="password" name="repass" onBlur="repPass(this)" disabled class="w-50 input-style" id="repass" value="" >
										<span class="errorpass campo"></span>
									</li>
									<li class="check">
										<input type="checkbox" onclick="comprobarCheck(this)" name="privacidad" id="privacidad" value="" />
										<p>He leido los terminos y <a href="#">condiciones</a></p>
										<span class="errorcheck campo"></span>
									</li>
								</ul>
							</section>
							<button type="submit" name="cuenta">Crear cuenta</button>
						</form>
					</div>
				</div>
			</section>
			<section id="separador" class="w-15 w titulo-centro">
				<h2 class="f-fstar-center w-100 h-100"> 
					<p class="pro">PRO</p>	
					<p clas ="fit">FIT</p>
					<p class="ness">NESS</p>
				</h2>
			</section>
			<section id="cliente" class="user-log f-center-hor w w-40">
				<form action="login.php" method="post" class="formlog w-100 f-col-flexstar">
					<div class="log-intro">
						<h3 class="f-30 ">Cuenta cliente</h3>
						<p class="">Si ya tienes una cuenta, introduce tu log in.</p>
					</div>
					<div>
						<ul class="m-t3">
							<li class="mail">
								<label for="email">Direccion Email:<span>*</span></label>
								<input type="email" class="inLow w-100 input-style" name="email" id="email-log" onBlur="validarEmail(this)" value="">
								<span class="errormail"></span>
							</li>
							<li class="pass"><label  for="pass">Password<span>*</span></label>
								<input type="password" class="w-100 input-style" name="plog" id="pass-log" onkeyup="validarPass(this)" value="">
								<span class="errorpass1 errorpass2"></span>
							</li>
							<li class="m-t2 p-l2 f-row-cer-star">
								<input type="checkbox" id="checkregistro" class="m-r1"  name="recordar" >Recuerdame
							</li>
						</ul>
					</div>
					<div class="f-between-hor box-btn-entrar">
						<span class="btn in-block"><button type="submit" class="f-15 relleno btn-cuenta"  name="signin">Entrar</button></span>
						<a href="#" class="f_96 link-border">Has olvidado la contraseña?</a>
					</div>
				</form>
			</section>
		</section>
		</div>
		<footer id="info-foot "class="panel-footer w-100 w">
			<section class="containt-footer-principal">
				<section id="content-media" class="w-40 f-col-center-ver-hor">
					<div class="box-logo">
						<img  class="logo" src="img/LOGO2.png" alt="logo">
						<h2>PRO<span>FITNESS</span></h2>
					</div>
					<ul class="f-row-center">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</section>
				<section id="location" class="w-20">
					<ul>
						<li></li>
						<li>Calle Alguna de barcelona, 63</li>
						<li>08092 Barcelona</li>
						<li>Catalunta (Espanya)</li>
						<li><a href="mailto:info@profitnes.com">info@profitnes.com</a></li>
						<li>+34534434434</li>	
					</ul>
				</section>
				<section id="dedicacion" class="w-20">
					<h4>Quienes somos?</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
						Rerum dolorum sequi, earum ullam aspernatur 
						dolorem eaque officiis commodi consectetur sunt 
						molestiae natus expedita illo distinctio officia! 
							id.</p>
				</section>
				<section id="menu-footer" class="w-20">
					<ul>
						<li><a href="#">Home </a></li>
						<li><a href="#">Productos </a></li>
						<li><a href="#">Registrar/login</a></li>
						<li><a href="#">Envios & Devoluciones</a></li>
						<li><a href="#">Contacto</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</section>
			</section>
			<section id="copy" class="w">
				<div>
					<p>© ProFitNes Copyright 2018. All rights reserved.
						<span>|</span>
						<a href="#">Terms of Use</a>
						<span>|</span>
						<a href="#">Privacy Policy</a>
						<span>|</span>
						<a href="#">Cookie Policy</a>
					</p>
					<p>Created by Raul</p>
				</div>
			</section>
		</footer>
     </main>
	 <script src="js/slideout-1.0.1/slidetoogle.js" type="text/javascript"></script>
	 <script src="js/validation.js" type="text/javascript"></script>
	 <script type="text/javascript">


//cesta items

		function cesta(cart){
			cart.classList.remove("none");
			cart.classList.add("showform");
		}

		function cerrarcesta(btnclose){
			btnclose.classList.remove("showform");
			btnclose.classList.add("none");
		}

		 //boton cuenta
		  var btncuenta = document.getElementsByClassName("btn-cuenta")[0];
		  btncuenta.onclick = function() {toggleregistro()};

		  function toggleregistro(){
			document.getElementsByClassName("formreg")[0].classList.toggle("showform");
		  }
	
</script>
</body>
</html>


