
$(document).ready(function () {
	
	coursedetailsget();
});

function coursedetailsget(){
	$.get("getcoursedetails.php", function (data, status) {
		if (status === 'success') {
			if (data) {
                
                let tempData = JSON.parse(data);              
               
				if (tempData.length > 0) {
					$('#coursetable > tbody').empty();
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
						$('#coursetable > tbody').append(
							`
							<tr>
								<td>${item.sno}</td>
								<td>${item.course}</td>
								<td>${item.department}</td>
								<td class="${class_}" onclick="updatecoursedetails('${item.sno}','${status}')" title="Click for Status Change">
									<i class="fas fa-${icon}"></i> 
									${status}									
								</td>
							</tr>
						`
						);
					}
					$('#coursetable').dataTable();
                } else {
                    
					$('#coursetable > tbody').empty();
					$('#coursetable > tbody').append(
						`
						<tr class="text-center">
							<td colspan="5">No Data Available!!!</td>
						</tr>
					`
					);
					$('#coursetable').dataTable({
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


function updatecoursedetails(sno,status){
	if(status === 'Active'){
		status= 'N';
	}else{
		status = 'Y';
	}
	$.get(`updatecoursedetails.php?sno=${sno}&status=${status}`, function (data, status) {
		if(status === 'success'){
			coursedetailsget();
		}else{
			alert("Data: " + data + "\nStatus: " + status);
		}
		
	});
}