<?php
    session_start();
    require 'PDOGYM/Negocio/usuario.php';
	include 'rediret.php';
	
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
			<section id="container-main" class="">
				<section id="banner-valores">
                    <div class="f-col-center-ver-hor title-valores ">
                        <h3>Aprende nuestra filosofia</h3>
                        <p>Ejercita el cuerpo por completo, a fin de que se encuentre preparado para cualquier desafío que se pueda presentar en un futuro, cada dia es un nuevo reto.</p>
                    </div>
                    <div class="parallax-window" data-parallax="scroll"  data-parallax="scroll" data-android-fix="true" data-speed="0.5" data-bleed="1" data-image-src="img/harderfasterbetterstronger.jpg">
                        <div class="flex-img-25">
                            <ul class="f-row-center-around">
                                <li>
                                    <a href="#">
                                        <img style="border-radius: 3px;" src="img/trx_functionaltrainingtools_group2-min_1.jpg" alt="functionaltraining">
                                        <h4>Entrenamiento funcional</h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis expedita soluta sapiente, eligendi molestiae numquam iure recusandae rem excepturi ex.</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/fortalecer-cardio.jpg" style="border-radius: 3px;" alt="cardio">
                                        <h4>Fortalecimiento y cardio</h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis expedita soluta sapiente, eligendi molestiae numquam iure recusandae rem excepturi ex.</p>
                                    </a> 
                                </li>
                                <li>
                                     <a href="#">
                                        <img src="img/equipo.jpg" style="border-radius: 3px;" alt="trabajoenequipo">
                                        <h4 class="p-box">Comunidad de equipo</h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis expedita soluta sapiente, eligendi molestiae numquam iure recusandae rem excepturi ex.</p>
                                     </a>
                                </li>
                                <li>
                                     <a href="#">
                                        <img src="img/que-es-la-dieta-paleo-678x381.jpg" style="border-radius: 3px;" alt="dietapaleo">
                                        <h4 class="">Control de habitos</h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis expedita soluta sapiente, eligendi molestiae numquam iure recusandae rem excepturi ex.</p>
                                     </a>
                                </li>
                            </ul>
                        </div>
                    </div> 
				</section>
				<div class="box-vacio transform-0 "></div>
				<div class="box-vacio transform-1"></div>
				<section class="banner-servicios">
					<div class="flex-img-100">
						<div class="f-col-center-ver-hor title-ofertas">
							<h3>Nuestras ofertas</h3>
							<p>Todo lo que necesitas para empezar con nosotros, aprovecha nuestra promocion gratis e informate de nuestros contratos flexibles y todo lo que ofrece las actividades digidas en grupo</p>
						</div>
                        <div class="background-services">
                            <ul>
							<li class="img-back-clase w-100 f-row-center-around">
								<div>
									<a href="#">
										<img class="img-hover" src="img/iniciomotivacion.jpg" alt="foto">
									</a>
								</div>
								<div class="w-50 info-services-clip f-col-center-ver-hor">
                                    <span>
                                        <h3>Solicita tu clase <span>Iniciacion gratis</span></h3>
                                    </span>
									<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, voluptas officia cupiditate necessitatibus deserunt, placeat ipsam laboriosam quas accusamus reprehenderit mollitia dolor distinctio quaerat. Dicta eos odit expedita ullam porro?</p>
								</div>
							</li>
							<li class="img-back-clase w-100 f-row-center-around">
								<div>
									<a href="#">
										<img class="img-hover" src="img/clases_discover.jpg" alt="clasesdirigidas">
									</a>
								</div>
								<div class="w-50 info-services-clip f-col-center-ver-hor">
                                    <span>
                                        <h3>Descubre nuestras <span>clases dirigidas</span></h3>
                                    </span>
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, cum.
									</p>
								</div>
							</li>
							<li class="img-back-clase w-100 f-row-center-around">
								<div>
									<a href="#">
										<img class="img-hover" src="img/ringsdips.jpg" alt="ringdips">
									</a>
								</div>
								<div class="w-50 info-services-clip f-col-center-ver-hor">
                                    <span>
                                        <h3>Variedad <span>de horarios y tarifas</span></h3>
                                    </span>
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, cum.
									</p>
								</div>
							</li>
						</ul>
						</div>
					</div>
				</section>
				<section class="banner-product">
					<div class="f-col-center-ver-hor title-productos">
						<h3>PRODUCTOS</h3>
						<p>
							Scroll abajo para descubrir nuestra seleccion de articulo/producto top.
						</p>
					</div>
					<div class="containt-width-products flex-img-33">
						<ul class="lista-productos">
							<li>
								<a href="#">
									<figure>
										<div class="bot-left">
											<div class="box-img multbg-top-to-bottom item1">
												<img  src="img/recovery_drink-mini.png" alt="recoverydrink226ers">
											</div>
										</div>
                                        <div class="box-producto">
                                            <div class="valoracion ">
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<p>4.1</p>
										    </div>
                                            <figcaption class="b">
                                                <h3>Recovery Drink 226ERS proteina 1kg</h3>
                                                <p>40€</p>
                                            </figcaption>
                                        </div>
									</figure>
								</a>	
							</li>
							<li>
								<a href="#">
									<figure>
										<div  class="box-img multbg-top-to-bottom item2">
											<img  src="img/rollergrid.png" alt="rollerfoam">
										</div>
                                        <div class="box-producto">
                                            <div class="valoracion ">
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <p>4.7</p>
                                            </div>
                                            <figcaption class="b">
                                                <h3>Foam Roller GRID STK X masaje muscular</h3>
                                                <p>25€</p>
                                            </figcaption>
                                        </div>
									</figure>
								</a>	
							</li>
							<li>
								<a href="#">
									<figure>
										<div  class="box-img multbg-top-to-bottom item3">
											<img  src="img/rehband_knee_header.png" alt="rehband neopreno">
										</div>
                                        <div class="box-producto">
                                            <div class="valoracion">
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<p>4.5</p>
                                            </div>
                                            <figcaption class="b">
                                                <h3>REHBAND neopreno 5mm</h3>
                                                <p>32€</p>
                                            </figcaption>
                                        </div>
									</figure>
								</a>	
							</li>
							<li>
								<a href="#">
									<figure>
										<div class="box-img multbg-top-to-bottom item4">
											<img  src="img/ropesalto.png" alt="cuerdasaltonylon">
										</div>
                                        <div class="box-producto">
                                            <div class="valoracion">
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<p>4.2</p>
                                            </div>
                                            <figcaption class="b">
                                                <h3>Cuerda de salto nylon ajustable</h3>
                                                <p>21€</p>
                                            </figcaption>
                                        </div>
									</figure>
								</a>	
							</li>
							<li>
								<a href="#">
									<figure>
										<div class="multbg-top-to-bottom box-img item5">
											<img  src="img/Wod-Grips.png" alt="guantesgrip">
										</div>
                                        <div class="box-producto">
                                            <div class="valoracion">
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<p>4</p>
                                            </div>
                                            <figcaption class="b">
                                                <h3>Guantes Gymnastics Grips</h3>
                                                <p>10€</p>
                                            </figcaption>
                                        </div>    
									</figure>
								</a>	
							</li>
							<li>
								<a href="#">
									<figure>
										<div class="box-img multbg-top-to-bottom item6">
											<img  src="img/cinturon-rogue.png" alt="cinturondeadlift">
										</div>
                                        <div class="box-producto">
                                            <div class="valoracion">
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
                                                <i class="fa fa-star full"></i>
												<i class="fa fa-star full"></i>
												<p>4.3</p>
                                            </div>
                                            <figcaption class="b">
                                                <h3>Rogue cinturon 10mm lifting lumbar</h3>
                                                <p>35€</p>
                                            </figcaption>
                                        </div>    
									</figure>
								</a>	
							</li>
						</ul>
					</div>
				</section>
			</section>
			<div class="box-vacio transform-3">
				<div>
					<img  class="pesa"src="img/pesa-rusa.svg" alt="pesa-rusa">
				</div>
			</div>
			<div class="f-col-center-ver-hor title-productos">
				<h3>Donde estamos?</h3>
				<p>
					Nuestro complejo de Fitness se encuentra aqui.		
				</p>
			</div>
			<section id="content-map-google">
					<iframe src="https://snazzymaps.com/embed/80437" width="100%" height="500px" style="border:1px solid black;"></iframe>
			</section>
			<section id="content-newsletter" class="w-100">
				<div class="box-img-news">
					<div class="bikecross"></div>
				</div>
				<div class="flex-news-50">
					<h2>Newsletter</h2>
					<form action="news.php" method="post" id="formnews">
						<ul>
							<li>
								<label for="mailnews">Introduce tu correo electronico</label>
							</li>
							<li>
								<input type="email" name="email" id="mailnews" required>
							</li>
							<li  class="btn-mail">
								<span class="btn in-block"><button type="submit" name="subs" class="relleno btn-cuenta">Suscribirse</button></span>
							</li>
						</ul>
					</form>
					<h3><a href="#">Contacto</a></h3>
				</div>
			</section>
		</section>
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
			$('.parallax-window').parallax({imageSrc:'img/harder.jpg'});
			$(".img-back-clase").hover(function(){
				$(this).children().next().css({"transform": "translateX(-180px)", "transition": "all 700ms cubic-bezier(0.63,-0.51, 0.55, 0.99)"});
				}, function(){
				$(this).children().next().css({"transform": "translateX(52px)", "transition": "all 900ms cubic-bezier(0.32,-0.28, 0.09, 1.05)"});
			});
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



