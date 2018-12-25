let email = [];

$(document).ready(function () {
    getcodingresult();
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
                console.log(email)
			} else {
				var removeItem = $(this).val()
				email = jQuery.grep(email, function(value) {
				return value != removeItem;
				});
				
			}
		});
	});
}


function getcodingresult() {
    let trstatus;
    $.get("getcodingresult.php", function (data, status) {
        if (status === 'success') {
            if (data) {
                let tempData = JSON.parse(data);
                if (tempData.length > 0) {
                    let checkboxdisabled;
                    $('#resulttable >tbody').empty();
                    for (var i = 0; i < tempData.length; i++) {
                        if ((+tempData[i].App_Result >= +tempData[i].App_Cutoff) && (+tempData[i].Tech_Result >= +tempData[i].Tech_Cutoff)) {
                            trstatus = 'successtr';
                        } else if ((+tempData[i].App_Result >= +tempData[i].App_Cutoff) || (+tempData[i].Tech_Result >= +tempData[i].Tech_Cutoff)) {
                            trstatus = 'warningtr';
                        } else {
                            trstatus = 'dangertr';
                        }
                        if(tempData[i].gdstatus === 'Y'){
                            checkboxdisabled = '';
                        }else{
                            checkboxdisabled = `<input type="checkbox" class="singlecheckbox" value="${tempData[i].email}" />`;
                        }
                        

                        $('#resulttable >tbody').append(`
                        <tr class="${trstatus}">
                        <td>${checkboxdisabled}</td>
                        <td>${i + 1}</td>
                        <td>${tempData[i].name}</td>
                        <td>${tempData[i].email}</td>
                        <td>${tempData[i].collegeid}</td>													
                        <td>${tempData[i].course}</td>													
                        <td>${tempData[i].department}</td>
                        <td><button class="sendpasswordbtn"  onclick="codingresult('${tempData[i].email}')">View</button></td>											
                        </tr>
                                `
                        );

                    }
                    $('#resulttable').dataTable();
                    checkallfun();
                    singlecheckboxfun();
                }
            } else {
                console.log(data);
            }
        } else {
            alert('Failed to Get Data!!!')
        }
    });
}

function codingresult(email) {
    $.get(`getproblemuser.php?email=${email}`, function (data, status) {
        if (status === 'success') {
            if (data) {
                let tempData = JSON.parse(data);
                if (tempData.length > 0) {
                    
                    for(let item of tempData){
                        $('.codinganswer').append(`
                            <div>
                                <p>${item.problem}
                                </p>
                                <div class="text-right">

                                <button class="viewanswerpbmbtn" onclick="gotocodingtest(${item.questionno},'${item.filepath}')">View</button>
                                </div>
                            </div>
                        `);
                    }
                   console.log(tempData)

                }
                   
                   
               
            } else {
                console.log(data);
            }
        } else {
            alert('Failed to Get Data!!!')
        }
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
            console.log(data)
			alert('Success');
			location.reload();
		}else{

		}		
	});
}

function gotocodingtest(sno,filepath){
    console.log(sno)
    location.href=`../testing/codingtest.php?question=${sno}&filepath=${filepath}`;
}