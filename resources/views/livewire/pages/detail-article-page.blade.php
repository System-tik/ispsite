@extends('welcome')
@section('app')
<div>
    <div>
        <livewire:components.home.c-nav>
    </div>
    <div class="mx-20">
        <h1 class="text-2xl mt-10 font-semibold text-gray-800 capitalize lg:text-3xl ">{{$article->lib}}</h1>
        <div class="mt-2 mb-5">
            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 mx-20">
        <div class="">
            <img src="{{$article->getMedia()[1]['original_url']}}" class="w-full h-64" alt="">                
        </div>
        <div class="col-span-2">
            <div class="font-bold text-xl mb-4">
                Resumé
            </div>
            <div class="text-justify">
                @php
                    echo $article->description
                @endphp
            </div>
            <div class="flex justify-end mt-16">
                <a class="bg-blue-500 rounded-full text-white p-1" href="{{$article->getMedia()[0]['original_url']}}" target="blank">Lire PDF</a>
            </div>
        </div>
    </div>
    <div class="mt-12">
        <livewire:components.home.c-footer>
    </div>
</div>
@endsection