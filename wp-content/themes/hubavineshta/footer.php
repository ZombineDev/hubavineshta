
			<div id='right-sidebar'>
			<script type='text/javascript'>
				if((document.documentMode)===7)
					$('#right-sidebar').css("margin-left","14px");
			</script>
				<div  class="widget widget_categories">
					<h3 class="widget-title">Важно!!</h3>
					<ul><li><a target="_blank" href="http://demakom.com/novi-producti-v-portfoliot/577/">Нови продукти в портфолиото на Демаком</a></li></ul>
					<div class="widget-footer" >
						<div></div>
					</div>
				</div>
				<div  class="widget widget_categories">
					<h3 class="widget-title lower">Важно!!</h3>
					<ul>
						<li>
						<a href="/demakom_license/527/">ДЕМАКОМ има<br>нов лиценз за <br>монтаж и сервиз<br>на рентгенова апаратура</a>
						</li>
					</ul>
					<div class="widget-footer lower">
						<div></div>
					</div>
				</div>
				<div  class="widget widget_categories">
					<h3 class="widget-title upper">Важно!!</h3>
					<ul><li><a target="_blank" href="http://www.bnra.bg/bg/sir/osvobodeni" style="text-decoration:none">Денталните <br>рентгенови уредби<br>освободени от<br> лицензии. </a><br><a target="_blank" href="http://www.bnra.bg/bg/sir/osvobodeni">Виж повече тук</a></li></ul>
					<div class="widget-footer upper" >
						<div></div>
					</div>
				</div>
				</div>	
				</div>
			</div>			
				<div class="clearfix"></div>
									
				</div>
				</div>
			</div>
			<div id="footer-wrapper">
				
				<div id="footer-content">
					
					<a href="/" class="logo"></a>
					<div id="footerMenu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary','depth'           => 1,'sort_column' => 'menu_order','menu'=>'main_nav') ); ?>
					</div>
					
				<div class="right">Copyright © 2012 Demakom.com</div>
				</div>
			</div>
	<style>
	#popup {
		position:absolute;
		  left: 35%;
  		  top: 25%;
  		  margin-top:-100px;
  		  margin-left:-200px;
		  z-index:1200;
		  display:none;
		
	}
	
	#popup img{
		z-index:1200;
		
		height:550px;
	}
	.content-holder{
		width:800px;
		background:#f0f0f0;
		display: inline-block;
	}
	.content-holder>a{
		float:left;
		margin:5px;
	}
	.cursor {
	
		cursor: pointer;
		cursor: hand;
	}
	.see_more {
		font-family: Arial;
		font-weight: bold;
		font-size: 13px;
		color: #C92727;
		text-decoration: underline;
		margin:5px 20px;
	}
	
	#close {
		position: absolute;
		top: -15px;
		right: -15px;
		width: 30px;
		height: 30px;
		cursor: pointer;
		z-index: 1103;
		background: transparent url("<?php bloginfo('template_directory'); ?>/images/icon_close.png");
	}
	#overlay {
		background-color: #777;
		cursor: pointer;
		height: 1381px;
		display: none;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 1100;
	}
	.shadow {
	position: absolute;
	padding: 0;
	margin: 0;
	border: 0;
	width: 20px;
	height: 20px;
	z-index: 1001; 
	}
	#shadow-e {
	top: 0;
	right: -20px;
	height: 100%;
	background-image: url('<?php bloginfo('template_directory'); ?>/images/fancybox-y.png');
	background-position: -20px 0px;
	}

	#shadow-se {
	bottom: -20px;
	right: -20px;
	background-image: url('<?php bloginfo('template_directory'); ?>/images/fancybox.png');
	background-position: -40px -182px; 
	}

	#shadow-s {
	bottom: -20px;
	left: 0;
	width: 100%;
	background-image: url('<?php bloginfo('template_directory'); ?>/images/fancybox-x.png');
	background-position: 0px -20px;
	}
	
	</style>
	<div id='overlay'></div>
	<div id='popup'>
	<div class="shadow" id="shadow-e"></div>
	<div class="shadow" id="shadow-se"></div>
	<div class="shadow" id="shadow-s"></div>
	<div class="content-holder">
		<a href="/bg/category/dentalna-aparatura/planmeca-dental-units/planmeca_compact_i_touch/" class="cursor"><img  src='<?php bloginfo('template_directory'); ?>/images/coi.png'/></a>
		
		<a href="/bg/category/dentalna-aparatura/planmeca-dental-units/planmeca-compact-i-classic/" class="cursor"><img  src='<?php bloginfo('template_directory'); ?>/images/coicla.png'/></a>
		<div style="width:100%;height:30px;margin:5px;float:left;">
			<a href="/bg/category/dentalna-aparatura/planmeca-dental-units/planmeca_compact_i_touch/" class="see_more cursor" style="float:left">Виж повече</a>
			<a href="/bg/category/dentalna-aparatura/planmeca-dental-units/planmeca-compact-i-classic/" class="see_more cursor" style="float:right">Виж повече</a>
			
			
		</div>
	</div>
	<a id="close"></a></div>
	<script>
	function areCookiesEnabled() {
        var r = false;
        setCookie("testing", "Hello", 1);
        if (getCookie("testing") != null) {
            r = true;
            eraseCookie("testing");
        }
        return r;
    }
	function eraseCookie(name) {
        setCookie(name, "", -1);
    }
	function setCookie(c_name,value,exdays)
	{
		var exdate=new Date();
		exdate.setDate(exdate.getDate() + exdays);
		var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
		document.cookie=c_name + "=" + c_value;
		if(getCookie(c_name)==null)
			return false;
	}
	function getCookie(c_name)
	{
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
	$(document).ready(function(){
		//return;
		var overlay=$(document.getElementById('overlay'));
		var popup=$(document.getElementById('popup'));
		var close=$(document.getElementById('close'));
		var elements=[overlay,popup];
		function close_popup(){overlay.css('display','none');popup.css('display','none');}
		function close_fade(){overlay.fadeOut( 700 );popup.fadeOut(700);}
		function open_fade(){		
			var p=function(callback){
				var z=0;
				return function(){
					if(z==1) { 
						callback();
					}
					else
						z++;
				}
			}(function(){overlay.click(close_fade);
				popup.click(close_fade);});
			overlay.css({ opacity: 0.6 });
			overlay.fadeIn(700,p);popup.fadeIn(700,p);
		}
		if(areCookiesEnabled()!=false){
		
			var popupviewed=getCookie('popupviewed');
			var lastviewed,count,curr_time=new Date().getTime();		
			if(typeof popupviewed=='undefined'){
				count=0;lastviewed=new Date().getTime();
			}
			else {
				var n=popupviewed.split(":");
				count= n[0] || 0;
				lastviewed= n[1] || new Date().getTime();
				lastviewed=parseInt(lastviewed);
				count=parseInt(count);
			}
			if((count==0)||(count<200&&lastviewed+7200000<curr_time)){ 
			
					popupviewed=(count+1)+":"+curr_time;	
					setCookie('popupviewed',popupviewed,365);
					open_fade();
			}
							
			
				
		}
		
	});</script>
	</body>
</html>

