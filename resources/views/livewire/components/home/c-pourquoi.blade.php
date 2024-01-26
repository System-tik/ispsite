<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="text-white">
        <section class=" bg-gray-900">
            <div class="max-w-6xl px-10 py-10 mx-auto">
                <p class="text-xl font-medium text-blue-500 ">ISP Mbanza - Ngungu</p>
        
                <h1 class="mt-2 text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Pourquoi nous choisir
                </h1>
        
                <main class="relative z-20 w-full mt-8  md:flex md:items-center xl:mt-12">
                    <div class="absolute w-96 bg-blue-600 -z-10 h-64 md:h-96 rounded-2xl"></div>
                    @foreach ($pourquoi as $pourquois)           
                    <div class="w-full p-6 bg-blue-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly">
                        <img class=" md:mx-6 rounded-full object-cover shadow-md  md:w-80 lg:h-[26rem] md:h-[32rem] md:rounded-2xl" src="{{$pourquois->getMedia()[0]['original_url']}}" alt="client photo" />
                        
                        <div class="mt-2 md:mx-6">
                            <div>
                                <p class="text-xl font-medium tracking-tight text-white">{{$pourquois->titre}}</p>
                            </div>
        
                            <p class="mt-4 text-lg leading-relaxed text-white md:text-xl"> {{$pourquois->description}}</p>
                            
                            <div class="flex items-center justify-between mt-6 md:justify-start">
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
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </main>
            </div>
        </section>
    </div>
</div>
