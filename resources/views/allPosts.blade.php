@include('layouts.master')
@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Publicaciones.</h1>
        @if(isset($query))
        <form action="{{ route('blog.search') }}" method="GET" class="flex mb-6">
            <input type="text" name="query" value="{{ request('query') }}" placeholder="Buscar tutoriales..."
                class="px-2 py-1 border rounded-l-lg focus:outline-none">
            <button type="submit" class="px-3 py-1 bg-blue-600 text-white rounded-r-lg hover:bg-blue-500">
                Buscar
            </button>
        </form>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">
                Resultados para: "{{ $query }}"
            </h2>
        @endif

        @if($posts->count())
            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                @foreach ($posts as $post)
                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="/storage/{{ $post->image_url }}" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{ route('posts.view', $post->id) }}" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white">
                            {{ $post->title }}
                        </a>
                        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                            {{ Str::limit($post->body, 100) }}
                        </p>
                        <!-- <span class="text-sm text-gray-500 dark:text-gray-300">En: {{ \Carbon\Carbon::parse($post->created_at)->format('l jS \\of F Y h:i:s A') }}</span> -->
                        <span class="text-sm text-gray-500 dark:text-gray-300">
                            Publicado el: {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('l j \\de F Y h:i:s A') }}
                        </span>

                    </div>
                </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600 dark:text-gray-400 mt-8">
                No se encontraron resultados para "{{ $query }}". Intenta con otro término de búsqueda.
            </p>
        @endif
    </div>
</section>
@endsection