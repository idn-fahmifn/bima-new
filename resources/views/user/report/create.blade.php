<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 dark:text-white leading-tight">
            {{ __('Menus') }}
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
                                <form action="{{ route('report.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-4">
                                        <label for="name" class="block text-sm text-gray-900 dark:text-white">Judul laporan</label>
                                        <div class="mt-2">
                                            <input id="name" name="report_title" required type="text" class="block w-full rounded-md bg-white dark:bg-transparent">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="price" class="block text-sm text-gray-900 dark:text-white">Kategori Laporan</label>
                                        <div class="mt-2">
                                            <select name="category" class="block w-full rounded-md bg-white dark:bg-transparent" required>
                                                <option value="">Pilih Kategori</option>
                                                <option value="approval">Pengadaan Fasilitas</option>
                                                <option value="broken">Kerusakan Fasilitas</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label for="name" class="block text-sm text-gray-900 dark:text-white">Detail laporan</label>
                                        <div class="mt-2">
                                            <textarea name="report_detail" class="block w-full rounded-md bg-white dark:bg-transparent" id="desc"></textarea>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label for="thumbnail" class="block text-sm font-medium text-gray-900 dark:text-white">Dokumentasi</label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900 dark:border-gray-200 px-6 py-10">
                                            <div class="text-center">
                                                <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600 dark:text-white">
                                                    <label for="image" class="relative cursor-pointer rounded-md bg-white dark:bg-transparent font-semibold text-red-600 focus-within:ring-2 focus-within:ring-red-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-red-500">
                                                        <span>Upload a file</span>
                                                        <input id="image" name="gambar" accept="image/png, image/jpg, image/jpeg, image/webp, image/heic" required type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-600  dark:text-white">PNG, JPG, GIF up to 10MB</p>
                                            </div>
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