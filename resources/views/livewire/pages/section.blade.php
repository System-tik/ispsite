
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

    <div class="grid lg:grid-cols-3 py-10 lg:px-64 gap-10 px-5">
        @foreach ($sections as $section)
        <div class="">
            <img class="rounded-t-lg w-full h-56" src="{{$section->getMedia()[0]['original_url']}}" alt="" />
            <div class="">
                <div class="text-justify">
                    <h5 class="text-2xl font-bold py-5">{{$section->lib}}</h5>
                    <p class=" font-normal text-gray-700 mb-4">{{$section->description}}</p>
                    <a href="{{route('section',['id'=>$section->id])}}" class="text-blue-600 text-end">
                        <p>Voir details</p>
                    </a>
                </div>
            </div>
        </div>

        @endforeach

    </div>

    <div class="mt-32">
        <livewire:components.home.c-footer>
    </div>
</div>
