<!DOCTYPE html> 
<html dir="ltr" lang="pt-BR">
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	
	<!-- start favicon -->
	<link rel="icon" href="http://www.taxitotal.com.br/wp-content/uploads/2012/09/favicon.ico" type="image/x-icon" />
	
	<!-- start meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!-- start title -->
	<title>Taxi Total </title>
		
	<!-- start googlefonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
       <meta name="content-language" content="pt" />
       <style type="text/css">
	.carregando{
		color:#666;
		display:none;
	}
       label.inputStart,label.inputEnd,.revRoute{ background-image:url(sprite.png); background-repeat:no-repeat; }
       #resultado { background-color: #D2E7A2;padding-left: 1em; }
       #mapa { width:600px; height: 500px; margin: 0 auto; padding: 0 auto; position: relative; }
	.aviso {
	font-size: 12px;
	line-height: 20px;
	}
	#resultsnotes {
	border-top: 1px solid #9F9F9F;
	padding-right: 1em;
	}
       #fares {
	color: #111111;
	padding-right: 1em;
	text-align: left;
	font-family: Arial,Helvetica,sans-serif;
	}
	.fareline {
	font-size: small;
	font-family: Arial,Helvetica,sans-serif;
	}
	.total {
	font-size: x-large;
	font-weight: bold;
	letter-spacing: -0.1em;
	line-height: 0.5em;
	font-family: Arial,Helvetica,sans-serif;
	}
       .form{border-bottom:1px solid #B5B5B5;height:61px;padding:10px 0 10px 10px;	}  
       input.text {font-size:12px;margin-bottom:5px;outline:medium none;text-indent:5px;width:318px;}  
       .revRoute{margin:18px 5px 0 0;width:18px;height:18px;float: left;border:0;background-position:0 -32px; cursor :pointer ;}
       label{float:left;display:block;width:16px;height:16px; margin:5px 5px 0 0;}
       .inputStart{background-position:0 0;}
       .inputEnd{background-position:0 -16px;}
       .left{float:left;}
	.block-content {
	padding-bottom: 10px;
	}
	#notes {
	color: #222222;
	}
	#notes h3 {
	color: #554201;
	margin-bottom: 0;
	}
	#notes p, #notes ul {
	margin-bottom: 0.25em;
	margin-top: 0.25em;
	}
	#notes ul {
	list-style-position: outside;
	list-style-type: square;
	}
	.small-note {
	font-style: italic;
	}
	#dark{
	background-color:#333;
	border:1px solid #000;
	padding:10px;
	margin-top:20px;}
	
#light{
	background-color:#FFF;
	border:1px solid #dedede;
	padding:10px;
	margin-top:20px;}	
	
li{ 
list-style:none;
	padding-top:10px;
	padding-bottom:10px;}	

