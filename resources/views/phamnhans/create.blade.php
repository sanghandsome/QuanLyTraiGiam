<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Phạm Nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container">
    <a href="{{ url('/phamnhans') }}" class="btn btn-primary">Quay lại trang chủ</a>
    <h1>Thêm Phạm Nhân Mới</h1>
    <form action="{{route('phamnhans.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="MaPhamNhan">Mã Phạm Nhân:</label>
            <input type="text" class="form-control" id="MaPhamNhan" name="MaPhamNhan" required>
        </div>
        <div class="form-group mb-3">
            <label for="HoTen">Họ Tên:</label>
            <input type="text" class="form-control" id="HoTen" name="HoTen" required>
        </div>
        <div class="form-group mb-3">
            <label for="DiaChi">Địa Chỉ:</label>
            <input type="text" class="form-control" id="DiaChi" name="DiaChi" required>
        </div>
        <div class="form-group mb-3">
            <label for="SDT">Số Điện Thoại:</label>
            <input type="text" class="form-control" id="SDT" name="SDT" required>
        </div>
        <div class="form-group mb-3">
            <label for="TheCanCuoc">Thẻ Căn Cước:</label>
            <input type="text" class="form-control" id="TheCanCuoc" name="TheCanCuoc" required>
        </div>
        <div class="form-group mb-3">
            <label for="GioiTinh">Giới Tính:</label>
            <select class="form-control" id="GioiTinh" name="GioiTinh" required>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="NgaySinh">Ngày Sinh:</label>
            <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" required>
        </div>
        <div class="form-group mb-3">
            <label for="ChiTietToiDanh">Chi Tiết Tội Danh:</label>
            <input type="text" class="form-control" id="ChiTietToiDanh" name="ChiTietToiDanh" required>
        </div>
        <div class="form-group mb-3">
            <label for="NgayBatDauAn">Ngày Bắt Đầu Án:</label>
            <input type="date" class="form-control" id="NgayBatDauAn" name="NgayBatDauAn" required>
        </div>
        <div class="form-group mb-3">
            <label for="NgayKetThucAn">Ngày Kết Thúc Án:</label>
            <input type="date" class="form-control" id="NgayKetThucAn" name="NgayKetThucAn" required>
        </div>
        <div class="form-group mb-3">
            <label for="MaPhongGiam">Mã Phòng Giam:</label>
            <input type="text" class="form-control" id="MaPhongGiam" name="MaPhongGiam" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
