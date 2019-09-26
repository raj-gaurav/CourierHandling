

<nav class="navbar navbar-expand-sm navbar bg-danger">
	<div class="container">
		<a href="#" class="navbar-brand text-white" ><?php include('logo.php');?></a>
		
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menuitems">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="navbar-collapse collapse" id="menuitems">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#" class="nav-link text-white btn btn-danger" data-target="#modal_login" data-toggle="modal" > Login </a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--Login modal start-->
	<div class="modal" id="modal_login">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<h3 class="text-danger">Log in</h3>
					
					<button class="close" data-dismiss="modal">  &times; </button>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger alert-dismissible fade show" id="message" style="display:none;">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Warning!</strong> <label id="lmsg">Invalid LoginID or Password.</label>
					</div>
					<form action="#" method="post">
						<div class="form-group">
							
							<label> <i class="fas fa-user"></i> Login ID : </label>
							<input type="text" name="logID" class="form-control" required="required" /> 
						</div>
						<div class="form-group">
							<label> <i class="fas fa-unlock"></i> Password : </label>
							<input type="password" name="password" class="form-control" required="required" /> 
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Login" data-target="#modal_login" data-toggle="modal" class="btn btn-danger"/>
							
							 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!--Login modal end-->	



<?php

	if(isset($_POST['login']))
	{
		
		$loginID=$_POST['logID'];
		$pass=$_POST['password'];
		
		if($loginID=='rajgauravraj97' && $pass=='Gaurav@123')
		{
			$_SESSION['id']=$loginID;
			header('location:admin/admin.php');
		}
		else
		{
			include('dbcontact.php');
			$qry="select * from `register` where `LoginID`='$loginID' and `Password`='$pass';";
			$run=mysqli_query($con,$qry);
			$fetch=mysqli_fetch_row($run);
			
			if($fetch<1)
			{
				?>
					<script>
						document.getElementById('message').style.display='block';
					</script>
				<?php
			}
			else
			{
				$id=$fetch[0];
				$_SESSION['rid']=$id;
				header('location:admin/work.php');
			}
		}
		
		
	}

?>