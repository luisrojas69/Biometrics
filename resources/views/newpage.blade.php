<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NCU Biometrics - Test">
    <meta name="author" content="AAA">

    <title>Test</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
</head>

<body>
    <div class="container"></div>
    
    <script type="text/javascript">
        $.ajax({
            url: 'newpageg',
            headers: {'X-CSRF-TOKEN': token},
            type: 'GET',
            datatype: 'JSON',
            success: function(data) {
                $('.container').html(data);
            }
        });
        return false;
    </script>
</body>

</html>