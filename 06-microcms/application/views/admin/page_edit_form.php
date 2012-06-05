<form action="" class="form-horizontal" method="post" accept-charset="utf-8">
	
	
	<fieldset>
		
		<legend>
			Page Settings
			<small><?php print HTML::anchor($page->get_absolute_url(), 'View on Site'); ?></small>
		</legend>
		
		<div class="control-group <?php print(Arr::get($errors, 'name') ? 'error' : '');?>">
			<label class="control-label" for="name">Name (Menu)</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="name" value="<?php print Arr::get($values, 'name');?>"  />
				<label for="name" class="error"><?php print Arr::get($errors, 'name');?></label>
			</div>
		</div>
		

		
		<div class="control-group <?php print(Arr::get($errors, 'title') ? 'error' : '');?>">
			<label class="control-label" for="title">Title</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="title" value="<?php print Arr::get($values, 'title');?>"  />
				<label for="title" class="error"><?php print Arr::get($errors, 'title');?></label>
			</div>
		</div>
		
		<div class="control-group <?php print(Arr::get($errors, 'subtitle') ? 'error' : '');?>">
			<label class="control-label" for="subtitle">Subtitle</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="subtitle" value="<?php print Arr::get($values, 'subtitle');?>"  />
				<label for="subtitle" class="error"><?php print Arr::get($errors, 'subtitle');?></label>
			</div>
		</div>
		
		<div class="control-group <?php print(Arr::get($errors, 'slug') ? 'error' : '');?>">
			<label class="control-label" for="slug">Slug</label>
			<div class="controls">
				
				<input type="text" class="input-xlarge" name="slug" value="<?php print Arr::get($values, 'slug');?>"  />
				<p class="help-inline">
					<?php print Arr::get($errors, 'slug'); ?>
					<?php print(Arr::get($errors, 'slug') ? ' - ' : '');?>
					Page slug, like: "my-cms-page"
				</p>
			</div>
		</div>
		

		
		<div class="control-group <?php print(Arr::get($errors, 'position') ? 'error' : '');?>">
			<label class="control-label" for="position">Position</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="position" value="<?php print Arr::get($values, 'position');?>"  />
				<label for="position" class="error"><?php print Arr::get($errors, 'position');?></label>
			</div>
		</div>
		
		
		
		
		
		
		<div class="control-group <?php print(Arr::get($errors, 'template') ? 'error' : '');?>">
			
			<label class="control-label" for="slug">Template</label>
			<div class="controls">
				<?php 
					
					$template = Arr::get($values, 'template');
					
					$template_list = array(
						'home' => 'Home Template',
						'two_columns' => 'Page template - 2 columns',
					);
					
					print Form::select('template', $template_list, $template, array('class' => 'input-xlarge'));
					
				?>
	
				<p class="help-inline">
					<?php print Arr::get($errors, 'template'); ?>
					Page Template
				</p>
			</div>
		</div>
		
		
		
		
		
		
	</fieldset>
	
	
	<fieldset>
		
		<legend>Page Content</legend>
		
		<!-- HTML editor -->
		<div class="control-group <?php print(Arr::get($errors, 'content_main') ? 'error' : '');?>">
			<label class="control-label" for="name">Content Main</label>
			<div class="controls">
				<textarea class="input-xlarge" id="content_main" name="content_main" style="width: 100%; height: 300px;"><?php print Arr::get($values, 'content_main');?></textarea>
				<label for="content_main" class="error"><?php print Arr::get($errors, 'content_main'); ?></label>
			</div>
		</div>
		
		<!-- HTML editor -->
		<div class="control-group <?php print(Arr::get($errors, 'content_sidebar') ? 'error' : '');?>">
			<label class="control-label" for="name">Content Sidebar</label>
			<div class="controls">
				<textarea class="input-xlarge" id="content_sidebar" name="content_sidebar" style="width: 100%; height: 300px;"><?php print Arr::get($values, 'content_sidebar');?></textarea>
				<label for="content_sidebar" class="error"><?php print Arr::get($errors, 'content_sidebar'); ?></label>
			</div>
		</div>
		
	</fieldset>

	
	
	<fieldset>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary wymupdate">
				Save changes
			</button>
			<button class="btn">
				Cancel
			</button>
		</div>
	</fieldset>
	
	
</form>
