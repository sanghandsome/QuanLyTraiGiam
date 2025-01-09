<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Thư Viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container">
    <x-nav-link :href="route('phamnhans.index')">
        {{ __('Quay Lại') }}
    </x-nav-link>
    <h1>Sửa</h1>
    <form action="{{ route('phamnhans.update', $phamNhan->MaPhamNhan) }}" method="POST">
    @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="MaPhamNhan">Mã Phạm Nhân:</label>
            <input type="text" class="form-control" id="MaPhamNhan" name="MaPhamNhan" value="{{$phamNhan->MaPhamNhan}}">
        </div>
        <div class="form-group mb-3">
            <label for="HoTen">Họ Tên:</label>
            <input type="text" class="form-control" id="HoTen" name="HoTen" value="{{$phamNhan->HoTen}}">
        </div>
        <div class="form-group mb-3">
            <label for="DiaChi">Địa Chỉ:</label>
            <input type="text" class="form-control" id="DiaChi" name="DiaChi" value="{{$phamNhan->DiaChi}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="SDT">SDT:</label>
            <input type="text" class="form-control" id="SDT" name="SDT" value="{{$phamNhan->SDT}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="TheCanCuoc">Thẻ Căn Cước:</label>
            <input type="text" class="form-control" id="TheCanCuoc" name="TheCanCuoc" value="{{$phamNhan->TheCanCuoc}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="GioiTinh">Giới Tính:</label>
            <input type="text" class="form-control" id="GioiTinh" name="GioiTinh" value="{{$phamNhan->GioiTinh}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="NgaySinh">Ngày Sinh:</label>
            <input type="text" class="form-control" id="NgaySinh" name="NgaySinh" value="{{$phamNhan->NgaySinh}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="ChiTietToiDanh">Chi Tiết Tội Danh:</label>
            <input type="text" class="form-control" id="ChiTietToiDanh" name="ChiTietToiDanh" value="{{$phamNhan->ChiTietToiDanh}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="NgayBatDauAn">Ngày Bắt Đầu Án:</label>
            <input type="text" class="form-control" id="NgayBatDauAn" name="NgayBatDauAn" value="{{$phamNhan->NgayBatDauAn}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="NgayKetThucAn">Ngày Kết Thúc Án:</label>
            <input type="text" class="form-control" id="NgayKetThucAn" name="NgayKetThucAn" value="{{$phamNhan->NgayKetThucAn}}" required>
        </div>
        <div class="form-group mb-3">
            <label for="MaPhongGiam">Mã Phòng Giam:</label>
            <input type="text" class="form-control" id="MaPhongGiam" name="MaPhongGiam" value="{{$phamNhan->MaPhongGiam}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

