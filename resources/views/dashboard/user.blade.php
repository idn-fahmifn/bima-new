<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
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
                        <div class="relative -mt-16 grid grid-cols-1 md:grid-cols-4 gap-4 p-4">
                            <!-- Card 1 -->
                            <div
                                class="bg-blue-100 w-full h-24 rounded-xl shadow-md flex items-center justify-around">
                                <h1 class="text-4xl font-semibold">10</h1>
                                <span class="text-center font-semibold">Pending</span>
                            </div>
                            <!-- Card 2 -->
                            <div
                                class="bg-blue-400 w-full h-24 rounded-xl shadow-md flex items-center justify-around">
                                <h1 class="text-4xl text-white font-semibold">15</h1>
                                <span class="text-center text-white font-semibold">Proses</span>
                            </div>
                            <!-- Card 3 -->
                            <div
                                class="bg-green-400 w-full h-24 rounded-xl shadow-md flex items-center justify-around">
                                <h1 class="text-4xl text-white font-semibold">10</h1>
                                <span class="text-center text-white font-semibold">Selesai</span>
                            </div>
                            <!-- Card 4 -->
                            <div
                                class="bg-red-400 w-full h-24 rounded-xl shadow-md flex items-center justify-around">
                                <h1 class="text-4xl text-white font-semibold">10</h1>
                                <span class="text-center text-white font-semibold">Ditolak</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
