
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <nav class="flex items-center justify-between py-4 bg-gray-800 mt-0 text-white px-6 lg:px-8" aria-label="Global">
        <div class="flex mx-12 lg:flex-1">
          <a href="{{route('home')}}" class="-m-1.5 p-1.5">
            <span class="sr-only">ISP Mbanza-Ngungu</span>
            <img class="h-10 w-auto" mx-20 src="{{asset('assets/logo.png')}}" alt="">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">

          <a href="/" class="text-sm font-semibold leading-6 text-white">Accueil</a>
          <a href="{{route('about')}}" class="text-sm font-semibold leading-6 text-white">Présentation</a>
          <a href="{{route('sections')}}" class="text-sm font-semibold leading-6 text-white">Section</a>
          <a href="{{route('evenements')}}" class="text-sm font-semibold leading-6 text-white">Evenement</a>
          <a href="{{route('articles')}}" class="text-sm font-semibold leading-6 text-white">Articles</a>
          <a href="{{route('contact')}}" class="text-sm font-semibold leading-6 text-white">Contact</a>
        </div>
      
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a> --}}
        </div>
      </nav>

