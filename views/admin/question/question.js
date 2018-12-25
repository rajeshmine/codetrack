let testtype = 'Apptitude';
$(document).ready(function () {
    $('.questypehead').text(testtype);
    questionviewsbytesttype();
});
function filtertesttype(testtypeval) {
    testtype = testtypeval;
    $('.questypehead').text(testtype);
    questionviewsbytesttype();
}

function questionviewsbytesttype() {
    $.get(`getquestiondetails.php?testtype=${testtype}`, function (data, status) {
        if (status === 'success') {
            if (data) {
                let tempData = JSON.parse(data);
                if (tempData.length > 0) {
                    mcqpagination(tempData);
                }
            } else {
                console.log(data);
            }
        } else {
            alert('Failed to Get Data!!!')
        }
    });

    $.get(`getproblemdetails.php`, function (data, status) {
        if (status === 'success') {
            if (data) {
                let tempData = JSON.parse(data);
                if (tempData.length > 0) {
                    pbmpagination(tempData);
                }
            } else {
                console.log(data);
            }
        } else {
            alert('Failed to Get Data!!!')
        }
    });
}

function mcqpagination(tempData) {
    $('#mcq-pagination-container').pagination({
        dataSource: tempData,
        pageSize: 1,
		showPageNumbers: true,
		showNavigator: false,
        callback: function (data, pagination) {
            var html = mcqtemplate(data,pagination);
            $('#mcq-container').html(html);
        }
    });
}

function pbmpagination(tempData) {
    $('#problem-pagination-container').pagination({
        dataSource: tempData,
        pageSize: 1,
		showPageNumbers: true,
		showNavigator: false,
        callback: function (data, pagination) {
            var html = pbmtemplate(data,pagination);
            $('#problem-container').html(html);
        }
    });
}

function mcqtemplate(data,pagination) {
    let label = '',correcta='',correctb='',correctc='',correctd='',correcte='';
    var html = '<div class="row mar0 questionpagination">';
    $.each(data, function (index, item) { 
        switch(item.answer){
            case 'A':
                correcta = "correctanswer";
                break;
            case 'B':
                correctb = "correctanswer";
                break;
            case 'C':
                correctc = "correctanswer";
                break;
            case 'D':
                correctd = "correctanswer";
                break;
            case 'E':
                correcte = "correctanswer";
                break;
        }
        label += `
            <label class="optionlabel ${correcta}">              
                A)  ${item.optiona}
            </label>
            <label class="optionlabel ${correctb}">                
                B) ${item.optionb}
            </label>
        `;
        if(item.optionc !== ''){
            label += `
                <label class="optionlabel ${correctc}">                       
                    C) ${item.optionc}
                </label>
            `;
        }
        if(item.optiond !== ''){
            label += `
                <label class="optionlabel ${correctd}">                       
                    D) ${item.optiond}
                </label>
            `;
        }
        if(item.optione !== ''){
            label += `
                <label class="optionlabel ${correcte}">                       
                    D) ${item.optione}
                </label>
            `;
        }
        html += `<div class="questionindividual">
            <p>
               ${pagination.pageNumber} .  ${item.question}
            </p>
            <div class="quesionoptiondiv">               
               ${label}
            </div>`;
    });
    html += '</div>';
    return html;
}

function pbmtemplate(data,pagination) {    
    var html = '';
    $.each(data, function (index, item) {   
        console.log(item)    
        html += `
            <div class="problem">
                <h4>${index+1} . ${item.problem}</h4>
                <p>${item.description}</p>                                         
            </div>
            `;
    });
    html += '';
    return html;
}



