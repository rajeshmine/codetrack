$(document).ready(function () {
    problemget();
});

function problemget() {
    $.get(`getproblem.php`, function (data, status) {
        if (status === 'success') {
            if (data) {
                let tempData = JSON.parse(data);
                if (tempData.length > 0) {
                    $('.problemdiv').empty();
                    
                    for (let i = 0; i < tempData.length; i++) {
                        $('.problemdiv').append(`
                            <div class="problem">
                                <h4>${tempData[i].problem}</h4>
                                <p>${tempData[i].description}</p>
                                <div class="solveproblembtndiv">
                                    <button onclick="gotocodingtest(${tempData[i].sno})" class="solveproblembtn">Solve Problem</button>
                                </div>                                
                            </div>
                        `);
                    }
                } else {

                    console.log(data);
                }
            } else {
                console.log(data);
            }
        } else {
            alert('Failed to Get Data!!!')
        }
    });
}

function gotocodingtest(sno){
    console.log(sno)
    location.href=`../codingtest/codingtest.php?question=${sno}`;
}