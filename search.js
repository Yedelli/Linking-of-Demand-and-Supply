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
	        $.getJSON("get/employees.php",
	        	{
	        		skill: val.toLowerCase()
	        	},
	        	function (employees) {
	        	for (var i = employees.length - 1; i >= 0; i--) {
	        		alert(employees[i].fullName);
	        	}
	        });
	    }
	});

});