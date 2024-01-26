@extends('welcome')
@section('app')
{{-- <div> --}}
    {{-- Success is as dangerous as failure. --}}
    {{-- <div>
        <livewire:components.home.c-nav>
    </div>
    <div class="text-2xl font-semibold text-center text-gray-800 py-20">
        {{$sections->lib}}
    </div>
    <div class="grid grid-cols-3 gap-6 mx-20">
        @foreach ($departement as $departements)
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow dark:bg-gray-800   dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{asset('assets/i.jpg')}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$departements->lib}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-white dark:text-gray-400">
                        @php
                            echo $departements->description;   
                        @endphp
                    
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-32">
        <livewire:components.home.c-footer>
    </div>
</div> --}}
<div>
    <div>
        <livewire:components.home.c-nav>
    </div>
    <div class="mx-20">
        <h1 class="text-2xl mt-10 font-semibold text-gray-800 capitalize lg:text-3xl ">{{$sections->lib}}</h1>
        <div class="mt-2 mb-5">
            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-6 mx-20 mt-5">
        @foreach ($departement as $departements)      
        <div class="w-80 max-w-md h-full bg-white border border-gray-400 rounded-lg shadow   dark:border-gray-700">
            <a href="{{route('orientation', $departements->id)}}">
                <img class="rounded-t-lg h-64" src="{{$departements->getMedia()[0]['original_url']}}" alt="" />
            </a>
            <div class="p-3">
                <a href="#">
                    <h5 class=" text-2xl font-bold tracking-tight text-gray-500 mb-3">{{$departements->lib}}</h5>
                </a>
                <p class="font-normal text-white">
                @php
                    echo $departements->description;   
                @endphp
                </p>
            </div>
        </div>
        
        @endforeach
        
    </div>

    <div class="mt-32">
        <livewire:components.home.c-footer>
    </div>
</div>
@endsection