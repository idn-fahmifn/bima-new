<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 dark:text-white leading-tight">
            {{ __('Respon Laporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full rounded-lg overflow-hidden">
                <!-- Card Header -->
                <div class="relative">
                    <video autoplay muted loop class="w-full h-56 object-cover rounded-xl">
                        <source src="{{asset('idn_asset/videoidn.mp4')}}" type="video/mp4">
                    </video>
                    <div class="relative -mt-16 p-4">
                        <!-- Card 1 -->
                        <div class="bg-white dark:bg-gray-700 text-white w-full h-24 rounded-xl p-4 flex justify-between items-center">
                            <div class="p-2">
                                <h1 class="text-xl text-red-700 dark:text-white font-semibold">{{$data->judul_laporan}}</h1>
                                <span class="text-center mt-4 text-sm text-gray-700 dark:text-white">Berikan tanggapan dibawah,</span>
                            </div>
                        </div>

                        <div class="bg-white mt-4 dark:bg-gray-700 text-white w-full rounded-xl p-4">
                            <div class="p-2">
                                <form action="{{route('respon.store', $data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-4">
                                        <label for="status" class="block text-sm text-gray-900 dark:text-white">Ubah Status Laporan <span class="text-red-500 font-semibold">*</span> </label>
                                        <div class="mt-2">
                                            <select name="" id="status" class="block w-full rounded-md bg-white dark:bg-transparent">
                                                <option value="proses">Diproses</option>
                                                <option value="selesai">Selesai</option>
                                                <option value="ditolak">Ditolak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="name" class="block text-sm text-gray-900 dark:text-white">Respon Laporan <span class="text-red-500 font-semibold">*</span> </label>
                                        <div class="mt-2">
                                            <textarea name="respon" class="block w-full rounded-md bg-white dark:bg-transparent" required id="desc"></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="text-white bg-blue-600 py-2 px-6 rounded-md hover:bg-blue-800">Respon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>