	<?php include('includes/header.php'); ?>
    
	<script type="text/javascript">
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
		function sendEmail(){
			var form = document.getElementById('contact');
			var name = document.getElementById('name');
			var email = document.getElementById('email');
			var query = document.getElementById('query');
			
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
			
			if(query.value != '' && query.value != 'Please enter your query' && query.value != 'Your query'){
				query.style.color = '#36393d';
				complete += 1;
			}
			else{
				query.style.color = '#ff0000';
				query.value='Please enter your query';
			}
			
			if(complete == 3){
				form.submit();
			}
		}
		
	</script>

    <div class="content-large-col-container">
    	<div class="content-large-col">
        
        	<h1>Contact form</h1>
            
        	<form id="contact" method="post" action="includes/send_email.php" style="width: 98%">
            
            	<input class="autohint" value="Name" title="Name" type="text" name="name" id="name" onClick="clickclear(this,'Name');" onBlur="clickrecall(this,'Name');" /><br />
                <input class="autohint" value="Company" title="Company" type="text" name="company" id="company" onClick="clickclear(this,'Company');" onBlur="clickrecall(this,'Company');" /><br />
                <input class="autohint" value="Email Address" title="Email Address" type="text" name="email" id="email"onClick="clickclear(this,'Email Address');" onBlur="clickrecall(this,'Email Address');" /><br />
                
                <textarea name="query" id="query" onClick="clickclear(this,'Your query');" onBlur="clickrecall(this,'Your query');">Your query</textarea> 
                <a href="javascript:sendEmail();"><div class="send"></div></a>
                
                <div class="cleaner">&nbsp;</div>
            
            </form>
            
            <br /><br />
            
        </div>
    </div>
    
    <div class="content-small-col-container">
    	<div class="content-small-col">
        
            <a href="https://maps.google.co.uk/maps?q=NG8+4GU&oe=utf-8&aq=t&client=firefox-a&channel=fflb&ie=UTF8&hl=en&hq=&hnear=NG8+4GU,+United+Kingdom&t=m&z=16&vpsrc=6&iwloc=A" target="_blank"><img src="images/map.png" alt="Google Map" /></a>
            
            <h1>Company address</h1>
            
            Please use the contact details on this page to request more information regarding our services.
            <br /><br />
            <b>The Delivery Business LLP</b><br />
            Glaisdale Drive East<br />
			Bilborough<br />
			Nottingham<br />
			NG8 4GU<br />
            <br /><br />
            Tel: 0845 873 1350<br />
            Fax: 0845 873 1351<br />
            <br /><br />
            Email: <a href="mailto: enquiries@thedeliverybusiness.com">enquiries@thedeliverybusiness.com</a>
        	<br /><br /><br /><br />
        </div>
    </div>
    
    <div class="cleaner"></div>
    
        
    <?php include('includes/footer.php'); ?>