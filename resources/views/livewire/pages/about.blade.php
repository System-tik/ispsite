@extends('welcome')
@section('app')
<div>
    <div>
        <livewire:components.home.c-nav>
    </div>
    <div class="px-16 py-6">
        <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl ">Présentation isp Mbanzu-Ngungu</h1>
        <div class="mt-2">
            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
        </div>
    </div>
    <section class="bg-gray-100 flex flex-col gap-20 w-full h-full lg:py-12 lg:flex lg:justify-center">
        @foreach ($apropos as $apropo)    
            <div class="overflow-hidden py-2 bg-white lg:mx-8 lg:flex lg:max-w-6xl lg:w-full lg:shadow-md lg:rounded-xl">
                <div>
                    <img class="h-64 ml-5 w-96" src="{{$apropo->getMedia()[0]['original_url']}}" alt="">
                </div>
        
                <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-800 md:text-3xl">
                        {{$apropo->titre}} 
                    </h2>
        
                    <p class="mt-4 text-gray-500 ">
                        {{$apropo->description}}    
                    </p>
        
                    <div class="inline-flex w-full mt-6 sm:w-auto">
              
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <div>
        <livewire:components.home.c-footer>
    </div>
</div>
@endsection
