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
    <div class="container">
        {!! Form::open() !!}
            <div class="row">
                <div class="input-field col s12">
                    <select name="sem">
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3" selected>III</option>
                        <option value="4">IV</option>
                        <option value="5">V</option>
                        <option value="6">VI</option>
                        <option value="7">VII</option>
                        <option value="8">VIII</option>
                </select>
                </div>
                <button type="submit">Submit</button>
            </div>
        {!! Form::close() !!}
    </div>
    <script type="text/javascript">
        $('select').material_select();
    </script>
</body>

</html>