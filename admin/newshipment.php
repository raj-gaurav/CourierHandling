<?php 	include('..\head.php'); ?>

<?php

	if(isset($_SESSION['rid']))
	{
		include('..\dbcontact.php');
		$rid=$_SESSION['rid'];
		$qry="select * from `register` where `id`='$rid';";
		$run=mysqli_query($con,$qry);
		$fetch=mysqli_fetch_row($run);
		if($fetch<1)
		{
		}
		else
		{
			$user=$fetch[1];
			$logID=$fetch[2];
			$mob=$fetch[3];
			$city=$fetch[4];
			$aadhar=$fetch[8];
			$czone=$fetch[7];
			$szone=$fetch[5];
			$state=$fetch[6];
		}
	}
	else
	{
		header('location:..\index.php');
	}
	
?>

<!--header start-->


<div class="bg-danger " style="height:18%;" >
	<div class="row " style="overflow:hidden; width:100%; padding-top:20px;" >
		<div class="col">
			<span class="text-white" style="margin-left:50px; font-size:40px;">
				<?php include("..\logo.php");?>
			</span>
		</div>
		<div class="col">
			<label style="color:white;"><?php echo "<font style='color:yellow;font-size:20px;'>Welcome<br></font> <i class='fas fa-user'></i> $user &nbsp; <i class='far fa-id-card'></i> $logID &nbsp; <i class='fas fa-mobile'></i> $mob"; ?>
			
			<?php echo "<font style='color:yellow;font-size:20px;'></font> <i class='fas fa-thumbtack'></i> $city &nbsp; <i class='far fa-id-card'></i> $aadhar &nbsp;<br>";  ?>
			<strong>Szone :</strong><?php echo $szone?> -- &nbsp;<strong>State :</strong> <?php echo $state?> -- &nbsp;<strong>Czone :</strong><?php echo $czone?></label>
		</div>
		<div class="col" align="right" style="">
		<a href="logout.php" class="btn btn-danger " style="">Log out</a>
		
		</div>
		
		<br><br>
	</div>
	
</div>

<!--header end-->

<!--New Shipment start-->
<?php 
		date_default_timezone_set('Asia/Kolkata');
		
		
	?>
	
	<div class="jumbotron" style="height:75%; margin-top:10px;">
		<div class="container">
			<div class="" style="float:left; width:30%; height:100%;">
				<div class="container">
					<div class="text-danger" style="text-align:center;"><b><u>Sender's Detail</u></b></div>
					<div class="">
						<form action="#" method="post">
							<div class="form-group">
								<label class="text-danger"> <i class="fas fa-user"></i> Sender's Name : </label>
								<input type="text" name="sendname"  class="form-control" required="required"  /> 
							</div>
							<div class="form-group">
								<label class="text-danger"> <i class="fas fa-user"></i> Sender's Mob. No. : </label>
								<input type="number" name="sendmobno"  class="form-control" required="required"  /> 
							</div>
						</form>
					</div>
					<div class="text-primary" style="text-align:center;"><b><u>Item's Detail</u></b></div>
					<div class="">
						<form action="#" method="post">
							<div class="form-group">
								<label class="text-danger"> <i class="fas fa-user"></i> Item Name/Type : </label>
								<input type="text" name="itemname"  class="form-control" required="required"  /> 
							</div>
							<div class="form-group">
								<label class="text-danger"> <i class="fas fa-user"></i> Item UID : </label>
								<input type="text" name="itemID"  class="form-control" required="required"  /> 
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="" style="float:left; width:70%; border-left:solid 1px red; height:100%;">
				<div class="container">
					<div class="text-danger" style="text-align:center;"><b><u>Reciever's Detail</u></b></div>
					
					<form action="#" method="post">
						<div class="row">
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Reciever's Name : </label>
								<input type="text" name="recname"  class="form-control" required="required"  /> 
							</div>
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Reciever's Mob. No. : </label>
								<input type="text" name="recmobno"  class="form-control" required="required"  /> 
							</div>
						</div>
						<div class="row">
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Reciever's Address : </label>
								<input type="text" name="recadde"  class="form-control" required="required"  /> 
							</div>
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Destination city : </label>
								<input type="text" name="dcity"  class="form-control" required="required"  /> 
							</div>
						</div>
						<div class="row">
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Destination state zone: </label>
								<select name="dszone" class="form-control">
									<option>East</option>
									<option>West</option>
									<option>North</option>
									<option>South</option>
								</select>
							</div>
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Destination state : </label>
								<select name="dstate" class="form-control">
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
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Destination Country zone: </label>
								<select name="dczone" class="form-control">
									<option>East</option>
									<option>West</option>
									<option>North</option>
									<option>South</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Shipment ID : </label>
								<input type="text" name="rshipid" value="<?php  echo "SHP".date('YmdHi')."ID".rand(125,458);?>" class="form-control" readonly  /> 
							</div>
							<div class="form-group col" >
								<label class="text-danger"> <i class="fas fa-user"></i> Destination city : </label>
								<input type="text" name="dcity"  class="form-control" required="required"  /> 
							</div>
						</div>
						
					</form>
					
					
				</div>
			</div>
		</div>
	</div>

<!--New shipment end-->
	














