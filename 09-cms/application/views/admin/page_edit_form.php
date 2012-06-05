<form action="" class="form-horizontal" method="post" accept-charset="utf-8">
	
	
	<fieldset>
		<legend>
			Page Settings
			<small><?php print HTML::anchor($page->get_absolute_url(), 'View on Site'); ?></small>
		</legend>
		<div class="control-group <?php print(Arr::get($errors, 'name') ? 'error' : '');?>">
			<label class="control-label" for="name">Name/Title</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="name" value="<?php print Arr::get($values, 'name');?>"  />
				<label for="name" class="error"><?php print Arr::get($errors, 'name');?></label>
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
				<?php
					// echo Form::file('image');
				?>
				
				<input type="text" class="input-xlarge" name="slug" value="<?php print Arr::get($values, 'slug');?>"  />
				<p class="help-inline">
					<?php print Arr::get($errors, 'slug'); ?>
					<?php print(Arr::get($errors, 'slug') ? ' - ' : '');?>
					Page slug, like: "my-cms-page"
				</p>
			</div>
		</div>
		
		<div class="control-group <?php print(Arr::get($errors, 'parent_id') ? 'error' : '');?>">
			<label class="control-label" for="slug">Parent</label>
			<div class="controls">
				<?php 
					
					$parent_id = Arr::get($values, 'parent_id');
					
					$parent_list = ORM::factory('page')
					->where('id', '!=', $page->id)
					->find_all()
					->as_array('id', 'name');
					$parent_list = Arr::merge(array(false => '-----'), $parent_list);
					
					
					print Form::select('parent_id', $parent_list, $parent_id, array('class' => 'input-xlarge'));
					
				?>
	
				<p class="help-inline">
					<?php print Arr::get($errors, 'parent_id'); ?>
					Parent Page
				</p>
			</div>
		</div>
		
	</fieldset>
	
	
	<fieldset>
		<legend>
			Plug-Ins
		</legend>
		<div class="control-group <?php print(Arr::get($errors, 'slideshow_enabled') ? 'error' : '');?>">
			<label class="control-label" for="name">Slideshow?</label>
			<div class="controls">
				<input type="checkbox" class="input-xlarge" name="slideshow_enabled" value="1" <?php print (Arr::get($values, 'slideshow_enabled') == 1) ? 'checked' : ''; ?>  />
				<label for="slideshow_enabled" class="error"><?php print Arr::get($errors, 'slideshow_enabled');?></label>
			</div>
		</div>
		<div class="control-group <?php print(Arr::get($errors, 'slideshow_directory') ? 'error' : '');?>">
			<label class="control-label" for="slideshow_directory">Slideshow directory</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="slideshow_directory" value="<?php print Arr::get($values, 'slideshow_directory');?>"  />
				<label for="slideshow_directory" class="error"><?php print Arr::get($errors, 'slideshow_directory');?></label>
			</div>
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>
			Page Content
		</legend>
		
		<!-- Markdown editor -->
		<div id="control_markdown" class="control-group <?php print(Arr::get($errors, 'content_markdown') ? 'error' : '');?>">
			<label class="control-label" for="name">Content Markdown</label>
			<div class="controls">
				<div class="" id="markdown_editor"></div>
				<div class="" id="markdown_preview">[loading..]</div>
				<textarea style="display: none;" id="content_markdown" name="content_markdown" style="width: 100%; height: 300px;"><?php print Arr::get($values, 'content_markdown');?></textarea>
				<label for="content_markdown" class="error"><?php print Arr::get($errors, 'content_markdown'); ?></label>
				
			</div>
		</div>
		
		<!-- HTML editor -->
		<div class="control-group <?php print(Arr::get($errors, 'content_main') ? 'error' : '');?>">
			<label class="control-label" for="name">Content HTML</label>
			<div class="controls">
				<textarea class="input-xlarge" id="content_main" name="content_main" style="width: 100%; height: 300px;"><?php print Arr::get($values, 'content_main');?></textarea>
				<label for="content_main" class="error"><?php print Arr::get($errors, 'content_main'); ?></label>
			</div>
		</div>
		
		
	</fieldset>
	
	<div id="example-1"></div>
	
	
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
