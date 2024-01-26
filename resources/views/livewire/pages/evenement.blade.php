@extends('welcome')
@section('app')
<div>
    <div>
        <livewire:components.home.c-nav>
    </div>
    {{-- Success is as dangerous as failure. --}}
    <div class="mx-20">
        <h1 class="text-2xl mt-10 font-semibold text-gray-800 capitalize lg:text-3xl ">Evenements</h1>
        <div class="mt-2 mb-5">
            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-10 mx-20">
        @foreach ($evenement as $evenements)    
            <div>
                <div class="max-w-2xl overflow-hidden bg-white rounded-lg shadow-md">
                    <a href="{{route('evenement',['id'=>$evenements->id])}}"><img class="w-full h-64" src="{{$evenements->getMedia()[0]['original_url']}}" alt=""> 
                    </a>               
                    <div class="p-6">
                        <div>
                            <a href="{{route('evenement',['id'=>$evenements->id])}}"><span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">{{$evenements->lib}}</span></a>
                            <a href="{{route('evenement',['id'=>$evenements->id])}}"><p class="mt-2 text-sm text-gray-400 dark:text-gray-400">
                                @php
                                    echo $evenements->description
                                @endphp
                            </p></a>
                        </div>
                
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-12">
        <livewire:components.home.c-footer>
    </div>
</div>
@endsection