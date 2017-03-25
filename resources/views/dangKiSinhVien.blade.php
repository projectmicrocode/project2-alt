<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Công Ty Đăng Kí Sinh Viên</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link type="text/css" rel="stylesheet" href="template/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="template/css/style.css" />
</head>
<body>
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
                <a class="navbar-brand" href="http://localhost/project2/public/addDeTai">Đại Diện Doanh Nghiệp</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://localhost/project2/public/addDeTai">Đăng Kí Đề Tài</a>
                    </li>
                    <li>
                        <a href="#">Danh Sách Hướng Dẫn Doanh Nghiệp</a>
                    </li>
                    <li>
                        <a href="http://localhost/project2/public/dangKiSV">Đăng Kí Sinh Viên</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Đăng Kí Sinh Viên Thực Tập</h4>
              </div>
              @include('error')
              <div class="modal-body">
                <form name="frmSinhVien" class="form-horizontal" action="dangKiSV" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tên Sinh Viên</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tenSV" name="txtTenSV" placeholder="Vui lòng nhập họ tên" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">MSSV</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mssv" name="txtMssv" placeholder="Vui lòng nhập MSSV" >
                            
                        </div>
                    </div>
                   
                    <input type="submit" name="submit" id="dangkidetai" class="btn btn-primary btn-lg btn-block" value="Đăng Kí">
                </form>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary">Lưu</button> -->
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        
   <script type="text/javascript" src="template/js/jquery.min.js"></script>
    <script type="text/javascript" src="template/js/bootstrap.min.js"></script>
</body>
</html>