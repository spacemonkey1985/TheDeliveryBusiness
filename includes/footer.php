	</div>
    
    <div class="footer-container">
    <div class="footer">
    	<div class="wrapper">
        
        	<div class="footer-3-cols">
            
            	<h4>Contact Us</h4>
                <h5>Please feel free to ask us any questions</h5>
                <br />
                <b>The Delivery Business LLP</b><br />
                Glaisdale Drive East<br />
                Bilborough<br />
                Nottingham<br />
                NG8 4GU<br />
                <br />
                Tel: 0845 873 1350<br />
 				Fax: 0845 873 1351<br />
            	<br />
                Email: <a href="mailto:enquiries@thedeliverybusiness.com">enquiries@thedeliverybusiness.com</a>
            </div>
            
            <div class="footer-3-cols">
            
            	<h4>Latest News</h4>
            	<h5>See our latest news via Twitter</h5>
                <div class='tweet query'></div>
                <div style="text-align: right; width: 100%; line-height: 14px; vertical-align: middle;">
                	<img src="images/twitter_small.png" alt="Twitter" style="margin-right: 5px; vertical-align: middle" /><a href="http://twitter.com/TheDelBusiness" target="_new">Follow us on Twitter</a>
                </div>
            </div>
            
            <div class="footer-3-cols">
            	<?php
					
					$sub = 0;
					$page = "";
					$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

					if(isset($_GET['sub'])) {
						if($_GET['sub'] == 'y') {
							$sub = 1;
						}
					}
				?>
				
            	<h4>Send us your details</h4>
                <h5>Let us get in contact with you</h5>
            	
                <div id="thanks" <?php if($sub == 1) { echo 'style="display: inline"'; } else { echo 'style="display: none"'; }?>>
                	<br /><br />Thank you for sending us your contact details. We will get in touch with you in ther near future.
                </div>
                
                <form id="subscription" method="post" action="includes/subscribe.php" <?php if($sub == 1) { echo 'style="display: none"'; } else { echo 'style="display: inline"'; }?>>
                	
                	<input class="autohint" value="Name" title="Name" type="text" name="sub_name" id="sub_name" onClick="clickclear(this,'Name');" onBlur="clickrecall(this,'Name');" /><br />
                    <input class="autohint" value="Company" title="Company" type="text" name="sub_company" id="sub_company" onClick="clickclear(this,'Company');" onBlur="clickrecall(this,'Company');" /><br />
                    <input class="autohint" value="Email Address" title="Email Address" type="text" name="sub_email" id="sub_email" onClick="clickclear(this,'Email Address');" onBlur="clickrecall(this,'Email Address');" /><br />
                    <input type="hidden" name="uri" id="uri" value="<?php echo "../" . $page; ?>" />
                    <a href="javascript:sendDetails();"><div class="send"></div></a>
                    
                    <div class="cleaner">&nbsp;</div>
                    
                </form>
                
                <div class="cleaner">&nbsp;</div>
                
            </div>
            
            <div class="cleaner"></div>
            
            <div class="footer-wide">
            
            	<div class="footer-menu">
            		<ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="cleaner"></div>
            
            <div class="footer-wide">    
                <div class="footer-menu">
            		<ul>
                        <li><a href="#">&copy;2013 The Delivery Business</a></li>
                        <li><a href="tc.php">Terms and Conditions</a></li>
                    </ul>
                </div>
            
            </div>
            
            <div class="cleaner"></div>
            
            <div class="footer-wide">
            	<img src="images/rha_small.png" alt="RHA" style="float: left; margin-right: 5px;" />
                <p>All goods are carried & stored under RHA Conditions of Carriage and Storage 2009 copies of which are available on request or can be downloaded by clicking <a href="rha.pdf" target="_blank">here</a></p>
            </div>
            
            <div class="cleaner"></div>
            
            <div class="footer-wide" style="text-align: right;">
            	<b>Website designed by</b><a href="http://www.pixelzee.com"><img src="images/pixelzee_logo.png" alt="Pixelzee" style="float: right; margin-left: 5px; margin-top: -5px;" /></a>
            </div>
    
    	</div>
    </div>
    </div>
    
    <script type="text/javascript">
	
		jQuery(function($){
			$(".tweet").tweet({
			  join_text: "auto",
			  username: "TheDelBusiness",
			  avatar_size: 48,
			  count: 1,
			  auto_join_text_default: " we said, ",
			  auto_join_text_ed: " we ",
			  auto_join_text_ing: " we were ",
			  auto_join_text_reply: " we replied ",
			  auto_join_text_url: " we were checking out ",
			  loading_text: "loading tweets..."
			});
		});
		
		function clickclear(thisfield, defaulttext) {
			if (thisfield.value.toLowerCase() == defaulttext.toLowerCase()) {
				thisfield.value = "";
			}
		}
		
		function clickrecall(thisfield, defaulttext) {
			if (thisfield.value == "") {
				thisfield.value = defaulttext;
			}
		}
		function sendDetails(){
			var form = document.getElementById('subscription');
			var name = document.getElementById('sub_name');
			var email = document.getElementById('sub_email');
			var uri = document.getElementById('uri');
			
			var complete = 0;
			
			if(name.value != '' && name.value != 'Please enter your name' && name.value != 'Name'){
				name.style.color = '#36393d';
				complete += 1;
			}
			else{
				name.style.color = '#ff0000';
				name.value='Please enter your name';
				
			}
			
			if(email.value != '' && email.value != 'Please enter a valid email address' && email.value != 'Email Address'){
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				
				if (!filter.test(email.value)) {
					email.style.color = '#ff0000';
					email.value='Please enter a valid email address';
				}
				else{
					email.style.color = '#36393d';
					complete += 1;
				}
			}
			else{
				email.style.color = '#ff0000';
				email.value='Please enter a valid email address';
			}
			
			if(complete == 2){
				//alert(uri.value);
				form.submit();
			}
		}
		  
	</script>

</body>
</html>