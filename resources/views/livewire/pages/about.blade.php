
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
    <div class="grid lg:grid-cols-3 gap-2 lg:gap-10 lg:py-20 py-5 lg:px-72 bg-gray-900 px-5">
        <div class="flex flex-col gap-3 bg-white px-5 lg:py-10 text-center py-2">
            <h1 class=" font-bold text-red-600 lg:text-5xl text-2xl" >1<span>er</span></h1>
            <p class="text-xl font-bold">Au Kongo Central</p>
            <p class="text-justify">
                L'Institut Supérieur Pédagogique (ISP) de Mbanza-Ngungu se distingue comme la première institution supérieure pédagogique de la province du Kongo Central en République Démocratique du Congo (RDC). Fondé avec la mission de fournir une éducation de haute qualité et de former les futurs leaders de notre société, l'ISP de Mbanza-Ngungu est un pilier de l'excellence académique dans la région.
            </p>
        </div>
        <div class="flex flex-col gap-3 bg-white px-5 lg:py-10 text-center py-2">
            <h1 class=" font-bold text-blue-600 lg:text-5xl text-2xl" >3<span>ème</span></h1>
            <p class="text-xl font-bold">En RDC</p>
            <p class="text-justify">
                Sur l'ensemble du territoire de la RDC,
                l'ISP de Mbanza-Ngungu se classe comme le troisième plus grand ISP en termes de nombre d'étudiants et de professeurs. Cette position reflète notre engagement continu à attirer et à retenir les meilleurs talents, tant parmi les étudiants que parmi les enseignants.
            </p>
        </div>
        <div class="flex flex-col gap-3 bg-white px-5 lg:py-10 text-center py-2">
            <h1 class=" font-bold text-yellow-600 lg:text-5xl text-2xl" >1<span>er</span></h1>
            <p class="text-xl font-bold">En Mbanza-Ngungu</p>
            <p class="text-justify">
                L'ISP de Mbanza-Ngungu est également la première institution à Mbanza-Ngungu en termes de nombre d'étudiants inscrits. Cet afflux constant d'étudiants démontre notre attractivité et notre capacité à répondre aux besoins éducatifs d'une population étudiante croissante.
            </p>
        </div>

    </div>
    <section class=" flex flex-col gap-20 lg:gap-10 lg:py-20 py-2 lg:px-72 bg-gray-100 px-5">
        @foreach ($apropos as $apropo)
            <div class=" py-2 grid lg:grid-cols-3 border-b-2">
                <div class="">
                    <img class="w-full" src="{{$apropo->getMedia()[0]['original_url']}}" alt="" >
                </div>

                <div class="w-full lg:col-span-2 lg:px-5">
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

