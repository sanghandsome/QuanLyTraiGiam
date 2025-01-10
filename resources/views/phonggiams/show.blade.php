@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chi tiết Phòng Giam</h1>
        <p><strong>Mã phòng giam:</strong> {{ $phongGiam->Maphonggiam }}</p>
        <p><strong>Sức chứa:</strong> {{ $phongGiam->succhua }}</p>
        <p><strong>Số lượng phạm nhân hiện tại:</strong> {{ $phongGiam->soluongphamnhan }}</p>
        <p><strong>Vị trí:</strong> {{ $phongGiam->vitri }}</p>
        <p><strong>Mã nhân viên:</strong> {{ $phongGiam->manhanvien ? $phongGiam->manhanvien : 'Chưa được phân công' }}</p>
        <a href="{{ route('phong-giam.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
@endsection
