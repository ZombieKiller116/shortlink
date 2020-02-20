$( document ).ready(function() {
	$("#exampleFormControlSelect1").change(function() {
		var str = "";
    	$( "select option:selected" ).each(function() {
			str += $( this ).text() + " ";
    	});
    	if(str === 'private(by password) ') {
    		$(".pas1").css('display', 'block');
    	} else {
    		$(".pas1").css('display', 'none');
    	}

	});
});