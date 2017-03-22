<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
@include('error')
<form action = "addCompany" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
    <label>
        Tên Đăng Nhập
        <input type="text" name="txtUsername">
    </label>
</div>
<br>
<div>
    
    <label>
        Password
        <input type="password" name="txtPass">
    </label>
</div>
<br>
<div>
    
    <label>
        Tên Công Ty
        <input type="text" name="txtName">
    </label>
</div>
<br>
<div>
    
    <label>
        Địa Chỉ
        <input type="text" name="txtAddress">
    </label>
</div>
<br>
<div>
    
    <label>
        Email
        <input type="text" name="txtEmail">
    </label>
</div>
<br>
<div>
    
    <label>
        Phone
        <input type="text" name="txtPhone">
    </label>
</div>
<br>
    <input type="submit" name="Đăng Kí">
</form>

</body>
</html>