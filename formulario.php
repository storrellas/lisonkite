<?php include 'base.php' ?> 

<?php startblock('title') ?>
Presupuesto reparación kite
<?php endblock() ?>

<?php startblock('content') ?>

<script> 

	// Holds the current page
	current_page = 0;
	n_total_page = 2;


	$(document).ready(function(){
		show_page(current_page);
	});


	// Name     : show_page
	// Function : shows the page indicated by n_page	
	function show_page(n_page){
		// Remove all pages
		var ind;
		for(ind = 0; ind < n_total_page; ind++){			
			$("#page_" + ind	).hide();
		}

		// Show page indicated
		$("#page_" + n_page ).show();
				
	}
		
	// Name     : page_switch
	// Function : switches from one page to the next one
	function page_switch(command){
		if( command == "next" && current_page < (n_total_page - 1) ){
			current_page++;
		}else if( command == "back" && current_page > 0){
			current_page--;
		}else{
			console.log("You reached the last or initial page")
			return;
		}		
		console.log("Current page is now " + current_page)
	
		// Show current page	
		show_page( current_page );

		if( current_page == 1 ){
			$("#back_btn").attr("src","images/arrow_left_enabled.png");
			$("#next_btn").attr("src","images/arrow_right_disabled.png");
		}

		if( current_page == 0 ){
			$("#back_btn").attr("src","images/arrow_left_disabled.png");
			$("#next_btn").attr("src","images/arrow_right_enabled.png");
		}
	}

</script>
  
<style type="text/css">
	.question{
		margin-bottom:20px;
	}
	
	.question input[type=text]{
		width:200px;
	}
	
	.question .title{
		font-weight: bold;
		margin-bottom: 10px;
	}
	
</style> 
  
