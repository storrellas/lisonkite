<?php include 'base.php' ?> 

<?php startblock('title') ?>
Presupuesto reparación kite
<?php endblock() ?>

<?php startblock('content') ?>

<script> 

	// Holds the current page
	current_page = 0;


	$(document).ready(function(){
		show_page(current_page);
	});


	// Name     : show_page
	// Function : shows the page indicated by n_page	
	function show_page(n_page){
		// Remove all pages
		var ind;
		for(ind = 0; ind < 3; ind++){			
			$("#page_" + ind	).hide();
		}

		// Show page indicated
		$("#page_" + n_page ).show();
				
	}
		
	// Name     : page_switch
	// Function : switches from one page to the next one
	function page_switch(command){
		if( command == "next" && current_page < 2 ){
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

		if( current_page == 2 ){
			$("#back_btn").attr("src","images/arrow_left_enabled.png");
			$("#next_btn").attr("src","images/arrow_right_disabled.png");
		}
		if( current_page == 1 ){
			$("#back_btn").attr("src","images/arrow_left_enabled.png");
			$("#next_btn").attr("src","images/arrow_right_enabled.png");
		}
		if( current_page == 0 ){
			$("#back_btn").attr("src","images/arrow_left_disabled.png");
			$("#next_btn").attr("src","images/arrow_right_enabled.png");
		}
	}

</script>
  
<div class="art-layout-wrapper clearfix">

	<div id=page_0 style="padding: 20px">			
		<div style="border: 3px solid black; border-radius: 20px; text-align: center; height: 300px; line-height: 300px;font-size:60px;">
		 Page0
		</div>
	</div>

	<div id=page_1 style="padding: 20px">			
		<div style="border: 3px solid black; border-radius: 20px; text-align: center; height: 300px; line-height: 300px;font-size:60px;">
		 Page1
		</div>
	</div>

	<div id=page_2 style="padding: 20px">			
		<div style="border: 3px solid black; border-radius: 20px; text-align: center; height: 300px; line-height: 300px;font-size:60px;">
		 Page2
		</div>
	</div>

<!-- 
	<div style="background: green; height : 400px;">			
		<div style="text-align: center; position:absolute; top: 10%; left: 5%; width: 90%; height: 300px; background: red;  line-height: 300px;font-size:60px;">
		 Page1
		</div>
	</div>
	
	
	<div style="background: green; height : 400px;">			
		<div style="text-align: center; position:absolute; top: 10%; left: 5%; width: 90%; height: 300px; background: red;  line-height: 300px;font-size:60px;">
		 Page2
		</div>
	</div>

	<div style="background: green; height : 400px;">			
		<div style="text-align: center; position:absolute; top: 10%; left: 5%; width: 90%; height: 300px; background: red;  line-height: 300px;font-size:60px;">
		 Page3
		</div>
	</div>
 -->	
	
	<!-- Form navigation -->
	<div style="text-align:center;">

	 	<img id="back_btn" src="images/arrow_left_disabled.png"  style="cursor:pointer; margin-right: 20px" height="80" width="80" onclick="page_switch('back')"> 
	 	<img id="next_btn" src="images/arrow_right_enabled.png" style="cursor:pointer; margin-left: 20px" height="80" width="80" onclick="page_switch('next')">
	 	
	 	<!-- 
	 	<img src="images/arrow_left_disabled.png"  style="cursor:pointer; margin-right: 20px" height="80" width="80" onclick="location.href='ok.php'"> 
	 	<img src="images/arrow_right_enabled.png" style="cursor:pointer; margin-left: 20px" height="80" width="80" onclick="location.href='ok.php'">
	 	 -->
	 	<!-- 
		<a href="ok.php" >back button</a>
		<a href="ok.php" >next button</a>
	 	-->
		<!-- This option also works 
		<div style="margin:0 auto; background:green; width:200px">
		<a href="ok.php" >back button</a>
		<a href="ok.php" >next button</a>
		</div>
		-->
	</div>

</div>


<?php endblock() ?>			 
