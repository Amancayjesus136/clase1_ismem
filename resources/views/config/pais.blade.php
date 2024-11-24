<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pais') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="d-flex justify-content-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a href="#" class="btn btn-primary">Registrar</a>
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre pais</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($paises as $pais)
                            <tr>
                              <th scope="row">{{ $pais->id_pais }}</th>
                              <td>{{ $pais->nombre_pais }}</td>
                              <td>
                                <a href="#" class="btn btn-primary">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('pais.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="pais" class="form-label">Pais</label>
                                    <input type="text" class="form-control" name="nombre_pais">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    <!-- Modal -->

                    <!-- Modal editar -->
                    @foreach ($paises as $item)
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('pais.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="pais" class="form-label">Pais</label>
                                    <input type="text" class="form-control" name="nombre_pais">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    @endforeach
                <!-- Modal editar -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
