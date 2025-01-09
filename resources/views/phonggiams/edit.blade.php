@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa Phòng Giam</h1>
        <form action="{{ route('phong-giam.update', $phongGiam->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Mã phòng giam --}}
            <div class="form-group mb-3">
                <label for="Maphonggiam">Mã phòng giam:</label>
                <input type="text" class="form-control" id="Maphonggiam" name="Maphonggiam" value="{{ $phongGiam->Maphonggiam }}" required>
            </div>

            {{-- Sức chứa --}}
            <div class="form-group mb-3">
                <label for="succhua">Sức chứa:</label>
                <input type="number" class="form-control" id="succhua" name="succhua" value="{{ $phongGiam->succhua }}" required>
            </div>

            {{-- Số lượng phạm nhân hiện tại --}}
            <div class="form-group mb-3">
                <label for="soluongphamnhan">Số lượng phạm nhân hiện tại:</label>
                <input type="number" class="form-control" id="soluongphamnhan" name="soluongphamnhan" value="{{ $phongGiam->soluongphamnhan }}" required>
            </div>

            {{-- Vị trí --}}
            <div class="form-group mb-3">
                <label for="vitri">Vị trí:</label>
                <input type="text" class="form-control" id="vitri" name="vitri" value="{{ $phongGiam->vitri }}" required>
            </div>

            {{-- Mã nhân viên --}}
            <div class="form-group mb-3">
                <label for="manhanvien">Mã nhân viên:</label>
                <input type="text" class="form-control" id="manhanvien" name="manhanvien" value="{{ $phongGiam->manhanvien }}">
            </div>

            {{-- Nút lưu --}}
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
