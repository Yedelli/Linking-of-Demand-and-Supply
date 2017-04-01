$(document).ready(function () {

	$.getJSON("get/skill_list.php", function (list) {
		var options = '';
		$.each(list, function (index, skill) {
			options += '<option value="' + skill + '"></option>';
		});
		$('#skills').html(options);
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
					workers.sort(sortByRating);
					var listOfWorkers = '';
					$.each(workers, function (index, worker) {
						listOfWorkers += workerToListItem(worker);
					});
					$('#resultList').html(listOfWorkers);
			});
		}
	});

});

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