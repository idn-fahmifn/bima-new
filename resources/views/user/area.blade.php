<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Area') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- area judul dan button kiri kanan -->
                <div class="md:flex justify-center items-center mb-6">
                    <div>
                        <span class="font-md text-lg dark:text-gray-300">Pilih area yang terdapat fasilitas bermasalah</span>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($data as $item)
                        <div class="bg-white dark:bg-slate-700 rounded-lg shadow-md overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('storage/images/tempat/'.$item->gambar) }}" alt="Card Image">
                            <div class="p-4">
                                <h2 class="mb-6 font-semibold text-lg dark:text-gray-100"><a href="{{ route('create.area', $item->id) }}"> {{ $item->nama_tempat }} </a></h2>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">{{ Str::limit($item->deskripsi) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



</x-app-layout>