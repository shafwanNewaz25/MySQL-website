<?php
   $title = "United Kingdom"; 
   include ('header.php') ;
   $category = "iMac" ;
  ?>

<div class="container category_title">
    <h1><?php echo "United Kingdom"; ?></h1>
    <?php include ('sorting.php'); ?>
</div>

<?php 
 include ('all_products.php');
 foreach ($products as $product_id => $product) {
		 	if ($product["cat"]=="uk") {
		 		echo get_list_view_html($product_id,$product);
		 	}	      
  		} ;
  		include ('pagination.php');
  ?>

<?php include ('footer.php') ?>