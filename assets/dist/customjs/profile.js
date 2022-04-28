$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('#myTable').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true,
        language : {
            "zeroRecords": " "             
        }
    });

    getData();
});

function getData(){
    $.ajax({
        type: "POST",
        url: "getData",
        dataType: "json",
        async   : false,
        success: function (response) {
            var i = 0;
            var tab = "";
            var status = "";
            while(i<response.data.length){
                const timefrom = response.data[i].date_from.substring(10);
                const tfsplit = timefrom.split(":");
                const tf = tfsplit[0] + tfsplit[1];

                const timeto= response.data[i].date_to.substring(10);
                const ttsplit = timeto.split(":");
                const tt = ttsplit[0] + ttsplit[1];

                if(tf <= 900 && tt >= 1700){
                    status = "Valid";
                }else{
                    status = "Not Valid";
                }

                tab += "<tr>";
                tab += "<td>" + response.data[i].name + "</td>";
                tab += "<td>" + response.data[i].date_from.substring(0, 10) + "</td>";
                tab += "<td>" + response.data[i].date_from.substring(10) + "</td>";
                tab += "<td>" + response.data[i].date_to.substring(0, 10) + "</td>";
                tab += "<td>" + response.data[i].date_to.substring(10) + "</td>";
                tab += "<td>" + status + "<td>";
                tab += "</tr>"
                i++;
            }
            $('#tableFill').empty;
            $('#tableFill').append(tab);
        }
    });
}