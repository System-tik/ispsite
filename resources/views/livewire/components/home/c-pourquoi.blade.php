<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="text-white">
        <section class=" bg-gray-900">
            <div class=" lg:mx-32  px-5 py-10">
                <p class="text-xl font-medium text-blue-500 ">ISP Mbanza - Ngungu</p>
        
                <h1 class="mt-2 text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Pourquoi nous choisir
                </h1>
        
                <main class="relative z-20 w-full mt-8  md:flex md:items-center xl:mt-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="absolute lg:w-96 bg-blue-600 -z-10 h-64 md:h-96 rounded-2xl"></div>
                    <section class="splide w-full"  id="why">
                        <div class="splide__track w-full">
                            <ul class="splide__list w-full">
                                @foreach ($pourquoi as $pourquois)  
                                <li class="splide__slide w-full">         
                                    <div class="w-full p-6 bg-bleu-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly">
                                        <img class=" md:mx-6 object-cover shadow-md  md:w-80 lg:h-[26rem] md:h-[32rem] md:rounded-2xl" src="{{$pourquois->getMedia()[0]['original_url']}}" alt="client photo" />
                                        <div class="mt-2 md:mx-6">
                                            <div>
                                                <p class="mt-4 text-xl font-medium tracking-tight text-white text-bold">{{$pourquois->titre}}</p>
                                            </div>
                        
                                            <p class="mt-4 text-white lg:text-xl text-justify  lg:w-full"> {{$pourquois->description}}</p>
                                            
                                            {{-- <div class="flex items-center justify-between mt-6 md:justify-start">
                                                <button title="left arrow" class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 hover:bg-blue-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                                    </svg>
                                                </button>
                        
                                                <button title="right arrow" class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 md:mx-6 hover:bg-blue-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </li>
                                @endforeach 
                            </ul>
                        </div>
                      </section>
                    
                </main>
            </div>
        </section>
    </div>
</div>
<script>
    var splide = new Splide( '#why', {
        type   : 'loop',
        autoplay: true,
    });
    splide.mount();
</script>
