<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 dark:text-white leading-tight">
            {{ __('Tempat') }}
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
                                <h1 class="text-xl text-red-700 dark:text-white font-semibold">Tambah Tempat</h1>
                                <span class="text-center mt-4 text-sm text-gray-700 dark:text-white">Tambahkan data tempat baru dibawah.</span>
                            </div>
                        </div>

                        <div class="bg-white mt-4 dark:bg-gray-700 text-white w-full rounded-xl p-4">
                            <div class="p-2">
                                <form action="{{ route('tempat.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-4">
                                        <label for="name" class="block text-sm text-gray-900 dark:text-white">Nama Tempat <span class="text-red-500 font-semibold">*</span> </label>
                                        <div class="mt-2">
                                            <input id="name" name="nama_tempat" required type="text" class="block w-full rounded-md bg-white dark:bg-transparent" placeholder="Masukan nama tempat">
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label for="name" class="block text-sm text-gray-900 dark:text-white">Deskripsi Tempat <span class="text-red-500 font-semibold">*</span> </label>
                                        <div class="mt-2">
                                            <textarea name="deskripsi" class="block w-full rounded-md bg-white dark:bg-transparent" required id="desc"></textarea>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label for="thumbnail" class="block text-sm font-medium text-gray-900 dark:text-white">Dokumentasi <span class="text-red-500 font-semibold">*</span></label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900 dark:border-gray-200 px-6 py-10">
                                            <div class="text-center">
                                                <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600 dark:text-white">
                                                    <label for="image" class="relative cursor-pointer rounded-md bg-white dark:bg-transparent font-semibold text-blue-600 focus-within:ring-2  hover:text-blue-500">
                                                        <span>Upload a file</span>
                                                        <input id="image" name="gambar" accept="image/png, image/jpg, image/jpeg, image/webp, image/heic" required type="file" class="sr-only" onchange="previewImage(event)">
                                                        <p class="text-xs text-gray-600  dark:text-white">PNG, JPG, GIF up to 10MB</p>
                                                    </label>
                                                </div>
                                                <img id="imagePreview" src="#" alt="Image Preview" style="display:none; margin-top:10px; max-width:100%;" width="250" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="text-white bg-blue-600 py-2 px-6 rounded-md hover:bg-blue-800">Simpan</button>
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