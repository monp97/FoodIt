<html>
<body>
<div id="message"></div>

</body>
<script type="text/javascript">
    var requestURL = 'https://maps.googleapis.com/maps/api/place/search/json?location=-33.8670522,151.1957362&radius=500&types=food&name=harbour&sensor=false&key='my_google_places_key';
    $(document).ready(function () {
        $.getJSON(requestURL, function (data) {
            for (i = 0; i < data.results.length; i++) {
                myAddress[i] = data.results[i].formatted_address;
                document.getElementById("message").innerHTML += myAddress[i] + "<br>";
                console.log(myAddress[i]);
            }

        });
    });
</script>

</html>
