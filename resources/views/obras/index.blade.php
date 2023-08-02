<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mostudio - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Obras') }}
        </h2>
    </x-slot>

    <div class=" bg-custom-black overflow-hidden shadow-xl sm:rounded-lg">


                    <div class="mt-6 text-gray-500">
                        <a href="{{ route('obras.create') }}" class="btn btn-outline-warning btn-lg">Agregar Obra</a>
                    </div><br>


<!-- primera parte -->

<div id="colorlib-page">
		<div class="row d-flex no-gutters">
			<div class="col-md-12 portfolio-wrap">
			</div>

                <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 portfolio-wrap-2">

                @foreach($obras as $obra)

									<div href="#" class="img w-100 js-fullheight d-flex align-items-center" style="background-image: url(/imagen/{{ $obra->imagen }});">
										<div class="text p-4 p-md-5 ftco-animate">
											<div class="desc">
												<div class="top">
                                                <h2 class="mb-4">{{ $obra->titulo }}</h2>
                                                <span class="subheading">{{ $obra->descripcion }}</span>
                                                <span class="subheading">{{ $obra->codigo }}</span>
                                                <span class="subheading">Autor: {{ $obra->user->name }}</span>
                                                    <br>


                                <form action="{{ route('obras.destroy', $obra->id) }}" method="POST" class="inline formEliminar">
                                    @csrf
                                    @method('DELETE')
                                   <button type="submit" class="btn btn-outline-warning" >Eliminar</button>
                                    <a href="{{ route('obras.edit', $obra->id) }}" class="btn btn-outline-info"  style="margin:0.2rem" >Editar</a>
                                </form>

												</div>
											</div>
										</div>
									</div>
                 @endforeach
                 </div>
                 </div>


					</div>
				</section>
			</div><!-- END COLORLIB-MAIN -->
		</div><!-- END COLORLIB-PAGE -->





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
        <script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>

	</body>
