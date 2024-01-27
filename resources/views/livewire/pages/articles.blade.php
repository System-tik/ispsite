
    <div>
        <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
            <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">
    
                <livewire:components.home.c-nav>
                <div class="lg:px-16 lg:py-6 px-5">
                    <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">Nos Articles</h1>
                    <div class="mt-2">
                        <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                        <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                        <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="mx-20 mt-28">
            
            {{-- Because she competes with no one, no one can compete with her. --}}
            <div class="grid lg:grid-cols-3 gap-4 w-full">
                @foreach ($article as $articles)
                    <div class="lg:w-80 max-w-md px-8 py-4 mt-16 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <div class="flex justify-center -mt-16 md:justify-end">
                            <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400" alt="Testimonial avatar" src="{{$articles->getMedia()[1]['original_url']}}">
                        </div>
                        
                        <h2 class="mt-2 text-xl font-semibold text-gray-800 dark:text-white md:mt-0">{{$articles->lib}}</h2>
                        
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-200">{{$articles->description}}</p>    
                    </div>
                @endforeach 
                
            </div>
            
        </div>
        <div class="mt-9">
            <livewire:components.home.c-footer>
        </div>
    </div>
