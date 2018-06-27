<?php
    session_start();
    require 'PDOGYM/Negocio/usuario.php';
    include 'rediret.php';


    $valido = "";
    $errorReg = "";
    $refresh = "";
    $ErrorInfo = "";
?>
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
	<link href="css/home.css" rel="stylesheet" type="text/css">
	<link href="css/shortcut.css" rel="stylesheet" type="text/css">

	<!-- JS-->
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src ="js/parallax.js-1.5.0/parallax.min.js"></script>
	 <script src="js/slideout-1.0.1/dist/slideout.min.js" type="text/javascript"></script>
	<title>gym</title>
</head>
<body id="body-login">
	<header>
		<nav id="menu" class="menu-oculto">
			<div class="box-menu">
				<div class="header_hamburger js-toggle-header">
						<div class="hamburger_close">
							<i></i>
							<i></i>
						</div>
					<span></span>
				</div>
				<ul>
					<li><a href="index.html">home</a></li>
					<li><a href="#">Productos</a></li>
					<li><a href="#">Horario</a></li>
					<li><a href="#">Clases</a></li>
					<li><a href="#">contact</a></li>
				</ul>
				<ul>
					<li title="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li title="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li title="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
					<li title="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</nav>
	</header>
    <main id="main" class="panel panel-header principal main-login">
	<div id="fade"></div>

		<div class="background">	
			<main id="main" class="panel panel-header principal ">
				<div class=" main-header-fondo">	
					<section id="header" class="f-around-hor">
						<div class="box-bur  f-row-cer-star w w-33">
							<div class="btn-hamburger  title-menu toggle-button js-slideout-toggle">
								<span class="lineup t-shadow"></span>
								<span class="linedown t-shadow"></span>
							</div>
							<h2 class="t-shadow">Menu</h2>
						</div>
						<div id="logo" class="w-33 p-t2 box-logo f-col-center-ver-hor">
							<img  class="logo" src="img/LOGO2.png" alt="logo">
							<h1>PRO<span class="">FITNESS</span></h1>
						</div>
						<div class="content-login-cesta f-row-cen-bet-wrap w-33">
							<div class="box-login">
								<div id="log" class="btn-login">
									<h2>
										<a href="login.php">
											<span class="btn in-block"><button class="relleno btn-cuenta">LOGIN,</button></span>
										</a>
									</h2>
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
				</div>
			</section>
			<section id="content-log-registro" class="min-100vh p-t8 f-evenly-hor w-100">
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
							<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="registro" class="" onSubmit="validaSubmit(event)">
								<section class="info-personal">
									<h3 class="w">Informacion Personal</h3>
									<i onclick="cerrarcesta(document.getElementById('formreg'))" class="fas iclose fa-plus"></i>
									<ul>
										<li class="in-name">
											<label for="nombre">Nombre:<span>*</span></label>
											<input type="text"  name="nom" onfocus="borrarRevision(this)" class="input-style w-50"  onBlur="validarNombre(this)" id="nombre" value="raul" >
											<span class="errornom campo"></span>
										</li>
										<li class="in-lastname ">
											<label for="apellido">Apellidos:<span>*</span></label>
											<input type="text"  name="lastname"  onBlur="validarApellido(this)" class="input-style w-50" id="apellido" value="garcia martinez">
											<span class="errorlast campo"></span>

										</li>
										<li class="year ">
											<label for="edad">Edad:<span>*</span></label>
											<input type="date"  onBlur="validarEdad(this)" value="2018-12-12" class="input-style w-25" name="edad" id="edad" >
											<span class="erroredad campo"></span>
										</li>
										<li class="sex ">
											<label for="men">Hombre:</label>
											<input type="radio" name="sexo" id="men" checked value="H">
											<label for="woman">Mujer:</label>
											<input type="radio" name="sexo" id="woman" value="M">
										</li>
									</ul>	
								</section>
								<section class="info-credencial w">
									<h3>Informacion Cuenta</h3>
									<ul>
										<li class="email">
											<label for="email">Direccion Email:<span>*</span></label>
											<input type="text" class="inLow input-style w-50" onBlur="validarEmail(this)" name="regmail" id="email" value="thecureomd@gmail.com" >
											<span class="errormail campo"></span>
										</li>
										<li class="pass">
											<label for="pass">Password<span>*</span></label>
											<input type="password" name="passreg" onkeyup="validarPass(this)" class="input-style " id="pass" value="Asus70" >
											<span class="errorpass campo"></span>
											<span class="errorpass"></span>
											<span class="errorpass"></span>
											<span class="errorpass"></span>
										</li>
										<li class="repass">
											<label for="pass">Confirmar password:<span>*</span></label>
											<input type="password" name="repass" onBlur="repPass(this)" disabled class="w-50 input-style" id="repass" value="Asus70" >
											<span class="errorpass campo"></span>
										</li>
										<li class="check">
											<input type="checkbox" onclick="comprobarCheck(this)" name="privacidad" checked id="privacidad" value="" />
											<p>He leido los terminos y <a href="#">condiciones</a></p>
											<span class="errorcheck campo"></span>
										</li>
									</ul>
								</section>
								<button type="submit" name="cuenta">Crear cuenta</button>
							</form>
							<?php
								if(isset($_POST["cuenta"]) && isset( $_POST['privacidad'] )){
									$nom = $_POST['nom'];
									$lastname = $_POST['lastname'];
									$edad = $_POST['edad'];
									$sexo = $_POST['sexo'];
									$regmail = $_POST['regmail'];
									$passreg = $_POST['passreg'];
									//$repass = $_POST['repass'];
									$term = 1;
									
										echo "Terminos aplicacion" .$term ."---"; 

									$objUserRep = new usuario();
									$repetido = $objUserRep->buscarUser($ErrorInfo, $regmail);//llama a la funcion
								
									// si hay algun hay un email reptido...
									if($repetido){
										$errorReg = "Este email ya existe";
										$refresh = "Click aqui para escoger otro email";  
									}else{		
											
											$objusuario = new usuario(null, null, $nom, $lastname, $edad, $sexo, $regmail, $passreg, $term);
										// echo " -- obj.nom = " .$objusuario->getTerm();
	
											$confirmar = $objusuario->Insertar($ErrorInfo);


											if($confirmar){
												$valido = "Has sido registrado.";
											}else{
												$errorReg = "Error! No ha sido posible el registro de usuario.";
											}
	
									}

								}
							?>
							<div class="reporteErrores"><?php echo $ErrorInfo; ?></div>
							<span class="regvalido"><?php echo $valido; ?></span>
							<span class="errorreg"><?php echo $errorReg; ?></span>
							<span><a class="errorreg" href="loginpruebas.php"><?php echo $refresh; ?></a></span>
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
									<input type="email" class="inLow w-100 input-style" name="emaillog" id="email-log" onBlur="validarEmail(this)" value="">
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
					<?php
						if(isset($_POST["signin"]) ){
							$emaillog =  $_POST['emaillog'];
							$passlog =  $_POST['plog'];

							$objUserLog = new usuario();
							$logear = $objUserLog->comprobarUser($ErrorInfo, $emaillog, $passlog);//llama a la funcion
							
							if($logear){
								$_SESSION['login'] = 1;
								$_SESSION['email'] = $emaillog;
								echo "login";
								redirect("user.php");
							} else {
								echo "no login";
							}
						}
					?>
				</section>
			</section>
		</div>
		<footer id="info-foot "class="panel-footer w-100 b">
			<section class="containt-footer-principal">
				<section id="content-media" class="w-40 f-col-center-ver-hor">
					<div class="box-logo">
						<img  class="logo" src="img/LOGO2.png" alt="logo">
						<h2>PRO<span>FITNESS</span></h2>
					</div>
					<ul class="f-row-evenly-center m-t2 w-100 social-foot">
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
						<li>L-V: 9h-21h</li>
						<li>S: 11h-14h</li>
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
				<section id="menu-footer" class="w-20 menu-foot">
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
			<section id="copy" class="w info-copy">
				<div class="f-row-cen-bet-wrap w-100">
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
			var cerrar = document.getElementById("fade");
			btnclose.classList.remove("showform");
			cerrar.classList.remove("showfade");
			btnclose.classList.add("none");
		}

		 //boton cuenta
		  var btncuenta = document.getElementsByClassName("btn-cuenta")[1];
		  btncuenta.onclick = function() {toggleregistro()};

		  function toggleregistro(){
			document.getElementsByClassName("formreg")[0].classList.toggle("showform");
			document.getElementById("fade").classList.toggle("showfade");
		  }
	
</script>
</body>
</html>


