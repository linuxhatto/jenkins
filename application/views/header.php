<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DNS ADM</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://192.168.99.101/dnsconsult/static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://192.168.99.101/dnsconsult/static/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://192.168.99.101/dnsconsult/static/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<http://192.168.99.101/dnsconsult/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=URL::Base()?>index.php/home">DNS CONSULT</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><? echo $user = Auth::instance()->get_user()->username;?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
			<!-- Modal -->

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				    <li>
                        <a href="<?=URL::Base(True)?>index.php/home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <?
                        if ($user == "fabio" OR $user == "ricardo")
                        {
                         echo '<li>' . '<a href="'. URL::Base() .'index.php/create"><i class="fa fa-fw fa-bar-chart-o"></i> Create User</a>'  . '</li>';
                        }
                     ?>
                    <li>
                        <a href="<?php URL::Base(True)?>acl"><i class="fa fa-fw fa-dashboard"></i> List Acl</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Exit</h4>
      </div>

      <div class="modal-footer">
	  <form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" formaction="<?php URL::Base()?>Home/logout">Yes</button>
      </form>
	  </div>
    </div>
  </div>
</div>
