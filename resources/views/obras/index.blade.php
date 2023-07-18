<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Obras') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Lista de Obras
                    </div>
                    <div class="mt-6 text-gray-500">
                        <a href="{{ route('obras.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Obra</a>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($obras as $obra)
                        <div class="bg-gray-100 border border-gray-300 p-4 rounded-md">
                            <h3 class="font-bold text-xl mb-2">{{ $obra->titulo }}</h3>
                            <p class="text-gray-700">{{ $obra->descripcion }}</p>
                            <img src="/imagen/{{ $obra->imagen }}" alt="{{ $obra->titulo }}" class="mt-4 mx-auto">
                            <div class="mt-4 flex items-center justify-between">
                                <a href="{{ route('obras.edit', $obra->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                                <form action="{{ route('obras.destroy', $obra->id) }}" method="POST" class="inline formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                </form>
                                <button type="button" class="text-blue-500 hover:text-blue-700 ver-codigo-btn" data-bs-toggle="modal" data-bs-target="#codigoModal{{ $obra->id }}" data-codigo="{{ $obra->codigo }}">Ver Código</button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="codigoModal{{ $obra->id }}" tabindex="-1" aria-labelledby="codigoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="codigoModalLabel">Código de la Obra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <pre id="codigoObra{{ $obra->id }}"></pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function mostrarCodigo(codigo) {
        const codigoObra = document.getElementById('codigoObra');
        codigoObra.textContent = codigo;
        $('#codigoModal').modal('show');
    }

    $(document).ready(function () {
        // Evento click del botón "Ver Código"
        $('.ver-codigo-btn').click(function () {
            const codigo = $(this).data('codigo');
            mostrarCodigo(codigo);
        });

        // Evento submit del formulario de eliminación
        $('.formEliminar').submit(function (event) {
            event.preventDefault();
            event.stopPropagation();
            Swal.fire({
                title: '¿Confirma la eliminación del registro?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.', 'success');
                }
            });
        });
    });
</script>
