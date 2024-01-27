<div>
    <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
        <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">

            <livewire:components.home.c-nav>
            <div class="lg:px-16 lg:py-6 px-5">
                <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">{{$sections->lib}}</h1>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-6 lg:mx-20 mt-5 mx-5">
        @foreach ($departement as $departements)      
        <div class="lg:w-80 mh-full bg-white border border-gray-400 rounded-lg shadow   dark:border-gray-700">
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
