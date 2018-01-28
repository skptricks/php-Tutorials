<html>

<head>
    <link rel="stylesheet" type="text/css" href="design.css">
    <script src="jquery.min.js"></script>
</head>
<script>
    $(document).ready(function() {

        $("#submitform").on("click", function() {

            var message = $('textarea').val();

            if (message.length == "0") {
                $(".errorMsg").show();

            } else {

                $("#display-results").prepend("<div id='message' >" + linkify(message) + "</div>");
                $('textarea').val("");

            }
        });
    });

    function linkify(text) {
        var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
        return text.replace(exp, "<a href='$1' target='_blank'>$1</a>");
    }
</script>

<body>
    <center> <b> Convert Text URLs into Links Using Javascript. </b> </center>

    <div id="mainbox">
        <textarea rows="4" cols="65"></textarea>
        <div class="errorMsg">*Please enter the text.</div>

        <input type="button" class="button" id="submitform" value="Submit">
    </div>

    <div id="display-results"></div>

</body>

</html>