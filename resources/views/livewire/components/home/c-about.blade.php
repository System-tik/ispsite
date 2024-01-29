
<div  id="presentation">
    {{-- The best athlete wants his opponent at his best. --}}
    <section class="bg-white ">
 
        <div class=" py-10  lg:px-32 px-5">
            <div class="lg:flex lg:items-center">
                <div class="w-full space-y-12 lg:w-1/2 ">

                    <div>
                        <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl ">Présentation <p> isp Mbanzu-Ngungu</h1>
                        <div class="mt-2">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                        </div>
                    </div>
                    @foreach ($apropos as $apropo)
                        <div class="md:flex md:items-start md:-mx-4" data-aos="fade-up">
                            <span class="inline-block p-0 text-blue-500 bg-blue-100 rounded-xl md:mx-4  dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </span>
        
                            <div class="my-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-semibold text-gray-700 capitalize ">{{$apropo->titre}}</h1>
        
                                <div class="mt-3 text-gray-400 text-justify">
                                    @php
                                        echo '<span>'. substr($apropo->description,0,300) .'...</span>'
                                        
                                    @endphp
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{route('about')}}" class="bg-blue-500 text-white p-2 rounded-lg">Voir Plus</a>
                    
 
                </div>
    
                <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                    <img data-aos="zoom-in" class=" object-cover rounded-full w-full" src="{{asset('assets/i.jpg')}}" alt="">
                </div>
            </div>

        </div>
    </section>
</div>
