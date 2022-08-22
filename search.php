<?php
   $title = "Search Results";
   include ('header.php') ;
   $keywords = $_POST['keywords'];
   $category = 'Search Results: ' . $keywords ;
  ?>
<div class="container category_title">
<h1><?php echo "$category"; ?></h1>
</div>

<div style="text-align: center;">
<?php
   include ('sorting.php') ;
  ?>
</div>

<?php
  function get_list_view_html($product_id, $product) {
    $output = "";
    $output = $output . '<div class="col-lg-3 col-sm-4 col-xs-6 col-md-3 boxing">';
    $output = $output . '<div class="thumbnail">';  
    $output = $output . '<a href="product.php?id=' . $product_id . '"><img style="display: block;object-fit: cover;height: 220px;" class="thumbImg" src="' . $product["img-t"] . '" alt="' . $product["name"] . '"></a>';
    $output = $output . '<div class="caption">';    
    $output = $output . '<p style="font-family: Syncopate, sans-serif; font-size: 35px; height:24px; text-align:center;" class="check">' . $product["university"] . '</p>';
    $output = $output . '<p class="onwhitesubsec" style="text-align:center; font-weight: bold; font-size: 20px;">Established In: ' . $product["year"] . '.   </p>'; 
    $output = $output . '<h4 class="productclass" style="text-align:center; ">Students Belonging To: ' . $product["foreignstudent"] . '   </h4>';
    $output = $output . '<h4 class="productclass" style="text-align:center;">Application Fees: ' . $product["applicationfee"]. " USD " . '  </h4>';

    $output = $output . '<h4 class="productclass" style="text-align:center; ">Rank: ' . $product["rank"] . '</h4>'; 

    $output = $output . '<h4 class="productclass" style="text-align:center; ">Internationl Student : ' . $product["interstudent"] . " % ". '</h4>'; 

    $output = $output . '<p class="productclass" style="text-align:center; ">Average Tuition Fees: ' . $product["avgtution"]. " USD " . ' </p>'; 
    $output = $output . '<div style="text-align:center;">';     
    $output = $output . '<a href="product.php?id=' . $product_id . '" class="btn btn-primary" role="button">View details</a>';       
    $output = $output . '</div>';
    $output = $output . '</div>';   
    $output = $output . '</div>';  
    $output = $output . '</div>';
  return $output;
  }
  $products = array();
  include ('connection.php');

  $query = 'SELECT * from uni where university like "%' . $keywords . '%" or city like "%' . $keywords . '%" or rank like "%' . $keywords . '%" 
            or year like "%' . $keywords . '%" or CONCAT(university, " ", city) like "%' . $keywords . '%" or CONCAT(university, " ", city, " ", year)
             like "%' . $keywords . '%" or CONCAT(university, " ", avgtution, " ", year, " ", minimumGrade, " ", phone) like "%' . $keywords . '%"  ';

 
                   
error_reporting(0);
    $sortBy = "";
    $sortBy = $_GET["sortBy"];
    if ($sortBy == "priceAsc") {
      $query = "SELECT * from uni ORDER BY avgtution asc";
    }
    elseif ($sortBy == "priceDesc") {
      $query = "SELECT * from uni ORDER BY avgtution desc";
    }
    elseif ($sortBy == "rankAsc") {
      $query = "SELECT * from uni ORDER BY rank asc";
    }
    elseif ($sortBy == "rankDesc") {
      $query = "SELECT * from uni ORDER BY rank desc";
    }
    elseif ($sortBy == "available") {
      $query = "SELECT * from uni where availability = 1";
    }
    else {
      $query = "SELECT * from uni";
    }



  $result = mysqli_query($db,$query);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $id = $row["id"];
      $university = $row["university"];
      $uniweb = $row["uniweb"];
      $year = $row["year"];
      $interstudent = $row["interstudent"];
      $type = $row["type"];
      $campsize = $row["campsize"];
      $campussize = $row["campussize"];
      $malefemaleratio = $row["malefemaleratio"];
      $endvalue = $row["endvalue"];
      $foreignstudent = $row["foreignstudent"];
      $applicationfee = $row["applicationfee"];
      $minimumGrade = $row["minimumGrade"];
      $address = $row["address"];
      $phone = $row["phone"];
      $uniemail = $row["uniemail"];
      $city = $row["city"];
      $hostelmeal = $row["hostelmeal"];
      $avgtution = $row["avgtution"];
      $availability = $row["availability"];
      $description = $row["description"];
      $img1 = $row["image1"];
      $img2 = $row["image2"];
      $img3 = $row["image3"];
      $img4 = $row["image4"];
      $img5 = $row["image5"];
      $img6 = $row["image6"];
      $date = $row["somoy"];
      $rank = $row["rank"];

    $cnt = 0;
    $imageArray = array();
    if ($img1) {
    $imageArray[$cnt] = $img1;
    $cnt++;
    }
    if ($img2) {
    $imageArray[$cnt] =  $img2;
    $cnt++;
    }
    if ($img3) {
    $imageArray[$cnt] = $img3;
    $cnt++;
    }
    if ($img4) {
    $imageArray[$cnt] = $img4;
    $cnt++;
    }
    if ($img5) {
    $imageArray[$cnt] = $img5;
    $cnt++;
    }
    if ($img6) {
    $imageArray[$cnt] = $img6;
    }


    $products[$id] = array(
    "university" => $university,
      "uniweb" => $uniweb,
      "year" => $year,
      "interstudent" => $interstudent,
      "cat"   => $type,
      "campsize" => $campsize,
      "campussize"=>$campussize,
      "malefemaleratio"=>$malefemaleratio, 
      "endvalue" => $endvalue,
      "foreignstudent" => $foreignstudent,
      "applicationfee" => $applicationfee,
      "minimumGrade" => $minimumGrade,
      "address" => $address,
      "phone" => $phone,
      "uniemail" => $uniemail,
      "city" => $city,
      "hostelmeal" => $hostelmeal,
      "avgtution" => $avgtution,
      "availability" => $availability,
      "description" => $description,
      "img-t" => "university/" . $img1,
      "thumbs" => $imageArray,
      "rank" => $rank,
      "date" => $date
    );
  }

  foreach ($products as $product_id => $product) {
      echo get_list_view_html($product_id,$product);
  } 
?>

<div class="container"></div>  
  
<section class="page_nav">
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</section>

<?php include ('footer.php') ?>