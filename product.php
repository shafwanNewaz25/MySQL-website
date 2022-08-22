<style type="text/css">
	.productheading{
		padding: 30px;
		font-size: 90px;
		text-align: center;
		padding-bottom: 50px;
	}
	.productheading:hover{
		   text-shadow: 2px 2px 5px black;

	}
	.tablew3 {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  font-size: 25px;
  padding: 10px;
  border: 4px solid #01bacf;
   box-shadow: 5px 10px; 
   margin: auto;
}

td, th {
  border: 1px solid #01bacf;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #79D3DD;
  color: white;
}
tr:nth-child(even):hover{
	color: black;
}
</style>
<?php
	include ('all_products.php');

    $product_id = $_GET["id"];
    $product = $products[$product_id];

 	$title = $product["university"]; 
    include ('header.php') ;
	include ('connection.php');


    $userID = -1;
	if (isset($_SESSION['username'])){
	    $userQuery = 'SELECT * from users where username = "' . $_SESSION['username'] . '"';
	    $userIDresult = mysqli_query($db,$userQuery);
	    while ($userIDrow = mysqli_fetch_array($userIDresult, MYSQLI_ASSOC)) {
	      $userID = $userIDrow["id"];
	    };
	    $userID = (int) $userID;
	}

    if (isset($_POST['add-to-cart'])) {
	    $sql = "INSERT INTO cart (user, product, quantity) VALUES ('$userID','$product_id','1')";

	    $Query = False;

	    if (True){
	    	$Query = mysqli_query($db, $sql); // store the submitted data to the database..
	    	if ($Query) {
		      	echo '<div class="alert alert-success">';
	  			echo "<strong>Success!</strong> University added.";
				echo "</div>";
		    }
		    else{
		    	echo '<div class="alert alert-danger">';
	  			echo "<strong>Failed!</strong> University not added.";
				echo "</div>";
		    }
		}
		else {
			echo '<div class="alert alert-danger">';
  			echo "<strong>Sorry!</strong> University not added.";
			echo "</div>";
		}	
	    
    }

  ?> 

<section>

			





	<div class="col-lg-7 col-md-7 col-sm-12 preview" style="width: 100%;">
		<h1 class="check productheading "><?php echo $product["university"]; ?></h1>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<a href="#"><img style="width: 850px; height:550px; " id="expandedImg"  src="<?php echo $product["img-t"]; ?>" class="cen thumbnail img-responsive" ></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thum">

			<?php foreach ($product["thumbs"] as $thumb) {
				$output = "";
				$output = $output . '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3"><img style="height:150px;width:200px;object-fit: cover;" onclick="myFunction(this)" src="';
				$output = $output . "university/" . $thumb;
				$output = $output . '" class="thumbnail h-img"></div>';
				echo $output;
			}?>
			<?php echo '<a href="https://' . $product["uniweb"] . '" class="btn btn-primary  " style="text-align=center" >See university Website</a>' ?>
		</div>
	</div> 

	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"  style="width: 100%  ";>

	<table class="table table-bordered  " style="text-align:center">
		<tr class="warning shadowing">
			<td>
			<h1 class="check"><?php echo $product["university"] . " " . $product["year"]; ?></h1>
			
			</td>
		</tr>
		<tr class="shadowing">
			<td>
			<p>Situated In : <?php echo $product["city"] ?> <br><?php echo $product["description"] ?></p>
			</td>
		</tr>

		<tr class="warning">
			<td>
			<p><i class=""></i>University Phone Number: <?php echo $product["phone"]?><br>University Email Addres: <?php echo $product["uniemail"]?></p>
			</td>
		</tr>
		



		<table class="tablew3">
			<h1 class="check" style="text-align: center; padding: 30px; text-transform: uppercase;">University At A Glance</h1>
			<tr>
		    <td>Established In</td>
		    <td><?php echo $product["year"] ; ?></td>

		  </tr>
		  <tr>
		    <td>% International Students</td>
		    <td><?php echo $product["interstudent"]. "% " ; ?></td>

		  </tr>
		  <tr>
		    <td>Size of Campus in acres</td>
		    <td>
		    	<?php echo $product["campussize"] ; ?>
		    </td>

		  </tr>
		  <tr>
		    <td>Male/Female Ratio</td>
		    <td>
		    	<?php echo $product["malefemaleratio"] ; ?>
		    </td>

		  </tr>
		  <tr>
		    <td>Endowments Value</td>
		    <td><?php echo $product["endvalue"]. " Million "  ; ?></td>

		  </tr>
		  <tr>
		    <td>No.of Campuses</td>
		    <td>
		    	<?php echo $product["campsize"] ; ?>
		    </td>

		  </tr>

		  <tr>
		    <td>Students belonging to</td>
		    <td>
		    	<?php echo $product["foreignstudent"] ; ?>
		    </td>

		  </tr>
		  <tr>
		    <td>Ranking</td>
		    <td> 
		    	<?php echo $product["rank"] ; ?>
		    </td>

		  	</tr>
		  	<tr>
		    <td>Application Fees</td>
		    <td>
		    	<?php echo $product["applicationfee"]. " USD " ; ?>
		    </td>
		  	</tr>
		  	<tr>
		    <td>Yearly Hostel & Meals Expense</td>
		    <td>
		    	<?php echo $product["hostelmeal"]. " USD " ; ?>
		    </td>
		  	</tr>
		  	<tr>
		    <td>Average Tuition Fees</td>
		    <td>
		    	<?php echo $product["avgtution"]. " USD " ; ?>
		    </td>
		  	</tr>
		</table>

<div style="padding-bottom: 100px;"></div>

		<form method="post" style="text-align: center;">
			<tr class="warning">
				<td>
				
					<?php  if (isset($_SESSION['username'])){
								echo '<input class="btn btn-primary " type="submit" name="add-to-cart" value="Save University">';
							}
							else{
								echo '<input class="btn btn-primary disabled" type="" value="Login To Save Univeristy">';
							}
					?>
				<?php echo '<a href="consulationRegister.php?id=' . $product_id . '" class="btn btn-primary" role="button">Register For Consultation</a>' ?>


				

				</td>
			</tr>
		</form>
	</table>
	</div>

</section>
<section>
	
</section>
<script type="text/javascript">
	function myFunction(imgs) {
		var expandImg = document.getElementById("expandedImg");
		expandImg.src = imgs.src;
		//expandImg.parentElement.style.display = "block";
	}
</script>

<?php include ('footer.php') ?>
