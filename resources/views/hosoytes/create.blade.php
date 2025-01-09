<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hồ Sơ Y Tế') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('ho-so-y-te.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-3 d-flex align-items-center">
                        <label for="soLuongHoSo" class="form-label me-2">Nhập số lượng hồ sơ muốn thêm:</label>
                        <input type="number" id="soLuongHoSo" class="form-control me-2" min="1" required
                            style="width: auto; max-width: 100px;">
                        <button type="button" class="btn btn-secondary" id="generateHoSo">Tạo Hồ Sơ</button>
                    </div>
                    <div id="hoSoContainer" class="d-flex flex-wrap justify-content-start"></div>

                    <button type="submit" class="btn btn-primary">Thêm</button>
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

        // JavaScript to generate new fields based on input quantity
        document.getElementById('generateHoSo').addEventListener('click', function () {
            const container = document.getElementById('hoSoContainer');
            const soLuongHoSo = parseInt(document.getElementById('soLuongHoSo').value);
            container.innerHTML = ''; // Xóa các hồ sơ hiện tại

            for (let i = 1; i <= soLuongHoSo; i++) {
                const newHoSo = document.createElement('div');
                newHoSo.classList.add('ho-so', 'mb-4', 'border', 'p-3', 'rounded', 'me-3');
                newHoSo.style.flex = "0 0 30%"; // Cố định chiều rộng

                // Lấy ngày hôm nay
                const today = new Date().toISOString().split('T')[0];

                newHoSo.innerHTML = `
                    <h5 class="mb-3">Hồ Sơ ${i}</h5>
                    <label for="MaHoSo[]" class="form-label">Mã Hồ Sơ:</label>
                    <input type="text" name="MaHoSo[]" class="form-control" required>
                    <div class="invalid-feedback">Vui lòng nhập Mã Hồ Sơ.</div>

                    <label for="MaPhamNhan[]" class="form-label">Tên Phạm Nhân:</label>
                    <select name="MaPhamNhan[]" class="form-select" required>
                        <option value="">-- Chọn Phạm Nhân --</option>
                        @foreach ($phamNhans as $phamNhan)
                            <option value="{{ $phamNhan->MaPhamNhan }}">{{ $phamNhan->HoTen }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Vui lòng chọn Tên Phạm Nhân.</div>

                    <div class="mb-3">
                        <label for="VanDeYTe[]" class="form-label">Vấn Đề Y Tế:</label>
                        <input type="text" name="VanDeYTe[]" class="form-control" required>
                        <div class="invalid-feedback">Vui lòng nhập Vấn Đề Y Tế.</div>
                    </div>

                    <div class="mb-3">
                        <label for="NgayChanDoan[]" class="form-label">Ngày Chẩn Đoán:</label>
                        <input type="date" name="NgayChanDoan[]" class="form-control" value="${today}" readonly required>
                        <div class="invalid-feedback">Vui lòng chọn Ngày Chẩn Đoán.</div>
                    </div>

                    <div class="mb-3">
                        <label for="PhuongPhapDieuTri[]" class="form-label">Phương Pháp Điều Trị:</label>
                        <input type="text" name="PhuongPhapDieuTri[]" class="form-control" required>
                        <div class="invalid-feedback">Vui lòng nhập Phương Pháp Điều Trị.</div>
                    </div>

                    <div class="mb-3">
                        <label for="BacSiPhuTrach[]" class="form-label">Bác Sĩ Phụ Trách:</label>
                        <input type="text" name="BacSiPhuTrach[]" class="form-control" required>
                        <div class="invalid-feedback">Vui lòng nhập Bác Sĩ Phụ Trách.</div>
                    </div>
                `;
                container.appendChild(newHoSo);
            }
        });
    </script>
</x-app-layout>
