<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengaduan Fasilitas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- area judul dan button kiri kanan -->
                <div class="overflow-x-auto">
                    <div class="md:flex justify-between items-center mb-6">
                        <div>
                            <span class="font-md text-sm dark:text-gray-300">Klik pada nama barang untuk membuat
                                laporan.</span>
                        </div>
                    </div>
                    <div class="my-4 p-0 rounded-lg">
                        @if (!$barang)
                            <div id="alert"
                                class="flex items-center p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg"
                                role="alert">
                                <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm1 11H9v-2h2v2zm0-4H9V7h2v2z" />
                                </svg>
                                <span class="font-medium">Maaf,</span> belum ada fasilatas apapun disini.
                            </div>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white dark:bg-gray-800">
                                    <thead class="bg-gray-200 dark:bg-blue-700">
                                        <tr>
                                            <th scope="col"
                                                class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                                Kode Barang
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                                Nama Barang
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                                Kondisi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->barang as $item)
                                            <tr>
                                                <td
                                                    class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200">
                                                    {{ $item->kode_barang }}
                                                </td>
                                                <td
                                                    class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200">
                                                    <a href="{{route('report.barang', $item->id)}}" class="text-md font-semibold text-blue-500">{{ $item->nama_barang }}</a>
                                                </td>
                                                <td
                                                    class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200">
                                                    @if ($item->status == 'normal')
                                                        <span class="bg-green-800 py-1 px-2 rounded-full">Baik</span>
                                                    @elseif($item->status == 'perbaikan')
                                                        <span class="bg-yellow-500 py-1 px-2 rounded-full">Maintenance</span>
                                                    @else
                                                        <span class="bg-red-500 py-1 px-2 rounded-full">Perlu Perbaikan</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>