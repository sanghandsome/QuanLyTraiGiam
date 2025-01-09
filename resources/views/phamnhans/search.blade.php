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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ url('/phamnhans') }}" class="text-blue-500 hover:text-blue-700">Quay lại trang chủ</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full border-collapse border border-gray-200 text-left text-sm">
                        <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">STT</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phạm Nhân</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Họ Tên</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Giới Tính</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phòng Giam</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Trạng Thái</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Hành Động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($phamNhans as $phamNhan)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-200 px-4 py-2">{{$cnt}}</td>
                                <td class="border border-gray-200 px-4 py-2">{{$phamNhan->MaPhamNhan}}</td>
                                <td class="border border-gray-200 px-4 py-2">{{$phamNhan->HoTen}}</td>
                                <td class="border border-gray-200 px-4 py-2">{{$phamNhan->GioiTinh}}</td>
                                <td class="border border-gray-200 px-4 py-2">{{$phamNhan->MaPhongGiam}}</td>
                                <td class="border border-gray-200 px-4 py-2">{{$phamNhan->TrangThai}}</td>
                                <td>
                                    <a href="{{ route('phamnhans.edit', $phamNhan->MaPhamNhan) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">
                                        Sửa
                                    </a>
                                    <form action="{{ route('phamnhans.destroy', $phamNhan->MaPhamNhan) }}" method="POST" class="inline-block" id="delete-form-{{ $phamNhan->MaPhamNhan }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600" type="submit" {{ route('phamnhans.destroy', $phamNhan->MaPhamNhan) }}')">
                                        Xóa
                                        </button>
                                    </form>
                                    <a href="{{ route('phamnhans.show', $phamNhan->MaPhamNhan) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
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
</x-app-layout>


