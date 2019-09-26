<?php 	include('..\head.php'); ?>

<?php

	if(isset($_SESSION['id']))
	{
		
	}
	else
	{
		header('location:..\index.php');
	}

?>


<!--Header start-->

	<div class="bg-danger text-white">
		<div class="row" style="padding-top:10px;padding-bottom:10px; margin-left:5%;">
			<div class="col" style="">
				<font style="font-size:25px;"><?php include('..\logo.php'); ?></font>
			</div>
			<div class="col">
				<a href="logout.php" style="margin-left:75%;" class="btn btn-danger">Log out</a>
			</div>
		</div>
	</div>

<!--Header end-->


<!--Body start-->

	<div class="jumbotron">
		<div class="container">
				<div class="alert alert-warning alert-dismissible fade show" id="message" style="display:none;">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Warning!</strong> <label id="lmsg"></label>
				</div>
				<div class="alert alert-success alert-dismissible fade show" id="message_success" style="display:none;">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Success!</strong> <label id="smsg"></label>
				</div>
				<div class="alert alert-danger alert-dismissible fade show" id="message_error" style="display:none;">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> <label id="emsg"></label>
				</div>
				<form action="#" method="post">
					<div class="form-group">
						<label class="text-danger"> <i class="fas fa-user"></i> Hub's Head Name : </label>
						<input type="text" name="hname"  class="form-control" required="required"  /> 
					</div>
					<div class="form-group">
					<label class="text-danger"> <i class="fas fa-mobile-alt"></i> Mobile no.: </label>
					<input type="number" name="hmobno" class="form-control" required="required" /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> City: </label>
					<input type="text" name="hcity" class="form-control" required="required" /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> State zone: </label>
					<!--<input type="text" name="rszone" class="form-control" required="required" /> -->
					<select name="hszone" class="form-control">
						<option>East</option>
						<option>West</option>
						<option>North</option>
						<option>South</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> State: </label>
					<select name="hstate" class="form-control">
						<option>Andhra Pradesh</option>
						<option>Arunachal Pradesh </option>
						<option>Assam </option>
						<option>Bihar</option>
						<option>Chhattisgarh</option>
						<option>Goa </option>
						<option>Gujarat</option>
						<option>Haryana</option>
						<option>Himachal Pradesh</option>
						<option>Jammu and Kashmir</option>
						<option>Jharkhand</option>
						<option>Karnataka</option>
						<option>Kerala </option>
						<option>Madhya Pradesh</option>
						<option>Maharashtra</option>
						<option>Manipur </option>
						<option>Meghalaya</option>
						<option>Mizoram</option>
						<option>Nagaland</option>
						<option>Odisha</option>
						<option>Punjab</option>
						<option>Rajasthan</option>
						<option>Sikkim </option>
						<option>Tamil Nadu</option>
						<option>Telangana</option>
						<option>Tripura</option>
						<option>Uttar Pradesh</option>
						<option>Uttarakhand</option>
						<option>West Bengal</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> Country Zone: </label>
					<select name="hczone" class="form-control">
						<option>East</option>
						<option>West</option>
						<option>North</option>
						<option>South</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="addhub" value="Add Hub" class="btn btn-primary"/>
				</div>
			</form>
		</div>
	</div>
	
<!--Body end-->


<?php

	if(isset($_POST['addhub']))
	{
		$headname=$_POST['hname'];
		$hubID="HUB".date('YmdHi');
		$mob=$_POST['hmobno'];
		$city=$_POST['hcity'];
		$state=$_POST['hstate'];
		$szone=$_POST['hszone'];
		$czone=$_POST['hczone'];
		
		
		if(!preg_match("/^[A-Za-z ]*$/",$headname))
		{
			$msg="Name should  contain characters  only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else if(!preg_match("/^[0-9]*$/",$mob))
		{
			$msg="Other than +91 => Mobile no. should  contain digits only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else if(strlen($mob)!=10)
		{
			$msg="Mobile no. should  contain 10 digits only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else if(!preg_match("/^[A-za-z]*$/",$city))
		{
			$msg="City should have characters only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else
		{
			include('..\dbcontact.php');
			$qry="INSERT INTO `hubs`( `Hubheadname`, `HubID`, `MobileNo`, `City`, `Statezone`, `State`, `Countryzone`) VALUES ('$headname','$hubID','$mob','$city','$szone','$state','$czone');";
			$run=mysqli_query($con,$qry);
			if($run)
			{
				$msg="$hubID is successfully registered.";
				?>
					<script>
						document.getElementById('message').style.display='none';
						document.getElementById('message_success').style.display='block';
						document.getElementById('smsg').innerHTML="<?php echo $msg;?>";
					</script>
				<?php
			}
			else
			{
				$msg="Something went wrong.";
				?>
					<script>
						document.getElementById('message').style.display='none';
						document.getElementById('message_success').style.display='none';
						document.getElementById('message_error').style.display='block';
						document.getElementById('emsg').innerHTML="<?php echo $msg;?>";
					</script>
				<?php
			}
		}
		
	}

?>




