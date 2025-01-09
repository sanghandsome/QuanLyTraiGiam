<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lịch Trình') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <h1 class="mb-4">Danh sách Lịch Trình</h1>
        <a href="{{ route('lichtrinhs.create') }}" class="btn btn-success mb-3">Tạo mới</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Mã Lịch Trình</th>
                    <th>Mã Phạm Nhân</th>
                    <th>Hoạt Động</th>
                    <th>Thời Gian Bắt Đầu</th>
                    <th>Thời Gian Kết Thúc</th>
                    <th>Vị Trí</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lichTrinhs as $lichTrinh) 
                    <tr>
                        <td>{{ $lichTrinh->MaLichTrinh }}</td>
                        <td>{{ $lichTrinh->MaPhamNhan }}</td>
                        <td>{{ $lichTrinh->HoatDong }}</td>
                        <td>
                            {{ \Carbon\Carbon::createFromFormat('H:i:s.u', substr($lichTrinh->ThoiGianBatDau, 0, 15))->format('H:i') }}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::createFromFormat('H:i:s.u', substr($lichTrinh->ThoiGianKetThuc, 0, 15))->format('H:i') }}
                        </td>
                        <td>{{ $lichTrinh->ViTri }}</td>
                        <td>
                        <a href="{{ route('lichtrinhs.show', $lichTrinh->MaLichTrinh) }}" class="btn btn-info btn-sm">Xem</a>
                            <a href="{{ route('lichtrinhs.edit', $lichTrinh->MaLichTrinh) }}" class="btn btn-warning btn-sm">Chỉnh sửa</a>
                            <form action="{{ route('lichtrinhs.destroy', $lichTrinh->MaLichTrinh) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</x-app-layout>
