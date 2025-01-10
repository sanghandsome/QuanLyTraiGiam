@php
    $cnt = 1;
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kết Quả Tìm Kiếm') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container">
            <a href="{{ url('/phamnhans') }}" class="btn btn-link">Quay lại trang chủ</a>
            <div class="bg-white shadow-sm rounded">
                <div class="p-4 text-gray-900">
                    <table class="table">
                        <thead class="table-light">
                        <tr>
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
                                    <form action="{{ route('phamnhans.destroy', $phamNhan->MaPhamNhan) }}" method="POST" class="d-inline" id="delete-form-{{ $phamNhan->MaPhamNhan }}">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>