<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quy trình thực tập doanh nghiệp</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Đăng Nhập</b></h3>
                        

                        
                    </div>
                    <div class="panel-body">
                        @include('error')
                        <form action = "login" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="txtUsername" type="text" autofocus >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="txtPass" type="password" value="">
                                </div>
                               
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Đăng Nhập" class="btn btn-lg btn-success btn-block">
                                
                                
                            </fieldset>
                        </form>
                        <br>
                        <button class="btn" name="btnDangKi" id="btnDK">
                            <!-- <a href="http://localhost/project2/public/addCompany"> -->
                            Đăng Kí
                            <!-- </a> -->
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Công Ty Đăng Kí</h4>
              </div>
              <div class="modal-body">
              <!-- @include('error') -->
                <form name="frmSinhVien" class="form-horizontal" action = "addCompany" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tên Đăng Nhập</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Vui lòng nhập tên đăng nhập" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="pass" name="password" placeholder="Vui lòng nhập password" >
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tên Công Ty</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Vui lòng nhập tên công ty" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="txtAddress" placeholder="Vui lòng nhập địa chỉ" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="txtEmail" placeholder="Vui lòng nhập tên Email" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone" name="txtPhone" placeholder="Vui lòng nhập số điện thoại" />
                            
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-default btn-primary btn-block" value="Đăng kí">
                </form>
              </div>
              <div class="modal-footer">
               
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
    <script type="text/javascript">
    $(document).ready(function () {
        $("#btnDK").click(function () {
            $('#myModal').modal('show')
        });
    });
    </script>

    <!-- jQuery -->
    <script src="bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
