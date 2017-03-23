<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welcome to ProjectMicrocode</title>

        <!-- Bootstrap Core CSS -->
        <link href="admin/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="admin/css/full-width-pics.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Project Microcode</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Full Width Image Header with Logo -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
        <header class="image-bg-fluid-height">
            <img class="img-responsive img-center" src="storage/medias/images/logo_ucode.png" alt="">
        </header>

        <!-- Content Section -->
        <section>
            <!--<div class="container">-->
                <!--            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="section-heading">Đây là phần login</h1>
                                    <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
                                </div>
                            </div>-->
                <div class="login-page">
                    <div class="form">
                        <form class="register-form" >
                            <input id="email" type="email" placeholder="Userame"/>
                            <input id="password" type="password" placeholder="Password"/>
                            <input type="text" placeholder="Email"/>
                            <input type="text" placeholder="Tên Công Ty"/>
                            <input type="text" placeholder="Địa Chỉ"/>
                            <input type="number" placeholder="Số Điện Thoại"/>
                            <button>SIGN UP</button>
                            <p class="message">Already registered? <a href="#">Sign In</a></p>
                        </form>
                        <form class="login-form" role="form" method="POST" action="{{route('login')}}">
                           <input id="email" class="form-control" type="email" placeholder="Userame" required/>
                            <input id="password" class="form-control" type="password" placeholder="Password" required/>
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="subbmit">SIGN IN</button>
                            <p class="message">Not registered? <a href="#">SIGN UP NOW!</a></p>
                        </form>
                    </div>
                </div>
            <!--</div>-->
        </section>

        <!-- Fixed Height Image Aside -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
        <aside class="image-bg-fixed-height"></aside>

        <!-- Content Section -->
    <!--    <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">Section Heading</h1>
                        <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
                    </div>
                </div>
                 /.row 
            </div>
             /.container 
        </section>-->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; ProjectMicrocode 2017</p>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </footer>

        <!-- jQuery -->
        <script src="admin/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="admin/js/bootstrap.min.js"></script>

    </body>

</html>
