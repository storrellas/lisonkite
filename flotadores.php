<?php include 'base.php' ?>

<?php startblock('title') ?>
Reparación y fabricación flotadores de kite
<?php endblock() ?>

<?php startblock('content') ?>
<script>

jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainerValvula32").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;


            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigatorValvula32"),
                helper: helper
                            });
        });
    }
});

jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainerPoro").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;


            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigatorPoro"),
                helper: helper
                            });
        });
    }
});
</script>

<style>
.art-slidecontainerValvula32 {
	position: relative;
	width: 273px;
	height: 227px;
}

.art-slidecontainerValvula32 .art-slide-item {
	
}

.art-slidecontainerValvula32 .art-slide-item {
	-webkit-transition: 600ms ease-in-out opacity;
	-moz-transition: 600ms ease-in-out opacity;
	-ms-transition: 600ms ease-in-out opacity;
	-o-transition: 600ms ease-in-out opacity;
	transition: 600ms ease-in-out opacity;
	position: absolute;
	display: none;
	left: 0;
	top: 0;
	opacity: 0;
	width: 100%;
	height: 100%;
}

.art-slidecontainerValvula32 .active,.art-slidecontainerValvula32 .next,.art-slidecontainerValvula32 .prev
	{
	display: block;
}

.art-slidecontainerValvula32 .active {
	opacity: 1;
}

.art-slidecontainerValvula32 .next,.art-slidecontainerValvula32 .prev {
	width: 100%;
}

.art-slidecontainerValvula32 .next.forward,.art-slidecontainerValvula32 .prev.back
	{
	opacity: 1;
}

.art-slidecontainerValvula32 .active.forward {
	opacity: 0;
}

.art-slidecontainerValvula32 .active.back {
	opacity: 0;
}

.art-slideValvula320 {
	background-image: url('images/flotadores/slideValvula320.jpg');
	background-position: 0 0;
	background-repeat: no-repeat;
}

.art-slideValvula321 {
	background-image: url('images/flotadores/slideValvula321.jpg');
	background-position: 0 0;
	background-repeat: no-repeat;
}

.art-slidenavigatorValvula32 {
	display: inline-block;
	position: absolute;
	direction: ltr !important;
	top: 204px;
	left: 84.98%;
	z-index: 101;
	line-height: 0 !important;
	-webkit-background-origin: border !important;
	-moz-background-origin: border !important;
	background-origin: border-box !important;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	text-align: center;
	white-space: nowrap;
}

.art-slidenavigatorValvula32 {
	background: #A3F0A9;
	background: transparent;
	background: transparent;
	background: transparent;
	background: transparent;
	background: transparent;
	background: transparent;
	-svg-background: transparent;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	padding: 3px;
}

.art-slidenavigatorValvula32>a {
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	-svg-background: #8B938A;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	margin: 0 10px 0 0;
	width: 10px;
	height: 10px;
}

.art-slidenavigatorValvula32>a.active {
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	-svg-background: #168820;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	margin: 0 10px 0 0;
	width: 10px;
	height: 10px;
}

.art-slidenavigatorValvula32>a:hover {
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	-svg-background: #40CF30;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	margin: 0 10px 0 0;
	width: 10px;
	height: 10px;
}

.art-slidecontainerPoro {
	position: relative;
	width: 273px;
	height: 227px;
}

.art-slidecontainerPoro .art-slide-item {
	
}

.art-slidecontainerPoro .art-slide-item {
	-webkit-transition: 600ms ease-in-out opacity;
	-moz-transition: 600ms ease-in-out opacity;
	-ms-transition: 600ms ease-in-out opacity;
	-o-transition: 600ms ease-in-out opacity;
	transition: 600ms ease-in-out opacity;
	position: absolute;
	display: none;
	left: 0;
	top: 0;
	opacity: 0;
	width: 100%;
	height: 100%;
}

.art-slidecontainerPoro .active,.art-slidecontainerPoro .next,.art-slidecontainerPoro .prev
	{
	display: block;
}

.art-slidecontainerPoro .active {
	opacity: 1;
}

.art-slidecontainerPoro .next,.art-slidecontainerPoro .prev {
	width: 100%;
}

.art-slidecontainerPoro .next.forward,.art-slidecontainerPoro .prev.back
	{
	opacity: 1;
}

.art-slidecontainerPoro .active.forward {
	opacity: 0;
}

.art-slidecontainerPoro .active.back {
	opacity: 0;
}

.art-slidePoro0 {
	background-image: url('images/flotadores/slidePoro0.jpg');
	background-position: 0 0;
	background-repeat: no-repeat;
}

.art-slidePoro1 {
	background-image: url('images/flotadores/slidePoro1.jpg');
	background-position: 0 0;
	background-repeat: no-repeat;
}

.art-slidenavigatorPoro {
	display: inline-block;
	position: absolute;
	direction: ltr !important;
	top: 211px;
	left: 86.81%;
	z-index: 101;
	line-height: 0 !important;
	-webkit-background-origin: border !important;
	-moz-background-origin: border !important;
	background-origin: border-box !important;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	text-align: center;
	white-space: nowrap;
}

