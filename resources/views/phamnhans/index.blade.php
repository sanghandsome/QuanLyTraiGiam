@php
$cnt = 1;
$dem = 1;
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Danh Sách Phạm Nhân') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container">
            <div class="bg-white shadow-sm rounded">
                <div class="p-4 text-gray-900">
                    <a href="{{ route('phamnhans.create') }}" class="btn btn-primary mb-3">
                        Thêm Phạm Nhân
                    </a>
                    <button id="openPopup" class="btn btn-primary mb-3">
                        Hiển thị danh sách phạm nhân đã hoàn thành
                    </button>
                    <form action="{{ route('search') }}" method="GET" class="mb-4 d-flex">
                        <input type="text" name="tim_kiem" id="searchInput" placeholder="Nhập từ khóa tìm kiếm..."
                               class="form-control me-2" />
                        <button type="submit" class="btn btn-primary">
                            Tìm Kiếm
                        </button>
                    </form>
                    <table class="table">
                        <thead>
                        <tr class="table-light">
                            <th>STT</th>
                            <th>Mã Phạm Nhân</th>
                            <th>Họ Tên</th>
                            <th>Giới Tính</th>
                            <th>Mã Phòng Giam</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($phamNhans as $phamNhan)
                            <tr>
                                <td>{{$cnt}}</td>
                                <td>{{$phamNhan->MaPhamNhan}}</td>
                                <td>{{$phamNhan->HoTen}}</td>
                                <td>{{$phamNhan->GioiTinh}}</td>
                                <td>{{$phamNhan->MaPhongGiam}}</td>
                                <td>{{$phamNhan->TrangThai}}</td>
                                <td>
                                    <a href="{{ route('phamnhans.edit', $phamNhan->MaPhamNhan) }}" class="btn btn-warning btn-sm">
                                        Sửa
                                    </a>
                                    <form action="{{ route('phamnhans.destroy', $phamNhan->MaPhamNhan) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            Xóa
                                        </button>
                                    </form>
                                    <a href="{{ route('phamnhans.show', $phamNhan->MaPhamNhan) }}" class="btn btn-info btn-sm">
                                        Xem
                                    </a>
                                </td>
                            </tr>
                            @php
                                $cnt++;
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="popup" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Danh sách phạm nhân đã hoàn thành</h5>
                    <button id="closePopup" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr class="table-light">
                            <th>STT</th>
                            <th>Mã Phạm Nhân</th>
                            <th>Họ Tên</th>
                            <th>Giới Tính</th>
                            <th>Mã Phòng Giam</th>
                            <th>Trạng Thái</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dsphamNhans as $dsphamNhan)
                            <tr>
                                <td>{{$dem}}</td>
                                <td>{{$dsphamNhan->MaPhamNhan}}</td>
                                <td>{{$dsphamNhan->HoTen}}</td>
                                <td>{{$dsphamNhan->GioiTinh}}</td>
                                <td>{{$dsphamNhan->MaPhongGiam}}</td>
                                <td>{{$dsphamNhan->TrangThai}}</td>
                            </tr>
                            @php
                                $dem++;
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const openPopup = document.getElementById("openPopup");
            const popup = new bootstrap.Modal(document.getElementById("popup"));

            // Hiển thị popup
            openPopup.addEventListener("click", () => {
                popup.show();
            });

            // Đóng popup khi bấm vào nút ×
            document.getElementById("closePopup").addEventListener("click", () => {
                popup.hide();
            });
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>