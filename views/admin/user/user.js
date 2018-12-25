let email = [];
$(document).ready(function () {
	var date = new Date();
	let currentyear = date.getFullYear()+1;
	$('.datepicker').datepicker({
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true,
		yearRange: "1998:"+currentyear,
	});
	$('.yearofpassing').datepicker({
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true,
		yearRange: "2010:"+currentyear,
	});
	userdetailsget();
	departmentdetget();
});

function checkallfun(){
	$(".checkall").change(function () {
		var ischecked = $(this).is(':checked');
		if (ischecked) {
			$('.singlecheckbox').prop('checked', true);
			for (let i = 0; i < $('.singlecheckbox').length; i++) {
				let emailid = $('.singlecheckbox')[i];
				email.push(emailid.value);
			}
		} else {
			$('.singlecheckbox').prop('checked', false);
			email = [];
		}
	});
}

function singlecheckboxfun(){
	$(".singlecheckbox").each(function () {
		$(this).change(function () {			
			var ischecked = $(this).is(':checked');
			if (ischecked) {
				email.push($(this).val());
			} else {
				var removeItem = $(this).val()
				email = jQuery.grep(email, function(value) {
				return value != removeItem;
				});
				console.log(email)
			}
		});
	});
}

function userdetailsget() {
	$.get("getuserdetails.php", function (data, status) {
		if (status === 'success') {
			if (data) {
				let tempData = JSON.parse(data);
				if (tempData.length > 0) {
					$('#usertable > tbody').empty();
					for (let item of tempData) {
						let status, class_, icon,checkboxdisabled;
						if (item.status === 'Y') {
							status = "Active";
							class_ = "activestatus";
							icon = 'check';
						} else {
							status = "InActive";
							class_ = "inactivestatus";
							icon = 'times';
						}
						if(item.password !== ''){
							checkboxdisabled = "";
						}else{
							checkboxdisabled = `<input type="checkbox" class="singlecheckbox" value="${item.email}" />`;
						}
						console.log(item.password)
						$('#usertable > tbody').append(
							`
							<tr>
								<td>${checkboxdisabled}</td>
								<td>${item.name}</td>
								<td>${item.email}</td>
								<td>${item.password}</td>
								
								<td>${item.collegeid}</td>
								<td>${item.course}</td>
								<td>${item.department}</td>
								<td>${item.tenth_percentage}</td>
								<td>${item.twelth_percentage}</td>
								<td>${item.ug_cgpa}</td>
								<td>${item.pg_cgpa}</td>
								<td>${item.yearofpass}</td>
								<td class="${class_}" onclick="updateuserdetails('${item.sno}','${status}')" title="Click for Status Change">
									<i class="fas fa-${icon}"></i> 
									${status}									
								</td>
							</tr>
						`
						);
					}
					$('#usertable').dataTable();
					singlecheckboxfun();
					checkallfun();
				} else {
					$('#usertable > tbody').empty();
					$('#usertable > tbody').append(
						`
						<tr class="text-center">
							<td colspan="13">No Data Available!!!</td>
						</tr>
					`
					);
					$('#usertable').dataTable({
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


function updateuserdetails(sno, status) {
	if (status === 'Active') {
		status = 'N';
	} else {
		status = 'Y';
	}
	$.get(`updateuserdetails.php?sno=${sno}&status=${status}`, function (data, status) {
		if (status === 'success') {
			userdetailsget();
		} else {
			alert("Data: " + data + "\nStatus: " + status);
		}

	});
}


function departmentdetget() {

	$('select[name="excelcourse"]').change(function (e) {
		var course = $(this).val();
		$.get(`updateuserdetails.php?course=${course}`, function (data, status) {
			if (status === 'success') {
				if (data) {
					let tempData = JSON.parse(data);
					$('select[name="exceldepartment"]').empty();
					for (let item of tempData) {
						$('select[name="exceldepartment"]').append(`
								<option value="${item.department}">${item.department}</option>
							`
						);
					}
				}
			} else {
				alert("Data: " + data + "\nStatus: " + status);
			}
		});
	});

	$('select[name="course"]').change(function (e) {
		var course = $(this).val();
		$.get(`updateuserdetails.php?course=${course}`, function (data, status) {
			if (status === 'success') {
				if (data) {
					let tempData = JSON.parse(data);
					$('select[name="department"]').empty();
					for (let item of tempData) {
						$('select[name="department"]').append(`
								<option value="${item.department}">${item.department}</option>
							`
						);
					}
				}
			} else {
				alert("Data: " + data + "\nStatus: " + status);
			}
		});
	});
}


function passwordsend(){
	if(email.length > 0){
		for(let item of email){
			mailsend(item);
		}
	}else{
		alert('Please Select atleast one Email')
	}		
}




function mailsend(email){
	$.get(`email.php?email=${email}`, function (data, status) {
		if(status === 'success'){
			alert('Success');
			location.reload();
		}else{

		}		
	});
}