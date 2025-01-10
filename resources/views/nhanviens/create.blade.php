<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kết Quả Tìm Kiếm') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1 class="mb-5 text-center text-white bg-dark py-3 rounded shadow-lg" style="font-size: 2rem;">Thêm Nhân Viên
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('nhan-vien.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="MaNhanVien" class="form-label">Mã Nhân Viên</label>
                                <input type="text" class="form-control @error('MaNhanVien') is-invalid @enderror"
                                    name="MaNhanVien" id="MaNhanVien" placeholder="Nhập mã nhân viên" required>
                                @error('MaNhanVien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="HoTen" class="form-label">Họ Tên</label>
                                <input type="text" class="form-control @error('HoTen') is-invalid @enderror"
                                    name="HoTen" id="HoTen" placeholder="Nhập họ tên nhân viên" required>
                                @error('HoTen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ChucVu" class="form-label">Chức Vụ</label>
                                <input type="text" class="form-control @error('ChucVu') is-invalid @enderror"
                                    name="ChucVu" id="ChucVu" placeholder="Nhập chức vụ" required>
                                @error('ChucVu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="SoDienThoai" class="form-label">Số Điện Thoại</label>
                                <input type="text" class="form-control @error('SoDienThoai') is-invalid @enderror"
                                    name="SoDienThoai" id="SoDienThoai" placeholder="Nhập số điện thoại" required>
                                @error('SoDienThoai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="CaLam" class="form-label">Ca Làm</label>
                                <select class="form-control @error('CaLam') is-invalid @enderror" name="CaLam"
                                    id="CaLam" required>
                                    <option value="">-- Chọn Ca Làm --</option>
                                    <option value=" Sáng">Ca Sáng</option>
                                    <option value=" Chiều">Ca Chiều</option>
                                    <option value=" Tối">Ca Tối</option>
                                </select>
                                @error('CaLam')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-lg">Thêm Nhân Viên</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>