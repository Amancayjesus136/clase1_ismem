<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 text-gray-900">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#clearCliente">
                            Clear Cliente
                          </button>
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Distrito</th>
                            <th scope="col">Email</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($clientes as $cliente)
                            <tr>
                              <th scope="row">{{ $cliente->id_cliente }}</th>
                              <td>{{ $cliente->nombres_cliente }}</td>
                              <td>{{ $cliente->apellidos_cliente }}</td>
                              <td>{{ $cliente->edad_cliente }}</td>
                              <td>{{ $cliente->direccion_cliente }}</td>
                              <td>{{ $cliente->pais_cliente }}</td>
                              <td>{{ $cliente->ciudad_cliente }}</td>
                              <td>{{ $cliente->distrito_cliente }}</td>
                              <td>{{ $cliente->email_cliente }}</td>
                              <td>{{ $cliente->numero_cliente }}</td>
                              <td>{{ $cliente->estado_cliente }}</td>
                              <td>
                                <a href="#" class="btn btn-primary mr-2">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                    <div class="modal fade" id="clearCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('clientes.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Nombre cliente</label>
                                        <input type="text" class="form-control" name="nombres_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Apellido cliente</label>
                                        <input type="text" class="form-control" name="apellidos_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Edad</label>
                                        <input type="number" class="form-control" name="edad_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Direccion</label>
                                        <input type="text" class="form-control" name="direccion_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Pais</label>
                                        <select class="form-select" name="pais_cliente">
                                            <option selected disabled>Seleccionar Pais</option>
                                            @foreach ($paises as $pais)
                                                <option value="{{ $pais->nombre_pais }}">{{ $pais->nombre_pais }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" name="ciudad_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Distrito</label>
                                        <input type="text" class="form-control" name="distrito_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Numero</label>
                                        <input type="number" class="form-control" name="numero_cliente">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Estado cliente</label>
                                        <input type="number" class="form-control" name="estado_cliente">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submite" class="btn btn-primary">Save changes</button>
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
