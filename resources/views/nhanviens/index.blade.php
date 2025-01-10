<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kết Quả Tìm Kiếm') }}
        </h2>
    </x-slot>
    <div class="container mt-4">
        <h1 class="mb-4 text-center text-white bg-dark py-3 rounded shadow-sm" style="font-size: 2rem;">Danh sách Nhân
            Viên</h1>

        <!-- Sắp xếp các phần tử trong một hàng -->
        <div class="d-flex justify-content-between mb-4">
            <!-- Nhóm nút Thêm Nhân Viên và Chọn Ca Làm -->
            <div class="d-flex align-items-center">
                <!-- Nút thêm nhân viên -->
                <a href="{{ route('nhan-vien.create') }}" class="btn btn-success me-3 shadow-sm">
                    <i class="fas fa-plus"></i> Thêm Nhân Viên
                </a>

                <!-- Dropdown cho ca làm -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Chọn Ca Làm
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('nhan-vien.ca-lam', 'Sáng') }}">Ca Sáng</a></li>
                        <li><a class="dropdown-item" href="{{ route('nhan-vien.ca-lam', 'Chiều') }}">Ca Chiều</a></li>
                        <li><a class="dropdown-item" href="{{ route('nhan-vien.ca-lam', 'Tối') }}">Ca Tối</a></li>
                    </ul>
                </div>
            </div>

            <!-- Thanh tìm kiếm được căn phải -->
            <form method="GET" action="{{ route('nhan-vien.index') }}" class="d-flex align-items-center">
                <input type="text" name="search" class="form-control me-2" placeholder="Nhập Mã Nhân Viên..."
                    value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </form>
        </div>

        <!-- Nút quay lại -->
        @if (request()->routeIs('nhan-vien.ca-lam'))
            <div class="mb-3">
                <a href="{{ route('nhan-vien.index') }}" class="btn btn-secondary">Quay lại</a>
            </div>
        @endif

        <!-- Bảng hiển thị danh sách nhân viên -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Mã Nhân Viên</th>
                    <th>Họ Tên</th>
                    <th>Chức Vụ</th>
                    <th>Số Điện Thoại</th>
                    <th>Ca Làm</th>
                    <th>Hành Động</th>
                    <th>Quản Lý Phòng</th>
                </tr>
            </thead>
            <tbody>
                @if($nhanviens->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">
                            <div class="alert alert-warning" role="alert">
                                Không có nhân viên nào trong ca làm này.
                            </div>
                        </td>
                    </tr>
                @else
                    @foreach ($nhanviens as $nhanvien)
                        <tr>
                            <td>{{ $nhanvien->MaNhanVien }}</td>
                            <td>{{ $nhanvien->HoTen }}</td>
                            <td>{{ $nhanvien->ChucVu }}</td>
                            <td>{{ $nhanvien->SoDienThoai }}</td>
                            <td>{{ $nhanvien->CaLam }}</td>
                            <td>
                                <a href="{{ route('nhan-vien.show', $nhanvien->MaNhanVien) }}"
                                    class="btn btn-info btn-sm">Xem</a>
                                <a href="{{ route('nhan-vien.edit', $nhanvien->MaNhanVien) }}"
                                    class="btn btn-warning btn-sm">Sửa</a>
                                <form action="{{ route('nhan-vien.destroy', $nhanvien->MaNhanVien) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('nhan-vien.phong-giam', $nhanvien->MaNhanVien) }}"
                                    class="btn btn-secondary text-white shadow-sm border-0">
                                    <i class="fas fa-door-open"></i> Phòng
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center">
            {{ $nhanviens->links() }}
        </div>
    </div>
</x-app-layout>