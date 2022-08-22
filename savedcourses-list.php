<?php
  
  function get_list_view_html($product_id, $product) {
      $output = '
        <tr class="warning">
        <td>
          <div class="">
            <div class="col-lg-2">
              <img style="height: 80px; width: 100px;" src="' . $product["img-t"] . '">
            </div>
            
            <div class="col-lg-8">
              <h4><a href="product.php?id=' . $product_id . '">' . $product["university"] . '  ' . $product["year"] . '</a></h4>

              <h4>' .'Yearly Hostel & Meals Expense : '. $product["hostelmeal"] .' USD '. '</h4>

              <h4>' .'Average Tuition Fees : '. $product["avgtution"].' USD' . '</h4>

              <h4>' .'Application Fees : '. $product["applicationfee"].' USD' . '</h4>

              <p>2 <span>Intake</span> Only </p>
              <a href="#"> Remove Course</a>
            </div>

            <div class="col-lg-1">
              <p>Rank ' . $product["rank"] . '</p>
            </div>
          </div>
        </td>
      </tr>
      ';
      
        return $output;
    }





  $items = array();

    include ('connection.php');

    $userQuery = 'SELECT * from users where username = "' . $_SESSION['username'] . '"';
    $userIDresult = mysqli_query($db,$userQuery);
    while ($userIDrow = mysqli_fetch_array($userIDresult, MYSQLI_ASSOC)) {
      $userID = $userIDrow["id"];
    };


    $query = 'SELECT * from cart where user = ' . $userID;
    $result = mysqli_query($db,$query);

    while ($item_row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $cart_id = $item_row["cart_ID"];
      $user = $item_row["user"];
      $product_id = $item_row["product"];
      $quantity = $item_row["quantity"];
      $date = $item_row["dateAdded"];
     

      $productQuery = 'SELECT * from uni where id = ' . $product_id;
      $product_result = mysqli_query($db,$productQuery);
      $row = mysqli_fetch_array($product_result, MYSQLI_ASSOC);

      $id = $row['id'];
      $university = $row['university'];
      //$uniweb = $row['m_uniweb'];
      //$interstudent = $row['m_interstudent'];
      $year = $row['year'];
      //$type = $row['m_type'];
      //$campsize = $row['m_campsize'];
      $campussize = $row["campussize"];
      $malefemaleratio = $row["malefemaleratio"];
      //$endvalue = $row['m_endvalue'];
      //$foreignstudent = $row['m_foreignstudent'];
      $rank=$row['rank'];
      $applicationfee = $row['applicationfee'];
      //$minimumGrade = $row['m_minimumGrade'];
      //$address = $row['m_address'];
      //$phone = $row['m_phone'];
      $hostelmeal = $row['hostelmeal'];
      $avgtution = $row['avgtution'];
      //$description = $row['m_description'];
      $img1 = $row["image1"];
      $img2 = $row["image2"];
      $img3 = $row["image3"];
      $img4 = $row["image4"];
      $img5 = $row["image5"];
      $img6 = $row["image6"];



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


       $items[$id] = array(
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

    $totalAmount = 0;
  foreach ($items as $product_id => $product) {
     $totalAmount = $totalAmount + $product["price"];
  }
        
?>












<!-- //////////////Total Items///////////////  -->