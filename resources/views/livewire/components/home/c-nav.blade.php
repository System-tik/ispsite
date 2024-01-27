<header class="fixed inset-x-0 top-0" x-data="{
  open:false
}" style="z-index: 10000000;">
  <nav class="flex items-center justify-between px-5 pt-2" aria-label="Global" id="navbar">
    <div class="flex lg:flex-1">
      <a href="{{route('home')}}" class="-m-1.5 p-1.5">
        <span class="sr-only">ISP Mbanza-Ngungu</span>
        <img class="h-10 lg:mx-14 w-auto" src="{{asset('assets/logo.png')}}" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 cursor-pointer" @click="open=true">
        <span class="sr-only" class="">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
      
    </div>
    <div class="hidden lg:flex lg:gap-x-12 text-white" id="liste">
      <a href="/" class="text-sm font-semibold leading-6">Accueil</a>
      <a href="{{route('about')}}" class="text-sm font-semibold leading-6">Présentation</a>
      <a href="{{route('sections')}}" class="text-sm font-semibold leading-6">Section</a>
      <a href="{{route('evenements')}}" class="text-sm font-semibold leading-6">Evenement</a>
      <a href="{{route('articles')}}" class="text-sm font-semibold leading-6">Articles</a>
      <a href="{{route('contact')}}" class="text-sm font-semibold leading-6">Contact</a>
    </div>
  
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a> --}}
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    {{-- <div class="fixed inset-0 z-50"></div> --}}
    <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" x-show="open">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="{{asset('assets/logo.png')}}" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open=false">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Menu</a>
            <ul class="">
              <li><a href="{{route('home')}}">Accueil</a></li>
              <li><a href="{{route('about')}}">Presentation</a></li>
              <li><a href="{{route('sections')}}">Section</a></li>
              <li><a href="{{route('evenements')}}">Evenement</a></li>
              <li><a href="{{route('articles')}}">Article</a></li>
              <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<script>
   window.addEventListener('scroll',()=>{
     let navbar =document.querySelector('#navbar');
     let liste = document.querySelector('#liste');
     if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 200){
       navbar.classList.add('bg-gray-100');
       liste.classList.remove('text-white');
    }else{
       navbar.classList.remove('bg-gray-100');
       liste.classList.add('text-white');
     }
   })
</script>