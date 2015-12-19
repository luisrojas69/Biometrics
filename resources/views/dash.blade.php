<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NCU Biometrics - Dashboard">
    <meta name="author" content="AAA">

    <title>Dashboard</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        #search
        {
            display: none;
            margin-bottom: 0px;
        }
        
        .input-field input[type=text]:focus {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }
    </style>

</head>
    
<body>
        <nav>
        <div class="nav-wrapper orange">
            <a href="#" class="brand-logo"><i class="material-icons left">fingerprint</i> BIOMETRICS</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#" class="dropdown-button" data-activates="dropdown1"><i class="material-icons">account_circle</i></a></li>
                <li><a id="toggle_search" href="#"><i class="material-icons">file_upload</i></a></li>
            </ul>
        </div>
    </nav>
    
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#">Settings</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
    
    <div id="search" class="row">
        <div class="container">
            <form action="#">
                <div class="file-field input-field">
                    <div class="btn white black-text waves-effect waves-orange">
                        <span>File</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(".button-collapse").sideNav();
        $('a#toggle_search').click(function()
                                  {
            var search = $('div#search');
            search.is(":visible") ? search.slideUp() : search.slideDown(function()
                                                                       {
                search.find('input').focus();
            });
            return false;
        });
    </script>
</body>
    
</html>