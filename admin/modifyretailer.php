<?php 	include('..\head.php'); ?>

<?php
	if(isset($_SESSION['id']))
	{
		include('..\dbcontact.php');
		$rid=$_REQUEST['x'];
		$qry="select * from `register` where `LoginID`='$rid';";
		$run=mysqli_query($con,$qry);
		$fetch=mysqli_fetch_row($run);
		if($fetch<1)
		{
			
		}
		else
		{
			
		}
		
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


<!--Register User start-->

	<?php 
		date_default_timezone_set('Asia/Kolkata');
		
		
	?>
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
					<label class="text-danger"> <i class="fas fa-user"></i> Retailer's Name : </label>
					<input type="text" name="rname"  value="<?php echo $fetch[1]; ?>" class="form-control" required="required"  /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-mobile-alt"></i> Mobile no.: </label>
					<input type="number" name="rmobno" value="<?php echo $fetch[3]; ?>" class="form-control" required="required" /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> City: </label>
					<input type="text" name="rcity" value="<?php echo $fetch[4]; ?>"class="form-control" required="required" /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> State zone: </label>
					<!--<input type="text" name="rszone" class="form-control" required="required" /> -->
					<select name="rszone" class="form-control">
						<option <?php if ($fetch[5] == 'East') echo ' selected="selected"'; ?>>East</option>
						<option <?php if ($fetch[5] == 'West') echo ' selected="selected"'; ?>>West</option>
						<option <?php if ($fetch[5] == 'North') echo ' selected="selected"'; ?>>North</option>
						<option <?php if ($fetch[5] == 'South') echo ' selected="selected"'; ?>>South</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> State: </label>
					<select name="rstate" class="form-control">
						<option <?php if ($fetch[6] == 'Andhra Pradesh') echo ' selected="selected"'; ?>>Andhra Pradesh</option>
						<option <?php if ($fetch[6] == 'Arunachal Pradesh') echo ' selected="selected"'; ?>>>Arunachal Pradesh </option>
						<option <?php if ($fetch[6] == 'Assam') echo ' selected="selected"'; ?>>>Assam </option>
						<option <?php if ($fetch[6] == 'Bihar') echo ' selected="selected"'; ?>>>Bihar</option>
						<option <?php if ($fetch[6] == 'Chhattisgarh') echo ' selected="selected"'; ?>>>Chhattisgarh</option>
						<option <?php if ($fetch[6] == 'Goa') echo ' selected="selected"'; ?>>>Goa </option>
						<option <?php if ($fetch[6] == 'Gujarat') echo ' selected="selected"'; ?>>>Gujarat</option>
						<option <?php if ($fetch[6] == 'Haryana') echo ' selected="selected"'; ?>>>Haryana</option>
						<option <?php if ($fetch[6] == 'Himachal Pradesh') echo ' selected="selected"'; ?>>>Himachal Pradesh</option>
						<option <?php if ($fetch[6] == 'Jammu and Kashmir') echo ' selected="selected"'; ?>>>Jammu and Kashmir</option>
						<option <?php if ($fetch[6] == 'Jharkhand') echo ' selected="selected"'; ?>>>Jharkhand</option>
						<option <?php if ($fetch[6] == 'Karnataka') echo ' selected="selected"'; ?>>>Karnataka</option>
						<option <?php if ($fetch[6] == 'Kerala') echo ' selected="selected"'; ?>>>Kerala </option>
						<option <?php if ($fetch[6] == 'Madhya Pradesh') echo ' selected="selected"'; ?>>>Madhya Pradesh</option>
						<option <?php if ($fetch[6] == 'Maharashtra') echo ' selected="selected"'; ?>>>Maharashtra</option>
						<option <?php if ($fetch[6] == 'Manipur') echo ' selected="selected"'; ?>>>Manipur </option>
						<option <?php if ($fetch[6] == 'Meghalaya') echo ' selected="selected"'; ?>>>Meghalaya</option>
						<option <?php if ($fetch[6] == 'Mizoram') echo ' selected="selected"'; ?>>>Mizoram</option>
						<option <?php if ($fetch[6] == 'Nagaland') echo ' selected="selected"'; ?>>>Nagaland</option>
						<option <?php if ($fetch[6] == 'Odisha') echo ' selected="selected"'; ?>>>Odisha</option>
						<option <?php if ($fetch[6] == 'Punjab') echo ' selected="selected"'; ?>>>Punjab</option>
						<option <?php if ($fetch[6] == 'Rajasthan') echo ' selected="selected"'; ?>>>Rajasthan</option>
						<option <?php if ($fetch[6] == 'Sikkim') echo ' selected="selected"'; ?>>>Sikkim </option>
						<option <?php if ($fetch[6] == 'Tamil Nadu') echo ' selected="selected"'; ?>>>Tamil Nadu</option>
						<option <?php if ($fetch[6] == 'Telangana') echo ' selected="selected"'; ?>>>Telangana</option>
						<option <?php if ($fetch[6] == 'Tripura') echo ' selected="selected"'; ?>>>Tripura</option>
						<option <?php if ($fetch[6] == 'Uttar Pradesh') echo ' selected="selected"'; ?>>>Uttar Pradesh</option>
						<option <?php if ($fetch[6] == 'Uttarakhand') echo ' selected="selected"'; ?>>>Uttarakhand</option>
						<option <?php if ($fetch[6] == 'West Bengal') echo ' selected="selected"'; ?>>West Bengal</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> Country Zone: </label>
					<select name="rczone" class="form-control">
						<option <?php if ($fetch[7] == 'East') echo ' selected="selected"'; ?>>East</option>
						<option <?php if ($fetch[7] == 'West') echo ' selected="selected"'; ?>>West</option>
						<option <?php if ($fetch[7] == 'North') echo ' selected="selected"'; ?>>North</option>
						<option <?php if ($fetch[7] == 'South') echo ' selected="selected"'; ?>>South</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="far fa-id-card"></i> AADHAR no.: </label>
					<input type="text" name="raadhar" value="<?php echo $fetch[8]; ?>" class="form-control" required="required" /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-unlock"></i> Password: </label>
					<input type="text" name="rpassword" value="<?php echo $fetch[9]; ?>" class="form-control" required="required" /> 
				</div>
				<div class="form-group">
					<input type="submit" name="register" value="Update" class="btn btn-warning"/>
				</div>
			</form>
		</div>
	</div>

<!--Register User end-->



<?php
	
	
		
	if(isset($_POST['register']))
	{
		$rname=$_POST['rname'];
		$loginID=$fetch[2];
		$mobno=$_POST['rmobno'];
		$city=$_POST['rcity'];
		$aadhar=$_POST['raadhar'];
		$pass=$_POST['rpassword'];
		$statezone=$_POST['rszone'];
		$countryzone=$_POST['rczone'];
		$state=$_POST['rstate'];
		
		if(!preg_match("/^[A-Za-z]*$/",$rname))
		{
			$msg="Name should  contain characters  only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else if(!preg_match("/^[0-9]*$/",$mobno))
		{
			$msg="Other than +91 => Mobile no. should  contain digits only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else if(strlen($mobno)!=10)
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
		else if(!preg_match("/^[0-9 ]*$/",$aadhar))
		{
			$msg="Aadhar no. should contain digits only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else if(strlen($aadhar)!=12)
		{
			$msg="Aadhar no. should have 12 digits only.";
			?>
				<script>
					document.getElementById('message').style.display='block';
					document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
				</script>
			<?php
		}
		else if(strlen($pass)<=8 || strlen($pass)>=16)
		{
			$msg="Password should be between 8 to 16 digits.";
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
			$qry="UPDATE `register` SET `Name`='$rname',`LoginID`='$loginID',`Mobile`='$mobno',`City`='$city',`Statezone`='$statezone',`State`='$state',`Countryzone`='$countryzone',`Aadhar`='$aadhar',`Password`='$pass' WHERE `LoginID`='$loginID';";
			$run=mysqli_query($con,$qry);
			if($run)
			{
				$msg="$loginID is successfully updated.";
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
