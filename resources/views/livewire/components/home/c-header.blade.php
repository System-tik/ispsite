<div > 
  <section id="header-slide" class="splide" >
    <div class="splide__track" >
      <ul class="splide__list">
        @foreach ($headers as $header)
        <li class="splide__slide">
         <!-- Hero section with background image, heading, subheading and button -->
            <div
            class="relative overflow-hidden bg-cover bg-no-repeat"
            style="
              background-position: 50%;
              background-image: url({{$header->getMedia()[0]['original_url']}});
              height: 500px;
            ">
            <div
              class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
              style="background-color: rgba(0, 0, 0, 0.75)">
              <div class="flex h-full items-center justify-center">
                <div class="px-6 text-center text-white md:px-12 lg:px-64">
                  <h1 class="mb-6 md:text-4xl  font-bold animate__animated animate__bounceInDown">{{$header->lib}}</h1>
                  <h3 class="mb-8 md:text-2xl tet-sm font-bold animate__animated  animate__bounceIn">{{$header->description}}</h3>
                  {{-- <button
                    type="button"
                    class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Get started
                  </button> --}}
                </div>
              </div>
            </div>
          </div>
          
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  <script>       
    new Splide( '#header-slide', {
      type : 'loop',
    }).mount();
  </script>
</div>

{{-- {{$header->getMedia()[0]['original_url']}} --}}
