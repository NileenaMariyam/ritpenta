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

							<form class="form-horizontal bordered-row" id="addevent"  action="" method="post" data-parsley-validate>
							

							<div class="page-header">
							<h1 class="h3 mb-3 bg-primary text-white">Add Event</h1>
							</div>


						

								

 

								<div class="form-group">
									<label for="vol_id" class="bmd-label-floating">Event Id</label>
									<div class="">
										<input id="vol_id" type="text" class="form-control"  placeholdera="Event Id..." name="cp_id" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>


								<div class="form-group">
									<label class="bmd-label-floating">Event Name</label>
									<div class="">
										<input type="text" class="form-control"  placeholdera="CampName" name="campname" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>

								<!--


								<div class="form-group">
									<label class="bmd-label-floating">Date</label>
									<div class="">
										<input type="date" class="form-control"  placeholdera="Date" name="event_date" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div> -->



					
					            <div class="form-group">
					            	<label class="bmd-label-floating">Date</label>
					                <div class='input-group date' id='datetimepicker3'  placeholdera="Date" name="event_date" data-parsley-required="true" data-parsley-type="number">
					                    <input type='text' class="form-control" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-time"></span>
					                    </span>
					                </div>
					            </div>
						        <script type="text/javascript">
					            $(function () {
					                $('#datetimepicker3').datetimepicker({
					                    format: 'LT'
					                });
					            });
					        </script>





							<div class="form-group">
									<label class="bmd-label-floating">Total Hours</label>
									<div class="">
										<input type="text" class="form-control"  placeholdera="Hours" name="event_hrs" data-parsley-required="true" data-parsley-type="number">
									</div>
							</div>





								<div class="form-group" >
									<label class="bmd-label-floating">Event Details</label>
                                          <textarea class="form-control" type="text" id="eventdetails" rows="5" placeholdera="Event Details"  data-parsley-required="true" data-parsley-type=""></textarea> 
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
        
















<!--
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
    </div>
</div>-->