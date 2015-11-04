<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="../css/paperbootstrap.min.css">
        <link href='//fonts.googleapis.com/css?family=RobotoDraft:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
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
            <div class="col-md-4 col-sm-12 col-md-offset-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        SIGN UP
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" accept-charset="UTF-8" action="newuser">
                            <fieldset>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="rollno" type="text" class="form-control" id="rollno" placeholder="Roll Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="key" type="text" class="form-control" id="key" placeholder="Enrollment Key">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sem" class="col-sm-2 control-label">Semester</label>
                                    <div class="col-sm-10">
                                        <select name="sem" class="form-control" id="sem">
                                            <option>I</option>
                                            <option>II</option>
                                            <option>III</option>
                                            <option>IV</option>
                                            <option>IV</option>
                                            <option>V</option>
                                            <option>VI</option>
                                            <option>VII</option>
                                            <option>VIII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="branch" class="col-sm-2 control-label">Branch</label>
                                    <div class="col-sm-10">
                                        <select name="branch" class="form-control" id="branch">
                                            <option>CSE</option>
                                            <option>ECE</option>
                                            <option>ME</option>
                                            <option>CIVIL</option>
                                            <option>BBA</option>
                                            <option>LAW</option>
                                            <option>MBA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-6"><button type="reset" class="btn btn-block btn-default btn-wide">RESET</button></div>
                                    <div class="col-xs-6"><button type="submit" class="btn btn-block btn-success btn-wide">ADD</button></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
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