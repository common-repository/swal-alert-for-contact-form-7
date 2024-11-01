jQuery(".wpcf7-submit").click(function(event){
	jQuery(document).ajaxComplete(function(){
		myclass=jQuery(".wpcf7-response-output").hasClass("wpcf7-validation-errors") ? "alert":"succes";
		swal(jQuery(".wpcf7-response-output").html());
		jQuery(".wpcf7-response-output").css("display", "none");
	});
});