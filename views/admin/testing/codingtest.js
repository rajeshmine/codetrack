let formdata = new FormData();
let code, input, lang, inputRadio = 'false';

$(document).ready(function () {
    
    CodeMirrorInit('text/x-java');  
    
    codemirrorkeyup();

    
});

function codemirrorkeyup(){

   

    $('.CodeMirror').keyup(function () {
        updateTextArea();
    });
}
function compilecode() {
    let url = `compile.php`;
    code = $('#code').val();
    lang = $('#languageselect').val();
    input = $('#input').val();
    var dataString = 'code=' + encodeURIComponent(code) + '&input=' + encodeURIComponent(input) + '&language=' + encodeURIComponent(lang);
    if (lang !== '') {
        if (lang === 'Web') {
            $('#outputscreen').show();
            var targetp = $("#previewTarget")[0].contentWindow.document;
            targetp.open();
            targetp.close();
            $('body', targetp).append(code);
        } else {

            if (code !== '') {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: dataString,

                }).done(data => {
                    if (data) {
                        $('#outputscreen').show();
                        var targetp = $("#previewTarget")[0].contentWindow.document;
                        targetp.open();
                        targetp.close();
                        $('body', targetp).append(`<b style="color:#fff;">${data}</b>`);
                    }
                    
                }).catch(e => {
                    alert(`URL : ${url}\nStatusCode:${e.status}\nDescription:${e.statusText}`);
                });
            } else {
                alert('Input Should not Empty!!!')
            }


        }
    } else {
        alert('Select Language');
    }
}
var editableCodeMirror;
function CodeMirrorInit(language) {
    editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('code'), {
        mode: language,
        lineNumbers: true,
        styleSelectedText: true,
        lineWrapping: true,
        styleActiveLine: true,
        styleActiveSelected: true,
    });

}



function updateTextArea() {
    editableCodeMirror.save();
}

$(document).ready(function () {
    $('.themebtn').each(function () {
        $(this).click(function () {
            $('.themebtn').removeClass('themeselected');
            $(this).addClass('themeselected');
            selectTheme($(this).val());
        });
    });
});
function selectTheme(theme) {
    editableCodeMirror.setOption("theme", theme);
}
function settingsdivtoggle() {
    $('.settingsdiv').toggle();
}
function inputoutputscreenreset() {
    $('#input').val('');
    $("#inputRadio").prop('checked', false);
    inputRadio = 'false';
    var targetp = $("#previewTarget")[0].contentWindow.document;
    targetp.open();
    targetp.close();
    $('body', targetp).append('');
    $('#inputdiv,#outputscreen,.settingsdiv').hide();
}


