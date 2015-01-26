<?php include 'base.php' ?> 

<?php startblock('title') ?>
Presupuesto reparación kite
<?php endblock() ?>

<?php startblock('content') ?>
  
<div class="art-layout-wrapper clearfix">

	<div style="background: green; height : 400px;">			
		<div style="position:absolute; top: 10%; left: 5%; width: 90%; height: 300px; background: red;">
		Here we place the contents
		</div>
	</div>
	
	<!-- Form navigation -->
	<div style="background: red; text-align:center;">
	
		<a href="ok.php" >back button</a>
		<a href="ok.php" >next button</a>
	
		<!-- This option also works 
		<div style="margin:0 auto; background:green; width:200px">
		<a href="ok.php" >back button</a>
		<a href="ok.php" >next button</a>
		</div>
		-->

	
	</div>

</div>


<?php endblock() ?>			 
