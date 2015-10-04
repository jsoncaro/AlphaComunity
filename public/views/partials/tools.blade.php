<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
	<section class="wid-100 start-container bg-gray">
		<article class="col-md-7 padding-t-b-50-auto" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="page-header">
			  <h1 class="header-title-custom shadow-gray">Herramientas para decidir</h1>
			</div>
			<div class="col-md-12 fs-20 fc-W">
				<p>Es un conjunto de información que trabaja como repositorio de material de consulta, proyectos,
					estudios de referencia, bibliografía y otros documentos que al ser consultados y analizados
					permiten tomar decisiones sobre las consultas, encuestas y debates del movimiento innovador.
					Permite conocer las últimas noticias, hacer seguimiento a los indicadores del plan estratégico
					del movimiento y descargar los informes de rendición de cuentas de los líderes.
				</p>
			</div>
		</article>
		<article class="col-md-5 padding-t-b-50-auto" >
			<div class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
				<div class="typehead-primary-container blue">
				  	<input type="text" ng-model="selected"   placeholder="Buscar por palabra clave" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control typehead-primary">
				</div>
				<div class="col-md-12 col-xs-12 center-items" data-sr="enter right please, and hustle 200px over 1s no reset ">
					<div class="wid-70">
						<img class="img-responsive" src="img/tools.png"></img>
					</div>
				</div>
			</div>	
		</article>
		<footer ng-if="!check" id="footer" class="bg-4">

			<div data-sr="enter left please, and hustle 200px over 1s no reset" class="col-md-6 col-sm-12 col-xs-12 float-left inlineb margin-t-30">
				<nav class="wid-100">
						<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items" ng-click="goTo('/da')"><a class="fc-W" target="_blank"href=""><p>Home</p></a></div>
						<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items"><a class="fc-W"ng-click="goTo('/who_we_are')" href=""><p>Quienes somos</p></a></div>
						<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items"><a class="fc-W" target="_blank"href=""><p>FAQ</p></a></div>
						<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items" ng-click="goTo('/login')"><a class="fc-W" target="_blank"href=""><p>Iniciar sesión</p></a></div>
				</nav>
			</div>

			<div data-sr="enter right please, and hustle 200px over 1s no reset" class="col-md-6 col-sm-12 col-xs-12 float-left inlineb">
				<div class="col-md-6 col-md-6 col-xs-12 center-text margin-t-30 float-left ">
				  <p class="fs-15 fc-W">Síguenos en nuestras redes sociales</p>
				</div>
				<article class="col-md-6 col-md-6 col-xs-12 center-items margin-plus float-left">
						<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-facebook"></i></a></div>
						<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-instagram"></i></a></div>
						<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-twitter"></i></a></div>
						<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-youtube-play"></i></a></div>
				</article>
			</div>
		</footer>
	</section>
</div>
