<?php
  include ('all_products.php');
  $order_id = $_GET["id"];

   $title = "Consultation Registration Complete"; 
   include ('header.php') ;
   $btn_action = "payment.php";
   $btn_name = "Proceed to Checkout";


  ?>
 
<div  class="container">
  <div class="col-lg-8 " style="margin: 50px;">
    <table class="table table-bordered">
       <tr class="warning">
          <td><h2>Thank you for Registering</h2></td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Dear Student</p>
              <p>Your registrations is complete. We will contact with you vert soon.<br>We will also send you details about your desired univeristy. If you think you have made any mistake please mail at sakibapon7@gmail.com or open <a href="javascript:void(Tawk_API.toggle())">the chat box</a> and message us.</p>
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col col-xs-12">
              <h4>Please note down your registration number for future investigations</h4>
              <h3>Registration ID : <?php echo $order_id ?></h3>
            </div>
          </td>
        </tr>
    </table>
  </div>

</div>

<?php include ('footer.php') ?>

