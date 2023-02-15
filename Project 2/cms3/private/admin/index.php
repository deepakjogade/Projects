<?php
include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if($user->loggedIn()) {
	header("location: dashboard.php");
}

$loginMessage = '';
if(!empty($_POST["login"]) && $_POST["email"]!=''&& $_POST["password"]!='') {	
	$user->email = $_POST["email"];
	$user->password = $_POST["password"];
	if($user->login()) {
		header("location: dashboard.php");
	} else {
		$loginMessage = 'Invalid login! Please try again.';
	}
}

include('inc/header.php');
?>
<title>CMS3-ADMIN LOGIN</title>
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2></h2>	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:red;color:white;">
				<div class="panel-title">Admin In</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<?php if ($loginMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $loginMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						
						<input type="text" class="form-control" id="email" name="email" placeholder="email" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						
						<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-danger">						  
						</div>						
					</div>	
					<!-- <div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						User: admin@dj.com<br>
						password:123				  
						</div>						
					</div>	 -->
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>