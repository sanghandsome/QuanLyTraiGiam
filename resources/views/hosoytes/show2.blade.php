<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chi Tiết Hồ Sơ Y Tế') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Hồ Sơ Y Tế của Phạm Nhân: <span class="text-secondary">{{ $maPhamNhan }}</span></h2>
            <a href="{{ route('ho-so-y-te.index') }}" class="btn btn-outline-primary">
                Quay lại
            </a>
        </div>

        <div class="row">
            @foreach ($hoSoYTe as $hoSo)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Mã Hồ Sơ: {{ $hoSo->MaHoSo }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-2"><strong>Vấn Đề Y Tế:</strong> {{ $hoSo->VanDeYTe }}</p>
                            <p class="mb-2"><strong>Ngày Chẩn Đoán:</strong> {{ date('d/m/Y', strtotime($hoSo->NgayChanDoan)) }}</p>
                            <p class="mb-2"><strong>Phương Pháp Điều Trị:</strong> {{ $hoSo->PhuongPhapDieuTri }}</p>
                            <p class="mb-0"><strong>Bác Sĩ Phụ Trách:</strong> {{ $hoSo->BacSiPhuTrach }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</x-app-layout>