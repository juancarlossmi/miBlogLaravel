@extends('layouts.app')
@include('layouts.master')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Dashboard de Ventas</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            Desarollado en python y Utilizando la biblioteca pandas para manipular los datos de un archivo "xlsx", 
            los usuarios pueden filtrar la información y obtener insights relevantes para la toma de decisiones.
            Incluye gráficas de barras y de pastel para presentar las métricas clave, junto con encabezados que resumen 
            la información general de las ventas. Todo ha sido implementado con Streamlit para proporcionar una interfaz 
            web fácil de usar y visualizaciones interactivas con Plotly, desplegado en onrender
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="https://dashboard-ventas.onrender.com/" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    clic aqui.
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    <div>
        <img src="{{ asset('storage/images/proyecto.png') }}" class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" alt="Descripción de la imagen">
    </div>
        

        <div>
            <img src="{{ asset('storage/images/proyecto1.png') }}" class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" alt="Descripción de la imagen">
        </div>
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">PIB per cápita</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            Aplicación interactiva creada en Python utilizando Dash, que presenta dos visualizaciones animadas 
            una gráfica de dispersión que muestra el PIB per cápita y la esperanza de vida a lo largo del tiempo, 
            y una gráfica de barras que ilustra la población por continente. La interfaz permite cambiar entre gráficos 
            y aplicar un tema oscuro o claro. La personalización y los componentes visuales son gestionados con Dash Mantine 
            Components, mientras que Plotly Express genera las visualizaciones.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="https://dash-app-80dh.onrender.com/" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    clic aqui.
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">React Task-App</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Este proyecto en React utiliza createContext y useState para gestionar tareas de forma eficiente, 
                creando un contexto centralizado "TaskContextProvider" que facilita la edición de tareas. 
                Inicializa la lista de tareas con datos predefinidos y permite a los componentes hijos interactuar 
                con las tareas a través de funciones como createTask y deleteTask. Esta solución garantiza una arquitectura 
                escalable y fácil de mantener. Ideal para proyectos donde la interacción dinámica con datos es clave.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="https://juancarlossmi.github.io/react-tasks-example/" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    clic aqui.
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div>    
            <img src="{{ asset('storage/images/proyecto2.png') }}" class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" alt="Descripción de la imagen">
        </div>

        
        <div>    
            <img src="{{ asset('storage/images/proyecto3.png') }}" class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" alt="Descripción de la imagen">
        </div>
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Django App CRUD</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            El proyecto permite a los usuarios registrados realizar operaciones CRUD (Create, Read, Update, Delete) 
            sobre tareas, marcarlas como importantes y gestionar su cuenta. Desarrollado con HTML, CSS, Python, 
            JavaScript y Bootstrap, y alojado en render.com. Utiliza PostgreSQL para almacenar de forma segura las tareas, 
            la información del usuario y los detalles de la sesión, puedes iniciar sesion con cualquier correo, solo debe seguir
            la estructura comun de cualquier correo, es decir "algo@algo.com"..
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="https://django-auth-crud-migl.onrender.com/" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    clic aqui.
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Tienda en linea.</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Tienda Online creada con el framework Django de python, este proyecto implementa
                un carro de compras para poder agregar productos que estan almacenados en una base de
                datos alojada en "PostgreSql" que almacena la informacion de inicio de sesion validando
                cada campo, para que se ingrese un usuario valido, un correo vaildo y una contraseña para 
                iniciar sesion y tambien recibir correos de confirmacion de compra,
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="https://django-auth-crud-migl.onrender.com/" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    clic aqui.
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div>    
            <img src="{{ asset('storage/images/proyecto4.png') }}" class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" alt="Descripción de la imagen">
        </div>
    
    </div>
</section>
@endsection