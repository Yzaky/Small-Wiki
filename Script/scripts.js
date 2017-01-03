$(".contentContainer").css("min-height",$(window).height());
$(document).ready(function(){
	$("#signupform").hide();
   	 $("#signupbtn").click(function(){
        $("#signupform").toggle();
	$("#errors").hide();	
    });
});
