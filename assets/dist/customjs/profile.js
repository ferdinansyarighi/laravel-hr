$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    setSession();
});

function setSession(){
    $.ajax({
        type: "POST",
        url: "setSession",
        dataType: "json",
        data: {
            url : $("#url_list").val()
        },
        success: function (response) {
            document.getElementById('name_txt').value = (response.data.name);
            document.getElementById('email_txt').value = (response.data.email);
        }
    });
}