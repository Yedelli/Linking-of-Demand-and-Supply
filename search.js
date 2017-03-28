$(document).ready(function () {
	$.getJSON("get/skill_list.php", function (list) {
		$.each(list, function (index, option) {
			$("#skills").append('<option value="' + option + '"></option>');
		});
	})
});