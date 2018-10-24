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

<section>

<div class="content-wrapper">


  <div class="row">
   <div class="col-md-8 col-lg-7 col-sm-12 ">
    <div class="card">

							<form class="form-horizontal bordered-row" id="addcamp"  action="" method="post" data-parsley-validate>
							

							<div class="page-header">
							<h1 class="h3 mb-3 bg-primary text-white">Add Camp</h1>
							</div>


						

								

 

								<div class="form-group">
									<label for="vol_id" class="bmd-label-floating">Camp Id</label>
									<div class="">
										<input id="vol_id" type="text" class="form-control"  placeholdera="Camp Id..." name="cp_id" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>


								<div class="form-group">
									<label class="bmd-label-floating">Camp Name</label>
									<div class="">
										<input type="text" class="form-control"  placeholdera="CampName" name="campname" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>


								<div class="form-group">
									<label class="bmd-label-floating">Date from</label>
									<div class="">
										<input type="date" class="form-control"  placeholdera="Datefrom" name="datefrom" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>


								<div class="form-group">
									<label class="bmd-label-floating">Date to</label>
									<div class="">
										<input type="date" class="form-control"  placeholdera="Dateto" name="dateto" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>





								<div class="form-group" >
									<label class="bmd-label-floating">Camp Details</label>
                                          <textarea class="form-control" type="text" id="campdetails" rows="5" placeholdera="Camp Details"  data-parsley-required="true" data-parsley-type=""></textarea> 
                                </div>






                                

								





							    
								<div class="form-group">	                                
								<label class="bmd-label-floating">Select Files</label>
							    <form method="POST" action="#" enctype="multipart/form-data">
										<!-- COMPONENT START -->
										
											<div class="input-group input-file" name="Fichier1">
									    		<input type="text" class="form-control" placeholder="" />			
									            <span class="input-group-btn">
									        		<button class="btn btn-default btn-choose" type="button">Choose</button>
									    		</span>


											</div>
										</div>
										<!-- 
										<div class="form-group">
											
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
									    -->
									</form>
									
									



										<div class="content-box text-center">
							    <button type="submit" name="submit" class="btn btn-lg btn-outline-primary ">Submit</button>
							         </div>

</form>
</div>
</div>
</div>
</div>
</section>
										
									
	            							</body>	
	            					</html>		
        
    