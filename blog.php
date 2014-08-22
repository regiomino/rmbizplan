<? include("includes/header.php") ?>
<div data-dom-cache="false" data-role="page" class="pages" id="home" data-theme="a">
	<?php include("includes/header-content.php"); ?><!-- /header -->
    
	<div data-role="content" data-theme="a" class="minus-shadow">
            <div class="cherry-slider" style="height: 70px;">
                <div anim="slide"anim-speed="400"anim-direction="right"anim-position-right="0"anim-position-top="10" class="anim-item"><img src="images/content/blog-icon.png" width="64" /></div>
                <div anim="slide"anim-speed="300"anim-direction="left"anim-position-left="0"anim-position-top="25"  class="anim-item"><p class="little-padding white-bg gray-border">Wordpress Blog Integration (RSS)</p></div>
		
		<div anim="fade"anim-speed="3000" class="anim-item wait-item"></div>
                <div anim-action="break"anim="fade"anim-speed="700" class="anim-item"></div>
                <div anim-action="restart"anim="fade"anim-speed="700" class="anim-item wait-item"></div>
		
            </div>
	    <script>
		function setCookie(c_name,value,exdays) {
			var exdate=new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
			document.cookie=c_name + "=" + c_value;
		}
		function getCookie(c_name) {
			var i,x,y,ARRcookies=document.cookie.split(";");
			for (i=0;i<ARRcookies.length;i++)
			{
			  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
			  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			  x=x.replace(/^\s+|\s+$/g,"");
			  if (x==c_name)
			    {
			    return unescape(y);
			    }
			  }
		}
		function readOn(el) {
			setCookie("url", $(el).attr("detail-url"));
		}
	    </script>
	    <div id="blog-posts"><br><br><center>Loading posts</center><br><br></div>
	    <script src="blog-feeds-remote.php"></script>
	    
	</div><!-- /content -->
        
        
        <? include("includes/footer-content.php"); ?>
</div><!-- /page -->
<? include("includes/footer.php") ?>