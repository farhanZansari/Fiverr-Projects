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
<script type="text/javascript">
  $( document ).ready(function() {
   $('#payment').hide();
$( "#proceed_to_payment" ).click(function() {
  $( "#payment" ).show();
});
});

</script>
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
<div class="container" style="text-align: center;margin-top: 20px;width: 50%;">
  <div class="row">
    <div class="col-sm-12">
<h4>THANKS FOR YOUR ORDER</h4>
<br/>
<h4 style="text-align: left;">We receieved and have processed your Company order!</h4>
<h4 style="text-align: left;">Order Details:</h4>
    </div>
  </div>
</div>
  <div class="container" style="padding-top: 10px;width: 50%;">   
    <div class="row" >
         <div class="col-sm-12" >
           
          <div class='innerDiv1' style="padding:10px;">
         <table width="60%">
        
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
        <table width="60%">      <tr > 
         <td>
          <h5 style="float: left;color:black;">Subtotal:</h5>
        </td>
      <td>
          <h5 style="float: right;color:black;"><?php echo '$'.$_GET['price'];?></h5>
        </td>
        </tr>
  </table>
  <hr/>
  <table width="60%">

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
      

         </div>
          </div>
        
        
        </div>
    <div class="container" style="text-align: center;width: 50%; margin-bottom: 100px;">
  <div class="row">
    <div class="col-sm-12">

<h6 style="text-align: left;color:grey;">Thank you for your support and your business. if you have any questions<br/>
or suggestions, contact us at team@Company.com

<br/>
Please check your email...</h6>

    </div>
  </div>
</div>
  
  <div class="container" style="max-width: 100%;background-color: #162953;height:100px;padding-bottom: 50px;">   
    
  </div>

</body>
</html>

