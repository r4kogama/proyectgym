<?php
	session_start();
	include "rediret.php";
	if (!isset($_SESSION['login'])) {
		redirect("login.php");
	}
    require "PDOGYM/Negocio/usuario.php";
	
	
	$usuariolog = "";
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
<body>
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
    <main id="main" class="panel panel-header principal ">
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
					<h1>CUENTA<span class="">USUARIO</span></h1>
				</div>
				<div class="content-login-cesta f-row-cen-bet-wrap w-33">
					<div class="box-login">
						<div id="log" class="btn-login">
							<h2>
                                <a href="login.html">
                                    <span class="btn in-block"><button class="relleno btn-cuenta"><?php $usuariolog;?>LOGIN,</button></span>
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
		<section id="principal" class="">	
			<br><br>
			<?php
				$email = $_SESSION['email'];


				$objUserRep = new usuario();
				$datos = $objUserRep->buscarUser($ErrorInfo, $email);//llama a la funcion
							

			?>
		
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<table border='2'>
				<tr><td>NOMbre </td><td><input type="text" name="tbnum" value="<?php echo $datos->getNom() ?>"></td></tr>
				<tr><td>apellidos: </td><td><input type="text" name="tbNombre" value="">></td></tr>
				<tr><td>Edad: </td><td><input type="text" name="tbEdad" value=""></td></tr>
				<tr><td>sexo: </td><td><input type="text" name="tbEdad" value=""></td></tr>
				<tr><td>email: </td><td><input type="text" name="tbEdad" value=""></td></tr>
				<tr><td>direccion: </td><td><input type="text" name="tbEdad" value=""></td></tr>
				<tr><td>telefono: </td><td><input type="text" name="tbEdad" value=""></td></tr>
				<tr><td>codigo: </td><td><input type="text" name="tbEdad" value=""></td></tr>
				<tr><td>dni: </td><td><input type="text" name="tbEdad" value=""></td></tr>
			</table>

			<br>
			<input type="submit" value="MODIFICAR" name="btModificar">
			<input type="submit" value="BORRAR" name="btBorrar">
		</form>
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
	 <script type="text/javascript">
        $(document).ready(function() {
			console.log("ok");
	
		});
         
         
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



