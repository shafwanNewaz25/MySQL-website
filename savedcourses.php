<?php
   $title = "Saved Courses"; 
   include ('header.php') ;
   $btn_action = "address.php";
   $btn_name = "Place Order";
  ?>
<div class="container">
	<br>

</div>
 
<div class="container">


	<div class="col-lg-8">




	<table class="table table-bordered">

		<?php 
			include ('savedcourses-list.php');
			foreach ($items as $product_id => $product) {
				 echo get_list_view_html($product_id,$product);
			}
		?>
	</table>
	<form method="POST" >
      <button type="submit" name="clearCart" class="btn btn-danger center-block">Clear Saved Courses</button>
      <?php 
      		if (isset($_POST['clearCart'])) {
			    $sql = 'DELETE from cart where user = ' . $userID;
			    $Query = mysqli_query($db, $sql);
			    if ($Query) {
				 	echo '<div class="alert alert-success">';
	  				echo "<strong>Success!</strong> Saved Courses Cleared. Reload to see changes";
					echo "</div>";
			 	}
			  }
       ?>
    </form>




	</div>





<!-- Calculation Panel -->


<?php include ('footer.php') ?>