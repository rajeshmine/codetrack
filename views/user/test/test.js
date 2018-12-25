let answer = [];
let useranswer = [];
let questionlength = 0;
let result = 0;
let cutoff;
let questions;
$(document).ready(function () {
	gettimedetails();

});

function timer(min) {
	var insertZero = n => n < 10 ? "0" + n : "" + n,
		displayTime = n => n ? time.textContent = insertZero(~~(n / 3600) % 3600) + ":" +
			insertZero(~~(n / 60) % 60) + ":" +
			insertZero(n % 60)
			: resultfun('timeout'),
		countDownFrom = n => (displayTime(n), setTimeout(_ => n ? sid = countDownFrom(--n)
			: displayTime(n), 1000)), sid;
	countDownFrom(+(min * 60));

}

function resultfun(data) {

	result = 0;
	for (let i = 0; i < questionlength; i++) {
		if (answer[i] === useranswer[i]) {
			result++;
		} else {
			result = result;
		}
		if (i == questionlength - 1) {
			var notattend = useranswer.length - useranswer.filter(String).length;
			var attend = +(useranswer.length) - +(notattend);
			if (data === 'submit') {

				$.confirm({
					title: 'Confirm!',
					content: 'You are Attend  <b>' + attend + '</b> Questions. Are you want to Submit the Answers',
					buttons: {
						confirm: function () {
							$.get(`postresult.php?questions=${questionlength}&attend=${attend}&notattend=${notattend}&result=${result}&cutoff=${+(cutoff)}`, function (data, status) {
								if (status === 'success') {
									if (data) {
										location.href = "../finalpage/finalpage.php";
									} else {
										console.log(data);
									}
								} else {
									alert('Failed!!!')
								}
							});
						},
						cancel: function () {

						}
					}
				});

			} else {
				$.get(`postresult.php?questions=${questionlength}&attend=${attend}&notattend=${notattend}&result=${result}&cutoff=${+(cutoff)}`, function (data, status) {
					if (status === 'success') {
						if (data) {
							location.href = "../finalpage/finalpage.php";
						} else {
							console.log(data);
						}
					} else {
						alert('Failed!!!')
					}
				});
			}
		}
	}
}

function gettimedetails() {
	$.get("gettime.php", function (data, status) { 
		if (status.trim() === 'success') {
			if (data) {
				let tempData = JSON.parse(data);
				console.log(status.trim() === 'success',tempData,data)
				if (tempData.length > 0) {
					questions = tempData[0].questions;
					timer(tempData[0].time);
					cutoff = tempData[0].cutoff;
					testdetailsget();
				}
			}
		}
	});
}
function testdetailsget() {
	console.log('hi')
	$.get(`gettest.php?limit=${questions}`, function (data, status) {

		if (status.trim() === 'success') {
			if (data) {
				let tempData = JSON.parse(data);
				pagination(tempData);
				lftQuestionList(tempData);
				if (tempData.length > 0) {
					questionlength = tempData.length;
					answer = [];
					for (let i = 0; i < tempData.length; i++) {
						answer.push(tempData[i].answer);
						useranswer.push('');
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

function useranswerfun(i, answer) {
	useranswer[i - 1] = answer;
}

function optionlabelfun() {
	$('.quesionoptiondiv').each(function () {
		$(this).find('label').each(function () {
			$(this).click(function () {
				$(this).parent().find('label').removeClass('optionselected');
				$(this).addClass('optionselected');
			});

		});
	});
}


function pagination(tempData) {
	$('#pagination-container').pagination({
		dataSource: tempData,
		pageSize: 1,
		showPageNumbers: true,
		showNavigator: false,
		showPrevious: true,
		showPageNumbers: false,
		prevText: 'Prev',
		nextText: 'Next',
		className: 'PageinationStyle',
		callback: function (data, pagination) {
			var html = template(data, pagination);
			$('.lftstyle > div').removeClass('active');
			$('.' + pagination.pageNumber).addClass('active');
			$('#data-container').html(html);
		}
	});
}


function template(data, pagination) {

	var html = '';
	let temp, prevanswer;
	let checkeda, checkedb, checkedc, checkedd, checkede;
	$.each(data, function (index, item) {
		checkeda = '';
		checkedb = '';
		checkedc = '';
		checkedd = '';
		checkede = '';
		if (useranswer[pagination.pageNumber - 1]) {
			prevanswer = useranswer[pagination.pageNumber - 1];
			switch (prevanswer) {
				case 'A':
					checkeda = 'checked';
					break;
				case 'B':
					checkedb = 'checked';
					break;
				case 'C':
					checkedc = 'checked';
					break;
				case 'D':
					checkedd = 'checked';
					break;
				case 'E':
					checkedc = 'checked';
					break;
			}
		}
		temp = `<label class="optionlabel">
			<input type="radio" value="A"  onchange="useranswerfun(${pagination.pageNumber},'A')" name="question${pagination.pageNumber}" ${checkeda}>
			A)  ${item.optiona}
			</label>
			<label class="optionlabel">
			<input type="radio" value="B"  onchange="useranswerfun(${pagination.pageNumber},'B')" name="question${pagination.pageNumber}" ${checkedb}>
			B) ${item.optionb}
			</label>`;
		if (item.optionc !== '') {
			temp += `<label class="optionlabel">
							<input type="radio" value="C"  onchange="useranswerfun(${pagination.pageNumber},'C')" name="question${pagination.pageNumber}" ${checkedc}>
							C) ${item.optionc}
							</label>`;
		}
		if (item.optiond !== '') {
			temp += `<label class="optionlabel">
				<input type="radio" value="D"  onchange="useranswerfun(${pagination.pageNumber},'D')" name="question${pagination.pageNumber}" ${checkedd}>
				D) ${item.optiond}
 				</label>
				`;
		}
		if (item.optione !== '') {
			temp += `<label class="optionlabel">
				<input type="radio" value="E"  onchange="useranswerfun(${pagination.pageNumber},'E')" name="question${pagination.pageNumber}" ${checkede}>
				E) ${item.optione}
				</label>
				`;
		}
		html +=
			`<div class="questionindividual">
				<p>
				${pagination.pageNumber} . ${item.question}
				</p>
				<div class="quesionoptiondiv">               
					${temp}
				</div>
			</div>`
			;
	});
	html += '';
	optionlabelfun();
	return html;
}



function lftQuestionList(data = []) {
	$('.lftstyle').empty()
	data.map((item, index) => {
		let temp = `<div onclick="gotoPage(event,${index + 1});" class="${index + 1} ${(index + 1) === 1 ? 'active' : ''}">
		<span class="${index + 1} indexno">${index + 1} </span> <span class="${index + 1} questionSyle">${item.question}</span> 
	   </div> `;
		$('.lftstyle').append(temp);
		$('#Qcount,#Qmark').text(index + 1);
	});
}

function gotoPage(e, pageNo = 1) {
	console.log(e)
	$('.lftstyle > div').removeClass('active');
	$('.' + e.target.classList[0]).addClass('active');
	console.log(e.target.classList[0])
	$('#pagination-container').pagination(+pageNo);
}

function fulSCreen() {
	var elem = document.getElementById('body');
	
	if (elem.requestFullscreen) {
		elem.requestFullscreen();
	} else if (elem.msRequestFullscreen) {
		elem.msRequestFullscreen();
	} else if (elem.mozRequestFullScreen) {
		elem.mozRequestFullScreen();
	} else if (elem.webkitRequestFullscreen) {
		elem.webkitRequestFullscreen();
	}
}