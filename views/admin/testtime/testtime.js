$(document).ready(function () {
    testtimedetailsget();
});

function testtimedetailsget(){
	$.get("gettesttime.php", function (data, status) {
		if (status === 'success') {
			if (data) {
				let tempData = JSON.parse(data);
				if (tempData.length > 0) {
					$('#testtimetable > tbody').empty();
					for (let item of tempData) {
						
						$('#testtimetable > tbody').append(
							`
							<tr onclick="updatetesttime('${item.testtype}',${item.questions},${item.cutoff},${item.time})">
								<td>${item.sno}</td>
								<td>${item.testtype}</td>
								<td>${item.questions}</td>
								<td>${item.cutoff}</td>
								<td>${item.time}</td>													
							</tr>
						`
						);
					}
					$('#testtimetable').dataTable();
				} else {
					$('#testtimetable > tbody').empty();
					$('#testtimetable > tbody').append(
						`
						<tr class="text-center">
							<td colspan="5">No Data Available!!!</td>
						</tr>
					`
					);
					$('#testtimetable').dataTable({
					});
					
				}
			} else {
				console.log(data);
			}
		} else {
			alert('Failed to Get Data!!!')
		}
	});
}


function updatetesttime(testtype,questions,cutoff,time){
	$('select[name="testtype"]').val(testtype);
	$('input[name="questions"]').val(questions);
	$('input[name="cutoff"]').val(cutoff);
	$('input[name="time"]').val(time);
}