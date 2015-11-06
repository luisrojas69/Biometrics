<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/paperbootstrap.min.css">
        <link href='//fonts.googleapis.com/css?family=RobotoDraft:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            body {
                font-family:'Roboto';
                background-color:#E0E0E0;
            }
            
            .panel {
                margin-top:25%;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-4 col-xs-12 col-md-offset-4 col-sm-offset-7">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        LOGIN
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" accept-charset="UTF-8">
                            <fieldset>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="rollno" type="text" class="form-control" id="rollno" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="pass" type="password" class="form-control" id="pass" placeholder="Password">
                                    </div>
                                </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-6"><button type="submit" class="btn btn-primary btn-block">Login</button></div>
                        </div>
                    </div>
                            </fieldset>
                        </form>
            </div>
            @if($errors->any())
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Oh snap!</strong>
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
                </div>
        </div>
    </body>
</html>