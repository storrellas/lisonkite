<?php include 'base.php' ?> 

<?php startblock('title') ?>
Presupuesto reparación kite
<?php endblock() ?>

<?php startblock('content') ?>

<script> 

// Holds the current page
current_page = 1;

	$(document).ready(function(){
	});


// Name     : show_page
// Function : shows the page indicated by n_page	
function show_page(n_page){
	
}
	
// Name     : page_switch
// Function : switches from one page to the next one
function page_switch(command){
	if( command == "next" ){
		current_page++;
	}else{
		current_page--;
	}	
	console.log("Current page is now " + current_page)

	// Adapt view to current page
	switch(current_page){
		case 1:
			break;
		case 2:
			break;
		case 3:
			break;
	}

	
}

</script>
  
<div class="art-layout-wrapper clearfix">

	<div id=page_1 style="background: green; height : 400px;padding: 20px">			
		<div style="text-align: center; height: 300px; background: red;  line-height: 300px;font-size:60px;">
		 Page1
		</div>
	</div>

	<div id=page_2 style="background: green; height : 400px; padding: 20px">			
		<div style="text-align: center; height: 300px; background: red;  line-height: 300px;font-size:60px;">
		 Page2
		</div>
	</div>

	<div id=page_3 style="background: green; height : 400px; padding: 20px">			
		<div style="text-align: center; height: 300px; background: red;  line-height: 300px;font-size:60px;">
		 Page3
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
	<div style="background: red; text-align:center;">

	 	<img src="images/arrow_left_disabled.png"  style="cursor:pointer; margin-right: 20px" height="80" width="80" onclick="page_switch('previous')"> 
	 	<img src="images/arrow_right_enabled.png" style="cursor:pointer; margin-left: 20px" height="80" width="80" onclick="page_switch('next')">
	 	
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
