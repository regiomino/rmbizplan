<? include("includes/header.php") ?>
<div data-dom-cache="false" data-role="page" class="pages" id="home" data-theme="a">
	<?php include("includes/header-content.php"); ?><!-- /header -->
    
	<div data-role="content" data-theme="a" class="minus-shadow">
            <div class="white-content-box">
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
		$(document).ready(function() {
			var str = "<script src='blog-detail-remote.php?link="+ escape(getCookie("url")) +"' />";
			$(str).appendTo("body");
		});
		</script>
		<div id="blog-post"><br><br><center>Loading post</center><br><br></div>
		<script src="blog-detail-remote.php"></script>
            </div>
	</div><!-- /content -->
        
        
        <? include("includes/footer-content.php"); ?>
</div><!-- /page -->
<? include("includes/footer.php") ?>