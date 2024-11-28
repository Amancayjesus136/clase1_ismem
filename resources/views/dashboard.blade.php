<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                  Total de paises
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">{{ $totalPaises }}</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                  Total usuarios
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">{{ $totalUsuarios }}</h5>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
