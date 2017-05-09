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
 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Faça o Login</h3>
                    </div>
                    <div class="panel-body">
					
					
                        <form action="<?php URL::Base()?>" method="POST" data-toggle="validator" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" pattern="^[_A-z0-9]{1,}$" placeholder="Username" name="username" type="text" required>
                                </div>
								<div class="help-block with-errors"></div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
								<div class="help-block with-errors"></div>
                                <!-- Change this to a button or input when using this as a form
                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
								<input class="btn btn-lg btn-success btn-block" type="submit" value="Entre" />
                            </fieldset>
							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- jQuery -->
    <script src="http://192.168.99.101/dnsconsult/static/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://192.168.99.101/dnsconsult/static/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://192.168.99.101/dnsconsult/static/js/plugins/morris/raphael.min.js"></script>
    <script src="http://192.168.99.101/dnsconsult/static/js/plugins/morris/morris.min.js"></script>
    <script src="http://192.168.99.101/dnsconsult/static/js/plugins/morris/morris-data.js"></script>
</body>
</html>
