@include('layouts.master')
@extends('layouts.app')
    <body>
@section('content')
    <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <!-- <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8"> -->
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 grid md:grid-cols-2 gap-8">
        

            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">¡Bienvenido a mi blog!</h1>

            <p class="bg-blue-100 text-blue-800 text-lg font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                Desarrolador backend.
            </p>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                Soy Juan Carlos Salazar Mendoza, un apasionado programador con experiencia en desarrollar soluciones simples y efectivas.
                En este espacio, encontrarás tutoriales, notas y guías paso a paso de los proyectos que he realizado a lo largo de mi trayectoria.
            </p>
            

     <img src="{{ asset('storage/images/pjDuMFbhma71iXtydHQN1YtLmz2G4yh9bsn2WqWc.png') }}" 
     class="mx-auto w-full lg:max-w-xl h-64 sm:h-96 rounded-lg shadow-xl object-cover" 
     alt="Descripción de la imagen">       
    </div>
</br>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Mi experiencia</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">
                    Visita la recopilacion de todos los proyectos que he elaborado a lo largo de mi trayectoria de 2 años como amateur de la programacion web
                </p>
                <a href="https://juancarlossmi.github.io/ejemplo-portafolio/index.html" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">
                    Saber mas
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                </a>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">

                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">¡Acompáñame en este viaje de conocimiento!</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4"> Mi objetivo es compartir conocimientos de forma clara y accesible, asegurándome de que cada contenido sea comprensible, incluso para quienes recién inician en el mundo de la programación. Espero que estas herramientas te sean útiles para aprender y mejorar tus habilidades.</p>
                <a href="{{ url('/blog') }}" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">
                    Saber mas
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
    </body>