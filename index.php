	<?php include('includes/header.php'); ?>
        
        <div class="home-image">
        
        	<?php 
				// 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
				$page_id = 64; 
			
				// You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
				$page_data = get_page( $page_id ); 
				
				// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_data->ID ), 'index-post-thumbnail-large' );
                echo "<img src=" . $image[0] . ">";
					
				echo '<div class="home-message">';
				
				// echo the title
				echo '<h1>'. $page_data->post_title .'</h1>';
				
				// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
				echo apply_filters('the_content', $page_data->post_content); 
				
				echo '</div>'
			?>
        
        </div>
        
        <!-- <div class="slideshow">
        
        	<div id="layerslider">
        		<div class="ls-layer" rel="slidedelay: 10000;">
                	<img src="images/home_01.png" alt="layer" />
                    <img src="images/tagline_bg_1.png" alt="sublayer" style="position: absolute; top: 0px; left: 0px;" class="ls-s1" rel="slidedirection: right; delayin: 100;" />
                    <div class="ls-s2" rel="slidedirection: right; delayin: 200;">
                    	<div class="tagline-text-1">
                        	A UK market leader in the<br />provision of both one-man<br />and two-man home<br />delivery
                        </div>
                        <a href="services.php#accordian30"><div class="more-rotator-1"></div></a>
                    </div>
                </div>
                <div class="ls-layer" rel="slidedelay: 10000;">
                	<img src="images/home_02.png" alt="layer" />
                    <img src="images/tagline_bg_2.png" alt="sublayer" style="position: absolute; top: 0px; left: 554px;" class="ls-s1" rel="slidedirection: right; delayin: 100;" />
                    <div class="ls-s2" rel="slidedirection: right; delayin: 200;">
                    	<div class="tagline-text-2">
                        	The Delivery<br />Business is a UK<br />leader in the execution<br />of supply chain
                        </div>
                        <a href="services.php#accordian34"><div class="more-rotator-2"></div></a>
                    </div>
                </div>
                <div class="ls-layer" rel="slidedelay: 10000;">
                	<img src="images/home_03.png" alt="layer" />
                    <img src="images/tagline_bg_2.png" alt="sublayer" style="position: absolute; top: 0px; left: 554px;" class="ls-s1" rel="slidedirection: right; delayin: 100;" />
                    <div class="ls-s2" rel="slidedirection: right; delayin: 200;">
                    	<div class="tagline-text-2">
                        	The Delivery<br />Business currently<br />holds over 10,000<br />items of stock
                        </div>
                        <a href="services.php#accordian38"><div class="more-rotator-2"></div></a>
                    </div>
                </div>
            </div>
        
        </div> -->
        
        <div class="home-services">
        
        	<?php
				query_posts('cat=5&orderby=date&order=ASC');
				while (have_posts()) : the_post();
					$postID = $post->ID;
					echo '<div class="home-services-col">';
					the_post_thumbnail();
					echo '<div class="home-services-text">';
					echo '<h2>';
					the_title();
					echo '</h2>';
					the_content();
					echo '</div>';
					$t = wp_get_post_tags($postID);
					echo '<a href="' . $t[0]->name . '"><div class="more-small"></div></a>';
					echo '</div>';
				endwhile;
				
			?>
        
        </div>
        
        <!-- <div class="slideshow-3-cols-container">
            <div class="slideshow-3-cols">
            
                <img src="images/home_slide_01.png" />
            
            </div>
        
        	<a href="services.php#accordian30"><div class="more-small"></div></a>            
        </div>
        
        <div class="slideshow-3-cols-container">
            <div class="slideshow-3-cols">
            
                <img src="images/home_slide_02.png" />
            
            </div>
        
        	<a href="services.php#accordian34"><div class="more-small"></div></a>            
        </div>
        
        <div class="slideshow-3-cols-container">
            <div class="slideshow-3-cols">
            
                <img src="images/home_slide_03.png" />
            
            </div>
        
        	<a href="services.php#accordian38"><div class="more-small"></div></a>            
        </div> -->
        
        <div class="cleaner"></div>
        
        <div class="content-large-col">
        
        	<?php 
				// 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
				$page_id = 44; 
			
				// You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
				$page_data = get_page( $page_id ); 
				
				// echo the title
				echo '<h1>'. $page_data->post_title .'</h1>';
				
				// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
				echo apply_filters('the_content', $page_data->post_content); 
				
			?>
            
            <br /><br />
        
        </div>
        
        <div class="content-small-col-container">
            <div class="content-small-col" style="border: 1px solid #a8a8a8; border-radius: 20px 20px 0px 0px; box-shadow: 0px 0px 2px #a8a8a8; behavior: url('includes/PIE.htc');">
            
                <?php 
					// 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
					$page_id = 53; 
				
					// You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
					$page_data = get_page( $page_id ); 
	
					// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_data->ID ), 'index-post-thumbnail-large' );
                    echo "<img src=" . $image[0] . ">";
					
					// echo the title
					echo '<h1>'. $page_data->post_title .'</h1>';
					
					// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
					echo apply_filters('the_content', $page_data->post_content); 

				?>
            
            	<br /><br />
                
            </div>
            
            <a href="services.php"><div class="more-small" style="bottom: 60px;"></div></a>
        </div>
        
        <div class="cleaner"></div>
    
    <script type="text/javascript">
	
		$(document).ready(function()
		{
			$('#layerslider').layerSlider({
				skinsPath : 'skins/',
				skin : 'defaultskin',
				navPrevNext : false
			});
		});
		  
	</script>
        
    <?php include('includes/footer.php'); ?>