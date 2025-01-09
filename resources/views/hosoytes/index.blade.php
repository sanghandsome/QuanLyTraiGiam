<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-0">
                {{ __('Hồ Sơ Y Tế') }}
            </h2>
            <a href="{{ route('ho-so-y-te.create') }}" class="btn btn-primary">Add</a>
        </div>
    </x-slot>

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('fail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ho-so-y-te-tab" data-bs-toggle="tab" href="#ho-so-y-te" role="tab"
                    aria-controls="ho-so-y-te" aria-selected="true">Hồ Sơ Y Tế</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="bang-khac-tab" data-bs-toggle="tab" href="#bang-khac" role="tab"
                    aria-controls="bang-khac" aria-selected="false">Tổng Hợp Từng Phạm Nhân</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="ho-so-y-te" role="tabpanel" aria-labelledby="ho-so-y-te-tab">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center align-middle">
                        <thead>
                            <tr>
                                <th>Mã Hồ Sơ</th>
                                <th>Tên Phạm Nhân</th>
                                <th>Vấn Đề Y Tế</th>
                                <th>Ngày Chẩn Đoán</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hosoytes as $hosoyte)
                                <tr>
                                    <td>{{ $hosoyte->MaHoSo }}</td>
                                    <td>{{ $hosoyte->HoTen }}</td>
                                    <td>{{ $hosoyte->VanDeYTe }}</td>
                                    <td>{{ $hosoyte->NgayChanDoan }}</td>
                                    <td>
                                        <a href="{{ route('ho-so-y-te.show', $hosoyte->MaHoSo) }}"
                                            class="btn btn-info btn-sm">Xem</a>
                                        <a href="{{ route('ho-so-y-te.edit', $hosoyte->MaHoSo) }}"
                                            class="btn btn-warning btn-sm">Sửa</a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"
                                            onclick="setDeleteAction('{{ route('ho-so-y-te.destroy', $hosoyte->MaHoSo) }}')">
                                            Xóa
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Nội dung cho Tab Bảng Khác -->
            <div class="tab-pane fade" id="bang-khac" role="tabpanel" aria-labelledby="bang-khac-tab">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center align-middle">
                        <thead>
                            <tr>
                                <th>Mã Phạm Nhân</th>
                                <th>Tên Phạm Nhân</th>
                                <th>Số Lượng Hồ Sơ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dữ liệu cho bảng khác -->
                            @foreach ($soLuongHoSo as $item)
                                    <td>{{ $item->MaPhamNhan }}</td>
                                    <td>{{ $item->HoTen }}</td>
                                    <td>{{ $item->SoHoSo }}</td>
                                    <td>
                                        <a href="{{ route('ho-so-y-te.show2', $item->MaPhamNhan) }}" class="btn btn-info">
                                            Xem Hồ Sơ
                                        </a>
                                    </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal xóa -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Xác Nhận Xóa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có muốn xóa hồ sơ này không?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <form id="deleteForm" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap CSS & JS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function setDeleteAction(actionUrl) {
                const deleteForm = document.getElementById('deleteForm');
                deleteForm.setAttribute('action', actionUrl);
            }
        </script>
        <style>
            .table .address-column {
                max-width: 150px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        </style>
    </div>
</x-app-layout>
