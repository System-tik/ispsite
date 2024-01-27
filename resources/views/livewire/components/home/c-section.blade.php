<div id="section">
    {{-- Care about people's approval and you will be their prisoner. --}}
         
    <section class="bg-gray-900 lg:px-32 px-5">
        <div class="container lg:px-6 py-10">
            <h1 class="text-2xl font-semibold  text-gray-800 capitalize lg:text-3xl dark:text-white">
                Sections organisées
            </h1>
            
            <p class="mt-4 text-gray-500 dark:text-gray-300">
                Lorem ipsum dolor hjhjh sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus hhhhhh jkjkkj 
            </p>
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($sections as $section)     
                        <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-96 group" style="background-image:url({{$section->getMedia()[0]['original_url']}})" data-aos="zoom-in">
                            <div class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                                <a href="{{route('section',['id'=>$section->id])}}"><h2 class="mt-4 text-xl font-semibold text-white capitalize">{{$section->lib}}</h2></a>
                                <a href="{{route('section',['id'=>$section->id])}}"><p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">{{$section->description}}</p></a>
                            </div>
                        </div>
                    @endforeach
            </div>
            
        </div>

    
</div>
