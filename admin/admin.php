<?php 	include('..\head.php'); ?>


<?php

	if(!isset($_SESSION['id']))
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
			<div name="hubs" >
				<h5>Hubs</h5>
				<a href="addhub.php" class="btn btn-primary" style="margin-right:20px;">Add New Hub</a>
				<a href="#" class="btn btn-warning" style="margin-right:20px;">Update Hub Details</a>
				<a href="#" class="btn btn-danger" style="margin-right:20px;">Delete Hub</a>
			</div><br><br>
			<div name="retailer" >
				<h5>Retailers</h5>
				<a href="registeruser.php" class="btn btn-primary" style="margin-right:20px;">Add New Retailer</a>
				<a href="#" class="btn btn-warning" data-target="#modal_login" data-toggle="modal" style="margin-right:20px;">Update Retailer Details</a>
				<a href="#" class="btn btn-danger" style="margin-right:20px;">Delete Retailer</a>
			</div>
		</div>
		
		
	</div>

<!--Body end-->


<!-- modal start-->
	<div class="modal" id="modal_login">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<h3 class="text-warning">Update</h3>
					
					<button class="close" data-dismiss="modal">  &times; </button>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger alert-dismissible fade show" id="message" style="display:none;">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Warning!</strong> <label id="lmsg">Invalid Retailer ID </label>
					</div>
					<form action="#" method="post">
						<div class="form-group">
							
							<label> <i class="fas fa-user"></i> Retailer ID : </label>
							<input type="text" name="retailID" class="form-control" required="required" /> 
						</div>
						
						<div class="form-group">
							<input type="submit" name="search" value="Search"  class="btn btn-warning"/>
							
							 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- modal end-->

<?php

	if(isset($_POST['search']))
	{
		$rid=$_POST['retailID'];
		header('location:modifyretailer.php?x='.$rid);
	}

?>	