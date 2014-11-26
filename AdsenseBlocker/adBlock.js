var isOverGoogleAd = false;

var ad = /adsbygoogle/;

$(document).ready(function()
{	
	$('ins').live('mouseover', function () {
		if(ad.test($(this).attr('class'))){
			isOverGoogleAd = true;
		}
	});
	$('ins').live('mouseout', function () {
		if(ad.test($(this).attr('class'))){
			isOverGoogleAd = false;
		}
	});
});

$(window).blur(function(e){
	if(isOverGoogleAd){
		$.ajax({
			type: "post",
			url: "AdsenseBlocker/blocker.php",
			data: {
				adUrl: window.location.href
				}
		});
	}
});