.button, .button:visited {
	background: #222 url(overlay.png) repeat-x; 
	display: inline-block; 
	padding: 5px 10px 6px; 
	color: #fff; 
	text-decoration: none;
	-moz-border-radius: 6px; 
	-webkit-border-radius: 6px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
	border-bottom: 1px solid rgba(0,0,0,0.25);
	position: relative;
	cursor: pointer
}
 
	.button:hover							{ background-color: #111; color: #fff; }
	.button:active							{ top: 1px; }
	.small.button, .small.button:visited 			{ font-size: 11px}
	.button, .button:visited,
	.medium.button, .medium.button:visited 		{ font-size: 13px; 
												  font-weight: bold; 
												  line-height: 1; 
												  text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
												  }
												  
	.large.button, .large.button:visited 			{ font-size: 14px; 
													  padding: 8px 14px 9px; }
													  
	.super.button, .super.button:visited 			{ font-size: 34px; 
													  padding: 8px 14px 9px; }
	
	.pink.button, .magenta.button:visited		{ background-color: #e22092; }
	.pink.button:hover							{ background-color: #c81e82; }
	.green.button, .green.button:visited		{ background-color: #91bd09; }
	.green.button:hover						    { background-color: #749a02; }
	.red.button, .red.button:visited			{ background-color: #e62727; }
	.red.button:hover							{ background-color: #cf2525; }
	.orange.button, .orange.button:visited		{ background-color: #ff5c00; }
	.orange.button:hover						{ background-color: #d45500; }
	.blue.button, .blue.button:visited		    { background-color: #2981e4; }
	.blue.button:hover							{ background-color: #2575cf; }
	.yellow.button, .yellow.button:visited		{ background-color: #ffb515; }
	.yellow.button:hover
       </style>
       
<!-- This site is optimized with the Yoast WordPress SEO plugin v1.2.8.7 - http://yoast.com/wordpress/seo/ -->
<meta name="description" content="O Taxi Total tem as melhores dicas de trânsito, turismo, gastronomia, além de informações de utilidade pública, para todo o Brasil."/>
<link rel="canonical" href="http://www.taxitotal.com.br/" />
<link rel="next" href="http://www.taxitotal.com.br/page/2/" />
<!-- / Yoast WordPress SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="Feed de  &raquo;" href="http://www.taxitotal.com.br/feed/" />
<link rel="alternate" type="application/rss+xml" title=" &raquo;  Feed de comentários" href="http://www.taxitotal.com.br/comments/feed/" />
<link rel='stylesheet' id='style-css'  href='http://www.taxitotal.com.br/wp-content/themes/MagMan/style.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='reset-css'  href='http://www.taxitotal.com.br/wp-content/themes/MagMan/css/reset.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='layout-css'  href='http://www.taxitotal.com.br/wp-content/themes/MagMan/css/layout.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='classes-css'  href='http://www.taxitotal.com.br/wp-content/themes/MagMan/css/classes.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='shortcodes-css'  href='http://www.taxitotal.com.br/wp-content/themes/MagMan/css/shortcodes.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='prettyPhoto-css'  href='http://www.taxitotal.com.br/wp-content/themes/MagMan/css/prettyPhoto.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='nivoslider-css'  href='http://www.taxitotal.com.br/wp-content/themes/MagMan/css/nivoslider.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://www.taxitotal.com.br/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.3.1' type='text/css' media='all' />
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-includes/js/jquery/jquery.js?ver=1.7.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.preloader.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.prettyPhoto.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.easing.min.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.nivo.slider.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.scroll.min.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.floatobject-1.4.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.custom.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/themes/MagMan/js/jquery.mobilemenu.js?ver=3.4.2'></script>
<script type='text/javascript' src='https://apis.google.com/js/plusone.js?ver=3.4.2'></script>
<meta name="generator" content="WordPress 3.4.2" />

<div id="wpfes_newsletter_message_box" class="widget-container newsletter-box" style="display: none; height: auto;">
    <h3 class="widget-title">Newsletter subscription status</h3>
    <div class="newsletter-box-text" id="wpfes_newsletter_message"></div>
    <input type="button" onclick="wpfes_newsletter_message_close()" value="OK" />
</div>

<style type='text/css'>
  /* fonts */
  body{
    font-family: Verdana,Arial,sans-serif;
    font-size: 12px;
	color: #333333;
	background-color: #fafafa;
}
  h1{font-size: 24px;}
  h2{font-size: 20px;}
  h3{font-size: 18px;}
  h4{font-size: 16px;}
  h5, #wp-calendar caption{font-size: 12px;}
  h6{font-size: 12px;}

/* colors */

.bottom-header, .nav-top-wrapper .nav-top li .sub-menu, .nav-top-wrapper .nav-top li .sub-menu li ul, .nav-top-wrapper .select-menu {
	background-color: #80B600;
}

.homepage a, .content-wrapper .article a, h2 a, .homepage h5 a, #expand-btn, .content-area a, .single .author-wrapper a, .single .related-wrapper a, .single #comments-wrapper a, #sidebar-right .widget a {
	color: #333333;
}  

.homepage a:hover, .content-wrapper .article a:hover, h2 a:hover, .homepage h5 a:hover, #expand-btn:hover, .content-area a:hover, .single .author-wrapper a:hover, .single .related-wrapper a:hover, .single #comments-wrapper a:hover, #sidebar-right .widget a:hover {
	color: #333333;
}  

#sidebar-right .tab_widget .tabs ul.nav li.ui-tabs-selected a, #sidebar-right .tab_widget .tabs ul.nav li.ui-corner-top a:hover, #sidebar-right .wg-bg, #sidebar-right #wp-calendar caption {
	background-color: #709F01;
}

.top-header, .top-header-menu .sub-menu, .top-header-menu .select-menu-top {
	background-color: #575757;
}

.nav-top-wrapper .nav-top li a, .nav-top-wrapper .nav-top li .sub-menu li a {
	color:  #FFFFFF;
}

.top-header-menu ul li a, .top-header-menu {
	color:  #DEDEDE;
}

#sidebar-right .wg-bg, #wp-calendar caption, #sidebar-right .tab_widget .tabs ul.nav li.ui-tabs-selected a, #sidebar-right .tab_widget .tabs ul.nav li a:hover {
	color:  #FFFFFF;
}

.nivo-directionNav a {
	background-color:  #444444;
}

.nivo-directionNav a:hover {
	background-color:  #7FB500;
}

.cat-tip a {
	background-color:  #7FB500;
}
 
.img-thumb img:hover, .related-content img:hover, .block-big  .block-image img:hover, .tab-img img:hover, .block-small .block-image img:hover {
	background-color: #7fb500;
} 

.read-more, #submit, #searchform #searchsubmit, .article .pagenav a, .pagenav a, .pagenav .pages, .feedback .submit {
	background-color: #7fb500;
}

.footer-wrapper {
	background-color: #212121;
}

.footer a {
	color:  #aaaaaa;
}

.bottom-footer {
	background-color: #232323;
}

.bottom-footer a, #scrollto {
	color:  #aaaaaa;
}

.bottom-footer, .copywrap {
	color:  #686868;
}

.footer, .footer #wp-calendar > tbody > tr > td {
	color:  #aaaaaa;
}
  

   /* custom css */
  </style><script type="text/javascript">


$(function(){
	
	$('.campos-endereco').hide();
});


jQuery(function() {
  
	if (jQuery().nivoSlider) {
		jQuery('#slider').nivoSlider({
			effect: 'random',
			slices: 10,
			boxCols: 6,
			boxRows: 4,
			animSpeed: 800,
			pauseTime: 3000,
			controlNavThumbs : true,
			controlNavThumbsFromRel : true,
			directionNav : true,
			directionNavHide : false,
			afterLoad : function () {
				var $height = jQuery('#slider').height();
				var $slider = jQuery('#slider img');
				$slider.css('opacity', 0);
				jQuery('#slider-featured').css('height', '0');
				jQuery('#preloader').fadeOut(500, function () {
					$slider.animate({
						'opacity' : 1
					}, 1000);
					jQuery('#slider-featured').animate({
						'height' : $height
					}, 750, function () {
						jQuery('#slider-featured').css('height', '');
					});
					
				});
				//jQuery(' .nivo-caption h2, .nivo-caption p').animate({left:0}, 500);
			},
			beforeChange: function(){
				var _stop = jQuery.fn.stop;
				jQuery.fn.stop = function() {return this};
				setTimeout(function(){jQuery.fn.stop = _stop},0);
				//jQuery('.nivo-caption h2, .nivo-caption p').animate({left:500}, 500, 'easeInBack');
			},
			afterChange: function(){
				//jQuery('.nivo-caption h2, .nivo-caption p').animate({left:0}, 500, 'easeOutBack');

			}
		});
	}
	
	//jQuery('.nivo-caption h2, .nivo-caption p ').css('left',500 + 'px');
	
	//jQuery('#slider').data('nivoslider').stop();
	
	
	// prettyPhoto image box
  
	jQuery("a[class^='prettyPhoto']").prettyPhoto();
	jQuery("a[rel='prettyPhoto'], a.prettyPhoto, a.hover, a")
	.mouseenter(function () {
		jQuery(this).find(".zoom").stop().css({
			opacity : 0
		}).animate({
			opacity : '0.8'
		}, 300);
		this.style.filter = ""
	})
	.mouseleave(function () {
		jQuery(this).find(".zoom").stop().animate({
			opacity : 0
		}, 300)
	});
	jQuery("a[rel='prettyPhoto'], a.prettyPhoto")
	.prettyPhoto();
	jQuery("a[rel='prettyPhoto'].video, a.prettyPhoto.video")
	.prettyPhoto({
		iframe : true,
		innerWidth : '640px',
		innerHeight : '390px'
	});
	jQuery(".preload img").css({
		opacity : 1
	}).one('load', function () {
		jQuery(this).animate({
			opacity : 1
		}, 1200).parents(".preload").css('background-image', 'none');
	}).each(function () {
		if (this.complete)
			jQuery(this).stop().css({
				opacity : 1
			}).parents(".preload").css('background-image', 'none');
	});

  
  jQuery("a[rel^='prettyPhoto']").prettyPhoto({
            animationSpeed: 'normal',
            opacity: 0.4,
            counter_separator_label: '/', 
			            theme: 'dark_rounded' 
        });
  
	// feedback form handling
	jQuery(".feedback :input").each(function () {
		if (this.type == 'text' || this.type == 'textarea') {
			if (!jQuery(this).attr('title').length)
				return false;
			
			jQuery(this).val(jQuery(this).attr('title'));
			jQuery(this)
			.focus(function () {
				if (jQuery(this).val() == jQuery(this).attr('title'))
					jQuery(this).val('');
			})
			.blur(function () {
				if (jQuery(this).val() == '' || jQuery(this).val() == jQuery(this).attr('title'))
					jQuery(this).val(jQuery(this).attr('title'));
			});
		}
	})
	function clear_form(form) {
		jQuery(form).find(':input').each(function () {
			switch (this.type) {
			case 'password':
			case 'select-multiple':
			case 'select-one':
			case 'text':
			case 'textarea':
				jQuery(this).val('');
				break;
			case 'checkbox':
			case 'radio':
				this.checked = false;
				break;
			}
		});
	}
	jQuery(".feedback .form-submit .submit").live("click", function (e) {
		var form = jQuery(this).parent().parent();
		var to = form.find(".to").val();
		var name = form.find(".name").val();
		var email = form.find(".email").val();
		var message = form.find(".message").val();
		
		if (!name.length || !email.length || name == form.find(".name").attr('title') || email == form.find(".email").attr('title')) {
			jQuery(".feedback .alert").text("Please input your Name and Email first");
			return false;
		}

		
		var ajax_url = 'http://www.taxitotal.com.br/wp-admin/admin-ajax.php';
		var data = {
		  action: 'of_ajax_feedback_action',
		  to: to,
		  name: name,
		  email: email,
		  message: message
		};
		jQuery.post(ajax_url, data, function(response){
		  jQuery(".feedback .alert").text("Obrigado! Sua mensagem foi enviada.");
		  clear_form(form);
		});

		return false;
	  })
}); 	
</script>
</head>

<body class="home blog logged-in gecko" onload="initialize()">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- start button back to top -->
<div class="totop">
	<img alt="" title="Voltar para o Topo" src="http://www.taxitotal.com.br/wp-content/themes/MagMan/i/totop.png" />
</div>
<!-- end button back to top -->

<!-- start main wrapper -->
<div class="main-wrapper">
	<div class="header-wrapper">
		<div class="top-header">
			<div class="top-header-menu">
			<div class="nav-head-top"><ul><li class="current_page_item"><a href="http://www.taxitotal.com.br/" title="Início">Início</a></li><li id="menu-item-36" class="menu-item-36"><a></a></li><li id="menu-item-61" class="menu-item-61"><a></a></li></ul></div>
			<ul class="social">
							<li>
					<a class="top-google" target="_blank" title="Google plus profile" href="https://plus.google.com/u/0/117364611503081671279/about"></a>
				</li>
										<li>
					<a class="top-facebook" target="_blank" title="Facebook profile" href="https://www.facebook.com/TaxiTotal"></a>
				</li>
										<li>
					<a class="top-twitter" target="_blank" title="Twitter profile" href="http://twitter.com/Taxi_Total"></a>
				</li>
																									<li>
					<a class="top-rss" target="_blank" title="RSS feed" href="http://www.taxitotal.com.br/feed/"></a>
				</li>
						</ul>
			</div>
		</div>
		
				
		<div class="header">
			<div class="logo-adv">
				<!-- start logo -->
				<div  class="logo"><a href="http://www.taxitotal.com.br" title=" - "><img src="http://www.taxitotal.com.br/wp-content/uploads/2012/09/taxitotal2.png" alt="" /></a></div>
				<!-- end logo -->
				
				<!-- start banner -->
				 
				<div class="top-ads">
					<div class="widget magman_widget_text" id="magman_widget_text-3">			<div class="textwidget"><p><img alt="" src="http://www.taxitotal.com.br/wp-content/uploads/2012/10/banner-unius.jpg"></p>
</div>
		</div>				</div>
								<!-- end banner -->
			</div>
			<div class="bottom-header">
				<!-- start nav -->
				<div class="nav-top-wrapper">
					<ul id="menu-menu" class="nav-top"><li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-6"><a href="http://www.taxitotal.com.br/">Home</a></li>
<li id="menu-item-89" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-89"><a href="http://www.taxitotal.com.br/lista-de-taxistas/">LISTA DE TAXISTAS</a></li>
<li id="menu-item-87" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-87"><a href="http://www.taxitotal.com.br/dicas/">Dicas</a></li>
<li id="menu-item-88" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-88"><a href="http://www.taxitotal.com.br/noticias/">NOTÍCIAS</a></li>
<li id="menu-item-58" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-58"><a href="http://www.taxitotal.com.br/blog/">Blog</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-245" id="menu-item-245"><a href="http://www.taxitotal.com.br/taximetro.html">Taxímetro Online</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="http://www.taxitotal.com.br/contato/">Contato</a></li>
</ul>					<div style="float:right;">
					<form id="searchform" action="http://localhost/taxi/" method="get">
						<div style="padding-top:7px;"><input style="border: medium none;color: #999999;margin: 0;font:left;padding: 8px 7px;" type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" name="s" value="Pesquisar...">
						<input style="background-color: #7FB500;border: medium none;bottom: 0;color:#ffffff;cursor: pointer;font-size: 11px;margin: 0;padding: 0 12px;right: 20px;text-decoration: none !important;text-transform: uppercase;top: 130px;width: auto;" type="submit" value="IR"></div>
					</form>
					</div>
				</div>
				<!-- end nav -->
			</div>
		</div>
		
	</div>

<!-- start content -->
<div class="main clearfix">


<div class="content-wrapper" style="float: left; overflow: visible; width: 30px; margin: 0 auto; padding: 0 auto; position: relative;">
<div style="float:left;">
<div style="z-index: 967;background: none repeat scroll 0 0 #FFFFFF;border: 1px solid #E1E1E1;font-size: 12px;margin: 0 0 20px;overflow: hidden;position: relative;visibility: visible;" class="widget" id="linkcat-2">
	<div style="z-index: 966;" class="wg-bg"><h5>CÁLCULO DE TARIFAS - <span id="cidade-estado"></span></h5></div>
	<div style="padding:10px;">
<script>(function(d, s, id) {
$('#inputStart').coolinput({
    blurClass: 'myclass',
    iconClass: 'inputStart'
});
$('#inputEnd').coolinput({
    blurClass: 'myclass',
    iconClass: 'inputEnd'
});
</script>
		<?php
			$con = mysql_connect( 'localhost', 'taxicom_site', 'site123' ) ;
			mysql_select_db( 'taxicom_site', $con );
		?>
		<label for="cod_estados" style="width:50px;">Estado:</label>
		<select name="cod_estados" id="cod_estados">
			<option value=""></option>
			<?php
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) ) {
					echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
				}
			?>
		</select><br /><br />

		<label for="cod_cidades" style="width:50px;">Cidade:</label>
		<span class="carregando">Aguarde, carregando...</span>
		<select name="cod_cidades" id="cod_cidades">
			<option value="">-- Escolha um estado --</option>
		</select>

		<br /><br />
	<div class="campos-endereco">
	<input type="button" onclick="revRoute();" class="revRoute"/>
		<form onsubmit="calcRoute();return false;" action="" method="post" >
			<input type="hidden" name="kilometro" id="formDist" />
			<label for="inputStart" class="inputStart" ></label> 
			<input type="text" class="text" value="" id="inputStart" title="ex.: Av. Paulista, 100, São Paulo" placeholder="ex.: Av. Paulista, 100, São Paulo" />
			<br />
			<label for="inputEnd" class="inputEnd"></label> <input type="text" class="text" value="" id="inputEnd" title="ex.: Av. Paulista, 1515, São Paulo" placeholder="ex.: Av. Paulista, 1515, São Paulo" /><br />
			<input type="submit" class="large button green" value="Calcular Tarifa" style="float:right;" />
		</form>
	</div>
</div>
</div>

<div id="resultado"></div>
<div id="resultado2"></div>
<div id="directionsPanel" style="width:400px;"></div> 
</div>
    
</div>
<div id="sidebar-right" style="float: left; position: relative;padding-left:380px;">
		
	<div id="inner-left" style="float: left;">
		
		<div id="mapa" class="mapa"></div>
		<br />
		<div style="float:left;width:565px;" class="wg-bg">
		<h5 style="float:left;padding-top:10px;">Compartilhe</h5>
		<!-- AddThis Button BEGIN -->
		<div style="padding-left:10px:" class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_twitter"></a>
			<a class="addthis_button_facebook"></a>
			<a class="addthis_button_email"></a>
		</div>
		<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=jeffersonrafael"></script>
		<!-- AddThis Button END -->
		</div>
		<br /><br /><br /><br />
		<div style="z-index: 969;width:600px;" class="widget widget_links" id="linkcat-2">
		<div style="z-index: 968;" class="wg-bg">
		<h5>Notas</h5>
		</div>
		<ul class="xoxo">
		<li>
			<div class="block-content">

<div id="notes">
        <h3>Possíveis valores adicionais</h3>
        <p>O calculador <strong>não</strong> inclui no resultado:</p>
        <ul>
            <li>Tempo parado, por hora: R$ 33,00 (comum); R$ 41,25 (especial); R$ 49,50 (luxo)</li>
	    <li>Adicional de viagens metropolitanas: 50%, se não houver retorno do passageiro.</li>
	    <li>Bagagem adicional: comum: R$ R$ 2,50; especial: R$ 3,13; luxo: R$ 3,75</li>
	    <li>Rádio chamada: comum: R$ R$ 4,10; especial: R$ 5,13</li>
	    <li>Rádio chamada com hora marcada: comum: R$ 8,20; especial: R$ 10,25</li>
        </ul>
	
	<p>A estimativa é válida apenas para viagens dentro do município.</p><br />
	<h3>Valores</h3>
	<p>Os valores utilizados para cálculo são:</p>

        <ul>
            <li>Bandeirada: R$ R$ 4,10 (comum); R$ 5,13 (especial); R$ 6,15 (luxo)</li><li>Quilômetro rodado: comum: R$ 2,50 (bandeira 1) ou R$ 3,25 (bandeira 2); especial: R$ 3,13 (b. 1) ou R$ 4,07 (b. 2); luxo: R$ 3,75 (b. 1) ou R$ 4,88 (b. 2)</li>
        </ul>

<p>Valores em vigor <a target="_blank" href="http://www.prefeitura.sp.gov.br/cidade/secretarias/transportes/noticias/?p=24698">desde 15/01/2011</a>.</p><p class="small-note">Última verificação dos valores atualizados: 15/01/2011.</p>
</div>
    </div>
		</li>
		</ul>
		</div>
	</div>
	
		
</div>
<div id="sidebar-right" style="float: right;width:200px;">
		<div id="text-6" class="widget widget_text" style="z-index: 918;">			
		<div class="textwidget" style="z-index: 915;"><div style="z-index: 914;">
<img src="http://www.taxitotal.com.br/wp-content/uploads/2012/11/BANNER-TESTE_MODELO-01.jpg" alt=""><p></p>
<p><img src="http://www.taxitotal.com.br/wp-content/uploads/2012/11/FMOTORISTA-25x16.5-01.jpg.jpg" alt="">
</p></div>
</div>
		</div><div id="twitter_widget-2" class="widget magman_twitter_widget" style="z-index: 916;"><div class="wg-bg" style="z-index: 915;"><h5>Twitter</h5></div>    <div class="magman-twitter-widget clearfix" style="z-index: 914;">
      <ul id="twitter_update_list"><li></li></ul>
      <script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>
      <script src="http://twitter.com/statuses/user_timeline/http://twitter.com/Taxi_Total.json?callback=twitterCallback2&amp;count=3" type="text/javascript"></script>
      
    </div></div><div id="linkcat-2" class="widget widget_links" style="z-index: 913;"><div class="wg-bg" style="z-index: 912;"><h5>Lista Interessante</h5></div>
	<ul class="xoxo blogroll">
<li><a target="_blank" href="http://www.google.com.br">Google</a></li>

	</ul>
</div>
 
	</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=pt-BR"></script>
<script src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('jquery', '1.3');
</script>		


<script type="text/javascript" charset="UTF-8">

var bandeira1,
    bandeira2,
    vlr_bandeira1,
    vlr_bandeira2;
    
function float2moeda(num) {

   x = 0;

   if(num<0) {
      num = Math.abs(num);
      x = 1;
   }
   if(isNaN(num)) num = "0";
      cents = Math.floor((num*100+0.5)%100);

   num = Math.floor((num*100+0.5)/100).toString();

   if(cents < 10) cents = "0" + cents;
      for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
         num = num.substring(0,num.length-(4*i+3))+'.'
               +num.substring(num.length-(4*i+3));
   ret = num + ',' + cents;
   if (x == 1) ret = ' - ' + ret;return ret;

}

var directionDisplay;
var directionsService = new google.maps.DirectionsService();
var route = false;
var map;
var marker;
var geocoder;
function initialize() {	
  	directionsDisplay = new google.maps.DirectionsRenderer();
  	geocoder = new google.maps.Geocoder();
	var myLatlng = new google.maps.LatLng(-23.5489433, -46.6388182);
  	var myOptions = {
		zoom: 15,
		center: myLatlng,
		mapTypeControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("mapa"), myOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById("directionsPanel"));
}

$(function(){
	
	$('.campos-endereco').hide();
	$('#cod_estados').change(function(){
		if( $(this).val() ) {
			$('#cod_cidades').hide();
			$('.carregando').show();
			$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
				var options = '<option value=""></option>';	
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].bandeirada +'|'+ j[i].bandeiradaum + '|'+ j[i].bandeiradadois + '|' + j[i].nome + '">' + j[i].nome + '</option>';
				}	
				$('#cod_cidades').html(options).show();
				$('.carregando').hide();
			});
		} else {
			$('#cod_cidades').html('<option value="">? Escolha um estado ?</option>');
		}
	});
	$('#cod_cidades').change(function(){
		$('.campos-endereco').show();
		var vlrBand = $(this).val();
		var band = vlrBand.split("|");
		$('span#cidade-estado').html( band[3] );
		bandeira1 = parseFloat(band[1]);
		bandeira2 = parseFloat(band[2]);
		vlr_bandeira1 = parseFloat(band[0]);
		vlr_bandeira2 = parseFloat(band[0]);
	});
});

function calcRoute() {	
	if (marker) marker.setMap(null);
	route = true;
   	var start = document.getElementById("inputStart").value;
   	var end = document.getElementById("inputEnd").value;
   	var request = {
       origin:start, 
       destination:end,
       travelMode: google.maps.DirectionsTravelMode.DRIVING
   	};
   	directionsService.route(request, function(response, status) {
     if (status == google.maps.DirectionsStatus.OK) {
       directionsDisplay.setDirections(response);
       
       var kilometro;
       var distancia;
       var rota = response.routes[0]; /* Primeira rota */
       var etapa = rota.legs[0]; /* única etapa dessa rota */
       // var bandeira1 = 2.50;
       // var bandeira2 = 3.25;
       var valor_bandeira1;
       var valor_bandeira2;
       
       kilometro = etapa.distance.text;
       kilometro = kilometro.replace(",", ".");
       kilometro = parseFloat(kilometro.replace(" km", ""));
       
       distancia = etapa.distance.value;
       
       valor_bandeira1 = vlr_bandeira1 + (bandeira1 * kilometro);
       valor_bandeira2 = vlr_bandeira2 + (bandeira2 * kilometro);

       txt = '<div id="fares">';
       txt += '<h2>Táxi Comum:</h2>';
       txt += '<p id="fare_b1" class="fareline" style="display: block;">Bandeira 1: <span id="total_b1" class="total">R$ ' + float2moeda(valor_bandeira1) + '</span></p>';   
       txt += '<p id="fare_b2" class="fareline" style="display: block;">Bandeira 2: <span id="total_b2" class="total">R$ ' + float2moeda(valor_bandeira2) + '</span></p>';
       txt += '</div>';
       txt += '<div id="resultsnotes"><p class="aviso"><i>Os valores acima são apenas estimativas. Outros fatores podem influenciar o preço da viagem.</i> <a href="#notes">[mais]</a></p></div>';
       //txt += 'Distância Total: ' + distancia.toString() + ' metros.';
       
       txtt = '<div style="z-index: 966;" class="wg-bg"><h5>+ Veja mais detalhe do trajeto</h5>';
       
       document.getElementById("resultado").innerHTML = txt;
       document.getElementById("resultado2").innerHTML = txtt;
     }
   });
}

function revRoute(){
    var divStart = document.getElementById("inputStart");
    var divEnd = document.getElementById("inputEnd");
	var start = divStart.value;
	var end = divEnd.value;	
	divStart.value = end;
	divEnd.value = start
	if( route == true){
		calcRoute();	
	}
}
</script>
				

  
  </div> 
  

</div>
<!-- end content -->
<div class="clearfix"></div>
<!-- srart footer -->
<div class="footer-wrapper clearfix">

		<div class="footer clearfix">
		<div class="widget magman_widget_text" id="magman_widget_text-2"><div class="wg-bg"><h5>Sobre Nós</h5></div>			<div class="textwidget"><h5>Sobre Nós</h5>
<p><img alt="Taxi Total" src="http://www.taxitotal.com.br/wp-content/uploads/2012/10/taxi-footer.png"></p>
<p>O Taxi Total tem as melhores dicas de trânsito, turismo, gastronomia, além de informações de utilidade pública, para todo o Brasil.</p>
</div>
		</div><div class="widget widget_meta" id="meta-3"><div class="wg-bg"><h5>Meta</h5></div>			<ul>
			<li><a rel="nofollow" href="http://www.taxitotal.com.br/wp-admin/">Administração</a></li>			<li><a rel="nofollow" href="http://www.taxitotal.com.br/wp-login.php?action=logout&#038;_wpnonce=0a367d1c44">Logout</a></li>
			<li><a href="http://www.taxitotal.com.br/feed/" title="Assinar este site usando RSS 2.0">Posts <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="http://www.taxitotal.com.br/comments/feed/" title="Os comentários mais recentes de todos os posts em RSS"><abbr title="em inglês: Really Simple Syndication">RSS</abbr> dos comentários</a></li>
			<li><a href="http://br.wordpress.org/" title="Powered by WordPress, uma plataforma semântica de vanguarda para publicação pessoal.">WordPress.org</a></li>
						</ul>
</div>	</div>
	</div>

<div class="bottom-footer clearfix">
	<div class="bottom-footer-wrapper">
	<!-- srart copywrap -->
	<div class="copywrap clearfix">
		Desenvolvido por <a  target=\'_blank\' href=\'http://www.unius.com.br\'>UNIUS Agência</a> | Copyright © TaxiTotal 2012	</div>
	<!-- end copywrap -->

	<!-- srart footer menu -->
	<div class="scroll">
		<span id="scrollto">&uarr;&nbsp;Voltar para o Topo</span>
	</div>
	
	<div class="footer-links">
			</div>
	<!-- end footer menu -->
	</div>
</div>
<!-- end footer --> 

</div> 
<!-- end main wrapper -->
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-includes/js/jquery/ui/jquery.ui.core.min.js?ver=1.8.20'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-includes/js/jquery/ui/jquery.ui.widget.min.js?ver=1.8.20'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-includes/js/jquery/ui/jquery.ui.tabs.min.js?ver=1.8.20'></script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.18'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.taxitotal.com.br\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Enviando ..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.taxitotal.com.br/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.3.1'></script>
</body>
</html>