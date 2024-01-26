<div class="px-32 py-20" id="revues">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1 class="text-2xl font-semibold text-center text-gray-800  lg:text-3xl ">
        Actualités de l'Institut
    </h1>

    <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
    </p>
    <section id="events" class="splide pt-10" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($evenement as $evenements)
                <li class="splide__slide px-3">
                    {{--Boucle Foreach  --}}
                    <div class="rounded-lg shadow-lg flex flex-col gap-5 " data-aos="fade-in">
                        <img src="{{$evenements->getMedia()[0]['original_url']}}" alt="" class="rounded-lg w-full h-48">
                        <div class="px-2 pb-5">
                            <h1 class="text-2xl">{{$evenements->lib}}</h1>
                            <p>
                                @php
                                    echo $evenements->description;
                                @endphp 
                                <a href="{{route('evenement',['id'=>$evenements->id])}}" class="text-yellow-600 font-bold">Lire plus...</a>
                            </p>
                        </div>
                    </div>
                    {{--Fin Boucle Foreach  --}}
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>


<script>
    new Splide( '#events', {
        type   : 'loop',
        padding: '20%',
    } ).mount();
</script>