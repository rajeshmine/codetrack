let formdata = new FormData();
let code, input, lang, inputRadio = 'false', javacode, pythoncode, htmlcode;
javacode = `
<textarea rows="4" cols="50" name="code" id="code">
    import java.io.*;
    import java.math.*;
    import java.security.*;
    import java.text.*;
    import java.util.*;
    import java.util.concurrent.*;
    import java.util.regex.*;
    //Don't change the Class Name 
    class  Main {
        public static void main(String[] args) {
            int num = 29;
            boolean flag = false;
            for(int i = 2; i <= num/2; ++i)
            {
                // condition for nonprime number
                if(num % i == 0)
                {
                    flag = true;
                    break;
                }
            }
            if (!flag)
                System.out.println(num + " is a prime number.");
            else
                System.out.println(num + " is not a prime number.");
        }
    }
</textarea>
`;
pythoncode = `
<textarea rows="4" cols="50" name="code" id="code">
print('Hello, world!');
</textarea>
`;
htmlcode = `
<textarea rows="4" cols="50" name="code" id="code">
<!DOCTYPE html>
<html>
    <title>HTML Tutorial</title>
    <body>

        <h1>This is a heading</h1>
        <p>This is a paragraph.</p>

    </body>
</html>
</textarea>
`;
$(document).ready(function () {


    document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            
            return false;
        } else {
            return true;
        }
};


    $('.codeouterdiv').empty();
    $('.codeouterdiv').append(javacode);
    CodeMirrorInit('text/x-java');
    $('#inputdiv,#outputscreen,.settingsdiv').hide();
    $('#inputRadio').change(function () {
        if ($(this).prop("checked")) {
            inputRadio = 'true';
            $('#inputdiv').show();
        } else {
            inputRadio = 'false';
            $('#inputdiv').hide();
        }
    });
    codemirrorkeyup();
    $('#languageselect').change(function () {
        if ($(this).val() === 'Web') {
            $('#previewTarget').css("background", "#fff");
            inputoutputscreenreset();
            $('#inputRadiocolumn').hide();
            $('.codeouterdiv').empty();
            $('.codeouterdiv').append(htmlcode);
            CodeMirrorInit('text/html');
            codemirrorkeyup();
        } else if ($(this).val() === 'python') {
            $('#previewTarget').css("background", "#000");
            inputoutputscreenreset();
            $('#inputRadiocolumn').show();
            $('.codeouterdiv').empty();
            $('.codeouterdiv').append(pythoncode);
            CodeMirrorInit('text/x-python');
            codemirrorkeyup();
        } else if ($(this).val() === 'java') {
            $('#previewTarget').css("background", "#000");
            inputoutputscreenreset();
            $('#inputRadiocolumn').show();
            $('.codeouterdiv').empty();
            $('.codeouterdiv').append(javacode);
            CodeMirrorInit('text/x-java');
            codemirrorkeyup();
        }
    });

    
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
                    console.log(data)
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


