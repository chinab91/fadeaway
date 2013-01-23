$(document).ready(function() {
    request = new XMLHttpRequest();

    request.open("GET", "/index.php/request", true);
    request.onreadystatechange = receivedData;
    request.send(null);
});

function receivedData()
{
    // if request object received response
    if (request.readyState === 4)
    {
        // parser.php response
            
        var Jsontext = request.responseText;
        var JsonObj = null;
        try {
            JsonObj = jQuery.parseJSON(Jsontext);
        } catch (e) {
            var err = "Error: " + e.description;
            alert(err);
        }
        if(JsonObj !== null){
            
                $("#boxContent4").text(JsonObj.content);
            
        }
    }
}
