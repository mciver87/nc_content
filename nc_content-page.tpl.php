<style type="text/css">
body {
	background-image: url('/<?php echo(drupal_get_path('module', 'nc_content')); ?>/img/bg.png') !important;
}
</style>


<div id="my_page_wrapper">
	<div class="actions">
		<ul class="action-links">
			<li><a href="/node/add">Add content</a></li>
		</ul>
	</div>
	<div class="view-filters">
		<form accept-charset="UTF-8" action="/admin/nc-content" id="views-exposed-form-openpublic-find-content-page" method="get" name="views-exposed-form-openpublic-find-content-page">
			<div>
				<div class="views-exposed-form">
					<div class="views-exposed-widgets clearfix">
						<div class="views-exposed-widget views-widget-filter-title" id="edit-title-wrapper">
							<label for="edit-title">Title contains</label>
							<div class="views-widget">
								<div class="form-item form-type-textfield form-item-title">
									<input class="form-text" id="edit-title" maxlength="128" name="title" size="30" type="text" value="<?php echo ((isset($_GET["title"]))?htmlspecialchars($_GET["title"]):""); ?>">
								</div>
							</div>
						</div>
						<div class="views-exposed-widget views-widget-filter-type" id="edit-type-wrapper">
							<label for="edit-type">Node type</label>
							<div class="views-widget">
								<div class="form-item form-type-select form-item-type">
									<select class="form-select" id="edit-type" name="type">
										<option value="">
											- Any -
										</option>
										<option value="agency" id="agency">
											Agency
										</option>
										<option value="blog_entry" id="blog_entry">
											Blog entry
										</option>
										<option value="data_table" id="data_table">
											Data Table
										</option>
										<option value="document" id="document">
											Document
										</option>
										<option value="event" id="event">
											Event
										</option>
										<option value="landing_page" id="landing_page">
											Landing Page
										</option>
										<option value="map_page" id="map_page">
											Map Page
										</option>
										<option value="media_gallery" id="media_gallery">
											Media Gallery
										</option>
										<option value="photo" id="photo">
											Photo
										</option>
										<option value="press_release" id="press_release">
											Press Release
										</option>
										<option value="profile" id="profile">
											Profile
										</option>
										<option value="services" id="services">
											Services
										</option>
										<option value="site_page" id="site_page">
											Site Page
										</option>
										<option value="video" id="video">
											Video
										</option>
										<option value="webform" id="webform">
											Webform
										</option>
									</select>
								</div>
							</div>
						</div>
						<div class="views-exposed-widget views-widget-filter-type" id="edit-type-wrapper">
							<label for="edit-author">Author</label>
							<div class="views-widget">
								<div class="form-item form-type-select">
									<select class="form-select" id="edit-author" name="author">
										<option value="">- Any -</option>
										<?php print render($contents[1]); ?>
									</select>
								</div>
							</div>
						</div>
						<div class="views-exposed-widget views-widget-filter-body_value" id="edit-body-value-wrapper">
							<label for="edit-body-value">Body contains</label>
							<div class="views-widget">
								<div class="form-item form-type-textfield form-item-body-value">
									<input class="form-text" id="edit-body-value" maxlength="128" name="body_value" size="30" type="text" value="<?php echo ((isset($_GET["body_value"]))?htmlspecialchars($_GET["body_value"]):""); ?>">
								</div>
							</div>
						</div>
						<div class="views-exposed-widget views-submit-button">
							<input class="form-submit" id="edit-submit-openpublic-find-content" name="" type="submit" value="Apply">
						</div>
						<div style="display: inline-block;">
							<a href="/admin/nc-content" class="button">Reset</a>   
						</div>
					</div>
				</div>
			</div>
		</form>
	</div><?php print render($contents[0]); ?>
</div>

<script type="text/javascript">
var val2 = location.href.match(/[?&]author=(.*?)[$&]/)[1];
jQuery('#edit-author').val(val2);
var val = location.href.match(/[?&]type=(.*?)[$&]/)[1];   // get params from URL
jQuery('#edit-type').val(val);   //  assign URL param to select field


// jQuery('table tr td').each(function(index){
//     //index contains the current td index in the parent tr (1,2,3),(1,2,3)...
//     //if the corresponding th has a class
//     if(jQuery('thead tr th').eq(index).attr('class') != ''){
//         //put this class on the current td
//         jQuery(this).addClass($('thead tr th').eq(index).attr('class'));
//     }
// });


</script>