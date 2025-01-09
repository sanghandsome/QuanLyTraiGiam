<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Phòng Giam') }}
        </h2>
    </x-slot>
    
    <div class="container">  
        <h1>Quản Lý Phòng Giam</h1>
        <a href="{{ route('phong-giam.create') }}" class="btn btn-primary">Thêm mới</a>
        <table class="table">
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
                        <td>{{ $phongGiam1->MaPhongGiam }}</td>  <!-- Fixed field name -->
                        <td>{{ $phongGiam1->SucChua }}</td>      <!-- Fixed field name -->
                        <td>{{ $phongGiam1->SoLuongPhamNhanHienTai }}</td> <!-- Fixed field name -->
                        <td>{{ $phongGiam1->ViTri }}</td>        <!-- Fixed field name -->
                        <td>{{ $phongGiam1->MaNhanVien ?? 'Chưa được gán' }}</td>  <!-- Fixed field and added fallback for null -->
                        <td>
                            <a href="{{ route('phong-giam.show', $phongGiam1->MaPhongGiam) }}" class="btn btn-info">Xem</a>   <!-- Fixed URL parameter -->
                            <a href="{{ route('phong-giam.edit', $phongGiam1->MaPhongGiam) }}" class="btn btn-warning">Sửa</a>  <!-- Fixed URL parameter -->
                            <form action="{{ route('phong-giam.destroy', $phongGiam1->MaPhongGiam) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
