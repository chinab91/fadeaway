var request;
$(document).ready(setInterval(function() {
    if (request) {
        request.abort();
    }

    var data={};
    data['topic_id'] = topic_id ;
    data['entries_id'] = entries_id;
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

    var random12 = 1 + Math.floor(Math.random() * 11);
    if (data !== null) {
        fadeInOut($("#boxContent" + random12), data['content']);
        entries_id[random12-1] = data['entry_id'];
        //$("#boxContent" + random12).text(JsonObj.content);

    }

}
