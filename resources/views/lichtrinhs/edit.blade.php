<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lịch Trình') }}
        </h2>
    </x-slot>



<div class="container">
    <h1>Chỉnh sửa Lịch Trình</h1>
    <form action="{{ route('lichtrinhs.update', $lichTrinh->MaLichTrinh) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="MaLichTrinh" class="form-label">Mã Lịch Trình</label>
                <input type="text" name="MaLichTrinh" class="form-control" id="MaLichTrinh" value="{{ $lichTrinh->MaLichTrinh }}" readonly>
            </div>
            <div class="mb-3">
                <label for="MaPhamNhan" class="form-label">Mã Phạm Nhân</label>
                <input type="text" name="MaPhamNhan" class="form-control" id="MaPhamNhan" value="{{ $lichTrinh->MaPhamNhan }}" required>
            </div>
            <div class="mb-3">
                <label for="HoatDong" class="form-label">Hoạt Động</label>
                <input type="text" name="HoatDong" class="form-control" id="HoatDong" value="{{ $lichTrinh->HoatDong }}" required>
            </div>
            <div class="mb-3">
                <label for="ThoiGianBatDau" class="form-label">Thời Gian Bắt Đầu</label>
                <input type="time" name="ThoiGianBatDau" class="form-control" id="ThoiGianBatDau" value="{{ $lichTrinh->ThoiGianBatDau }}" required>
            </div>
            <div class="mb-3">
                <label for="ThoiGianKetThuc" class="form-label">Thời Gian Kết Thúc</label>
                <input type="time" name="ThoiGianKetThuc" class="form-control" id="ThoiGianKetThuc" value="{{ $lichTrinh->ThoiGianKetThuc }}" required>
            </div>
            <div class="mb-3">
                <label for="ViTri" class="form-label">Vị Trí</label>
                <input type="text" name="ViTri" class="form-control" id="ViTri" value="{{ $lichTrinh->ViTri }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
</x-app-layout>


