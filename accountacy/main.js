$(function(){
	$(".tip").change(function(){
		var id=$(".tip").val();

		$.ajax({
			url: "index.php",
			type: "POST",
			data: {id:id},
			success: function(data){
				$(".status").html(data);
			}
		});
	});
});