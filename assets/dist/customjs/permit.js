$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function saveData(){
    var d = document.getElementById('date_txt').value
    var today = new Date(d);
    var tonext = new Date();
    var err = 0;
    var type = document.getElementById('type_txt').value;
    if(type === "cuti"){
        tonext.setDate(tonext.getDate() + 1);
        if(today < tonext){
            err++;
        }
    }else{
        tonext.setDate(tonext.getDate() + 3);
        if(today > tonext){
            err++;
        }
    }
    
    if(err === 0){
        $.ajax({
            type: "POST",
            url: "saveData",
            dataType: "json",
            data: {
                user_id : $("#id_txt").val(),
                type    : $("#type_txt").val(),
                date    : $("#date_txt").val()
            },
            success: function (response) {
                if(response.data === true){
                    msgbox('success',"Permission submitted");
                    $("#date_txt").val("");
                    $("#type_txt").val("cuti");
                }
            }
        });
    }else{
        msgbox('error',"You've been reached maximum permission date")
    }
}