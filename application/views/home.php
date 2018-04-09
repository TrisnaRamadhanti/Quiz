
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Blog Dosen Ngoding</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url()?>/Home">Home</a></li>
                        <li><a href="<?php echo site_url()?>/About">About</a></li>
                        <li><a href="<?php echo site_url()?>/Contact">Contact </a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            
                
                <div class="jumbotron">
                    <div class="container">
                        <h1><?php echo $nama ?></h1>
                        <p>Contents ...</p>
                        <p>
                            <a class="btn btn-primary btn-lg">Learn more</a>
                        </p>
                    </div>
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    
                    <table class="table table-striped table table-hover">
                        <tbody>
                            <tr>
                                <td><?php echo $nama ?> </td>
                            </tr>
                            <tr>
                                <td><?php echo $alamat ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $email ?></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, minima odio cum inventore accusantium odit necessitatibus earum eaque magni amet est voluptatem deleniti ipsum. Excepturi ad laboriosam animi facere dignissimos.
                </div>
                
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat minima harum, illo explicabo molestias est reprehenderit dignissimos sequi molestiae numquam reiciendis corporis iste officiis quas, vero voluptate rem, deleniti iure!
                </div>
                
                
            </div>
            
        </div>
        

        <!-- jQuery -->
        <script src=<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>" > </script>
        <!-- Bootstrap JavaScript -->
        <script src=<?php echo base_url('assets/css/bootstrap.min.js'); ?>"></script>
    </body>
</html>
