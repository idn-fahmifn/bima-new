<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Area') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- area judul dan button kiri kanan -->
                <div class="md:flex justify-between items-center mb-6">
                    <div>
                        <p class="font-md text-md dark:text-gray-300">Detail area <span class="font-bold">{{ $data->nama_tempat }}</span></p>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="bg-white dark:bg-slate-700 rounded-lg shadow-md p-6 overflow-hidden">
                            <table class="min-w-full">
                                <tbody>
                                    <tr>
                                        <th class="text-start dark:text-gray-200 min-w-40 py-4">Nama Tempat</th>
                                        <td class="text-start dark:text-gray-200 py-4">{{ $data->nama_tempat }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start dark:text-gray-200 min-w-40 py-4">Deskripsi</th>
                                        <td class="text-start dark:text-gray-200 py-4">{{ $data->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start dark:text-gray-200 min-w-40 py-4">Dokumentasi Area</th>
                                        <td class="text-start dark:text-gray-200 py-4">
                                            <img src="{{ asset('storage/images/tempat/'.$data->gambar) }}" alt="detail gambar" class="h-56">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-white dark:bg-slate-700 rounded-lg shadow-md p-6 overflow-hidden">
                            <form action="{{ route('tempat.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mt-4">
                                    <label for="name" class="block text-sm text-gray-900 dark:text-white">Nama Tempat <span class="text-red-500 font-semibold">*</span> </label>
                                    <div class="mt-2">
                                        <input id="name" name="nama_tempat" required type="text" class="block w-full rounded-md bg-white dark:bg-transparent dark:text-gray-300" value="{{ $data->nama_tempat }}">
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <label for="name" class="block text-sm text-gray-900 dark:text-white">Deskripsi Tempat <span class="text-red-500 font-semibold">*</span></label>
                                    <div class="mt-2">
                                        <textarea name="deskripsi" class="block w-full rounded-md bg-white dark:bg-transparent dark:text-gray-300 h-56" required id="desc">
                                        {{ $data->deskripsi }}
                                        </textarea>
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
                                                    <input id="image" name="gambar" accept="image/png, image/jpg, image/jpeg, image/webp, image/heic" value="{{ $data->gambar }}" type="file" class="sr-only" onchange="previewImage(event)">
                                                    <p class="text-xs text-gray-600  dark:text-white">PNG, JPG, GIF up to 10MB</p>
                                                </label>
                                            </div>
                                            <img id="imagePreview" src="#" alt="Image Preview" style="display:none; margin-top:10px; max-width:100%;" width="250" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="py-2 px-4 text-blue-500 font-semibold text-sm rounded-md outline outline-blue-600">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="my-6">
                        <div class="md:flex justify-between items-center mb-6">
                            <div>
                                <span class="font-md text-sm dark:text-gray-300">Data fasilitas di {{ $data->nama_tempat }}</span>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('barang.create', $data->id) }}" class="py-2 text-blue-500 font-semibold text-sm hover:text-blue-700 rounded-md">Tambah Fasilitas</a>
                            </div>
                        </div>
                        <div class="my-4 p-0 rounded-lg">
                            @if (!$barang)
                            <div id="alert" class="flex items-center p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg" role="alert">
                                <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm1 11H9v-2h2v2zm0-4H9V7h2v2z" />
                                </svg>
                                <span class="font-medium">Maaf,</span> belum ada fasilatas apapun disini.
                            </div>
                            @else
                            <table class="min-w-full bg-white dark:bg-gray-800">
                                <thead class="bg-gray-200 dark:bg-blue-700">
                                    <tr>
                                        <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                            Kode Barang
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                            Nama Barang
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                            Kondisi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->barang as $item)
                                    <tr>
                                        <td class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200"> {{ $item->kode_barang }} </td>
                                        <td class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200"> {{ $item->nama_barang }} </td>
                                        <td class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200">
                                            @if ($item->status == 'normal')
                                            <span class="bg-green-800 py-1 px-2 rounded-full">Kondisi Baik</span>
                                            @else
                                            <span class="bg-yellow-500 py-1 px-2 rounded-full">Sedang Perbaikan</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>



</x-app-layout>