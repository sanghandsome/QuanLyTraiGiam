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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('phamnhans.create') }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-600 mb-4">
                        Thêm Phạm Nhân
                    </a>
                    <button id="openPopup" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded shadow hover:bg-blue-600">
                        Hiển thị danh sách phạm nhân đã hoàn thành
                    </button>
                    <form action="{{ route('search') }}" method="GET" class="flex mb-6">
                        <input type="text" name="tim_kiem" id="searchInput" placeholder="Nhập từ khóa tìm kiếm..."
                               class="p-3 w-full border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        <button type="submit"
                                class="p-3 bg-blue-500 text-white rounded-r-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Tìm Kiếm
                        </button>
                    </form>
                    <table class="min-w-full border-collapse border border-gray-200 text-left text-sm">
                        <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">STT</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phạm Nhân</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Họ Tên</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Giới Tính</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phòng Giam</th>
                            <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phòng Giam</th>
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
    <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg w-1/2 p-6 relative">
            <!-- Nút đóng -->
            <button id="closePopup" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                &times;
            </button>
            <!-- Nội dung popup -->
            <h3 class="text-lg font-bold mb-4">Danh sách phạm nhân đã hoàn thành</h3>
            <table class="min-w-full border-collapse border border-gray-200 text-left text-sm">
                <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">STT</th>
                    <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phạm Nhân</th>
                    <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Họ Tên</th>
                    <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Giới Tính</th>
                    <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phòng Giam</th>
                    <th class="border border-gray-200 px-4 py-2 font-medium text-gray-700">Mã Phòng Giam</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dsphamNhans as $dsphamNhan)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2">{{$dem}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$dsphamNhan->MaPhamNhan}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$dsphamNhan->HoTen}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$dsphamNhan->GioiTinh}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$dsphamNhan->MaPhongGiam}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$dsphamNhan->TrangThai}}</td>
                    </tr>
                    @php
                        $dem++;
                    @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const openPopup = document.getElementById("openPopup");
            const closePopup = document.getElementById("closePopup");
            const popup = document.getElementById("popup");

            // Hiển thị popup
            openPopup.addEventListener("click", () => {
                popup.classList.remove("hidden");
            });

            // Đóng popup khi bấm vào nút ×
            closePopup.addEventListener("click", () => {
                popup.classList.add("hidden");
            });

            // Đóng popup khi click ra ngoài
            popup.addEventListener("click", (e) => {
                if (e.target === popup) {
                    popup.classList.add("hidden");
                }
            });
        });
    </script>
</x-app-layout>


