<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer un post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data" class="mt-10">
            @csrf
            <x-label for="title" value="Titre du post" />
            <x-input id="title" name="title"/>

            <x-label for="content" value="Contenue du post" />
            <x-input id="content" name="content"/>

            <x-label for="image" value="Image du post" />
            <x-input id="image" name="image" type="file"/>

            <x-label for="category" value="Categorie du post" />
            <select name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-button style="display: block !important;" class="mt-5">Créer mon post</x-button>
        </form>
    </div>
</x-app-layout>
