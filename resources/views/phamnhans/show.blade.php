<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Phạm Nhân</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<a href="{{ url('/phamnhans') }}" class="btn btn-primary">Quay lại trang chủ</a>

<div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-3 overflow-auto" style="max-width: 400px; width: 100%; max-height: 90vh;">
        <h2 class="text-center text-primary mb-3">
            Thông Tin Phạm Nhân {{$phamNhan[0]->HoTen}}
        </h2>
        <form>
            <div class="mb-2">
                <label for="maPhamNhan" class="form-label fw-bold text-primary">Mã Phạm Nhân:</label>
                <input type="text" id="maPhamNhan" class="form-control form-control-sm" value="{{$phamNhan[0]->MaPhamNhan}}" disabled>
            </div>
            <div class="mb-2">
                <label for="hoTen" class="form-label fw-bold text-primary">Họ Tên:</label>
                <input type="text" id="hoTen" class="form-control form-control-sm" value="{{$phamNhan[0]->HoTen}}" disabled>
            </div>
            <div class="mb-2">
                <label for="diaChi" class="form-label fw-bold text-primary">Địa Chỉ:</label>
                <input type="text" id="diaChi" class="form-control form-control-sm" value="{{$phamNhan[0]->DiaChi}}" disabled>
            </div>
            <div class="mb-2">
                <label for="sdt" class="form-label fw-bold text-primary">Số Điện Thoại:</label>
                <input type="text" id="sdt" class="form-control form-control-sm" value="{{$phamNhan[0]->SDT}}" disabled>
            </div>
            <div class="mb-2">
                <label for="theCanCuoc" class="form-label fw-bold text-primary">Thẻ Căn Cước:</label>
                <input type="text" id="theCanCuoc" class="form-control form-control-sm" value="{{$phamNhan[0]->TheCanCuoc}}" disabled>
            </div>
            <div class="mb-2">
                <label for="gioiTinh" class="form-label fw-bold text-primary">Giới Tính:</label>
                <input type="text" id="gioiTinh" class="form-control form-control-sm" value="{{$phamNhan[0]->GioiTinh}}" disabled>
            </div>
            <div class="mb-2">
                <label for="ngaySinh" class="form-label fw-bold text-primary">Ngày Sinh:</label>
                <input type="date" id="ngaySinh" class="form-control form-control-sm" value="{{$phamNhan[0]->NgaySinh}}" disabled>
            </div>
            <div class="mb-2">
                <label for="tuoi" class="form-label fw-bold text-primary">Tuổi:</label>
                <input type="text" id="tuoi" class="form-control form-control-sm" value="{{$phamNhan[0]->Tuoi}}" disabled>
            </div>
            <div class="mb-2">
                <label for="chiTietToiDanh" class="form-label fw-bold text-primary">Chi Tiết Tội Danh:</label>
                <textarea id="chiTietToiDanh" class="form-control form-control-sm" rows="2" disabled>{{$phamNhan[0]->ChiTietToiDanh}}</textarea>
            </div>
            <div class="mb-2">
                <label for="thoiGianThiHanhAn" class="form-label fw-bold text-primary">Thời Gian Thi Hành Án:</label>
                <input type="text" id="thoiGianThiHanhAn" class="form-control form-control-sm" value="{{$phamNhan[0]->ThoiGianThiHanh}}" disabled>
            </div>
            <div class="mb-2">
                <label for="maPhongGiam" class="form-label fw-bold text-primary">Mã Phòng Giam:</label>
                <input type="text" id="maPhongGiam" class="form-control form-control-sm" value="{{$phamNhan[0]->MaPhongGiam}}" disabled>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
