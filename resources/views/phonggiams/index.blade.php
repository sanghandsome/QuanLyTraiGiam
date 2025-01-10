<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Phòng Giam') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <h1 class="mb-4">Danh sách Phòng Giam</h1>
        <a href="{{ route('phong-giam.create') }}" class="btn btn-success mb-3">Tạo mới</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Mã phòng giam</th>
                    <th>Sức chứa</th>
                    <th>Số lượng phạm nhân hiện tại</th>
                    <th>Vị trí</th>
                    <th>Mã nhân viên</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phongGiam as $phongGiam1)
                    <tr>
                        <td>{{ $phongGiam1->MaPhongGiam }}</td>
                        <td>{{ $phongGiam1->SucChua }}</td>
                        <td>{{ $phongGiam1->SoLuongPhamNhanHienTai }}</td>
                        <td>{{ $phongGiam1->ViTri }}</td>
                        <td>{{ $phongGiam1->MaNhanVien ?? 'Chưa được gán' }}</td>
                        <td>
                            <a href="{{ route('phong-giam.show', $phongGiam1->MaPhongGiam) }}" class="btn btn-info">Xem</a>
                            <a href="{{ route('phong-giam.edit', $phongGiam1->MaPhongGiam) }}"
                                class="btn btn-warning">Sửa</a>
                            <form action="{{ route('phong-giam.destroy', $phongGiam1->MaPhongGiam) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
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