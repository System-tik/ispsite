<div class="lg:px-32 px-5 py-10" id="article">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <h1 class="text-2xl font-semibold  text-gray-800  lg:text-3xl ">
        Articles Scientifiques de l'Institut
    </h1>

    <p class="mt-4 text-gray-500 dark:text-gray-300">
        Bienvenue sur la plateforme des Articles Scientifiques de l'ISP. Notre engagement envers l'excellence académique se reflète dans la section dédiée aux articles scientifiques, où la recherche novatrice et les contributions intellectuelles de notre corps professoral et de nos étudiants sont mises en avant
    </p>
    <div class="grid lg:grid-cols-3 gap-5 pt-10">
        @foreach ($articles as $article)
        <div>
          <div class="max-w-2xl h-full px-8 py-4 bg-white rounded-lg shadow-md">
                <div>
                    <img class="h-44 w-full" src="{{$article->getMedia()[1]['original_url']}}" alt="">
                </div>
                <div class="mt-2">
                    <a href="{{route('article',['id'=>$article->id])}}" class="text-xl font-bold text-gray-700  hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">{{$article->lib}}</a>
                   <a href="{{route('article',['id'=>$article->id])}}"><p class="mt-2 text-gray-600 dark:text-gray-300 text-justify">{{substr($article->description,0,99)}}...</p></a> 
                </div>
            
                <div class="flex items-center justify-between mt-4">
                    <a href="{{route('article',['id'=>$article->id])}}" class="text-blue-600 dark:text-blue-400 hover:underline" tabindex="0" role="link">{{$article->auteur}}</a>
            
                    <div class="flex items-center">
                        {{-- <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">Khatab wedaa</a> --}}
                     </div>
                </div>
            </div> 
        </div>
        @endforeach
    </div>
    
</div>
