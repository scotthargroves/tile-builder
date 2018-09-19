<!DOCTYPE html>
<html class="wf-proximanova-n7-active wf-proximanova-n6-active wf-proximanova-n4-active wf-proximanova-n3-active wf-opensans-n7-active wf-opensans-n3-active wf-opensans-n4-active wf-opensans-n6-active wf-active">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link href="https://cdn.desk.com/assets/portal_jqueryui_only-ae2078f5d9247e97c310caf0c453b7d9.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="https://cdn.desk.com/assets/vendor-c0a3f0c532dd6db2d09875a0ea69a8b0.js" type="text/javascript"></script>
	<script src="https://cdn.desk.com/assets/customer_widget-044efc6df9c5a6cdfe09ae38cde0fa38.js" type="text/javascript"></script>
	<script src="https://cdn.desk.com/assets/portal-6cf8baf2170daed9feb9f26bb3d2e9d5.js" type="text/javascript"></script>
	
	<!-- COPY OUTPUT TO CLIPBOARD -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>

	<!-- FAVICON -->
	<link rel="icon" type='image/vnd.microsoft.icon' href='https://cdn.desk.com/favicon.ico' />
	<link rel="icon" type='image/png' href='https://cdn.desk.com/favicon.png' />

	<title>Tile Builder // Resource Hub</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<!-- BOOTSTRAP FRAMEWORK -->
	<link href="https://s3.amazonaws.com/desk-wow/support-center/4/styles/main.css" rel="stylesheet"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- START CUSTOM JS TO MAKE THE TILES -->
	<script type="text/javascript">
	    jQuery(document).ready(function($) {
			
			// HIDE ELEMENTS
		    $('#output-copied').hide(); 
		    $( ".pick-icons" ).hide();
		    $( ".sub-pick-icons" ).hide();
		    $( ".sub-icon-picker" ).hide();
		    
		    // SET DEFAULT VALUES FOR GENERIC TILE
		    $( "input.formTitle" ).val("Service Cloud Trial");
		    $( "input.formSub" ).val("Check out all the pre-built goodies");
		    $( "input.formLink" ).val("Sign Up Today");
		    $( "input.formURL" ).val("https://desktosvc.secure.force.com/trial");
		    $('.btn').val("Copy to Clipboard");
		    
		    
		    // ICON PICKER SECTION
		    
		    // SHOWS AND HIDES ICONS
		    $( ".icon-picker" ).click(function(){
			    $( ".pick-icons" ).slideToggle('fast');
		    })
		    
		    // SET CLASS FOR SELECTED ICONS
		    $( ".icon-journey" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar sub-trial sub-data sub-trial sub-benefits sub-community sub-story sub-faq sub-article").addClass('journey');
			    $('#tileIcon').attr('value', 'journey');	
		    })
		    
		    $( ".icon-trial" ).click(function(){
			    $( "#final-tile" ).removeClass("journey video webinar sub-trial sub-data sub-trial sub-benefits sub-community sub-story sub-faq sub-articleq").addClass('trial');
			    $('#tileIcon').attr('value', 'trial');
		    })
		    
		    $( ".icon-video" ).click(function(){
			    $( "#final-tile" ).removeClass("trial journey webinar sub-trial sub-data sub-trial sub-benefits sub-community sub-story sub-faq sub-article").addClass('video');
			    $('#tileIcon').attr('value', 'video');
		    })
		    
		    $( ".icon-webinar" ).click(function(){
			    $( "#final-tile" ).removeClass("journey video trial sub-trial sub-data sub-trial sub-benefits sub-community sub-story sub-faq sub-article").addClass('webinar');
			    $('#tileIcon').attr('value', 'webinar');
		    })
		    
		    
		    // SUB ICON PICKER SECTION
		    
		    // SHOWS AND HIDES SUB ICONS
		    $( ".sub-icon-picker" ).click(function(){
			    $( ".sub-pick-icons" ).slideToggle('fast');
		    })
		    
		    // SET CLASS FOR SELECTED SUB ICONS
		    $( ".icon-sub-article" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar journey sub-trial sub-data sub-trial sub-benefits sub-community sub-story sub-faq").addClass('sub-article');
			    $('#tileIcon').attr('value', 'sub-article');
		    })
		    
		    $( ".icon-sub-trial" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar journey sub-article sub-data sub-benefits sub-community sub-story sub-faq").addClass('sub-trial');
			    $('#tileIcon').attr('value', 'sub-trial');
		    })
		    
		    $( ".icon-sub-data" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar journey sub-trial sub-article sub-trial sub-benefits sub-community sub-story sub-story sub-faq").addClass('sub-data');
			    $('#tileIcon').attr('value', 'sub-data');
		    })
		    
		    $( ".icon-sub-benefits" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar journey sub-trial sub-article sub-data sub-trial sub-community sub-story sub-faq").addClass('sub-benefits');
			    $('#tileIcon').attr('value', 'sub-benefits');
		    })
		    
		    $( ".icon-sub-story" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar journey sub-trial sub-article sub-data sub-trial sub-benefits sub-community sub-faq").addClass('sub-story');
			    $('#tileIcon').attr('value', 'sub-story');
		    })
		    
		    $( ".icon-sub-community" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar journey sub-trial sub-article sub-data sub-trial sub-benefits sub-story sub-faq").addClass('sub-community');
			    $('#tileIcon').attr('value', 'sub-community');
		    })
		    
		    $( ".icon-sub-faq" ).click(function(){
			    $( "#final-tile" ).removeClass("trial video webinar journey sub-trial sub-article sub-data sub-trial sub-benefits sub-community sub-story").addClass('sub-faq');
			    $('#tileIcon').attr('value', 'sub-faq');
		    })
		    
		    
		    // COLOR PICKER
		    $('.grad-blue').click(function(){
			    $('#final-tile').removeClass( "grad-purple grad-green grad-orange grad-pink grad-red grad-silver grad-teal grad-blank" );
			    $('.grad-purple, .grad-green, .grad-orange, .grad-pink, .grad-red, .grad-silver, .grad-teal').removeClass( "color-active" );
				
				$('#final-tile').addClass( "grad-head grad-blue animated fadeIn" );
				$('#tileColor').attr('value', 'grad-head grad-blue animated fadeIn');
				$('.color-circle.grad-blue').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			});
		    
		    $('.grad-green').click(function(){
			    $('#final-tile').removeClass( "grad-purple grad-blue grad-orange grad-pink grad-red grad-silver grad-teal grad-blank" );
			    $('.grad-purple, .grad-blue, .grad-orange, .grad-pink, .grad-red, .grad-silver, .grad-teal').removeClass( "color-active" );
			    
			    $('#final-tile').addClass( "grad-head grad-green animated fadeIn" );
			    $('#tileColor').attr('value', 'grad-head grad-green animated fadeIn');
				$('.color-circle.grad-green').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			});
			
			$('.grad-orange').click(function(){
				$('#final-tile').removeClass( "grad-purple grad-green grad-blue grad-pink grad-red grad-silver grad-teal grad-blank" );
				$('.grad-purple, .grad-green, .grad-blue, .grad-pink, .grad-red, .grad-silver, .grad-teal').removeClass( "color-active" );
				
			    $('#final-tile').addClass( "grad-head grad-orange animated fadeIn" );
			    $('#tileColor').attr('value', 'grad-head grad-orange animated fadeIn');
				$('.color-circle.grad-orange').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			});
			
			$('.grad-pink').click(function(){
				$('#final-tile').removeClass( "grad-purple grad-green grad-orange grad-blue grad-red grad-silver grad-teal grad-blank" );
				$('.grad-purple, .grad-green, .grad-orange, .grad-blue, .grad-red, .grad-silver, .grad-teal').removeClass( "color-active" );
				
			    $('#final-tile').addClass( "grad-head grad-pink animated fadeIn" );
			    $('#tileColor').attr('value', 'grad-head grad-pink animated fadeIn');
				$('.color-circle.grad-pink').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			});
			
			$('.grad-purple').click(function(){
				$('#final-tile').removeClass( "grad-blue grad-green grad-orange grad-pink grad-red grad-silver grad-teal grad-blank" );
				$('.grad-blue, .grad-green, .grad-orange, .grad-pink, .grad-red, .grad-silver, .grad-teal').removeClass( "color-active" );
				
			    $('#final-tile').addClass( "grad-head grad-purple animated fadeIn" );
			    $('#tileColor').attr('value', 'grad-head grad-purple animated fadeIn');
				$('.color-circle.grad-purple').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			});
			
			$('.grad-red').click(function(){
				$('#final-tile').removeClass( "grad-purple grad-green grad-orange grad-pink grad-blue grad-silver grad-teal grad-blank" );
				$('.grad-purple, .grad-green, .grad-orange, .grad-pink, .grad-blue, .grad-silver, .grad-teal').removeClass( "color-active" );
				
			    $('#final-tile').addClass( "grad-head grad-red animated fadeIn" );
			    $('#tileColor').attr('value', 'grad-head grad-red animated fadeIn');
				$('.color-circle.grad-red').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			});
			
			$('.grad-silver').click(function(){
				$('#final-tile').removeClass( "grad-purple grad-green grad-orange grad-pink grad-red grad-blue grad-teal grad-blank" );
				$('.grad-purple, .grad-green, .grad-orange, .grad-pink, .grad-red, .grad-blue, .grad-teal').removeClass( "color-active" );
				
			    $('#final-tile').addClass( "grad-head grad-silver animated fadeIn" );
			    $('#tileColor').attr('value', 'grad-head grad-silver animated fadeIn');
				$('.color-circle.grad-silver').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			});
			
			$('.grad-teal').click(function(){
				$('#final-tile').removeClass( "grad-purple grad-green grad-orange grad-pink grad-red grad-silver grad-blue grad-blank" );
				$('.grad-purple, .grad-green, .grad-orange, .grad-pink, .grad-red, .grad-silver, .grad-blue').removeClass( "color-active" );
				
			    $('#final-tile').addClass( "grad-head grad-teal animated fadeIn" );
			    $('#tileColor').attr('value', 'grad-head grad-teal animated fadeIn');
				$('.color-circle.grad-teal').addClass( "color-active" );
				
				$( ".sub-icon-picker" ).fadeOut('fast', function(){
					$( ".icon-picker" ).fadeIn('fast');
					$( ".sub-pick-icons" ).hide();
				});
			    
			});
			
			$('.grad-blank').click(function(){
				$('#final-tile').removeClass( "grad-purple grad-green grad-orange grad-pink grad-red grad-silver grad-blue grad-teal" );
				$('.grad-purple, .grad-green, .grad-orange, .grad-pink, .grad-red, .grad-silver, .grad-blue, .grad-teal').removeClass( "color-active" );
				
			    $('#final-tile').addClass( "grad-blank animated fadeIn sub-trial" );
			    $('#tileColor').attr('value', 'grad-blank animated fadeIn sub-trial');
			    $('.color-circle.grad-blank').addClass( "color-active" );
			    
			    $('#final-tile').removeClass( "grad-head trial" );
			    
			    
			    $( ".icon-picker" ).fadeOut('fast', function(){
				    $( ".sub-icon-picker" ).fadeIn('fast');
				    $( ".pick-icons" ).hide();
			    });
			    
			});
		    
		    
		    // BUILDER INPUT LIVE UPDATERS
		    $( "input.formTitle" ).keyup(function() {
				var formTitleVal = $( this ).val();
				$( "h2.live-formTitle" ).text( formTitleVal );
  			}).keyup();
  			
  			$( "input.formSub" ).keyup(function() {
				var formSubVal = $( this ).val();
				$( "h3.live-formSub" ).text( formSubVal );
  			}).keyup();
  			
  			$( "input.formLink" ).keyup(function() {
				var formLinkVal = $( this ).val();
				$( ".live-formLink" ).text( formLinkVal );
  			}).keyup();
			
			
			// CODE GEN SECTION
			$('#tileTitle, #tileSubTitle, #tileLinkText, #tileLinkUrl, .sub-select-icon-wrap, .select-icon-wrap, .color-circle').bind('keyup click', function(e){
				e.preventDefault();
				//$('.loading-image').hide();
				//$(document.body).addClass('busy');
				//$('#output-wrapper').fadeToggle('fast');
          
		        // VARIABLES THAT PULL THE CURRENT FIELD VALUES AND PUT THEM INTO A STRING
		        tileIcon = $("#tileIcon").val();
		        tileColor = $("#tileColor").val();
		        tileTitle = $("#tileTitle").val();
		        tileSubTitle = $("#tileSubTitle").val();
		        tileLinkText = $("#tileLinkText").val();
		        tileLinkUrl = $("#tileLinkUrl").val();
		        finalOutput = "<div class=\"col-md-3 col-sm-6 col-xs-12\">\r\n<div class=\"hub-wrap\">\r\n<div class=\""+tileColor+" hub-wrap-top-bg "+tileIcon+"\">\r\n <i class=\"brand\"><\/i>\r\n<a href=\""+tileLinkUrl+"\"><h2>"+tileTitle+"<\/h2><\/a>\r\n<\/div>\r\n<a href=\""+tileLinkUrl+"\"><h3 class=\"hub-wrap-sub-text\">"+tileSubTitle+"<\/h3><\/a>\r\n<a href=\""+tileLinkUrl+"\"><div class=\"hub-wrap-browse\">"+tileLinkText+" <i class=\"fa fa-caret-right\"><\/i><\/div><\/a>\r\n<\/div>\r\n<\/div>";
	          
				// *** DEGUB ONLY*** TAKES THE STRING ABOVE AND UPDATES THE OUTPUT VALUE
		    	// console.log(finalOutput);
		    	
		    	// LIVE UPDATES CODE OUTPUT
		    	$("#final-output").text(finalOutput);
		    }).keyup();
			
			
			// STOPS PAGE FROM REFRESHING WHEN CLICKING BTN
	        $('.btn').click(function(e) {
	          e.preventDefault();
	        });
	      
			
			// CODE THAT CHECKS ON COPY AND RUNS FUNCTIONS WHEN SUCCESSFUL
	        var clipboard = new Clipboard('.btn');
	        
	        clipboard.on('success', function() {
	        	console.log('copied');
				$('.btn').val("Copied Successfully");
				$('#output-copied').fadeIn('fast', function(){
	            	$('.btn').val("Copied Successfully");
					//$('.btn').delay(800).val("Copy to Clipboard");
					$('#output-copied').delay(600).fadeOut('fast');

	          	});
	        });
	        clipboard.on('error', function() {
		        console.log('error');
	        	$('.btn').val('Not Copied');
	        });
	    	
	    });
	</script>

	<style type="text/css">
		
	body {
		background: #F4F4F4;
	}	
	
	.section-titles {
		color: #003B65;
		font-size: 10px!important;
		font-weight: bold;
		margin-top: 40px;
		margin-bottom: 20px!important;
		text-align: center;
		padding-bottom: 0;
	}
	
	.color-circle {
		width: 20px;
		height: 20px;
		background: #ffffff;
		border-radius: 50%;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
	}
	
	.color-circle:hover {
		border: 2px solid #ffffff;
		cursor: pointer;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
	}
	
	input[type="radio"].color-circle {
		width: 20px;
		height: 20px;
		border-radius: 50%;
		outline: none;
		-webkit-appearance: none;
		-moz-appearance: none;
		-ms-appearance: none;
		-o-appearance: none;
		appearance: none;
	}
	
	.color-active {
		border: 2px solid #ffffff;
	}
	
	
	/* CSS FADE IN FOR SLIDE TRANSITION */
	.animated {
	    -webkit-animation-duration: 1s;
	    animation-duration: 1s;
	    -webkit-animation-fill-mode: both;
	    animation-fill-mode: both;
	}
	
	.fadeIn {
    	-webkit-animation-name: fadeIn;
		animation-name: fadeIn;
	}
	
	@-webkit-keyframes fadeIn {
		0% {opacity:0} to{opacity:1}
	}
	
	@keyframes fadeIn {
		0%{opacity:0} to {opacity:1}
	}
	/* END CSS FADE IN FOR SLIDE TRANSITION */
	
	
	.builder-wrap {
		background: #2F2F2F;
		box-shadow: 0 15px 35px 0 rgba(42,51,83,0.25), 0 5px 15px 0 rgba(0,0,0,0.06);
		border-radius: 5px;
		padding: 20px;
	}
	
	.icon-picker-title {
		font-size: 12px!important;
		color: #B9B9B9;
		letter-spacing: 1.3px;
		text-align: center;
		text-transform: uppercase;
		font-weight: 600;
		margin-bottom: 10px;
	}
	
	.icon-picker {
		width: 64px;
		height: 64px;
		border-radius: 50%;
		margin: auto;
		margin-bottom: 20px;
		background: url(https://i.imgur.com/YWoHo2d.png) no-repeat #000000;
        background-size: 35px 35px;
        background-position: center center;
        transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
	}
	
	.icon-picker:hover {
		border: 2px solid #fff;
		cursor: pointer;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
	}
	
	.pick-icons {
		margin-left: 12px;
		margin-right: 12px;
		margin-bottom: 20px;
		margin-top: -10px;
		padding: 20px;
		background: black;
		border-radius: 5px;
	}
	
	.sub-icon-picker {
		width: 64px;
		height: 64px;
		border-radius: 50%;
		margin: auto;
		margin-bottom: 20px;
		background: url(https://i.imgur.com/Sa9wSAM.png) no-repeat #F5F7F9;
        background-size: 35px 35px;
        background-position: center center;
	}
	
	.sub-icon-picker:hover {
		border: 2px solid #769fd7;
		cursor: pointer;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
	}
	
	.sub-pick-icons {
		margin-left: 12px;
		margin-right: 12px;
		margin-bottom: 20px;
		margin-top: -10px;
		padding: 20px;
		background: #F5F7F9;
		border-radius: 5px;
	}
	
	label.tile-builder-form {
		font-size: 12px!important;
		color: #B9B9B9;
		letter-spacing: 1.3px;
		text-align: center;
		text-transform: uppercase;
		font-weight: 600;
		text-indent: 10px;
	}
	
	form legend {
		font-size: 12px!important;
		color: #B9B9B9;
		letter-spacing: 1.3px;
		text-transform: uppercase;
		font-weight: 600;
		text-indent: 24px;
		border: none;
		margin-bottom: 5px!important;
	}
	
	fieldset#colors {
	}
	
	input.tile-builder-form {
		background: #4E4E4E;
		box-shadow: 0 10px 25px 0 rgba(36,36,36,0.40), 0 5px 5px 0 rgba(0,0,0,0.06);
		border-radius: 80px;
		outline: none;
		border: none;
		height: 40px!important;
		width: 100%;
		padding: 15px 15px 15px 15px;
		margin-bottom: 10px;
		color: #ffffff;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
	}
	
	input.tile-builder-form:focus {
		background: #737373;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
	}
	
		
	.hub-wrap {
		background: #FFFFFF;
		box-shadow: 0 15px 35px 0 rgba(42,51,83,0.12), 0 5px 15px 0 rgba(0,0,0,0.06);
		border-radius: 5px;
		background-clip: border-box;
		margin-bottom: 30px;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
		top:0px;
		left:0px;
		position: relative;
	}
	
	div[pill-tag]:before {
		background: -webkit-linear-gradient(#3c3c3c 0%, #000000 100%);
		box-shadow: 0 2px 4px 0 rgba(0,0,0,0.07);
		border-radius: 15.5px;
		content: attr(pill-tag);
		position: absolute;
		top:-10px;
		right: 50%;
		height:25px;
		width: 50%;
		padding-left: 15px;
		padding-right: 15px;
		margin-right: -25%;
		font-size: 11px;
		color: #ededed;
		text-align: center;
		line-height: 2.5em;
		font-weight: 600;
		text-transform: uppercase;
	}
	
	.hub-wrap:hover {
		background: #FFFFFF;
		box-shadow: 0 15px 35px 0 rgba(42,51,83,0.22), 0 5px 15px 0 rgba(0,0,0,0.06);
		border-radius: 5px;
		background-clip: border-box;
		margin-bottom: 30px;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
		top:-5px;
		left:-5px;
	}
	
	.hub-wrap-browse {	
		font-size: 12px!important;
		color: #009DDC;
		letter-spacing: 1.3px;
		text-align: center;
		text-transform: uppercase;
		font-weight: 600;
		padding-bottom: 20px;
	}
	
	.disable-link {
		color: #888888!important;
	}
	
	h3.hub-wrap-sub-text {	
		font-size: 14px!important;
		color: #52788D;
		text-align: center;
		font-weight: 400!important;
		padding-top: 30px;
		padding-bottom: 20px;
		padding-left: 30px;
		padding-right: 30px;
	}
	
	.hub-wrap-top-bg {
		background: #F5F7F9;
		border-radius: 5px 5px 0 0;
		padding-top: 30px;
		padding-bottom: 5px;
	}
	
	.hub-wrap-top-bg h2 {
		color: #2C4651!important;
		font-family: open-sans,sans-serif;
		font-weight: 500;
		font-size: 18px!important;
		text-align: center;
		padding-bottom: 10px;
	}
	
	.grad-head h2 {
		color: #ffffff!important;
		font-family: open-sans,sans-serif;
		font-weight: 500;
		font-size: 18px!important;
		text-align: center;
	}
	
	/* GRADIENT COLOR OPTIONS */
	
	.grad-blue {
		background: #F5F7F9;
		background-image: linear-gradient(-90deg, #1F619C 0%, #0080FF 100%);
	}
	
	.grad-orange {
		background: #F5F7F9;
		background-image: linear-gradient(-90deg, #F9865E 0%, #E24713 100%);
	}
	
	.grad-green {
		background: #F5F7F9;
		background-image: linear-gradient(90deg, #57CB00 0%, #449F00 100%);
	}
	
	.grad-purple {
		background: #F5F7F9;
		background-image: linear-gradient(90deg, #C44E98 0%, rgba(87,0,167,0.74) 100%);
	}
	
	.grad-red {
		background: #F5F7F9;
		background-image: linear-gradient(-90deg, #B11E1E 0%, #FF0000 100%);
	}
	
	.grad-pink {
		background: #F5F7F9;
		background-image: linear-gradient(-90deg, #AC1D79 0%, #EF58FF 100%);
	}
	
	.grad-teal {
		background: #F5F7F9;
		background-image: linear-gradient(-90deg, #00DFB8 0%, #28B69D 100%);
	}
	
	.grad-silver {
		background-image: linear-gradient(90deg, #253340 0%, #94A1AE 100%);
	}
	
	.grad-blank {
		background: #F5F7F9;
	}
	
	/* TRIAL ICON STYLES */
	div.hub-wrap-top-bg.trial i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 40px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.trial i.brand {
        background: url(https://i.imgur.com/YWoHo2d.png) no-repeat;
        background-size: 40px 40px;
        width: 40px;
        height: 40px!important;
    }
    
    
    /* VIDEO ICON STYLES */
    div.hub-wrap-top-bg.video i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 44px;
		height: 44px;
	}
	
    div.hub-wrap-top-bg.video i.brand {
        background: url(https://i.imgur.com/neruodc.png) no-repeat;
        background-size: 44px 34px;
        width: 44px;
        height: 40px!important;
    }
    
    /* WEBINAR ICON STYLES */
    div.hub-wrap-top-bg.webinar i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 40px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.webinar i.brand {
        background: url(https://i.imgur.com/DZoNvHd.png) no-repeat;
        background-size: 40px 40px;
        width: 40px;
        height: 40px!important;
    }
    
    /* JOURNEY ICON STYLES */
    div.hub-wrap-top-bg.journey i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 40px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.journey i.brand {
        background: url(https://i.imgur.com/C2fCHaz.png) no-repeat;
        background-size: 40px 40px;
        width: 40px;
        height: 40px!important;
    }
    
    /* SUB TRIAL ICON STYLES */
    div.hub-wrap-top-bg.sub-trial i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 40px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.sub-trial i.brand {
        background: url(https://i.imgur.com/Sa9wSAM.png) no-repeat;
        background-size: 40px 40px;
        width: 40px;
        height: 40px!important;
    }
    
    /* SUB COMMUNITY ICON STYLES */
    div.hub-wrap-top-bg.sub-community i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 40px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.sub-community i.brand {
        background: url(https://i.imgur.com/E62Nvjt.png) no-repeat;
        background-size: 40px 40px;
        width: 40px;
        height: 40px!important;
    }
    
    /* SUB ARTICLE ICON STYLES */
    div.hub-wrap-top-bg.sub-article i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 31px;
		height: 42px;
	}
	
    div.hub-wrap-top-bg.sub-article i.brand {
        background: url(https://i.imgur.com/QDciJDn.png) no-repeat;
        background-size: 31px 42px;
        width: 31x;
        height: 42px!important;
    }
    
    /* SUB FAQ ICON STYLES */
    div.hub-wrap-top-bg.sub-faq i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 40px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.sub-faq i.brand {
        background: url(https://i.imgur.com/U7wyJzC.png) no-repeat;
        background-size: 40px 40px;
        width: 40x;
        height: 40px!important;
    }
    
    /* SUB STORY ICON STYLES */
    div.hub-wrap-top-bg.sub-story i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 40px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.sub-story i.brand {
        background: url(https://i.imgur.com/wBb0eCz.png) no-repeat;
        background-size: 40px 40px;
        width: 40x;
        height: 40px!important;
    }
    
    /* SUB BENEFITS ICON STYLES */
    div.hub-wrap-top-bg.sub-benefits i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 42px;
		height: 40px;
	}
	
    div.hub-wrap-top-bg.sub-benefits i.brand {
        background: url(https://i.imgur.com/qVrcjHa.png) no-repeat;
        background-size: 42px 40px;
        width: 42x;
        height: 40px!important;
    }
    
    /* SUB DATA ICON STYLES */
    div.hub-wrap-top-bg.sub-data i.brand {
    	display: block;
		margin: 0 auto 15px;
		width: 52px;
		height: 42px;
	}
	
    div.hub-wrap-top-bg.sub-data i.brand {
        background: url(https://i.imgur.com/WGNT2Dl.png) no-repeat;
        background-size: 52px 42px;
        width: 52x;
        height: 42px!important;
    }
    
    /* ICONS FOR SELECTION */
   
	.select-icon-wrap:hover {
		border: 1px solid #ffffff;
		border-radius: 5px;
	}
	
	.sub-select-icon-wrap:hover {
		border: 1px solid #89b7e5;
		border-radius: 5px;
	}
	
    .icon-trial {
        background: url(https://i.imgur.com/YWoHo2d.png) no-repeat;
        background-size: 30px 30px;
        width: 40px;
        height: 40px!important;
        background-position: center center;
    }
	
    .icon-video {
        background: url(https://i.imgur.com/neruodc.png) no-repeat;
        background-size: 34px 24px;
        width: 44px;
        height: 40px!important;
        background-position: center center;
    }
   
	
    .icon-webinar {
        background: url(https://i.imgur.com/DZoNvHd.png) no-repeat;
        background-size: 30px 30px;
        width: 40px;
        height: 40px!important;
        background-position: center center;
    }
   
	
	.icon-journey {
        background: url(https://i.imgur.com/C2fCHaz.png) no-repeat;
        background-size: 30px 30px;
        width: 40px;
        height: 40px!important;
        background-position: center center;
    }
   
	
    .icon-sub-trial {
        background: url(https://i.imgur.com/Sa9wSAM.png) no-repeat;
        background-size: 30px 30px;
        width: 40px;
        height: 40px!important;
        background-position: center center;
    }
	
    .icon-sub-community {
        background: url(https://i.imgur.com/E62Nvjt.png) no-repeat;
        background-size: 30px 30px;
        width: 40px;
        height: 40px!important;
        background-position: center center;
    }
	
    .icon-sub-article {
        background: url(https://i.imgur.com/QDciJDn.png) no-repeat;
        background-size: 21px 32px;
        width: 40x;
        height: 40px!important;
        background-position: center center;
    }
	
    .icon-sub-faq {
        background: url(https://i.imgur.com/U7wyJzC.png) no-repeat;
        background-size: 30px 30px;
        width: 40x;
        height: 40px!important;
        background-position: center center;
    }
	
	.icon-sub-story {
        background: url(https://i.imgur.com/wBb0eCz.png) no-repeat;
        background-size: 30px 30px;
        width: 40x;
        height: 40px!important;
        background-position: center center;
    }
   
	
    .icon-sub-benefits {
        background: url(https://i.imgur.com/qVrcjHa.png) no-repeat;
        background-size: 32px 30px;
        width: 40x;
        height: 40px!important;
        background-position: center center;
    }
   
	
    .icon-sub-data {
        background: url(https://i.imgur.com/WGNT2Dl.png) no-repeat;
        background-size: 32px 32px;
        width: 40x;
        height: 40px!important;
        background-position: center center;
    }
    
    /* EXPORT CODE STYLES */
    
    .code-wrap {
	    background: #FFFFFF;
		box-shadow: 0 15px 35px 0 rgba(42,51,83,0.12), 0 5px 15px 0 rgba(0,0,0,0.06);
		border-radius: 5px!important;
    }
    
    .code-area {
	    outline: none;
	    border: 0px;
	    padding: 20px;
	    width: 100%;
	    resize: none;
	    font-family: monospace;
	    color: #6a86ba;
	    height: 300px;
	    border-radius: 5px!important;
    }
    
	.copy-section {
		position: relative;
		bottom: 150px;
		background-image: -webkit-linear-gradient(rgba(0,0,0,0) 0%, #ffffff 100%);
		height: 150px;
		width: 100%;
		border-radius: 0px 0px 5px 5px
	}
    
    .btn {
	    background: #a9d265;
	    color: #30520d!important;
	    text-transform: uppercase;
	    letter-spacing: 1.3px;
	    height: 50px;
	    border-radius: 25px;
	    width: 270px;
	    margin: auto;
		box-shadow: 0 2px 10px 0 rgba(0,0,0,0.08), 0 4px 20px 0 rgba(196,196,196,0.50);
		position: relative;
		top:50%;
		left: 50%;
		margin-left: -135px;
		transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
    }
    
    .btn:hover {
	    transform-style: preserve-3d;
		-webkit-transition:  100ms ease-out;
		-moz-transition:  100ms ease-out;
		-o-transition:  100ms ease-out;
		transition:  100ms ease-out;
		top: 52%;
		box-shadow: 0 2px 10px 0 rgba(0,0,0,0.08);
    }
    
    
    #output-copied {
	    font-size: 50px;
	    color: #5d9a20;
	    position: absolute;
	    width: 50px;
	    text-align: center;
	    left: 50%;
	    margin-left: -25px;
    }

	</style>

    <!-- TypeKit & Status Page -->
	<script src="//use.typekit.net/jgm1qhs.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	</head>
	<body>
		
		<div id="content">
			<div role="main" class="container index brand">
				
				<!-- RESOURCE HUB HERO IMAGE
				<div class="row">
					<div class="col-md-12"><h2 class="hub-title"></h2></div>
				</div>
				END RESOURCE HUB HERO IMAGE -->
				
				
				
				<!-- TILE AND SLIDE SECTION STARTS -->
				<div class="row">
					<div class="col-md-12">
						
						<!-- SLIDE ONE START -->
						<div class="">
							
							
							
								<!-- BUILDER -->
								<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="section-titles">TILE BUILDER</div>
				                <div class="builder-wrap">
					                	
					                	<div class="row">
						                	<div class="icon-picker-title">
							                	PICK ICON
						                	</div>
						                	<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="icon-picker">
													
												</div>
												<div class="sub-icon-picker">
													
												</div>
											</div>
					                	</div>
					                	<div class="row">
						           
											<!-- WHITE ICONS -->
											<div class="pick-icons">
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-journey select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-trial select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-video select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-webinar select-icon-wrap"></div>
												</div>
											</div>
											
											<!-- BLUE ICONS -->
											<div class="sub-pick-icons">
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-sub-data sub-select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-sub-trial sub-select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-sub-benefits sub-select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-sub-community sub-select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-sub-story sub-select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-sub-article sub-select-icon-wrap"></div>
												</div>
												<div class="col-md-3 col-sm-6 col-xs-6">
													<div class="icon-sub-faq sub-select-icon-wrap"></div>
												</div>
												
												<input id="tileIcon" value="" hidden>
												
											</div>
											
											
					                	</div>
						                <div class="row">
							                
							                <form>
								                
								                	
								                	<fieldset id="colors">
													<legend>Background Color</legend>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-blue color-active" type="radio" id="grad-blue" name="color" value="grad-blue" checked/><label for="grad-blue"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-green" type="radio" id="grad-green" name="color" value="grad-green" /><label for="grad-green"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-orange" type="radio" id="grad-orange" name="color" value="grad-orange" /><label for="grad-orange"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-pink" type="radio" id="grad-pink" name="color" value="grad-pink" /><label for="grad-pink"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-purple" type="radio" id="grad-purple" name="color" value="grad-purple" /><label for="grad-purple"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-red" type="radio" id="grad-red" name="color" value="grad-red" /><label for="grad-red"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-silver" type="radio" id="grad-silver" name="color" value="grad-silver" /><label for="grad-silver"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-teal" type="radio" id="grad-teal" name="color" value="grad-teal" /><label for="grad-teal"></label>
													</div>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<input class="color-circle grad-blank" type="radio" id="grad-blank" name="color" value="grad-blank" /><label for="grad-blank"></label>
													</div>
								                	</fieldset>
								                	
								                	<input id="tileColor" value="" hidden>
																										
								                
									            <!-- COMING SOON <div class="col-md-8 col-sm-8 col-xs-8">
									                <label class="tile-builder-form" for="formTag">Tag</label>
													<input class="formTag tile-builder-form" name="formTag" type="text" placeholder=""/>
									            </div>
									            <div class="col-md-4 col-sm-4 col-xs-4">
									            	<div class="formTagToggle">Off</div>
									            </div> -->
								              
								                <div class="col-md-12 col-sm-12 col-xs-12">
								                	<label class="tile-builder-form" for="formTitle">Title</label>
													<input id="tileTitle" class="formTitle tile-builder-form" name="formTitle" type="text" placeholder="Service Cloud Trial"/>
								                </div>
								                <div class="col-md-12 col-sm-12 col-xs-12">
								                	<label class="tile-builder-form" for="formSub">Subtitle</label>
													<input id="tileSubTitle" class="formSub tile-builder-form" name="formSub" type="text" />
								                </div>
								                <div class="col-md-12 col-sm-12 col-xs-12">
								                	<label class="tile-builder-form" for="formLink">Link Text</label>
													<input id="tileLinkText" class="formLink tile-builder-form" name="formLink" type="text" />
								                </div>
								                <div class="col-md-12 col-sm-12 col-xs-12">
								                	<label class="tile-builder-form" for="formURL">URL</label>
													<input id="tileLinkUrl" class="formURL tile-builder-form" name="formURL" type="text" />
								                </div>
							                </form>
							                
						                </div>
					                
				                </div>
				            </div>
							<!-- BUILDER END -->
							
						
							<!-- PREVIEW TILE -->
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="section-titles">LIVE PREVIEW</div>
				                <div class="hub-wrap"> <!--pill-tag="just added"-->
					                <div id="final-tile" class="hub-wrap-top-bg grad-blue grad-head trial">
					                	<i class="brand"></i>
										<a href="#"><h2 class="live-formTitle">Service Cloud Trial</h2></a>
					                </div>
					                <a href="#"><h3 class="hub-wrap-sub-text live-formSub">Check out all the pre-built goodies</h3></a>
					                <a href="#"><div class="hub-wrap-browse"><span class="live-formLink"> Sign Up Today</span> <i class="fa fa-caret-right"></i></div></a>
				                </div>
				            </div>
				            <!-- PREVIEW TILE END -->
				            
				            
				            <!-- EXPORT CODE -->
				            <div class="col-md-5 col-sm-12 col-xs-12">
					            <div class="section-titles">EXPORT CODE</div>
					            <div class="code-wrap">
						       
									<textarea id="final-output" class="code-area"></textarea>
									

					            </div>
					            <div class="copy-section">
						            <div id="output-copied">&#10004;</div>
					            	<input class="btn" data-clipboard-target="#final-output" type="submit" name="submit" id="submit" value="Copy to Clipboard">
					            </div>
					       
				            </div>
				            <!-- EXPORT CODE END -->

				            
						</div>
						<!-- SLIDE ONE END -->
						
						
					</div>
				</div>
				<!-- END TILE AND SLIDE SECTION STARTS -->
				
			</div>
		</div>
		
		<!-- BOOTSTRAP -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//s3.amazonaws.com/desk-wow/support-center/scripts/main.js" type"text/javascript"></script>
		<!-- BOOTSTRAP -->
	
	</body>
</html>