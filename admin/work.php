<?php include('..\head.php')?>

<?php
	
	if(!isset($_SESSION['rid']))
	{
		header('location:..\index.php');
		
	}
	else
	{
		include('..\dbcontact.php');
		$rid=$_SESSION['rid'];
		$qry="select * from `register` where `id`=$rid;";
		$run=mysqli_query($con,$qry);
		$fetch=mysqli_fetch_row($run);
		if($fetch>=1)
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

<div class="jumbotron" style="height:75%; margin-top:15px;">
	<div class="container">
	
		
		
		<div class="left" style="float:left; width:50%; height:100%; text-align:center; ">
			<div class="container">
				<label style="font-size:80px;"><?php include('..\logo.php');?></label><br>
				<a href="newshipment.php" class="btn btn-primary" style="margin-right:25px;">Ship a product</a>
				<a href="#" class="btn btn-warning" style="margin-right:25px;">Update shipment</a>
				
			</div>
		</div>
		<div class="right " style="float:left; width:50%; border-left:solid 1px red;height:100%; ">
			<div class="container">
				<form action="#" method="post" style="margin-left:20%;margin-top:10%;">
					<div class="form-group">
						<label class="text-danger">  TrackingID : </label>
						<input type="text" name="trackingid" style="width:55%"class="form-control" required="required" /> 
					</div>
				
					<div class="form-group">
						<input type="submit" name="track" value="Track" class="btn btn-danger"/>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>