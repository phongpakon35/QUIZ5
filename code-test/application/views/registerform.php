<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>																									
  
   <meta charset="UTF-8">
  <title> เข้าสู่ระบบ </title>
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" >
	<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>"></script>
  
 </head>

 <body>
 </br>
 </br>
 	<div class="row co-md-12">
 		<div class="container"> 
 				<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/TestRegister/checkregister');?>">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-5">
				      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Lastname</label>
				    <div class="col-sm-5">
				      <input type="text" name="lastname" class="form-control" id="inputPassword3" placeholder="Lastname">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-5">
				      <input type="text" name="username" class="form-control" id="inputPassword3" placeholder="Username">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-5">
				      <input type="text" name="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
			
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">สมัครสมาชิก</button>
				    </div>
				  </div>

				  
				</form>
 		</div>
 	</div>

				<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-10">
				     <?php echo validation_errors(); ?> 
				    </div>
				</div>


 </body>
</html>
