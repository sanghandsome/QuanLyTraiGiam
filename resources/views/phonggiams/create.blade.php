<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Phòng Giam') }}
        </h2>
    </x-slot>

    <div class="container">
        <h2>Thêm Phòng Giam Mới</h2>
        <form action="{{ route('phong-giam.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="MaPhongGiam" class="form-label">Mã Phòng Giam</label>
                <input type="text" class="form-control" id="MaPhongGiam" name="MaPhongGiam" required>
            </div>
            <div class="mb-3">
                <label for="SucChua" class="form-label">Sức Chứa</label>
                <input type="number" class="form-control" id="SucChua" name="SucChua" required>
            </div>
            <div class="mb-3">
                <label for="SoLuongPhamNhanHienTai" class="form-label">Số Lượng Phạm Nhân Hiện Tại</label>
                <input type="number" class="form-control" id="SoLuongPhamNhanHienTai" name="SoLuongPhamNhanHienTai"
                    required>
            </div>
            <div class="mb-3">
                <label for="ViTri" class="form-label">Vị Trí</label>
                <input type="text" class="form-control" id="ViTri" name="ViTri" required>
            </div>
            <div class="mb-3">
                <label for="MaNhanVien" class="form-label">Mã Nhân Viên</label>
                <input type="text" class="form-control" id="MaNhanVien" name="MaNhanVien" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Phòng Giam</button>
        </form>
    </div>

    <!-- Bootstrap CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</x-app-layout>