<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kết Quả Tìm Kiếm') }}
        </h2>
    </x-slot>
    <div class="container mt-4">
        <h1 class="mb-5 text-center text-white bg-dark py-3 rounded shadow-lg" style="font-size: 2rem;">
            Danh Sách Phòng Giam Quản Lý: {{ $nhanVien->HoTen }}
        </h1>

        @if ($phongGiams->isEmpty())
            <p class="text-center text-danger">Nhân viên này không quản lý phòng giam nào.</p>
        @else
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Mã Phòng Giam</th>
                        <th>Sức Chứa</th>
                        <th>Số Lượng Hiện Tại</th>
                        <th>Vị Trí</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phongGiams as $phongGiam)
                        <tr>
                            <td>{{ $phongGiam->MaPhongGiam }}</td>
                            <td>{{ $phongGiam->SucChua }}</td>
                            <td>{{ $phongGiam->SoLuongPhamNhanHienTai }}</td>
                            <td>{{ $phongGiam->ViTri }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('nhan-vien.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>