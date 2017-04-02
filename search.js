$(document).ready(function () {
	// Generic error dialog which can be reused with custom error msg.
	var errorDialog = document.getElementById('connectionError');
	if (! errorDialog.showModal) {
		dialogPolyfill.registerDialog(errorDialog);
	}
	$('.close').click(function () {
		errorDialog.close();
	});

	// Get all types of skills from the server and fill the datalist options.
	$.getJSON("get/skill_list.php", function (list) {
		var options = '';
		$.each(list, function (index, skill) {
			options += '<option value="' + skill + '"></option>';
		});
		$('#skills').html(options);
	});

	// If the user input matches with one of the skills, get the list of workers with matching skill.
	$("#skillInput").on('input', function () {
		var val = this.value;
		if($('#skills').find('option').filter(function () {
			return this.value.toUpperCase() === val.toUpperCase();        
		}).length) {
			getWorkersWithSkill(val);
		}
	});

	// If the user presses enter, take appropriate action.
	$("#skillInput").keypress(function (key) {
		if (key.which === 13) {
			var val = this.value;
			if(!$('#skills').find('option').filter(function () {
				return this.value.toUpperCase() === val.toUpperCase();        
			}).length) {
				$(errorDialog).find('.errorMsg').html('Please select an item from the drop-down');
				errorDialog.showModal();
			}
		}
	});


	// Gets the list of all workers with matching skill and displays the result.
	function getWorkersWithSkill(skill) {
		// Show a progress bar
		var progressBar = document.createElement('div');
		progressBar.id = 'progressBar';
		progressBar.className = 'mdl-progress mdl-js-progress mdl-progress__indeterminate';
		progressBar.style.width = "100%";
		componentHandler.upgradeElement(progressBar);
		$('#resultCell').prepend(progressBar);

		// Get the list of workers
		$.getJSON("get/workers.php",
			{
				skill: skill.toLowerCase()
			},
			function (workers) {
				if (workers.length === 0) {
					$('#progressBar').remove();
					$("#resultCell").html('<p style="text-align: center;">No workers found with the selected skill.</p>');
					return;
				}
				
				workers.sort(sortByRating);
				var listOfWorkers = '<ul id="resultList" class="mdl-list" style="width: 100%">';
				$.each(workers, function (index, worker) {
					listOfWorkers += workerToListItem(worker);
				});
				listOfWorkers += '</ul>';
				$('#progressBar').remove();
				$('#resultCell').html(listOfWorkers);
		}).fail(function () { // If the connection fails
			$('#progressBar').remove();
			$(errorDialog).find('.errorMsg').html('Something went wrong while connecting to the server. Please try again.');
			errorDialog.showModal();
		});
	}

});

// Converts the worker's data to a <li> with appropriate classes
function workerToListItem(worker) {
	var newWorker =
	'<li class="mdl-list__item mdl-list__item--three-line">\
		<span class="mdl-list__item-primary-content">\
			<i class="material-icons mdl-list__item-avatar">person</i>\
			<span>' + worker.fullName + '</span>\
			<span class="mdl-list__item-text-body">\
			Skills: '+ worker.skills +
			'<br/>City: ' + worker.city +
			'</span>\
		</span>\
			<span class="mdl-list__item-secondary-content">'
			+ worker.rating + '/5\
			<i class="material-icons">star</i>\
		</span>\
	</li>';
	return newWorker;
}

function sortByRating(w1, w2) {
	var rating1 = Number(w1.rating);
	var rating2 = Number(w2.rating);
	return ((rating1 < rating2) ? 1 : ((rating2 < rating1) ? -1 : 0));
}