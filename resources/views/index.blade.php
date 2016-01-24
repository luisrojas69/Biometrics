<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NCU Biometrics - Dashboard">
    <meta name="author" content="AAA">

    <title>Welcome</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        i.full {
            line-height: 2 !important;
        }
    </style>
</head>
    
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><i class="material-icons left full">fingerprint</i> BIOMETRICS</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="modal-trigger" href="#loginmodal"><i class="material-icons">people</i></a></li>
            </ul>
        </div>
    </nav>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row hide-on-med-and-down"></div>
    <div class="row hide-on-med-and-down"></div>
    <nav class="container">
        <div class="nav-wrapper">
            {!! Form::open(array('url' => 'att', 'accept-charset' => 'UTF-8')) !!}
                <div class="input-field">
                    <input name="roll" id="search" type="search" placeholder="Enter Roll Number" length="8" required>
                </div>
            {!! Form::close() !!}
        </div>
    </nav>
    
    @if($errors->any())
        <div class="row container">
            <div class="col s12">
                <div class="panel hoverable white darken-1">
                    <h3 class="center-align flow-text">OH SNAP!</h3>
                    <ul class="flow-text">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    
    <a class="btn-floating btn-large waves-effect red lighten-2 modal-trigger hide-on-large-only" href="#loginmodal" style="position: absolute; left: 10px; top: 0px;"><i class="material-icons">people</i></a>
    <div id="loginmodal" class="modal">
        <div class="modal-content">
            <div class="row">
                <!--<div class="col s12">-->
                    <ul class="tabs">
                        <li class="tab col s6"><a class="active" href="#adminlogin">Administrator</a></li>
                        <li class="tab col s6"><a href="#faculogin">Faculty</a></li>
                    </ul>
                <!--</div>-->
            </div>
            <div id="adminlogin" class="col s12">
                {!! Form::open(array('url' => 'dashboard', 'accept-charset' => 'UTF-8')) !!}
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" length="10" id="uname">
                        <label for="uname">username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" id="pass">
                        <label for="pass">password</label>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn">OK</button>
                </div>
                {!! Form::close() !!}
            </div>
            <div id="faculogin" class="col s12">Faculty</div>
        </div>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.modal-trigger').leanModal();
        });
    </script>
</body>

</html>