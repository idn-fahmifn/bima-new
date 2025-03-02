<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- area judul dan button kiri kanan -->
                <div class="md:flex justify-between items-center mb-6">
                    <div>
                        <h4 class="text-lg dark:text-white font-semibold">Laporan Masuk</h4>
                        <span class="font-md text-sm dark:text-gray-300">Klik pada judul laporan untuk merespon</span>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    @if (session('success'))
                        <div id="alert" class="flex items-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg"
                            role="alert">
                            <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm1 11H9v-2h2v2zm0-4H9V7h2v2z" />
                            </svg>
                            <span class="font-medium">Berhasil!</span> {{ session('success') }}.
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 text-green-500 hover:bg-green-200 rounded-lg p-1.5 inline-flex items-center"
                                onclick="closeAlert()">
                                <span class="sr-only">Close</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 9.293l4.293-4.293 1.414 1.414L11.414 10l4.293 4.293-1.414 1.414L10 11.414l-4.293 4.293-1.414-1.414L8.586 10 4.293 5.707 5.707 4.293 10 8.586z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg">
                        <thead class="bg-gray-200 dark:bg-blue-700">
                            <tr>
                                <th scope="col"
                                    class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                    Judul Laporan
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                    Dibuat
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td
                                        class="py-3 px-6 text-left">
                                        <a href="{{route('respon.create', $item->id)}}" class="text-xs font-medium text-gray-700 dark:text-gray-200 tracking-wider">{{$item->judul_laporan}}</a>
                                    </td>
                                    <td class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200">
                                        @if ($item->status == 'pending')
                                            <span class="bg-gray-500 py-1 px-2 rounded-full">Pending</span>
                                        @elseif ($item->status == 'diproses')
                                            <span class="bg-green-500 py-1 px-2 rounded-full">Diproses</span>
                                        @elseif ($item->status == 'selesai')
                                            <span class="bg-green-700 py-1 px-2 rounded-full">Selesai</span>
                                        @else
                                            <span class="bg-green-700 py-1 px-2 rounded-full">Ditolak</span>
                                        @endif
                                    </td>
                                    <td
                                        class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-gray-200 tracking-wider">
                                        {{$item->tanggal_pengaduan->diffForHumans()}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">

                    </div>

                </div>
            </div>
        </div>

</x-app-layout>