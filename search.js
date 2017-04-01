$(document).ready(function () {

	$.getJSON("get/skill_list.php", function (list) {
		$.each(list, function (index, option) {
			$("#skills").append('<option value="' + option + '"></option>');
		});
	});

	$("#skillInput").on('input', function () {
	    var val = this.value;
	    if($('#skills').find('option').filter(function(){
	        return this.value.toUpperCase() === val.toUpperCase();        
	    }).length) {
	        $.getJSON("get/workers.php",
	        	{
	        		skill: val.toLowerCase()
	        	},
	        	function (workers) {
	        	for (var i = workers.length - 1; i >= 0; i--) {
	        		alert(workers[i].fullName);
	        	}
	        });
	    }
	});

});