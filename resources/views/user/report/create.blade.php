<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 dark:text-white leading-tight">
            {{ __('Buat laporan') }}
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
                                <h1 class="text-xl text-red-700 dark:text-white font-semibold">Buat Laporan</h1>
                                <span class="text-center mt-4 text-sm text-gray-700 dark:text-white">Ajukan laporan baru dibawah ini.</span>
                            </div>
                        </div>

                        <div class="bg-white mt-4 dark:bg-gray-700 text-white w-full rounded-xl p-4">
                            <div class="p-2">
                                <form action="{{route('report.store', $data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-4">
                                        <label for="name" class="block text-sm text-gray-900 dark:text-white">Judul laporan</label>
                                        <div class="mt-2">
                                            <input id="name" name="judul_laporan" required type="text" class="block w-full rounded-md bg-white dark:bg-transparent">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="name" class="block text-sm text-gray-900 dark:text-white">Detail laporan</label>
                                        <div class="mt-2">
                                            <textarea name="isi_laporan" class="block w-full rounded-md bg-white dark:bg-transparent" id="isi_laporan"></textarea>
                                        </div>
                                    </div>

                                    
                                    <div class="mt-4">
                                        <button type="submit" class="text-white bg-red-600 py-2 px-6 rounded-md hover:bg-red-800">Create</button>
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