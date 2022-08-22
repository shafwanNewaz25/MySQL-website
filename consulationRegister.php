<?php
   $title = "Book Mechanics"; 
   include ('header.php') ;
?>
<style type="text/css">
  .adminlay{
  background-color: white;
  color: #01bacf;
  }
  .adminlay:hover{
    color: black;
  }
  .adminlays{
    background-color: #01bacf;
    color: black;
  }
  .adminlays:hover{
    color: black;
}
</style>
<div style="margin: 50px;"></div>

<?php
  include ('all_products.php');
  $product_id = $_GET["id"];
  $product = $products[$product_id];
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
  

    
   
   $btn_action = "payment.php";
   $btn_name = "Proceed to Checkout";
   include ('connection.php');
   $order_id = mysqli_insert_id($db);

   if (isset($_POST['place_order'])) {

    // connect to database
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $telephone = $_POST['telephone'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $postCode = $_POST['postCode'];
    $item = $product_id;
    $total = $product["price"];

    $sql = "INSERT INTO orders (user, firstName, lastName, address, address2, telephone, phone, state, city, postCode, total, orderStatus) 
    VALUES ('$userID', '$firstName', '$lastName','$address','$address2','$telephone','$phone','$state','$city','$postCode', '$total','Processing')";

    $Query = mysqli_query($db, $sql); // store the submitted data to the database..

    $newOrderID = mysqli_insert_id($db);
    
    
    $sql = "INSERT INTO orderItems (userID, productID, orderID) 
    VALUES ('$userID', '$product_id', '$newOrderID')";

    $Query = mysqli_query($db, $sql);
    

    if ($Query) {
      header('Location: http://' . $_SERVER['HTTP_HOST'] . '/Study/consulationRegisterComplete.php?id=' . $newOrderID);
    }
    //echo "New record has id: " . mysqli_insert_id($db);
    echo' <h1 style="text-align: center;">Consultation Regeistration Complete. <br>Your Request ID : ' . mysqli_insert_id($db) .'</h1>' ;
  }



  ?>
 
<div class="container" >

<form method="post" enctype="multipart/form-data">
  <div class="col-lg-8">
    <table class="table table-bordered">
       <tr class="adminlay">

                <td>
                  <h2>Please Provide Your Information</h2>
                </td>
       </tr>



       <tr class="adminlay">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>First Name:</p>
              <input type="text" name="first-name" class="form-control">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                      <p>Last Name:</p>
              <input type="text" name="last-name" class="form-control">
            </div>
          </td>
        </tr>

        <tr class="adminlays">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>Telephone:</p>
              <input type="text" name="telephone" class="form-control">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
               <p>Cell Phone:</p>
              <input type="text" name="phone" class="form-control">
            </div>
          </td>
        </tr>

        <tr class="adminlay">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Address*:</p>
              <input type="text" name="address" class="col-lg-12 col-md-12 col-xs-12 col-sm-12 form-control" >
            </div>
          </td>
        </tr>

        <tr class="adminlays">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Address 2:</p>
              <input type="text" name="address2" class="col-lg-12 col-md-12 col-xs-12 col-sm-12 form-control" >
            </div>
          </td>
        </tr>

        <tr class="adminlay">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>State:</p>
              <select name="state" class="form-control">
                <option value="Please Select">Please Select</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Khulna">Khulna</option>
                <option value="Barishal">Barishal</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangpur">Rangpur</option>
            </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span>City: </span>
              <input type="text" name="city" class="form-control">
              <br>
              <span>Post Code: </span>
              <input type="text" name="postCode" class="form-control">
            </div>
          </td>
        </tr>
    </table>
       <button type="submit"  name="place_order" class="btn btn-primary center-block"><?php echo "Confirm"?></button>
  </div>







<?php
   include ('footer.php') ;
?>