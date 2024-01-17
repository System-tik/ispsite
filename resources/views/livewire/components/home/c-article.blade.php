<div class="px-32 py-10">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <h1 class="text-2xl font-semibold text-center text-gray-800  lg:text-3xl ">
        Articles Scientifiques de l'Institut
    </h1>

    <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
    </p>
    <div class="grid grid-cols-3 gap-5 pt-10">
        @foreach ($articles as $article)
        <div>
          <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md">
                <div class="mt-2">
                    <a href="#" class="text-xl font-bold text-gray-700  hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">{{$article->lib}}</a>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">{{$article->description}}</p>
                </div>
            
                <div class="flex items-center justify-between mt-4">
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline" tabindex="0" role="link">{{$article->auteur}}</a>
            
                    <div class="flex items-center">
                        {{-- <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">Khatab wedaa</a> --}}
                     </div>
                </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
