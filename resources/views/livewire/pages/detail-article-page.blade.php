
<div>
    <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
        <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">

            <livewire:components.home.c-nav>
            <div class="lg:px-16 lg:py-6 px-5">
                <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">{{$article->lib}}</h1>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="lg:grid lg:grid-cols-3 gap-4   w-full pt-10 px-10 lg:px-32">
        <div class="w-full bg-slate-400">
            <img src="{{$article->getMedia()[1]['original_url']}}" class="w-full lg:h-64" alt="">                
        </div>
        <div class="col-span-2">
            <div class="font-bold text-xl mb-4">
                Resumé
            </div>
            <div class="text-justify">
                @php
                    echo $article->description
                @endphp
                <p class="pt-5">Ecrit par : <span class="text-gray-400 font-bold">{{$article->auteur}}</span></p>
            </div>
            <div class="flex lg:justify-end mt-16 justify-center lg:pl-64">
                <a class="bg-blue-500 rounded-full text-white p-1 w-full text-center" href="{{$article->getMedia()[0]['original_url']}}" target="blank">Lire PDF</a>
            </div>
        </div>
    </div>
    <div class="mt-12">
        <livewire:components.home.c-footer>
    </div>
</div>