.art-slidenavigatorPoro {
	background: #A3F0A9;
	background: transparent;
	background: transparent;
	background: transparent;
	background: transparent;
	background: transparent;
	background: transparent;
	-svg-background: transparent;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	padding: 3px;
}

.art-slidenavigatorPoro>a {
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	background: #8B938A;
	-svg-background: #8B938A;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	margin: 0 10px 0 0;
	width: 10px;
	height: 10px;
}

.art-slidenavigatorPoro>a.active {
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	background: #168820;
	-svg-background: #168820;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	margin: 0 10px 0 0;
	width: 10px;
	height: 10px;
}

.art-slidenavigatorPoro>a:hover {
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	background: #40CF30;
	-svg-background: #40CF30;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	margin: 0 10px 0 0;
	width: 10px;
	height: 10px;
}
</style>



<div class="art-layout-wrapper clearfix">
	<div class="art-content-layout">
		<div class="art-content-layout-row">
			<div class="art-layout-cell art-content clearfix">
				<article class="art-post art-article">
					<div class="art-postmetadataheader">
						<h2 class="art-postheader">Flotadores...</h2>
					</div>

					<div class="art-postcontent art-postcontent-0 clearfix">
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 100%">
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.25pt;">
										<b><span
											style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 18px; font-style: normal; font-weight: normal;">Los
												flotadores también llamados bladers, condones, vejigas....
												&nbsp;otorgan a nuestra vela de tres características
												imprescindibles para una práctica cómoda i segura.&nbsp;</span>
										</b>
									</p>
									<p></p>
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.25pt;">
										<b><span style="font-size: 18px; font-weight: normal;">Rigidez
												estructural, flotabilidad, poco peso.</span> </b>
									</p>
									<p></p>
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.25pt;">
										<b><span style="font-size: 18px; font-weight: normal;">Por
												este motivo es vital que estén en buen estado i ofrezcan una
												estanqueidad del aire óptima.</span> </b>
									</p>
									<p></p>
									<p>
										<span style="font-size: 18px; font-weight: normal;">&nbsp;</span>
									</p>
									<p></p>
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.25pt;">
										<b style="font-family: Tahoma; font-size: 18px;"><span
											style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-weight: normal;">Las
												reparaciones más comunes</span><span
											style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-weight: normal;">:</span>
										</b>
									</p>
									<p></p>
									<p>
										<span
											style="font-family: Tahoma; font-size: 18px; font-weight: bold;"></span>
									</p>
									<p>
										<br>
									</p>
								</div>
							</div>
						</div>
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 100%">
									<h1>
										<span
											style="font-size: 18px; font-style: normal; font-family: Tahoma; color: #000000;">-Pinchazos
											o explosiones.</span><br>
									</h1>
									<p>
										<span style="font-family: Arial; font-size: 18px;"><br> </span>
									</p>
								</div>
							</div>
						</div>
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 33%">
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.65pt; background-color: rgb(244, 246, 244);">
										<span
											style="font-size: 13.5pt; font-family: Tahoma, sans-serif; color: rgb(46, 30, 45);">Las
											malas hierbas,los residuos de la playa o la mala suerte,
											pueden ocasionar pequeños poros en &nbsp;el flotador del
											kite. &nbsp;</span>
									</p>
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.65pt; background-color: rgb(244, 246, 244);">
										<span
											style="font-size: 13.5pt; font-family: Tahoma, sans-serif; color: rgb(46, 30, 45);">El
											caso de las explosiones puede ser el efecto secundario de una
											rotura en el tejido protector, o por el mal posicionamiento
											del flotador dentro del kite.</span>
									</p>
									<p
										style="line-height: 19.5px; color: rgb(46, 30, 45); background-color: rgb(244, 246, 244);">
										<br>
									</p>
									<p>
										<span style="font-family: Arial; font-size: 18px;"><br> </span>
									</p>
								</div>
								<div class="art-layout-cell" style="width: 34%">
									<p></p>
									<div id="Poro"
										style="position: relative; display: inline-block; z-index: 0; margin: 5px; border-style: solid; border-color: #000000; border-width: 1px;"
										class="art-collage">
										<div class="art-slider art-slidecontainerPoro">
											<div class="art-slider-inner">
												<div class="art-slide-item art-slidePoro0 active"></div>
												<div class="art-slide-item art-slidePoro1"></div>

											</div>
										</div>
										<div class="art-slidenavigator art-slidenavigatorPoro">
											<a href="#" class="art-slidenavigatoritem active"></a><a
												href="#" class="art-slidenavigatoritem"></a>
										</div>



									</div>

									<p>
										<br>
									</p>
								</div>
								<div class="art-layout-cell" style="width: 33%">
									<p>
										<img style="border-style: solid;" alt="" class="art-lightbox"
											src="images/flotadores/Explosion.jpg" height="219"
											width="263"><br>
									</p>
								</div>
							</div>
						</div>
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 100%">
									<p class="MsoNormal"
										style="margin-top: 7.5pt; margin-right: 0cm; margin-left: 0cm; margin-bottom: 0.0001pt; line-height: 20.25pt;">
										<b><span
											style="font-size: 13.5pt; font-family: Arial, sans-serif; color: black;">-Sustitución
												de válvulas.</span> </b><b></b>
									</p>
									<h1>
										<span
											style="font-family: Arial; font-size: 18px; color: #000000;"></span>
									</h1>
									<p>
										<span style="font-family: Arial; font-size: 18px;"><br> </span>
									</p>
								</div>
							</div>
						</div>
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 33%">
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.65pt; background-color: rgb(244, 246, 244);">
										<span
											style="font-size: 13.5pt; font-family: Tahoma, sans-serif; color: rgb(46, 30, 45);">Es
											muy crítica la adhesión de las válvulas al flotador de
											origen. Las altas temperaturas que puede recibir nuestro
											material dentro del coche &nbsp;ocasionan un efecto
											contraproducente en todas las válvulas de nuestro equipo.</span>
									</p>
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 14.65pt; background-color: rgb(244, 246, 244);">
										<span
											style="font-size: 13.5pt; font-family: Tahoma, sans-serif; color: rgb(46, 30, 45);">En
											ocasiones, es recomendable substituir la totalidad de las
											válvulas para garantizar el correcto funcionamiento y la
											fiabilidad de nuestro material.</span>
									</p>
									<p
										style="line-height: 19.5px; color: rgb(46, 30, 45); background-color: rgb(244, 246, 244);">
										<span style="font-size: 18px;"><br> </span>
									</p>
									<p
										style="line-height: 19.5px; color: rgb(46, 30, 45); background-color: rgb(244, 246, 244);">
										<span style="font-size: 18px;"></span>
									</p>
									<p>
										<br>
									</p>
								</div>
								<div class="art-layout-cell" style="width: 34%">
									<p></p>
									<div id="Valvula32"
										style="position: relative; display: inline-block; z-index: 0; margin: 5px; border-style: solid; border-color: #000000; border-width: 1px;"
										class="art-collage">
										<div class="art-slider art-slidecontainerValvula32">
											<div class="art-slider-inner">
												<div class="art-slide-item art-slideValvula320"></div>
												<div class="art-slide-item art-slideValvula321"></div>

											</div>
										</div>
										<div class="art-slidenavigator art-slidenavigatorValvula32">
											<a href="#" class="art-slidenavigatoritem active"></a><a
												href="#" class="art-slidenavigatoritem"></a>
										</div>



									</div>

								</div>
								<div class="art-layout-cell" style="width: 33%">
									<p>
										<img style="border-style: solid;" alt="" class="art-lightbox"
											src="images/flotadores/Valvula.jpg" height="219" width="263"><br>
									</p>
								</div>
							</div>
						</div>
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 100%">
									<b><span
										style="font-size: 13.5pt; line-height: 107%; font-family: Tahoma, sans-serif;">-Fabricación
											de nuevos flotadores.</span> </b><br>
								</div>
							</div>
						</div>
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 33%">
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 20.25pt;">
										<span
											style="font-size: 13.5pt; font-family: Tahoma, sans-serif; color: rgb(46, 30, 45); background-color: rgb(244, 246, 244);">Recomendamos
											esta vía cuando el estado del flotador no garantiza su
											estanqueidad.</span>
									</p>
									<p
										style="margin-top: 9pt; margin-right: 3.75pt; margin-bottom: 9pt; margin-left: 3.75pt; line-height: 20.25pt;">
										<span
											style="font-size: 13.5pt; font-family: Tahoma, sans-serif; color: rgb(46, 30, 45);">Contamos
											con materiales de primera calidad y maquinaria específica
											para la fabricación de bladers de cualquier modelo.</span>
									</p>
									<p>
										<span style="font-family: Tahoma; font-size: 18px;"><span
											style="color: rgb(46, 30, 45); line-height: 19.5px; background-color: rgb(244, 246, 244);"></span>
										</span>
									</p>
									<p>
										<span
											style="color: rgb(46, 30, 45); font-family: Tahoma; font-size: 18px;"></span>
									</p>
								</div>
								<div class="art-layout-cell" style="width: 34%">
									<p>
										<img style="border-style: solid;" alt="" class="art-lightbox"
											src="images/flotadores/bladers2.jpg" height="250" width="300"><br>
									</p>
								</div>
								<div class="art-layout-cell" style="width: 33%">
									<p>
										<img style="border-style: solid;" alt="" class="art-lightbox"
											src="images/flotadores/Bladers.jpg" height="247" width="297"><br>
									</p>
								</div>
							</div>
						</div>
					</div>

				</article>
			</div>
		</div>
	</div>
</div>

<?php endblock() ?>