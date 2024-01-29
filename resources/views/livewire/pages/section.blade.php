
<div>
    <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
        <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">

            <livewire:components.home.c-nav>
            <div class="lg:px-16 lg:py-6 px-5">
                <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">Sections Organisées</h1>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid lg:grid-cols-3 mx-5 gap-6 lg:mx-20 mt-5">
        @foreach ($sections as $section)  
        <div class="lg:w-80 max-w-md h-96 bg-white border border-gray-800 rounded-lg shadow dark:bg-gray-800   dark:border-gray-700">
            <a href="{{route('section',['id'=>$section->id])}}">
                <img class="rounded-t-lg w-full h-56" src="{{$section->getMedia()[0]['original_url']}}" alt="" />
            </a>
            <div class="">
                <div class="px-3 py-2">
                    <a href="{{route('section',['id'=>$section->id])}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$section->lib}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$section->description}}</p>
                </div>
            </div>
        </div>
        
        @endforeach
        
    </div>

    <div class="mt-32">
        <livewire:components.home.c-footer>
    </div>
</div>
