
<div>
    <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
        <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">

            <livewire:components.home.c-nav>
            <div class="lg:px-16 lg:py-6 px-5">
                <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">Présentation ISP Mbanzu-Ngungu</h1>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-gray-100 flex flex-col gap-20 w-full h-full lg:py-12 lg:flex lg:justify-center">
        @foreach ($apropos as $apropo)    
            <div class="overflow-hidden py-2 bg-white lg:mx-8 lg:flex lg:items-center lg:w-full lg:shadow-md lg:rounded-xl">
                <div class="h-full">
                    <img class="h-full ml-5 w-96" src="{{$apropo->getMedia()[0]['original_url']}}" alt="">
                </div>
        
                <div class="max-w-xl px-6 lg:py-12 lg:max-w-5xl lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-800 md:text-3xl">
                        {{$apropo->titre}} 
                    </h2>
        
                    <div class="mt-4 text-gray-500 text-justify ">
                        @php
                            echo "<span>$apropo->description</span>" 
                        @endphp
                    </div>
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

