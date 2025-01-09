<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chi Tiết Hồ Sơ Y Tế') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Thông Tin Hồ Sơ Y Tế</h4>
            </div>
            <div class="card-body">
                <!-- Mã Hồ Sơ -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Mã Hồ Sơ:</label>
                    <p class="form-control-plaintext">{{ $hoSo->MaHoSo }}</p>
                </div>

                <!-- Tên Phạm Nhân -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Tên Phạm Nhân:</label>
                    <p class="form-control-plaintext">{{ $hoSo->phamNhan->HoTen }}</p>
                </div>

                <!-- Vấn Đề Y Tế -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Vấn Đề Y Tế:</label>
                    <p class="form-control-plaintext">{{ $hoSo->VanDeYTe }}</p>
                </div>

                <!-- Ngày Chẩn Đoán -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Ngày Chẩn Đoán:</label>
                    <p class="form-control-plaintext">{{ $hoSo->NgayChanDoan }}</p>
                </div>

                <!-- Phương Pháp Điều Trị -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Phương Pháp Điều Trị:</label>
                    <p class="form-control-plaintext">{{ $hoSo->PhuongPhapDieuTri }}</p>
                </div>

                <!-- Bác Sĩ Phụ Trách -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Bác Sĩ Phụ Trách:</label>
                    <p class="form-control-plaintext">{{ $hoSo->BacSiPhuTrach }}</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('ho-so-y-te.index') }}" class="btn btn-secondary">Quay Lại</a>
                <a href="{{ route('ho-so-y-te.edit', $hoSo->MaHoSo) }}" class="btn btn-primary">Chỉnh Sửa</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</x-app-layout>
