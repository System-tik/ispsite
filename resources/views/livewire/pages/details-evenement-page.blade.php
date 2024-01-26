@extends('welcome')
@section('app')
<div>
    <div>
        <livewire:components.home.c-nav>
    </div>
    <div class="mx-20">
        <h1 class="text-2xl mt-10 font-semibold text-gray-800 capitalize lg:text-3xl ">{{$evenement->lib}}</h1>
        <div class="mt-2 mb-5">
            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 mx-20">
        <div class="">
            <img src="{{$evenement->getMedia()[0]['original_url']}}" class="w-full h-64" alt="">                
        </div>
        <div class="col-span-2">
            @php
                echo $evenement->description
            @endphp
        </div>
    </div>
    <div class="mt-12">
        <livewire:components.home.c-footer>
    </div>
</div>
@endsection
