
<div>
    <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
        <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">

            <livewire:components.home.c-nav />
            <div class="lg:px-16 lg:py-6 px-5">
                <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">{{$evenement->lib}}</h1>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:grid lg:grid-cols-3 gap-4 lg:mx-20 lg:pt-10 text-justify p-3">
{{--        <div class="gap-5 lg:flex lg:flex-col w-screen hidden" style="height: 70vh; overflow-y: auto; background-color: red;">--}}
{{--            --}}{{--<img src="{{$evenement->getMedia()[0]['original_url']}}" class="w-full h-64" alt="">--}}
{{--            @foreach($evenement->getMedia() as $media)--}}
{{--                <img src="{{$media['original_url']}}" class=" w-full">--}}
{{--            @endforeach--}}
{{--        </div>--}}

        {{--Le splide pendant le mobile--}}
        <div class="splide " id="event-slide">
            <div class="splide__track" >
                <ul class="splide__list">
                @foreach($evenement->getMedia() as $media)
                        <li class="splide__slide">
                            <img src="{{$media['original_url']}}" class=" w-full">
                        </li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="col-span-2">
            <h2 class="text-lg font-bold">Description</h2>
           <p class="text-justify">
            @php
                echo $evenement->description
            @endphp
           </p>
        </div>
    </div>
    <div class="mt-12">
        <livewire:components.home.c-footer />
    </div>
    <script>
        new Splide( '#event-slide', {
            type : 'loop',
            autoplay: true,
        }).mount();
    </script>
</div>

