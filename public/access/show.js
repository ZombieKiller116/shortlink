$(document).ready(function() {
	$("#but").click(function() {
		let link = $("#link").val();

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$.ajax({
		  method: "GET",
		  url: "redirect",
		  data: { link: link, ajax: true }
		})
		  .done(function( msg ) {
		    if(!msg.error && msg.link) {
		    	$('#myModal').modal();
		    	$('#modal_link').attr('href', msg.link);
		    } else {
		    	$('#myModal2').modal();
		    	$('#danger').text(msg.error);
		    }
		  });
	})
});