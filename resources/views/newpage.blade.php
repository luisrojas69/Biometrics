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
        <div class="row">
            <div class="input-field col s4">
                <input type="checkbox" id="test1" checked="checked">
                <label for="test1">Red</label>
            </div>
            <div class="input-field col s4">
                <select name="branch" multiple>
                    <option value="" disabled selected>Choose Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="EE">EE</option>
                    <option value="BBA">BBA</option>
                </select>
            </div>
            <div class="input-field col s4">
                <select name="sections[]" multiple>
                    <option value="" disabled selected>Choose Section</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
    $('select').material_select();
    $('[name="branch"]').change(function() {
        $branch = $('[name="branch"]').val() || [];
        $.ajax({
            url: 'newpage',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {branch:branch},

            success: function(data) {
                $('.container').append(data);
                $('select').material_select();
            }
        });
        return false;
    });
    $('#test1').click(function() {
        if ($('[name="branch"]').attr('disabled')) {
            $('[name="branch"]').removeAttr('disabled');
        }
        else {
            $('[name="branch"]').attr('disabled', 'disabled');
        }
        
        if ($('[name="sections[]"]').attr('disabled')) {
            $('[name="sections[]"]').removeAttr('disabled');
        }
        else {
            $('[name="sections[]"]').attr('disabled', 'disabled');
        }
        $('select').material_select();
    });
</script>
</body>

</html>