// JavaScript Document

jQuery(document).ready(function($) {
	
	/*
	$( ".nx-falist > li.fa" ).on( "click", function() {
		
		var ft_value = $( this ).attr("data-value");
		
		console.log("clicked on :" + ft_value);

		$( "li.ft-select" ).removeClass('ft-select');
		$( this ).addClass('ft-select');
		//#customize-control-nx_fontawsome input
		$( "#customize-control-nx_fontawsome input" ).val(ft_value);
		
		console.log("clicked 2nd on :" + ft_value);
	});	
	*/	
	$( ".icontray1 li.fa-star" ).addClass('ft-select');
	$( ".icontray2 li.fa-user" ).addClass('ft-select');
	$( ".icontray3 li.fa-power-off" ).addClass('ft-select');		
	
    $(document).on("click",".icontray1 .nx-falist > li.fa",function() {
		
		var ft_value = $( this ).attr("data-value");

		$( ".icontray1 li.ft-select" ).removeClass('ft-select');
		$( this ).addClass('ft-select');
		$( "#customize-control-services1_icon input" ).val(ft_value);

		wp.customize( 'services1_icon', function ( obj ) {
			obj.set( ft_value );
		} );
    });	
	
    $(document).on("click",".icontray2 .nx-falist > li.fa",function() {
		
		var ft_value = $( this ).attr("data-value");

		$( ".icontray2 li.ft-select" ).removeClass('ft-select');
		$( this ).addClass('ft-select');
		$( "#customize-control-services2_icon input" ).val(ft_value);

		wp.customize( 'services2_icon', function ( obj ) {
			obj.set( ft_value );
		} );		
    });	
	
    $(document).on("click",".icontray3 .nx-falist > li.fa",function() {
		
		var ft_value = $( this ).attr("data-value");

		$( ".icontray3 li.ft-select" ).removeClass('ft-select');
		$( this ).addClass('ft-select');
		$( "#customize-control-services3_icon input" ).val(ft_value);

		wp.customize( 'services3_icon', function ( obj ) {
			obj.set( ft_value );
		} );		
    });	
	
    $(document).on("click",".icontray4 .nx-falist > li.fa",function() {
		
		var ft_value = $( this ).attr("data-value");

		$( ".icontray4 li.ft-select" ).removeClass('ft-select');
		$( this ).addClass('ft-select');
		$( "#customize-control-services4_icon input" ).val(ft_value);
		wp.customize( 'services4_icon', function ( obj ) {
			obj.set( ft_value );
		} );		
    });

});


( function( $ ) {

});