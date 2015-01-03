	<?php include('includes/header.php'); ?>
	
    <script type="text/javascript">
	
		$(document).ready(function()
		{
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
		
		jQuery(function($){
			$(".tweet2").tweet({
			  join_text: "auto",
			  username: "TheDelBusiness",
			  avatar_size: 48,
			  count: 6,
			  auto_join_text_default: " we said, ",
			  auto_join_text_ed: " we ",
			  auto_join_text_ing: " we were ",
			  auto_join_text_reply: " we replied ",
			  auto_join_text_url: " we were checking out ",
			  loading_text: "loading tweets..."
			});
		});
		  
	</script>
        
    <div style="float: left;">
        <div class="content-small-col-container">
            <div class="content-small-col">
                <h1>Latest news</h1>
                <div class='tweet2 query'></div>
            
            </div>
            
        </div>

		<div class="cleaner"></div>
        
        <div class="content-small-col-container">
            <div class="content-small-col" style="text-align: center;">
                
                <span style="text-align: left"><h1>Awards and standards</h1></span>
                <img src="images/investor_in_people.jpg" alt="Investor in People" style="margin: 15px;" /><br />
                <img src="images/nvq.jpg" alt="NVQ" style="margin: 15px;" /><br />
                <img src="images/apprenticeships.jpg" alt="Apprenticeships" style="margin: 15px;" />
                
			</div>
        </div>

    </div>
    
    <div style="float: left;">
        <div class="content-large-col-container">
            <div class="content-large-col">
            
                <?php 
                    // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
                    $page_id = 12; 
                
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
			query_posts('cat=3&orderby=date&order=ASC');
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
    
    <div class="cleaner"></div>
        
    <?php include('includes/footer.php'); ?>