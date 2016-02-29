<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Biometrics - Admin Dashboard">
    <meta name="author" content="AA">

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
                    <li><a href="#modal_req" class="modal-trigger">Requests <span class="new badge">4</span></a></li>
                    <li><a id="toggle_search" href="#"><i class="material-icons">file_upload</i></a></li>
                    <li><a href="#" class="dropdown-button" data-activates="dropdown1"><i class="material-icons">account_circle</i></a></li>
                </ul>
            </div>
            <ul id="slide-out" class="side-nav full fixed">
                <li id="home"><a href="#">Home</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header"><i class="material-icons right">arrow_drop_down</i>Courses</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li id="add_co"><a href="#">ADD</a></li>
                                    <li id="edit_co"><a href="#">EDIT</a></li>
                                    <li id="del_co"><a href="#">DELETE</a></li>
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
                                    <li id="add_facu"><a href="#">ADD</a></li>
                                    <li id="edit_facu"><a href="#">EDIT</a></li>
                                    <li id="del_facu"><a href="#">DELETE</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header"><i class="material-icons right">arrow_drop_down</i>Students</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li id="add_stud"><a href="#">ADD</a></li>
                                    <li id="edit_stud"><a href="#">EDIT</a></li>
                                    <li id="del_stud"><a href="#">DELETE</a></li>
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
                                    <li id="view_stud"><a href="#">Students</a></li>
                                    <li id="view_facu"><a href="#">Teachers</a></li>
                                    <li id="view_co"><a href="#">Courses</a></li>
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
        <li><a href="{{ URL::to('/') }}">Logout</a></li>
    </ul>
    
    <div id="upload">
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
    </div>
    
    <div id="modal_req" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>Your Request</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
    
    <div id="padd"></div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/admin_master.js"></script>
    <script type="text/javascript" src="fusioncharts/fusioncharts.js"></script>
    <script type="text/javascript" src="js/fusioncharts-jquery-plugin.js"></script>
    <script type="text/javascript" src="fusioncharts/themes/fusioncharts.theme.zune.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.modal-trigger').leanModal();
        })
    </script>
</body>
</html>