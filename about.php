	<?php include('includes/header.php'); ?>
    
    <div class="content-small-col-container">
    	<div class="content-small-col">
        
        	<?php 
				// 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
				$page_id = 4; 
			
				// You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
				$page_data = get_page( $page_id ); 
				
				// echo the title
				echo '<h1>'. $page_data->post_title .'</h1>';
				
				// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
				echo apply_filters('the_content', $page_data->post_content); 
				
			?>
        	
        </div>
        
    </div>
    
    <div class="content-large-col-container">
    	<div class="content-large-col">
        
        	<?php 
				// 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
				$page_id = 7; 
			
				// You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
				$page_data = get_page( $page_id ); 
				
				// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_data->ID ), 'index-post-thumbnail-large' );
				echo "<img src=" . $image[0] . ">";
				
				// echo the title
				echo '<h1>'. $page_data->post_title .'</h1>';
				
				echo apply_filters('the_content', $page_data->post_content); 
				
			?>
            
            <br /><br />
            
        </div>
    </div>
    
    <div class="cleaner"></div>
        
    <?php include('includes/footer.php'); ?>