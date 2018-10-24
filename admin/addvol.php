












<?php

include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>
<?php  

auth_login();

include_once('includes/header.php'); ?>












<!doctype html>
<html lang="en">
  <head>


  	<base href="<?php echo DIRECTORY ; ?>">
  <title><?php  echo DISPLAY_NAME; ?></title>

  <link rel="icon" href="assets/image/favicon/favicon.ico">

 
  <link rel="stylesheet" href="assets/css/style.css">  

  
</head>

<body>






<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 col-sm-12">

 

					<div class="card">
						<div class="card-body">
							<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
							<form class="form-horizontal bordered-row" id="add-volunteer"  action="" method="post" data-parsley-validate>
								

 

								<div class="form-group">
									<label for="vol_id" class="bmd-label-floating">Volunteer Id</label>
									<div class="">
										<input id="vol_id" type="text" class="form-control"  placeholdera="Volunteer Id..." name="vol_id" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>


								<div class="form-group">
									<label class="bmd-label-floating">Admission No</label>
									<div class="">
										<input type="text" class="form-control"  placeholdera="Admission No" name="admnno" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>

								<div class="form-group">
									<label class="bmd-label-floating">Blood Group</label>
									<div class="">
										<select name="vol_bg" class="form-control" data-parsley-required="true">

											<option>Select</option>
											<option>O+ve</option>
											<option>O-ve</option>
											<option>B+ve</option>
											<option>B-ve</option>
											<option>A+ve</option>
											<option>A-ve</option>
											<option>AB+ve</option>
											<option>AB-ve</option>


										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="bmd-label-floating">Phone No</label>
									<div class="">
										<input type="text" class="form-control"  placeholdera="Phone No" name="vol_mob" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>

								<div class="form-group">
									<label class="bmd-label-floating">Alternate Phone No</label>
									<div class="">
										<input type="text" class="form-control"  placeholdera="Alternate Phone No" name="vol_alt_mob" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>

								<div class="form-group">
									<label class="bmd-label-floating">Email Id</label>
									<div class="">
										<input type="email" class="form-control"  placeholdera="Email Id" name="vol_emailid" data-parsley-required="true" data-parsley-type="">
									</div>
								</div>	

								<div class="content-box text-center">
									<button type="submit" name="submit" value="" class="btn btn-lg btn-outline-primary">Add</button>
								</div>
							</form>		 
						</div> 
					</div>

				</div>
			</div>
		</div>
	</section>
</body>
</html>





















































