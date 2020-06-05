<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styleee.css">
<lik rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style type="text/css">
	.ts{
		float: left;
		background-position: center;
	}
	.login-box{
		max-width: 700px;
		float: left;
		margin: 150px auto;
	}
	.login-left{
		background: rgba(211,211,211,0.5);
		padding: 30px;
	}
	.login-right{
		background: #fff;
		padding: 30px;
	}
	.row{
		padding-left:  -50px;
	}
	.log{
		padding-top: 220px;
	}
	

</style>

</head>

<body>
     <div class="wrapper">
		<div class="container">
			<!--header start here-->
			<header>
				<div class="banner">
				<div class="left" style="height: 740px;">
					<div class="logo">
						<img src="image/logoo.jpg">
					</div>
					<ul class="clearfix">
						
						<li><b><a href="index.php" style="color:black; "> HOME</a></b></li>
						
					
						<li><b><a href="about.php" style="color: black;">ABOUT</a></b></li>
		 			</ul>	
		                			
                    <div class="ts">
                    	<div class="login-box">
                    	<div class="row">
                    		<div class="col-md-6">
                    			<h2> Login here</h2>
                    			<form action="validation.php" method="post">
                    				<div class="form-group">
                    					<label>Username</label>
                    					<input type="text" name="user" class="form-control" required="">
                    				</div>
                    				<div class="form-group">
                    					<label>Password</label>
                    					<input type="password" name="password" class="form-control" required="">
                    				</div>
                    				<button type="submit" class="btn btn-primary">Login</button>
                    			</form>
                    			
                    		</div>
                    		<div class="col-md-6">
                    			<h2> Signup Here</h2>
                    			<form action="registration.php" method="post">
                    				<div class="form-group">
                    					<label>Username</label>
                    					<input type="text" name="user" class="form-control" required="">
                    				</div>
                    				<div class="form-group">
                    					<label>Password</label>
                    					<input type="password" name="password" class="form-control" required="">
                    				</div>
                    				<button type="submit" class="btn btn-primary">Signin</button>
                    			</form>
                    			
                    		</div>
                    	</div>
                    	</div>
                    </div>
				</div>
				</div>
                </div>
				<div class="right" style="height: 740px;">
					<ul>
						
					
						
							<div class="dropdown">
							<li style="margin-top: -2px;"><b ><button class="dropbtn"><b> HOSPITAL</b></button></b>
                            <div class="dropdown-content">
                            	<a href="paras.php">Paras JK Hospital</a>
                            	<a href="shanti.php">Shantiraj Hospital</a>
                            	<a href="maharana.php">Maharana Bhupal Govt Hospital</a>
                            	<a href="aravali.php">Aravali Hospital</a>
                            	<a href="chaudhary.php">Chaudhary Hospital </a>
                            	<a href="women.php">The Women's Hospital of Mewar</a>
                            	<a href="jp.php">J.P. Orthopaedic Hospital </a>
                            	<a href="gbh.php">GBH American Hospital </a>
                            	<a href="geetanjali.php">Geetanjali Hospital </a>
                            	<a href="jivanta.php">Jivanta Children's Hospital </a>
                            	
                            </div>
						</li>
						</div>
					
						<li><b><a href="contact.php" style="color: white;">CONTACT</a></b></li>
					</ul>
					<div class="log">
					<img src="image/log.jpg">
					
						</div>	
						
					</div>
					
					
				</div>	
				</div>
				
</body>
</html>