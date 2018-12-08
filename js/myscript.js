$(document).ready(function(){
		$('#submit').click(function(){
			var a = $("#name").val();
			var b = $("#phone").val();
			var c = $("#message").val();
			$.post('js/contact_me.php', { name:a, phone:b, message:c}, function(data){
			});
		
	});

});

