var request;
$(document).ready(setInterval(function() {
    if (request) {
        request.abort();
    }
    
    var data = {topic_id : 0};
    JSON.stringify(data);
    
    var request = $.ajax({
        type: "POST",
        url: "/index.php/request",
        data: data,
        success: function(data) {
            receivedData(data);
        },
        dataType: 'json'
    });

}, 4000));

function receivedData(data)
{
    // if request object received response
        // parser.php response

        var random12 = 1 + Math.floor(Math.random() * 12);
        if (data.content !== null) {
            fadeInOut($("#boxContent" + random12), data.content);
            //$("#boxContent" + random12).text(JsonObj.content);

        }

}
