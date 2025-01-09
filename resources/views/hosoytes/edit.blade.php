<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chỉnh Sửa Hồ Sơ Y Tế') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('ho-so-y-te.update', $hoSoYTe->MaHoSo) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT') <!-- Sử dụng PUT để cập nhật -->
                    
                    <!-- Mã Hồ Sơ -->
                    <div class="mb-3">
                        <label for="MaHoSo" class="form-label">Mã Hồ Sơ:</label>
                        <input type="text" name="MaHoSo" id="MaHoSo" class="form-control" value="{{ old('MaHoSo', $hoSoYTe->MaHoSo) }}" disabled>
                        <div class="invalid-feedback">Vui lòng nhập Mã Hồ Sơ.</div>
                    </div>

                    <!-- Tên Phạm Nhân -->
                    <label for="MaPhamNhan" class="form-label">Tên Phạm Nhân:</label>
                    <select name="MaPhamNhan" id="MaPhamNhan" class="form-select" disabled>
                        <option value="">-- Chọn Phạm Nhân --</option>
                        @foreach ($phamNhans as $phamNhan)
                            <option value="{{ $phamNhan->MaPhamNhan }}" {{ $phamNhan->MaPhamNhan == $hoSoYTe->MaPhamNhan ? 'selected' : '' }}>
                                {{ $phamNhan->HoTen }}
                            </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Vui lòng chọn Tên Phạm Nhân.</div>

                    <!-- Vấn Đề Y Tế -->
                    <div class="mb-3">
                        <label for="VanDeYTe" class="form-label">Vấn Đề Y Tế:</label>
                        <input type="text" name="VanDeYTe" id="VanDeYTe" class="form-control" value="{{ old('VanDeYTe', $hoSoYTe->VanDeYTe) }}" disabled>
                        <div class="invalid-feedback">Vui lòng nhập Vấn Đề Y Tế.</div>
                    </div>

                    <!-- Ngày Chẩn Đoán -->
                    <div class="mb-3">
                        <label for="NgayChanDoan" class="form-label">Ngày Chẩn Đoán:</label>
                        <input type="date" name="NgayChanDoan" id="NgayChanDoan" class="form-control" value="{{ old('NgayChanDoan', $hoSoYTe->NgayChanDoan) }}" disabled>
                        <div class="invalid-feedback">Vui lòng chọn Ngày Chẩn Đoán.</div>
                    </div>

                    <!-- Phương Pháp Điều Trị -->
                    <div class="mb-3">
                        <label for="PhuongPhapDieuTri" class="form-label">Phương Pháp Điều Trị:</label>
                        <input type="text" name="PhuongPhapDieuTri" id="PhuongPhapDieuTri" class="form-control" value="{{ old('PhuongPhapDieuTri', $hoSoYTe->PhuongPhapDieuTri) }}" required>
                        <div class="invalid-feedback">Vui lòng nhập Phương Pháp Điều Trị.</div>
                    </div>

                    <!-- Bác Sĩ Phụ Trách -->
                    <div class="mb-3">
                        <label for="BacSiPhuTrach" class="form-label">Bác Sĩ Phụ Trách:</label>
                        <input type="text" name="BacSiPhuTrach" id="BacSiPhuTrach" class="form-control" value="{{ old('BacSiPhuTrach', $hoSoYTe->BacSiPhuTrach) }}" required>
                        <div class="invalid-feedback">Vui lòng nhập Bác Sĩ Phụ Trách.</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    <a href="{{ route('ho-so-y-te.index') }}" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Form Validation Script -->
    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</x-app-layout>
