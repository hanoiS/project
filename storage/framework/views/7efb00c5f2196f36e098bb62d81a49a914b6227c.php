<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
 		<div class="container">
 			<div class="row">
 				<div class="col-md-6 col-md-offset-3">
 					<form action="<?php echo e(url('login')); ?>" method="POST" role="form">
 						<legend>Login</legend>
 							<?php if($errors->has('errorlogin')): ?>
 								<div class="alert alert-danger">
 									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 									<?php echo e($errors->first('errorlogin')); ?>

 								</div>
 							<?php endif; ?>
 						<div class="form-group">
 							<label for="">Email</label>
 							<input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>">
 							<?php if($errors->has('email')): ?>
 								<p style="color:red"><?php echo e($errors->first('email')); ?></p> 
 							<?php endif; ?>
 						</div>
 						<div class="form-group">
 					 		<label for="">Password</label>
 							<input type="password" class="form-control" id="email" placeholder="Password" name="password">
 							<?php if($errors->has('email')): ?>
 								<p style="color:red"><?php echo e($errors->first('password')); ?></p> 
 							<?php endif; ?>
 						</div>

 						
 						<?php echo csrf_field(); ?>

 						<button type="submit" class="btn btn-primary">Đăng Nhập</button>
 					</form>
 				</div>		
 			</div>
 		</div>
</body>
</html>