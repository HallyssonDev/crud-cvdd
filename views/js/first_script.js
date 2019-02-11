$("#btn").click(function () {
	$('.ui.labeled.icon.sidebar').sidebar('toggle');
});

$("#student").click(function() {
	$.ajax({
		type:'GET',
			url:'../views/js/student.html',
			data: 'data',
			dataType : 'html',
			success : window.location.replace("../")
	})
})