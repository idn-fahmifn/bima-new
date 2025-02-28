<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Area IDN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- area judul dan button kiri kanan -->
                <div class="md:flex justify-between items-center mb-6">
                    <div>
                        <span class="font-md text-sm dark:text-gray-300">Data tempat atau area yang ada di IDN Boarding School</span> <br>
                        <span class="font-md text-sm dark:text-gray-300">Klik pada judul untuk melihat detail</span>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('tempat.create') }}" class="bg-blue-700 px-6 py-2 text-white hover:bg-blue-500 rounded-md">Tambah Tempat</a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    @if (session('success'))
                    <div id="alert" class="flex items-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                        <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm1 11H9v-2h2v2zm0-4H9V7h2v2z" />
                        </svg>
                        <span class="font-medium">Berhasil!</span> {{ session('success') }}.
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 text-green-500 hover:bg-green-200 rounded-lg p-1.5 inline-flex items-center" onclick="closeAlert()">
                            <span class="sr-only">Close</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9.293l4.293-4.293 1.414 1.414L11.414 10l4.293 4.293-1.414 1.414L10 11.414l-4.293 4.293-1.414-1.414L8.586 10 4.293 5.707 5.707 4.293 10 8.586z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    @endif

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($data as $item)
                        <div class="bg-white dark:bg-slate-700 rounded-lg shadow-md overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('storage/images/tempat/'.$item->gambar) }}" alt="Card Image">
                            <div class="p-4">
                                <h2 class="mb-6 font-semibold text-lg dark:text-gray-100"><a href="{{ route('tempat.detail', $item->id) }}"> {{ $item->nama_tempat }} </a></h2>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">{{ Str::limit($item->deskripsi) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



</x-app-layout>