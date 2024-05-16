
@extends('layouts.site')
@section('title','Lien he')
@section('maincontent')


    <div class="san container">
        <h1>ĐIỀN THÔNG TIN LIÊN HỆ</h1>
        <form method="post">
            <div class="mb-3 mt-3">
                <label for="makh" class="form-label">Mã khách hàng:</label>
                <input type="input" class="form-control" id="makh" placeholder="Nhập mã kh" name="ma">
            </div>
            <div class="mb-3 mt-3">
                <label for="tenkh" class="form-label">Họ Tên</label>
                <input type="input" class="form-control" id="tenkh" placeholder="Nhập tên khách hàng" name="ht">
            </div>
            <div class="mb-3 mt-3">
                <label for="diachi" class="form-label">Địa chỉ:</label>
                <input type="input" class="form-control" id="diachi" placeholder="NhậP địa chỉ" name="dc">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Lấy thông tin</button>
        </form>
    </div>

</html>
@endsection