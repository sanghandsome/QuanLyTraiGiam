<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kết Quả Tìm Kiếm') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="mb-5 text-center text-white bg-dark py-3 rounded shadow-lg" style="font-size: 2rem;">Thông Tin Nhân
            Viên</h1>
        <table class="table table-bordered">
            <tr>
                <th>Mã Nhân Viên:</th>
                <td>{{ $nhanvien->MaNhanVien }}</td>
            </tr>
            <tr>
                <th>Họ Tên:</th>
                <td>{{ $nhanvien->HoTen }}</td>
            </tr>
            <tr>
                <th>Chức Vụ:</th>
                <td>{{ $nhanvien->ChucVu }}</td>
            </tr>
            <tr>
                <th>Số Điện Thoại:</th>
                <td>{{ $nhanvien->SoDienThoai }}</td>
            </tr>
            <tr>
                <th>Ca Làm:</th>
                <td>{{ $nhanvien->CaLam }}</td>
            </tr>
        </table>

        <a href="{{ route('nhan-vien.index') }}" class="btn btn-secondary mt-3">Quay Lại</a>
        <a href="{{ route('nhan-vien.edit', $nhanvien->MaNhanVien) }}" class="btn btn-warning mt-3">Chỉnh Sửa</a>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>