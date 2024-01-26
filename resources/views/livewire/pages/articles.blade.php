@extends('welcome')
@section('app')
    <div>
        <div>
            <livewire:components.home.c-nav>
        </div>

        <div class="mx-20">
            <div >
                <h1 class="text-2xl mt-10 font-semibold text-gray-800 capitalize lg:text-3xl ">Nos Articles</h1>
                <div class="mt-2 mb-5">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
            {{-- Because she competes with no one, no one can compete with her. --}}
            <div class="grid grid-cols-3 gap-4 w-full">
                @foreach ($article as $articles)
                    <div class="w-80 max-w-md px-8 py-4 mt-16 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <div class="flex justify-center -mt-16 md:justify-end">
                            <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400" alt="Testimonial avatar" src="{{$articles->getMedia()[0]['original_url']}}">
                        </div>
                        
                        <h2 class="mt-2 text-xl font-semibold text-gray-800 dark:text-white md:mt-0">{{$articles->lib}}</h2>
                        
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-200">{{$articles->description}}</p>    
                    </div>
                @endforeach 
            </div>
        </div>
        <div class="mt-9">
            <livewire:components.home.c-footer>
        </div>
    </div>
@endsection