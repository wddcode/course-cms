<?php

	if(isset($errors) AND count($errors) > 0)
	{
		foreach($errors as $error)
		{
			print '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a>' . $error . '</div>';
		}
	}

?>

<form action="" class="form-horizontal" method="post" accept-charset="utf-8">
	
	
	<fieldset>
		
		<?php
		
		if($errors) {
			print $errors;
		}
		
		?>
		
		<legend>Pleas login...</legend>
		<div class="control-group <?php print(Arr::get($errors, 'username') ? 'error' : '');?>">
			<label class="control-label" for="name">Username</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="username" value="<?php print Arr::get($values, 'username');?>"  />
				<label for="username" class="error"><?php print Arr::get($errors, 'username');?></label>
			</div>
		</div>
		
		<div class="control-group <?php print(Arr::get($errors, 'password') ? 'error' : '');?>">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input type="password" class="input-xlarge" name="password" value="<?php print Arr::get($values, 'password');?>"  />
				<label for="password" class="error"><?php print Arr::get($errors, 'password');?></label>
			</div>
		</div>
		
		
	</fieldset>
	
	

	
	
	<fieldset>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary wymupdate">
				Login
			</button>
			<button class="btn">
				Cancel
			</button>
		</div>
	</fieldset>
	
	
</form>
