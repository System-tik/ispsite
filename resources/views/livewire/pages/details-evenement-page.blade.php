
<div>
    <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
        <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">

            <livewire:components.home.c-nav>
            <div class="lg:px-16 lg:py-6 px-5">
                <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">{{$evenement->lib}}</h1>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>
  
    <div class="grid lg:grid-cols-3 gap-4 lg:mx-20 mx-5 w-full pt-10">
        <div class="">
            <img src="{{$evenement->getMedia()[0]['original_url']}}" class="w-full h-64" alt="">                
        </div>
        <div class="col-span-2">
            <h2 class="text-lg font-bold">Description</h2>
           <p class="text-justify">
            @php
                echo $evenement->description
            @endphp
           </p>
        </div>
    </div>
    <div class="mt-12">
        <livewire:components.home.c-footer>
    </div>
</div>

