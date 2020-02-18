<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<style type="text/css">
  label{
    color:#868282;
  }
</style>
</head>
<body>


  <div class="container" style="max-width: 100%;background-color: #162953;padding-bottom: 50px;">   
    <div class="row">
        <div class="col-sm-12">
          <h1 style="font-size: ;color:#fff;margin-top:70px;margin-left: 30px;">Company</h1>
        </div>
    </div>
  </div>

  <div class="container" style="padding-top: 100px;width: 80%;">   
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-sm-8">
        <h4><?php echo $_GET['name'];?></h4>
        <br/>
        <p style="text-align: left;">
          Please enter your email address and confirm your plan selections. After your purchase is complete we'll email you a link to create a password and sign into Company.
        </p>
        <p style="text-align: left;">
          
          Existing customer? Enter the email you use to sign into Company and we'll automatically find your account.
          <br/>
          <br/>
          Please enter your email address
          <br/>
       

        </p>
           <input type="email" name="email" class="form-control" placeholder="Email Address">
       
          <?php if($_GET['name']=='Team'){
            ?>
             <h4 style="margin-top: 50px;"><?php echo $_GET['name'];?></h4>
             <br/>
              <h3 style="text-align: left;padding-left: 20px;color:#635d5d;">
              <?php echo $_GET['name'];?><b> ($<?php echo $_GET['price'];?>/year per user)</b>
              </h3>
        <p style="text-align: left;padding-left: 20px;font-size:13px; ">
          
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       

        </p>
        <h5 style="text-align:left;padding-left:20px;color:#635d5d;">How many users in your team?&nbsp;&nbsp;
          <input type="number" min='5'  value="5" style="width:8%;" /></h5>    

            <?php
          }
        ?>
          </div>
          <div class="col-sm-4" >
            <div class='innerDiv' style="padding:10px;border:1px solid #C0C0C0;background-color: #162953;">
         <table width="100%">
        
        <tr> 
         <td>
          <h5 style="color:white;float: left;"><?php echo $_GET['name'];?></h5>
        </td>
      <td>
          <h5 style="color:white;float: right;">All prices in USD</h5>
        </td>
        </tr>
        </table>
          </div>
          <div class='innerDiv1' style="border:1px solid grey;padding:10px;">
         <table width="100%">
        
        <tr> 
         <td>
          <h5 style="float: left;color:#C0C0C0;">ITEM</h5>
        </td>
      <td>
          <h5 style="float: right;color:#C0C0C0;">PRICE</h5>
        </td>
        </tr>
        <tr> 
         <td>
          <h5 style="float: left;color:black;"><?php echo $_GET['name'];?></h5>
        </td>
      <td>
          <h5 style="float: right;color:black;"><?php echo '$'.$_GET['price'];?></h5>
        </td>
        </tr>
        <?php if($_GET['name']=='Team'){
          ?>
        <tr>
        <td>
          <h5 style="float: left;color:#C0C0C0;">5 licenses for 1 year</h5>
        </td>
        </tr>
         
        <?php
      }
      ?>
      
        </table> 
        <br/>
        <br/>
        <table width="100%">      <tr > 
         <td>
          <h5 style="float: left;color:black;">Subtotal:</h5>
        </td>
      <td>
          <h5 style="float: right;color:black;"><?php echo '$'.$_GET['price'];?></h5>
        </td>
        </tr>
  </table>
  <hr/>
  <table width="100%">

        <tr> 
         <td>
          <h5 style="font-weight:bold;float: left;color:black;">TOTAL</h5>
        </td>
      <td>
          <h5 style="font-weight:bold;float: right;color:black;"><?php echo '$'.$_GET['price'];?></h5>
        </td>
        </tr>

      </table>

          </div>
     <br/>
     <h4>PROMO GIFT/CERTIFICATE</h4>
<table width="100%">

        <tr> 
         <td>
          <input type='text' class='form-control' placeholder="xxxx-xxx-xxxxx">
        </td>
      <td>
 <button type='button' class='btn btn-primary' ><a href='' style="color:white">Apply</a> </button>       </td>
        </tr>

      
      </table>
      <br/>
      <br/>
<table width="100%">

        <tr > 
        <td style="text-align: center;">
          <button type='button' class='btn btn-primary' ><a href="paymentProcedure.html" style="color:white">Proceed to payment</a> 
          </button>
        </td>
        </tr>

      
      </table>
      <br/>
      <br/>
     

         </div>
          </div>
        
        
        </div>
    
  
  <div class="container" style="max-width: 100%;background-color: #162953;height:100px;padding-bottom: 50px;">   
    
  </div>

</body>
</html>

