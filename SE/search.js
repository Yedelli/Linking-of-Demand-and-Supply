$(document).ready(function () {

	// Get all types of skills from the server and fill the datalist options.
	$.getJSON("get/skill_list.php", function (list) {
		var options = '';
		$.each(list, function (index, skill) {
			options += '<option value="' + skill + '"></option>';
		});
		$('#skills').html(options);
	});

	// If the user input matches with one of the skills, get the list of employees with matching skill.
	$("#skillInput").on('input', function () {
		var val = this.value;
		if($('#skills').find('option').filter(function () {
			return this.value.toUpperCase() === val.toUpperCase();        
		}).length) {
			getEmployeesWithSkill(val);
		}
	});

	// If the user-entered city matches with one of the cities or the input is empty, filter the list of employees.
	$("#cityInput").on('input', function () {
		var val = this.value;
		if(val === '' || $('#cities').find('option').filter(function () {
			return this.value.toUpperCase() === val.toUpperCase();        
		}).length) {
			filterByCity();
		}
	});

	// If the user presses enter, take appropriate action.
	$("#skillInput").keypress(function (key) {
		if (key.which === 13) {
			var val = this.value;
			if(!$('#skills').find('option').filter(function () {
				return this.value.toUpperCase() === val.toUpperCase();        
			}).length) {
				$('#errorMsg').html('Please select an item from the drop-down');
				$('#errorModal').modal('show');
			}
		}
	});

	// If the user clicks the search button, take appropriate action.
	$("#serachBtn").on('click', function () {
		var val = $("#skillInput").val();
		if(!$('#skills').find('option').filter(function () {
			return this.value.toUpperCase() === val.toUpperCase();        
		}).length) {
			$('#errorMsg').html('Please select an item from the drop-down');
			$('#errorModal').modal('show');
		}
	});


	// Gets the list of all employees with matching skill and displays the result.
	function getEmployeesWithSkill(skill) {
		// Show a progress bar
		var progressBar = '\
		<div class="progress progress-striped active" id="progressBar">\
			<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">\
			</div>\
		</div>\
		';
		$('#results').html(progressBar);

		// Get the list of employees
		$.getJSON("get/employees.php",
			{
				skill: skill.toLowerCase()
			},
			function (employees) {
				if (employees.length === 0) {
					$('#progressBar').remove();
					$("#results").html('<p style="text-align: center;">No employees found with the selected skill.</p>');
					return;
				}
				
				employees.sort(sortByRating);
				var listOfemployees = '<ul class="list-group" id="resultList" style="margin-top: 1%;">';
				$.each(employees, function (index, employee) {
					listOfemployees += employeeToListItem(employee);
				});
				listOfemployees += '</ul>';
				$('#progressBar').remove();
				$('#results').html(listOfemployees);
				filterByCity();
		}).fail(function () { // If the connection fails
			$('#progressBar').remove();
			$('#errorMsg').html('Something went wrong while connecting to the server. Please try again.');
			$('#errorModal').modal('show');
		});
	}

});

// Converts the employee's data to a <li> with appropriate classes
function employeeToListItem(employee) {
	var imgSrc = '';
	if (employee.image === '') {
		imgSrc = "//style.anu.edu.au/_anu/4/images/placeholders/person.png";
	} else {
		imgSrc = "./upload/" + employee.image;
	}
	var newemployee =
	'<a href="./profile.php?userid=' + employee.userid + '">\
		<li class="list-group-item" data-city="' + employee.city + '">\
			<div class="col-xs-12 col-sm-2">\
				<img src="' + imgSrc + '" alt="no photo available" class="img-thumbnail" style="height: 100px; width: 100px;"/>\
			</div>\
			<div class="col-xs-12 col-sm-10">\
				<span class="glyphicon glyphicon-star pull-right pulse" title="rating">' + employee.rating + '/5</span>\
				<span class="name">' + employee.name + '</span><br>\
				Experience: <span class="text-muted">' + employee.experience + ' years</span><br>\
				City: <span class="text-muted">' + employee.city + '</span><br>\
				Gender: <span class="text-muted">' + employee.gender + '</span><br>\
			</div>\
			<div class="clearfix"></div>\
		</li>\
	</a>';
	return newemployee;
}

function sortByRating(w1, w2) {
	var rating1 = Number(w1.rating);
	var rating2 = Number(w2.rating);
	return ((rating1 < rating2) ? 1 : ((rating2 < rating1) ? -1 : 0));
}

function filterByCity() {
	if ($('#cityInput').val() === '') {
		$("#resultList").find('li').each(function (index, option) {
			$(option).show();
		});
		return;
	}

	var city = $('#cityInput').val();

	$("#resultList").find('li').each(function (index, option) {
		if ($(this).data('city').toUpperCase() === city.toUpperCase()) {
			$(this).show();
		} else {
			$(this).hide();
		}
	});
}
