<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lịch Trình') }}
        </h2>
    </x-slot>
<div class="container">
    <h1>Chi tiết Lịch Trình</h1>
    <div class="card">
        <div class="card-header">
            Thông tin Lịch Trình
        </div>
        <div class="card-body">
            <p><strong>Mã Lịch Trình:</strong> {{ $lichTrinh->MaLichTrinh }}</p>
            <p><strong>Mã Phạm Nhân:</strong> {{ $lichTrinh->MaPhamNhan }}</p>
            <p><strong>Hoạt Động:</strong> {{ $lichTrinh->HoatDong }}</p>
            <p><strong>Thời Gian Bắt Đầu:</strong> {{ $lichTrinh->ThoiGianBatDau }}</p>
            <p><strong>Thời Gian Kết Thúc:</strong> {{ $lichTrinh->ThoiGianKetThuc }}</p>
            <p><strong>Vị Trí:</strong> {{ $lichTrinh->ViTri }}</p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('lichtrinhs.edit', $lichTrinh->MaLichTrinh) }}" class="btn btn-warning">Chỉnh sửa</a>
            <form action="{{ route('lichtrinhs.destroy', $lichTrinh->MaLichTrinh) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa lịch trình này?')">Xóa</button>
            </form>
            <a href="{{ route('lichtrinhs.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>

</x-app-layout>


