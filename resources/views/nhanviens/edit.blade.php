<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kết Quả Tìm Kiếm') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="mb-5 text-center text-white bg-dark py-3 rounded shadow-lg" style="font-size: 2rem;">Chỉnh Sửa Nhân
            Viên</h1>
        <form action="{{ route('nhan-vien.update', $nhanvien->MaNhanVien) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="MaNhanVien" class="form-label">Mã Nhân Viên</label>
                <input type="text" class="form-control" id="MaNhanVien" name="MaNhanVien"
                    value="{{ $nhanvien->MaNhanVien }}" readonly>
            </div>
            <div class="mb-3">
                <label for="HoTen" class="form-label">Họ Tên</label>
                <input type="text" class="form-control" id="HoTen" name="HoTen" value="{{ $nhanvien->HoTen }}" required>
            </div>
            <div class="mb-3">
                <label for="ChucVu" class="form-label">Chức Vụ</label>
                <input type="text" class="form-control" id="ChucVu" name="ChucVu" value="{{ $nhanvien->ChucVu }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="SoDienThoai" class="form-label">Số Điện Thoại</label>
                <input type="text" class="form-control" id="SoDienThoai" name="SoDienThoai"
                    value="{{ $nhanvien->SoDienThoai }}" required>
            </div>
            <div class="mb-3">
                <label for="CaLam" class="form-label">Ca Làm</label>
                <input type="text" class="form-control" id="CaLam" name="CaLam" value="{{ $nhanvien->CaLam }}" required>
            </div>

            <button type="submit" class="btn btn-success">Lưu Thay Đổi</button>
            <a href="{{ route('nhan-vien.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>