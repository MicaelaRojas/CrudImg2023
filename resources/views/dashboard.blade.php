<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galería Virtual de Arte Generativo') }}
        </h2>
    </x-slot>

    <!-- About Section -->
    <section class="about-section text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Bienvenido a la Galería Virtual de Arte Generativo</h2>
                    <p class="text-white-50">
                        Explora obras de arte generativo creadas con Processing y p5.js. Sumérgete en la fusión de arte y tecnología y descubre las creaciones visuales únicas y fascinantes que se generan mediante algoritmos y procesos computacionales.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="template/student.png" alt="Galería de Arte Generativo" />
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section bg-light py-5">
        <div class="container">
            <!-- Featured Project Row -->
            <div class="row align-items-center mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7">
                    <img class="img-fluid mb-3 mb-lg-0" src="template/bg-masthead.jpg" alt="Featured Project" />
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Explora las Obras de Arte</h4>
                        <p class="text-black-50 mb-0">Sumérgete en un mundo de creatividad y tecnología con nuestras obras de arte generativo. Cada obra es una manifestación visual única que desafía los límites de la creatividad humana.</p>
                    </div>
                </div>
            </div>

            <!-- Project One Row -->
            <div class="row mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="template/demo-image-01.jpg" alt="Project One" />
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Misión</h4>
                                <p class="mb-0 text-white-50">Nuestra misión es fusionar el arte y la tecnología para crear obras visuales únicas y fascinantes. Buscamos desafiar los límites de la creatividad humana utilizando algoritmos y procesos computacionales para generar arte generativo innovador.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Two Row -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="template/demo-image-02.jpg" alt="Project Two" />
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Visión</h4>
                                <p class="mb-0 text-white-50">Nuestra visión es establecer un espacio en línea donde los artistas generativos puedan compartir y exhibir su trabajo al mundo. Queremos fomentar la apreciación del arte generativo y mostrar cómo la tecnología puede ampliar los límites de la creatividad artística.</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
