<?php get_header(); ?>


 <div id="content">
	 
	 <h1><?php single_cat_title(); ?></h1>
	 
	 <?php
	 	 $upload_dir = wp_upload_dir();
		 foreach ((get_the_category()) as $brand) {
			 if (cat_is_ancestor_of(get_category_by_slug("brands"), $brand)) {
			 	echo "<a href='". get_category_link($brand->cat_ID). "'><img src='" . $upload_dir["baseurl"] . "/brands/" . $brand->slug . ".jpg'/></a>";
			 }
		 }
	 ?>
 
 </div><!-- /#content -->

<?php get_footer(); ?>