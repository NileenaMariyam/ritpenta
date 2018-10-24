<?php

include_once('../global.php')?>
<?php include_once('../root/functions.php')?>
<?php
auth_login();

include_once('includes/header.php'); ?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   





    <base href="<?php echo DIRECTORY ; ?>">
  <title><?php  echo DISPLAY_NAME; ?></title>

  <link rel="icon" href="assets/image/favicon/favicon.ico">

 
  <link rel="stylesheet" href="assets/css/style.css">  



<div class="content-wrapper">


  <div class="row">
  <div class="col-md-8 col-lg-7 col-sm-12 ">




<form>
  <div class="page-header" >
  <div class="p-3 mb-2 bg-primary text-white">
  <h1>Blood Donation</h1>
</div>
</div>
 <div class="form-group" >
    <input type="text" class="form-control" id="admno" placeholder="Enter Admission Number"> 
 </div>

  <div class="form-group" >
  <input class="form-control" type="text" id="name"  readonly>
  </div>

  <div class="form-group" >
  <input class="form-control" type="text" id="dept"  readonly>
  </div>

  <div class="form-group" >
  <input class="form-control" type="text" id="branch"  readonly>
  </div>

  <div class="form-group" >
  <input class="form-control" type="text" id="sem"  readonly>
  </div>

  <div class="form-group">
  <select class="form-control" id="selbg">
  <option>Blood Group</option>
  <option>A+</option>
  <option>A-</option>
  <option>B+</option>
  <option>B-</option>
  <option>O+</option>
  <option>O-</option>
  <option>AB+</option>
  <option>AB-</option>
</select>
</div>

  <div class="form-group" >
  <input class="form-control" type="text" id="date"  readonly>
  </div>
  <div class="form-group" >
  <textarea class="form-control" type="text" id="venue" rows="5" placeholder="Venue"  readonly></textarea> 
  </div>
  <div class="container">
    <button type="button" class="btn btn-lg btn-outline-primary btn-block">Submit</button>
</div>

</form>

  </body>
</html>