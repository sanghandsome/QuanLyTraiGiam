<div class="container mt-4">
    <h1 class="mb-4">Thêm mới Phòng Giam</h1>
    <form action="{{ route('phong-giam.store') }}" method="POST">
        @csrf
        {{-- Hiển thị lỗi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Mã phòng giam --}}
        <div class="form-group mb-3">
            <label for="Maphonggiam">Mã phòng giam:</label>
            <input type="text" class="form-control" id="Maphonggiam" name="Maphonggiam" value="{{ old('Maphonggiam') }}" placeholder="Nhập mã phòng giam" required>
        </div>

        {{-- Sức chứa --}}
        <div class="form-group mb-3">
            <label for="succhua">Sức chứa:</label>
            <input type="number" class="form-control" id="succhua" name="succhua" value="{{ old('succhua') }}" placeholder="Nhập sức chứa" required>
        </div>

        {{-- Số lượng phạm nhân hiện tại --}}
        <div class="form-group mb-3">
            <label for="soluongphamnhan">Số lượng phạm nhân hiện tại:</label>
            <input type="number" class="form-control" id="soluongphamnhan" name="soluongphamnhan" value="{{ old('soluongphamnhan') }}" placeholder="Nhập số lượng phạm nhân hiện tại" required>
        </div>

        {{-- Vị trí --}}
        <div class="form-group mb-3">
            <label for="vitri">Vị trí:</label>
            <input type="text" class="form-control" id="vitri" name="vitri" value="{{ old('vitri') }}" placeholder="Nhập vị trí" required>
        </div>

        {{-- Mã nhân viên --}}
        <div class="form-group mb-3">
            <label for="manhanvien">Mã nhân viên:</label>
            <input type="text" class="form-control" id="manhanvien" name="manhanvien" value="{{ old('manhanvien') }}" placeholder="Nhập mã nhân viên">
        </div>

        {{-- Nút lưu --}}
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
