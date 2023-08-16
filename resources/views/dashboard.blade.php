<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galería Virtual de Arte Generativo') }}

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

        </h2>
    </x-slot>

	<div id="colorlib-page">
						<div class="row d-flex no-gutters">
							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-1.jpg" class="col-md-6 img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-1.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc">
													<div class="top">
														<span class="subheading">Portrait</span>
														<h2 class="mb-4"><a href="gallery.html">Black &amp; Gold Paint Face</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

                            <script>
import axios from 'axios';

export default {
  data() {
    return {
      apiUrl: 'https://localhost:7249/api/users', // Coloca aquí la URL base de tu API .NET Core
      users: [] // Aquí almacenaremos los datos de los usuarios obtenidos de la API
    };
  },
  mounted() {
    // Realizar la solicitud GET al montar el componente
    this.fetchUsers();
  },
  methods: {
    fetchUsers() {
      axios.get(${this.apiUrl}/users)
        .then(response => {
          // Obtener los datos de la respuesta
          this.users = response.data;

          // Hacer algo con los datos obtenidos
          // ...
        })
        .catch(error => {
          // Manejar errores de la solicitud
          console.error(error);
        });
    }
  }
};
</script>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="{{ asset('imagen/work-2.jpg') }}"class="col-md-6 order-md-last img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-2.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 px-md-5 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc text-md-right">
													<div class="top">
														<span class="subheading">Nature</span>
														<h2 class="mb-4"><a href="gallery.html">Green Leaves</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-3.jpg" class="col-md-6 img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-3.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc">
													<div class="top">
														<span class="subheading">Nature</span>
														<h2 class="mb-4"><a href="gallery.html">Coal</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-4.jpg" class="col-md-6 order-md-last img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-4.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 px-md-5 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc text-md-right">
													<div class="top">
														<span class="subheading">Nature</span>
														<h2 class="mb-4"><a href="gallery.html">Top Leaf</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-5.jpg" class="col-md-6 img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-5.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc">
													<div class="top">
														<span class="subheading">Portrait</span>
														<h2 class="mb-4"><a href="gallery.html">Building</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-6.jpg" class="col-md-6 order-md-last img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-6.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 px-md-5 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc text-md-right">
													<div class="top">
														<span class="subheading">Fashion</span>
														<h2 class="mb-4"><a href="gallery.html">Black Girl Model</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-7.jpg" class="col-md-6 img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-7.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc">
													<div class="top">
														<span class="subheading">Animals</span>
														<h2 class="mb-4"><a href="gallery.html">Pug Puppy</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-8.jpg" class="col-md-6 order-md-last img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-8.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 px-md-5 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc text-md-right">
													<div class="top">
														<span class="subheading">Nature</span>
														<h2 class="mb-4"><a href="gallery.html">White Flower</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 portfolio-wrap">
								<div class="row no-gutters align-items-center">
									<a href="imagen/work-9.jpg" class="col-md-6 img js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(imagen/work-9.jpg);">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-expand"></span>
										</div>
									</a>
									<div class="col-md-6">
										<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
											<div class="px-4 px-lg-4">
												<div class="desc">
													<div class="top">
														<span class="subheading">Animals</span>
														<h2 class="mb-4"><a href="gallery.html">Turtle</a></h2>
													</div>
													<div class="absolute">
														<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
													</div>
													<p><a href="single.html" class="custom-btn">View Portfolio</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row d-flex">
							<div class="col-md-12">
								<a href="#" class="btn-custom-load d-block w-100 text-center py-4">Load more <span class="fa fa-refresh"></span></a>
							</div>
						</div>

			</div><!-- END COLORLIB-MAIN -->
		</div><!-- END COLORLIB-PAGE -->

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

</x-app-layout>
