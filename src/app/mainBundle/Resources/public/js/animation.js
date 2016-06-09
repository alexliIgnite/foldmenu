var $j =jQuery.noConflict();
$j(document).ready(function() {
	$j('.igd-on').on('click', function(){
		$j('#logo').animate({
			height: '0px',
			width: '0px'
		});
		$j('.logoSmall').css("display", "inline");
		$j("#ingredients").animate({
			height: '800px',
			width: '100%'
		});
		$j(".igd-on").animate({
			height: '40px'
		});
		$j('.igd-on').removeClass("igd-on").addClass('igd-off');
	});
	
	$j('.logoSmall').on('click', function(){
		$j('.logoSmall').css("display", "none");
		$j("#ingredients").animate({
			height: '100px',
			width: '110px'
		});
		$j(".igd-off").animate({
			height: '78px'
		});
		$j('.igd-off').removeClass("igd-off").addClass('igd-on');
		$j('#logo').animate({
			width: '110px',
			height: '100px'
		});
	});
});