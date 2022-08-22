<?php
	
	function get_list_view_html($product_id, $product) {
	    $output = '
	    	<tr class="warning ">
				<td>
					<div class="col-lg-12">
						<div class="col-lg-2">
							<img style="max-height: 96px; max-width: 100px;" src="' . $product["img-t"] . '">
						</div>

						<div class="col-lg-8"> 
			      <a href="http://localhost/study/product.php?id=' . $product["id"] . '">
              <h4>' . $product["university"] .  '</h4>
              
            </a>

              <p>Consultation Requested On: ' . $product["date"] . '</p>
              <p>Consultant : ' . $product["orderStatus"] . '</p>
              <p>Registration ID : ' . $product["id"] . '</p>


						</div>

						<div class="col-lg-1">
							<p>Rank ' . $product["rank"] . '</p>

						</div>

					</div>
				</td>
			</tr>

              <div >
              <!-- BEGIN PHP Live! Live Chat HTML Code [v3] -->
              <span style="color: #0000FF; text-decoration: underline; line-height: 0px !important; cursor: pointer;" id="phplive_btn_1620818977"></span>
              <script data-cfasync="false" type="text/javascript">

              (function() {
              var phplive_e_1620818977 = document.createElement("script") ;
              phplive_e_1620818977.type = "text/javascript" ;
              phplive_e_1620818977.async = true ;
              phplive_e_1620818977.src = "https://t2.phplivesupport.com/sakibapon/js/phplive_v2.js.php?v=0%7C1620818977%7C2%7C&" ;
              document.getElementById("phplive_btn_1620818977").appendChild( phplive_e_1620818977 ) ;
              if ( [].filter ) { document.getElementById("phplive_btn_1620818977").addEventListener( "click", function(){ phplive_launch_chat_0() } ) ; } else { document.getElementById("phplive_btn_1620818977").attachEvent( "onclick", function(){ phplive_launch_chat_0() } ) ; }
              })() ;

              </script>
              <!-- END PHP Live! Live Chat HTML Code [v3] -->
             </div>
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

    $userID = (int) $userID;


    $query = 'SELECT orderItems.productID, orders.orderStatus, orderItems.somoy from orderItems, orders 
    where orders.id = orderItems.orderid and orderItems.userID = ' . $userID;
    $result = mysqli_query($db,$query);

    $orderCnt = 0;
    while ($item_row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $product_id = $item_row["productID"];
      $timestamp = $item_row["somoy"];
      $orderStatus = $item_row["orderStatus"];
      
      $productQuery = 'SELECT * from uni where id = ' . $product_id;
      $product_result = mysqli_query($db,$productQuery);
      $row = mysqli_fetch_array($product_result, MYSQLI_ASSOC);

      $id = $row['id'];
      $university = $row['university'];
      //$uniweb = $row['m_uniweb'];
      //$interstudent = $row['m_interstudent'];
      //$year = $row['m_year'];
      //$type = $row['m_type'];
      //$campsize = $row['m_campsize'];
      $campussize = $row["campussize"];
      $malefemaleratio = $row["malefemaleratio"];
      //$endvalue = $row['m_endvalue'];
      //$foreignstudent = $row['m_foreignstudent'];
      $rank=$row['rank'];
      //$applicationfee = $row['m_applicationfee'];
      //$minimumGrade = $row['m_minimumGrade'];
      //$address = $row['m_address'];
      //$phone = $row['m_phone'];
      //$hostelmeal = $row['m_hostelmeal'];
      //$avgtution = $row['m_avgtution'];
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


       $items[$orderCnt] = array(
         "university" => $university,
         /*
        "uniweb" => $uniweb,
        "year" => $year,
        "interstudent" => $interstudent,
        "cat"   => $type,
        "campsize" => $campsize,
        */
        "campussize"=>$campussize,
        "malefemaleratio"=>$malefemaleratio, 
        /*
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
        */
        "img-t" => "university/" . $img1,
        "thumbs" => $imageArray,
        "rank" => $rank,
         // "date" => $date,
        //"orderID" => $order_id,
        "date" => $timestamp,
        "orderStatus" => $orderStatus,
        //"person" => $person,
        //"address" => $address,
        "id" => $product_id

      );
       $orderCnt = $orderCnt + 1;
    }
		 		
?>












<!-- //////////////Total Items///////////////  -->