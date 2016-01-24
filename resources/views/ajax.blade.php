<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Request</title>
    </head>
    <body>
        <h1 id="head"></h1>
        <button type="button" id="submit">REQUEST</button>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#submit').click(function() {
                    $.get('ajaxrequest', function(data) {
                        console.log(data);
                    });
                });
            });
        </script>
    </body>
</html>