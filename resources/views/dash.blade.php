<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Biometrics - Admin Dashboard">
    <meta name="author" content="AAA">

    <title>Admin Dashboard</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    
<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper orange">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <a href="#" class="brand-logo"><i class="material-icons left full">fingerprint</i> BIOMETRICS</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a id="toggle_search" href="#"><i class="material-icons">file_upload</i></a></li>
                    <li><a href="#" class="dropdown-button" data-activates="dropdown1"><i class="material-icons">account_circle</i></a></li>
                </ul>
            </div>
            <ul id="slide-out" class="side-nav full fixed">
                <li class="active"><a href="#">Home</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header"><i class="material-icons right">arrow_drop_down</i>Students</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a class="modal-trigger" href="#add_stud">ADD</a></li>
                                    <li><a class="modal-trigger" href="#edit_stud">EDIT</a></li>
                                    <li><a class="modal-trigger" href="#del_stud">DELETE</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header"><i class="material-icons right">arrow_drop_down</i>Courses</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a class="modal-trigger" href="#add_co">ADD</a></li>
                                    <li><a class="modal-trigger" href="#edit_co">EDIT</a></li>
                                    <li><a class="modal-trigger" href="#del_co">DELETE</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header"><i class="material-icons right">arrow_drop_down</i>Teachers</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a class="modal-trigger" href="#add_facu">ADD</a></li>
                                    <li><a class="modal-trigger" href="#edit_facu">EDIT</a></li>
                                    <li><a class="modal-trigger" href="#del_facu">DELETE</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header"><i class="material-icons right">arrow_drop_down</i>View Information</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#">Students</a></li>
                                    <li><a href="#">Teachers</a></li>
                                    <li><a href="#">Courses</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <div class="row">
                    <div class="col s4">
                        <a class="btn-flat waves-effect waves-red center-align"><i class="material-icons">bug_report</i></a>
                    </div>
                    <div class="col s4">
                        <a class="btn-flat waves-effect waves-orange center-align"><i class="material-icons">contact_mail</i></a>
                    </div>
                    <div class="col s4 hide-on-large-only">
                        <a class="btn-flat waves-effect waves-orange center-align"><i class="fa fa-sign-out"></i></a>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
    
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#">Settings</a></li>
        <li><a href="{{ URL::to('home') }}">Logout</a></li>
    </ul>
    
    <!-- add_stud modal -->
    <div class="modal modal-fixed-footer" id="add_stud">
        <div class="modal-content">
            <h2>Add A Student</h2>
            {!! Form::open(array('url' => 'add_stud')) !!}
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="name">
                        <label for="name">Name of Student</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="enid">
                            <label for="enid">Enrollment Key</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="sem">
                                <option value="" disabled selected>Choose A Sem</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                                <option value="5">V</option>
                                <option value="6">VI</option>
                                <option value="7">VII</option>
                                <option value="8">VIII</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="branch">
                                <option value="" disabled selected>Choose A Branch</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="ME">ME</option>
                                <option value="CIVIL">CIVIL</option>
                                <option value="EE">EE</option>
                                <option value="BBA">BBA</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of add_stud modal -->
    
    <!-- edit_stud modal -->
    <div class="modal modal-fixed-footer" id="edit_stud">
        <div class="modal-content">
            <h2>Edit A Student</h2>
            <div class="modal_body">
                {!! Form::open(array('url' => 'edit_stud')) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="id">
                            <label for="id">Enter Student ID</label>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of edit_stud modal -->
    
    <!-- del_stud modal -->
    <div class="modal modal-fixed-footer" id="del_stud">
        <div class="modal-content">
            <h2>Delete A Student</h2>
            <div class="modal_body">
                {!! Form::open(array('url' => 'del_stud')) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="id">
                            <label for="id">Enter Student ID</label>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of del_stud modal -->
    
    <!-- add_co modal -->
    <div class="modal modal-fixed-footer" id="add_co">
        <div class="modal-content">
            <h2>Add A Course</h2>
            {!! Form::open(array('url' => 'add_co')) !!}
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="name">
                        <label for="name">Name of Course</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="code">
                            <label for="code">Subject Code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="txtarea1" class="materialize-textarea" name="desc"></textarea>
                            <label for="txtarea1">Description</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="sem">
                                <option value="" disabled selected>Choose A Sem</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                                <option value="5">V</option>
                                <option value="6">VI</option>
                                <option value="7">VII</option>
                                <option value="8">VIII</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="branch">
                                <option value="" disabled selected>Choose A Branch</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="ME">ME</option>
                                <option value="CIVIL">CIVIL</option>
                                <option value="EE">EE</option>
                                <option value="BBA">BBA</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of add_co modal -->
    
    <!-- edit_co modal -->
    <div class="modal modal-fixed-footer" id="edit_co">
        <div class="modal-content">
            <h2>Edit A Course</h2>
            <div class="modal_body">
                {!! Form::open(array('url' => 'edit_co')) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="id">
                            <label for="id">Enter Subject Code</label>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of edit_co modal -->
    
    <!-- del_co modal -->
    <div class="modal modal-fixed-footer" id="del_co">
        <div class="modal-content">
            <h2>Delete A Course</h2>
            <div class="modal_body">
                {!! Form::open(array('url' => 'del_co')) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="id">
                            <label for="id">Enter Subject Code</label>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of del_co modal -->
    
    <!-- add_facu modal -->
    <div class="modal modal-fixed-footer" id="add_facu">
        <div class="modal-content">
            <h2>Add A Faculty</h2>
            {!! Form::open(array('url' => 'add_facu')) !!}
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="name">
                        <label for="name">Name of Faculty</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="fid">
                            <label for="enid">Faculty ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="email">
                            <label for="email">Faculty E-Mail ID</label>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="f_enid">
                            <label for="enid">Faculty Enrollment ID</label>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="sem">
                                <option value="" disabled selected>Choose A Sem</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                                <option value="5">V</option>
                                <option value="6">VI</option>
                                <option value="7">VII</option>
                                <option value="8">VIII</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="branch">
                                <option value="" disabled selected>Choose A Branch</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="ME">ME</option>
                                <option value="CIVIL">CIVIL</option>
                                <option value="EE">EE</option>
                                <option value="BBA">BBA</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of add_facu modal -->
    
    <!-- edit_facu modal -->
    <div class="modal modal-fixed-footer" id="edit_facu">
        <div class="modal-content">
            <h2>Edit A Faculty</h2>
            <div class="modal_body">
                {!! Form::open(array('url' => 'edit_facu')) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="id">
                            <label for="id">Enter Student ID</label>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of edit_facu modal -->
    
    <!-- del_facu modal -->
    <div class="modal modal-fixed-footer" id="del_facu">
        <div class="modal-content">
            <h2>Delete A Faculty</h2>
            <div class="modal_body">
                {!! Form::open(array('url' => 'del_facu')) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="id">
                            <label for="id">Enter Student ID</label>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn orange waves-effect space">Submit</button>
            <button type="reset" class="btn orange waves-effect">Reset</button>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- end of del_facu modal -->
    
    <!-- Start of padded div wrapper -->
    <div id="padd">
        <div id="search" class="row">
            <div class="container">
                <form action="#">
                    <div class="file-field input-field" id="file">
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
        <div class="row">
            <div class="col s12 m4">
                <div class="card-panel white hoverable">
                    <p class="flow-text center-align">Students Registered<br>4903</p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel white hoverable">
                    <p class="flow-text center-align">Teachers Registered<br>245</p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel white hoverable">
                    <p class="flow-text center-align">Courses Running<br>85</p>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
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
        $('.modal-trigger').leanModal();
        $('select').material_select();
    </script>
</body>
</html>