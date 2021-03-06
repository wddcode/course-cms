var admin = admin || {};
admin.base = admin.base || {};
admin.settings = admin.settings || {}; ! function($) {
	$(function() {
		admin.base.init();
	})
}(window.jQuery)

admin.settings.wysiwyg_editor = 'tinymce';
// wymeditor, tinymce, epiceditor

admin.base.init = function() {

	if(admin.settings.wysiwyg_editor == 'wymeditor') {
		admin.base.wymeditor($('#content_main'));
	}

	if(admin.settings.wysiwyg_editor == 'tinymce') {
		admin.base.tinymce($('#content_main'));
	}

	if(admin.settings.wysiwyg_editor == 'epiceditor') {
		admin.base.epiceditor($('#content_main'));
	}

	if(admin.settings.wysiwyg_editor != 'epiceditor') {
		$('#control_markdown').remove();
	}
	
	
};

admin.base.wymeditor = function(element) {

	element.wymeditor({

		stylesheet : '/course-cms/09-cms/www_root/static/css/lib/bootstrap/bootstrap.min.css',
		postInit : function(wym) {

			jQuery(wym._box).find(wym._options.containersSelector).removeClass('wym_dropdown').addClass('wym_panel').find('h2 > span').remove();
			//adjust the editor's height
			jQuery(wym._box).find(wym._options.iframeSelector).css('height', '250px');

			wym.hovertools();
		}
	});
};

admin.base.tinymce = function(element) {

	element.tinymce({
		// Location of TinyMCE script
		script_url : '/course-cms/09-cms/www_root/static/js/lib/tiny_mce/tiny_mce.js',

		// General options
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "visualblocks,inlinepopups",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,styleselect,justifyleft,justifycenter,justifyright,justifyfull,|,visualblocks,code",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		content_css : "/course-cms/09-cms/www_root/static/css/lib/bootstrap/bootstrap.min.css",
		visualblocks_default_state : true,

		// Schema is HTML5 instead of default HTML4
		schema : "html5",

		// End container block element when pressing enter inside an empty block
		end_container_on_empty_block : true,

		// HTML5 formats
		style_formats : [{
			title : 'h1',
			block : 'h1'
		}, {
			title : 'h2',
			block : 'h2'
		}, {
			title : 'h3',
			block : 'h3'
		}, {
			title : 'h4',
			block : 'h4'
		}, {
			title : 'h5',
			block : 'h5'
		}, {
			title : 'h6',
			block : 'h6'
		}, {
			title : 'p',
			block : 'p'
		}, {
			title : 'div',
			block : 'div'
		}, {
			title : 'pre',
			block : 'pre'
		}, {
			title : 'section',
			block : 'section',
			wrapper : true,
			merge_siblings : false
		}, {
			title : 'article',
			block : 'article',
			wrapper : true,
			merge_siblings : false
		}, {
			title : 'blockquote',
			block : 'blockquote',
			wrapper : true
		}, {
			title : 'hgroup',
			block : 'hgroup',
			wrapper : true
		}, {
			title : 'aside',
			block : 'aside',
			wrapper : true
		}, {
			title : 'figure',
			block : 'figure',
			wrapper : true
		}]

	});
};

admin.base.epiceditor = function(element) {
	//var editor = new EpicEditor(element).load();
	var ee_content = $('#content_markdown').val()
	
	var ee_instance = 'ee-'+Math.round(Math.random()*100000);
	
	var ee = new EpicEditor(document.getElementById('markdown_editor'));
	ee.options({
		file : {
			name : ee_instance,
			defaultContent : ee_content
		},
		basePath : '/course-cms/09-cms/www_root/static/js/lib/epiceditor',
		themes : {
			// editor : '/css/epiceditor/editor-custom.css',
			// preview : '/css/epiceditor/preview-custom.css'
		}
	});
	
	ee.on('save',function(){
		admin.base.epiceditor.update(ee);
	});
	ee.on('load',function(){
		admin.base.epiceditor.update(ee);
	});
	
	ee.load();
	
	admin.base.epiceditor.ee = ee;
	
};

admin.base.epiceditor.update = function(ee) {
	
	var ee_html = ee.exportHTML();
	
	
	$('#content_markdown').val(ee.get('editor').value);
	
	$('#markdown_preview').html(ee_html);
	$('#content_main').val(ee_html);
};
