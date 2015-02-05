<?php include 'base.php' ?>

<?php startblock('title') ?>
Recogida a domicilio de material kitesurf a reparar
<?php endblock() ?>

<?php startblock('content') ?>
<script type="text/javascript">
	$( document ).ready(function() {
		 $("#cssmenu #recogidas").addClass("active");			
	});
</script>
<div class="art-layout-wrapper clearfix">
	<div class="art-content-layout">
		<div class="art-content-layout-row">
			<div class="art-layout-cell art-content clearfix">
				<article class="art-post art-article">
					<div class="art-postmetadataheader">
						<h2 class="art-postheader">Recogida a domicilio de tu material a
							reparar.</h2>
					</div>

					<div class="art-postcontent art-postcontent-0 clearfix">
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell" style="width: 100%">
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">En LisonKite gestionamos el
											envío de tu material desde la puerta de tu casa hasta nuestro
											taller de reparación. Gestiona tu recogida a través de este
											formulario.</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">El precio por trayecto es
											de 8€.</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">Se recogerá en 24h
											laborables en toda la península.</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">Recomendamos plegar el kite
											sin agua ni arena y empaquetarlo en una caja..</span>
									</p>
									<p class="MsoNormal" style="text-align: center;">
										<span style="font-family: Tahoma; line-height: normal;">Etiqueta
											el paquete con nuestra dirección y el remitente.</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">LisonKite&nbsp;</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">Pasatge Vintró 9&nbsp;</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">&nbsp;08026 Barcelona&nbsp;</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">Tel.654.84.38.71</span>
									</p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;"> <span
											id="art-footnote-links"><a
												href="http://www.lisonkite.com/Etiqueta.jpg" target="_blank">Aquí
													puedes imprimir directamente nuestra etiqueta.</a> </span>
										</span>
									</p>
									<p></p>
									<p class="MsoNormal"
										style="line-height: normal; text-align: center;">
										<span style="font-family: Tahoma;">Una vez llegue el material
											contactaremos telefónicamente para concretar la reparación.</span>
									</p>
									<br>
									<p></p>
								</div>
							</div>

							<form name="contacto" method="post" action="enviar_recogidas.php">

								<p align="left">
									Nombre: <input value="" name="nombre" size="25" maxlength="90"
										type="text"><br> <br> Apellidos: <input value=""
										name="apellidos" size="35" maxlength="80" type="text"> <br> <br>
									Telefono: <input value="" name="telefono" size="9"
										maxlength="9" type="text"><br> <br> Direccion: <input value=""
										name="direccion" size="25" maxlength="100" type="text"><br> <br>
									Codigo Postal: <input value="" name="codigo" size="5"
										maxlength="5" type="text"><br> <br> Población: <input value=""
										name="poblacion" size="15" maxlength="50" type="text"><br> <br>
									Correo electrónico: <input value="@" name="email" size="40"
										maxlength="120" type="text"><br> <br> ¿Que quieres que
									arreglemos en tu material?<br> <br>
									<textarea name="descripcion" id="descripcion" cols="40"
										rows="5"></textarea>
									<br> ¿En que horario prefieres que te recojamos el material?<br>
									<br>
									<textarea name="horario" id="horario" cols="40" rows="5"></textarea>
									<br>
								</p>
								<p></p>
								<div align="center">
									<input name="Reset" value="LIMPIAR FORMULARIO" type="reset"> <input
										name="Submit" value="ENVIAR" type="submit">
								</div>

							</form>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<?php endblock() ?>