<div class="art-layout-wrapper clearfix">

	<form name="contacto" method="post" action="enviar_formulario.php">
	
		<!-- Div for page0 -->
		<div id=page_0 style="padding: 20px">			
			<div style="border: 3px solid black; border-radius: 20px; padding: 20px;">
			 
				<div id="question1" class="question">
					<p><b>Posicion general de la costilla. *</b></p>
					<p>Deja la costilla sin aire. Coloca la valvula hacia arriba. 
					Moldea el flotador hasta que esten las selladas bien colocadas en el borde.<p>
				
					<div>
					 <input type="radio" name="page0_question1" value="question1_A" checked="checked">A - Valvula a la Izquierda<br>
					 <input type="radio" name="page0_question1" value="question1_B">B - Valvula a la Derecha<br>
					</div>
					<div>
						<img src="images/kitesurfing-273315_640.jpg" style="width: 250px; margin: 0px auto; display: block;">
					</div>
				</div>
				
				<div id="question2" class="question">
					<br>
					<p><b>Longitud maxima de la costilla de punta a punta. *</b></p>
					<p>Toma la medida total de la costilla. De exterior a exterior.</p>
					<input type="text" name="page0_question2"/>
				</div>
				
	
				<div id="question3" class="question">
					<p><b>Ancho de la costilla en el lado más estrecho *</b></p>
					<input type="text" name="page0_question3"/>
				</div>
				
				
				<div id="question4" class="question">
					<p><b>Ancho de la costilla en el lado más ancho *</b></p>
					<p>Cada diseño de cometa fabrica su punta de diferente manera, la forma de que encaje 
					a la perfeccion la costilla generica es conseguir ocupar todo el espacio del interior. 
					Unos ejemplos en la foto!</p>
					<input type="text" name="page0_question4"/>
				</div>				
				
				<div id="question5" class="question">
					<p><b>Centrado de la costilla en horizontal *</b></p>
					<p>Desde el centro de la valvula hasta la punta mas ancha de la costilla.</p>
					<input type="text" name="page0_question5"/>
				</div>				
				
				<div id="question6" class="question">
					<p><b>Centrado de la costilla en vertical *</b></p>
					<p>Desde el centro de la valvula hasta la sellada en la base de la costilla.</p>
					<input type="text" name="page0_question6"/>
				</div>				
				
				<div id="question7" class="question">
					<p><b>Tipo de válvula para tu costilla *</b></p>
					<p>Desde el centro de la valvula hasta la sellada en la base de la costilla.</p>
					<div>
					 <input type="radio" name="page0_question7" value="question6_A" checked="checked">A - Standard sin stoper<br>
					 <input type="radio" name="page0_question7" value="question6_B">B - Standard con stoper de membrana ( retiene el aire si sacas el inflador )<br>
					 <input type="radio" name="page0_question7" value="question6_C">C - Standard con stoper de bola ( retiene el aire si sacas el inflador )<br>
					 <input type="radio" name="page0_question7" value="question6_D">D - One pump negro ( Ozone, Slingshot.... )<br>
					 <input type="radio" name="page0_question7" value="question6_E">E - One pump azul ( Best, North.... )<br>
					 <input type="radio" name="page0_question7" value="question6_F">F - One Pump Redonda ( Best )<br>			 
					</div>						
					<div style="margin-top:10px">
						<img alt="" src="images/valvula-autoadhesiva.jpg" style="width: 500px; margin: 0px auto; display: block;">
					</div>											
				</div>
				
				<div id="question8" class="question">
					<p><b>Orientacion del tapon en la valvula escogida. *</b></p>
					<div>
						<input type="radio" name="page0_question8" value="question7_A" checked="checked">A<br>
				 		<input type="radio" name="page0_question8" value="question7_B">B<br>
						<input type="radio" name="page0_question8" value="question7_C">C<br>
						<input type="radio" name="page0_question8" value="question7_D">D<br>				
					</div>
					<div>
						<img alt="" src="images/soap.jpg" style="width: 300px; margin: 0px auto; display: block;">
					</div>
				</div>
	
			</div>
		</div>

		<div align="center">
			<input name="Reset" value="LIMPIAR FORMULARIO" type="reset"> 
			<input name="Submit" value="ENVIAR" type="submit">			
		</div>
	
	</form>

	<div id=page_1 style="padding: 20px">					
		<div style="border: 3px solid black; border-radius: 20px; padding: 20px;">
		 	
			<div id="question1" class="question">
		 		<div class="title">Nombre:</div> 
		 		<input value="" name="nombre" size="25" maxlength="90" type="text">		 
		 	</div>
			
			<div id="question2" class="question">
				<div class="title">Apellidos:</div> 
				<input value="" name="apellidos" size="35" maxlength="80" type="text">
			</div>
			
			<div id="question3" class="question">
				<div class="title">Telefono:</div>			
				<input value="" name="telefono" size="9" maxlength="9" type="text">
			</div>
			
			<div id="question4" class="question">
				<div class="title">Direccion:</div> 
				<input value="" name="direccion" size="25" maxlength="100" type="text"><br>
			</div>
			
			<div id="question5" class="question">
				<div class="title">Codigo Postal:</div> 
				<input value="" name="codigo" size="5" maxlength="5" type="text">			
			</div>
			
			<div id="question6" class="question">
				<div class="title">Población:</div>
			 	<input value="" name="poblacion" size="15" maxlength="50" type="text">			
			</div>
			
			<div id="question7" class="question">
				<div class="title">Correo electrónico:</div> 
				<input value="@" name="email" size="40" maxlength="120" type="text">				
			</div>
			
			<div id="question9" class="question">
				<div class="title">¿Alguna duda?</div>			
				<textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea>
			</div>
			
			<div id="question9" class="question">
				<div class="title">¿Cómo prefieres que nos pongamos en contacto contigo?</div>
				<div>
					<input type="radio" name="question7" value="question7_A">Wassssssuppp<br>
			 		<input type="radio" name="question7" value="question7_B">Teléfono<br>
					<input type="radio" name="question7" value="question7_C">mail<br>
				</div>
			</div>
		
		</div>
	</div>
<!-- 
	<div id=page_2 style="padding: 20px">			
		<div style="border: 3px solid black; border-radius: 20px; text-align: center; height: 300px; line-height: 300px;font-size:60px;">
		 Page2
		</div>
	</div>
 -->	


	<!-- Form navigation -->
	<div style="text-align:center;">
	 	<img id="back_btn" src="images/arrow_left_disabled.png"  style="cursor:pointer; margin-right: 20px" height="50" width="80" onclick="page_switch('back')"> 
	 	<img id="next_btn" src="images/arrow_right_enabled.png" style="cursor:pointer; margin-left: 20px" height="50" width="80" onclick="page_switch('next')">
	</div>

</div>


<?php endblock() ?>			 
