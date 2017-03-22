<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link type="text/css" rel="stylesheet" href="template/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="template/css/style.css" />
</head>
<body>
    <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Thêm Đề Tài</h4>
              </div>
              @include('error')
              <div class="modal-body">
                <form name="frmSinhVien" class="form-horizontal" action="addDeTai" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tên Đề Tài</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="txtName" placeholder="Vui lòng nhập họ tên" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Số lượng Sinh Viên nhận</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="numSV" name="numSV" placeholder="Vui lòng nhập số lượng" >
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Kĩ năng</label>
                         <div class="col-sm-9">
                            <input type="text" class="form-control" id="kinang" name="txtKiNang" placeholder="Vui lòng nhập ngôn ngữ" >
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Định Hướng Công Nghệ</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="dinhhuong" name="txtDinhHuong" placeholder="Vui lòng nhập vào" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Chứng chỉ Ielts</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tienganh" name="txtTiengAnh" placeholder="Vui lòng nhập yêu cầu ngoại ngữ" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Nội Dung Thực Tập</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="noidung" name="txtNoiDung" placeholder="Vui lòng nhập nội dung thực tập" />
                            
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Đăng Kí">
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