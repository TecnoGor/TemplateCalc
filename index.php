<?php 
	include('templates/header.php');
?>
		<section class="banner">

			<!-- <div id="contentBanner"> -->

				<div id="contentTemplates">

				</div>

				<section class="container blogs" id="contentCardsBlogs" style="height: 50%; padding-top: 8rem;">

					<h1 class="heading-1">Servicios Postales</h1>

					<div class="container-blogs">

						<div class="card-blog" onclick="servicesNationals()">
							<div class="container-img text-center">
								<div class="blog1">
									<h1 class="position-absolute top-50 start-50 translate-middle text-light">Servicios Nacionales</h1>
								</div>
							</div>
						</div>

						<div class="card-blog" onclick="servicesInternationals()">
							<div class="container-img text-center">
								<div class="blog2">
									<h1 class="position-absolute top-50 start-50 translate-middle text-light">Servicios Internacionales</h1>
								</div>
							</div>
							
						</div>

						<div class="card-blog" onclick="modalDevelop()">
							<div class="container-img">
								<div class="blog3">
									<h1 class="position-absolute top-50 start-50 translate-middle text-light">Fletes</h1>
								</div>
							</div>
							
						</div>
					</div>

				</section>

				<div class="content-banner" id="contentButtonTracking">
					<p>Tracking de Envios</p>
					<h2>Rastrea tu paquete con nosotros 🚍</h2>
					<a onclick="containSearch()" style="color: #ffffff; cursor: pointer;"><h4><i class="bi bi-search"></i> Rastrear</h4></a>
				</div>

			<!-- </div> -->

		</section>

		<!-- <main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Envío gratuito a nivel mundial</span>
						<p>En pedido superior a $150</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Contrareembolso</span>
						<p>100% garantía de devolución de dinero</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Tarjeta regalo especial</span>
						<p>Ofrece bonos especiales con regalo</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Servicio al cliente 24/7</span>
						<p>LLámenos 24/7 al 123-456-7890</p>
					</div>
				</div>
			</section>

		</main> -->
<?php

	include('templates/footer.php');

?>