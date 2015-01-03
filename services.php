	<?php include('includes/header.php'); ?>
    
    <script type="text/javascript">
	
		$(document).ready(function()
		{
			$(function(){
				var url = document.URL;
				var id = url.substring(url.lastIndexOf('#') + 1);
				//alert(id);
				
				var accordian = "#" + id;
				var top = "-" + ($(accordian).height() + 5) + "px";
				
				if($(accordian).css("marginTop") == top){
					$(accordian).stop();
					$(accordian).css("marginTop", top); 
					$(accordian).animate({marginTop: '15px'},300);
				}
				else {
					$(accordian).stop();
					$(accordian).css("marginTop", "15px"); 
					$(accordian).animate({marginTop: top},300);
				}
			});
			
			$('.accordian').each(function(i, obj) {
				$(this).css("marginTop", "-" + ($(this).height() + 5) + "px");
			});
			
			$('.more-small2').click(function(e) {
				var accordian = "#" + e.currentTarget.id.replace("accordion-hint", "accordian");
				var top = "-" + ($(accordian).height() + 5) + "px";

				if($(accordian).css("marginTop") == top){
					$(accordian).stop();
					$(accordian).css("marginTop", top); 
					$(accordian).animate({marginTop: '15px'},300);
				}
				else {
					$(accordian).stop();
					$(accordian).css("marginTop", "15px"); 
					$(accordian).animate({marginTop: top},300);
				}
			});
		});
		  
	</script>
    
    <div style="float: left;">
        <div class="content-small-col-container">
            <div class="content-small-col">
                
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
            
            </div>
            
        </div>

		<div class="cleaner"></div>
        
        <div class="content-small-col-container">
            <div class="content-small-col" style="text-align: center;">
                <br /><br />
                All goods are carried &amp; stored under RHA Conditions of Carriage and Storage 2009 copies of which are available on request or can be downloaded by clicking the logo below
                <br /><br />
                <div style="text-align: center;"><a href="rha.pdf" target="_blank"><img src="images/rha.jpg" alt="RHA" style="margin-top: 15px;" /></a></div>
                
			</div>
        </div>

    </div>
    
    <div style="float: left;">
        <div class="content-large-col-container">
            <div class="content-large-col">
            
                <?php 
					// 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
					$page_id = 26; 
				
					// You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
					$page_data = get_page( $page_id ); 
					
					// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_data->ID ), 'index-post-thumbnail-large' );
					echo "<img src=" . $image[0] . ">";
					
					// echo the title
					echo '<h1>'. $page_data->post_title .'</h1>';
					
					echo apply_filters('the_content', $page_data->post_content); 
					
				?>
            
            </div>
        </div>
        
        <?php
			query_posts('cat=4&orderby=date&order=ASC');
			while (have_posts()) : the_post();
				$postID = $post->ID;
				echo '<div class="cleaner"></div>';
				echo '<div class="content-large-col-container">';
				echo '<div class="content-large-col">';
				echo '<div class="accordian-title">';
				echo '<h1>';
				the_title();
				echo '</h1>';
				echo '</div>';
				echo '<div class="accordian" id="accordian' . $postID . '">';
				the_content();
				echo '<br /><br />';
				echo '</div>';
				echo '</div>';
				echo '<span class="more-small2" id="accordion-hint' . $postID . '"></span>';
				echo '</div>';
			endwhile;
			
		?>
        
    </div>
    
    <div class="cleaner"><br /><br /><br /><br /></div>
        
    <?php include('includes/footer.php'); ?>