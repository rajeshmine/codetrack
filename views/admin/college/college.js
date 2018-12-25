
$(document).ready(function () {
	$('.datepicker').datepicker({
		dateFormat: 'yy-mm-dd',
    	changeMonth: true,
    	changeYear: true
	});
	collegedetailsget();
});

function collegedetailsget(){
	$.get("getcollegedetails.php", function (data, status) {
		if (status === 'success') {
			if (data) {
				let tempData = JSON.parse(data);
				if (tempData.length > 0) {
					$('#collegetable > tbody').empty();
					for (let item of tempData) {
						let status,class_,icon;
						if(item.status ==='Y'){
							status = "Active";
							class_="activestatus";
							icon = 'check';
						}else{
							status = "InActive";
							class_="inactivestatus";
							icon = 'times';
						}
						$('#collegetable > tbody').append(
							`
							<tr>
								<td>${item.sno}</td>
								<td>${item.collegeid}</td>
								<td>${item.collegename}</td>
								<td>${item.interviewdate}</td>
								<td class="${class_}" onclick="updatecollegedetails('${item.collegeid}','${status}')" title="Click for Status Change">
									<i class="fas fa-${icon}"></i> 
									${status}									
								</td>
							</tr>
						`
						);
					}
					$('#collegetable').dataTable();
				} else {
					$('#collegetable > tbody').empty();
					$('#collegetable > tbody').append(
						`
						<tr class="text-center">
							<td colspan="5">No Data Available!!!</td>
						</tr>
					`
					);
					$('#collegetable').dataTable({
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


function updatecollegedetails(collegeid,status){
	if(status === 'Active'){
		status= 'N';
	}else{
		status = 'Y';
	}
	$.get(`updatecollegedetails.php?collegeid=${collegeid}&status=${status}`, function (data, status) {
		if(status === 'success'){
			collegedetailsget();
		}else{
			alert("Data: " + data + "\nStatus: " + status);
		}
		
	});
}