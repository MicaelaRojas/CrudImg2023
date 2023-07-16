<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Obras') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <a type="button" href="{{ route('obras.create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Agregar Registro</a>

            <br><a type="button"  class="bg-white  "></a>

            <table class=" w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border px-1 py-2 w-4">ID</th>
                        <th class="border px-1 py-2  w-48">Titulo</th>
                        <th class="border px-1 py-2  w-48">Descripcion</th>
                        <th class="border px-1 py-2  w-48">Codigo</th>

                        <th class="border px-4 py-2  w-min">Foto</th>
                        <th class="border px-4 py-2 w-96">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obras as $obra)
                    <tr>
                        <td>{{$obra->id}}</td>
                        <td>{{$obra->nombre}}</td>
                        <td>{{$obra->descripcion}}</td>
                        <td>{{$obra->codigo}}</td>

                        <td  class="border px-14 py-1">
                            <img src="/imagen/{{$obra->imagen}}" width="60%">
                        </td>
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <!-- botón editar -->
                                <a href="{{ route('obras.edit', $obra->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a>
<div  class="rounded bg-white-500 text-white font-bold py-2 px-4"> </div>
                                <!-- botón borrar -->
                                <form action="{{ route('obras.destroy', $obra->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
                <div>
                    {!! $obras->links() !!}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
          event.preventDefault()
          event.stopPropagation()
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
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })
      }, false)
    })
})()
</script>
