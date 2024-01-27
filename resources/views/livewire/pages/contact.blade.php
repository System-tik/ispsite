
<div>
    <div>
        <livewire:components.home.c-nav>
    </div>
    <div class="" style="background-image: url({{asset('assets/IMG-20230416-WA0070.jpg')}})">
        <div style="background-color: rgba(0, 0, 100, .6)" class="h-full py-12">

            <livewire:components.home.c-nav>
            <div class="lg:px-16 lg:py-6 px-5">
                <h1 class="md:text-2xl text-xl font-semibold text-white capitalize lg:text-3xl ">Nous contacter</h1>
                <div class="mt-2">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Contact Section Start -->
    <section class="relative z-10 overflow-hidden bg-white dark:bg-dark py-20 lg:py-[120px] xl:mx-32 mx-5">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4 lg:justify-between">
                <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                    <div class=" max-w-[570px] lg:mb-0">
                        
                        <h2 class="text-dark  mb-6  font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                            PRENEZ CONTACT AVEC L'ISP MBANZA-NGUNGU
                        </h2>
                        <p class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-9">
                            Nous allons vous repondre dans les prochaines heures et au plus vite.
                        </p>
                        @foreach ($contacts as $contact)
                            
                        <div class="mb-8 flex w-full max-w-[370px]">
                            <div class="bg-blue-700/5 text-blue-700 mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                                <svg
                                    width="32"
                                    height="32"
                                    viewBox="0 0 32 32"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d={{$contact->icon}}"
                                        fill="currentColor"
                                        />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mb-1 lg:text-xl font-bold text-dark  text-xs">
                                    {{$contact->lib}}
                                </h4>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    {{$contact->contenu}}
                                </p>
                            </div>
                        </div>      
                        @endforeach
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                    <div
                        class="relative  bg-white rounded-lg shadow-lg dark:bg-dark-2 sm:p-12"
                        >
                        <div class="mb-6">
                            <input
                                type="text"
                                wire:model='nom'
                                placeholder="Votre nom"
                                class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-blue-700 w-full rounded border py-3 px-[14px] text-base outline-none"
                                />
                            <span class=" text-red-500">@error('nom'){{$message}}@enderror</span>
                            
                        </div>
                        <div class="mb-6">
                            <input
                                type="email"
                                wire:model='email'
                                placeholder="Votre adresse email"
                                class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-blue-700 w-full rounded border py-3 px-[14px] text-base outline-none"
                                />
                            <span class=" text-red-500">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="mb-6">
                            <input
                                type="text"
                                wire:model="numero"
                                placeholder="Votre numéro de contact"
                                class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-blue-700 w-full rounded border py-3 px-[14px] text-base outline-none"
                                />
                            <span class=" text-red-500">@error('numero'){{$message}}@enderror</span>
                        </div>
                        <div class="mb-6">
                            <textarea
                                rows="6"
                                wire:model="message"
                                placeholder="Votre message"
                                class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-blue-700 w-full resize-none rounded border py-3 px-[14px] text-base outline-none"
                                ></textarea>
                            <span class=" text-red-500">@error('message'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <button
                                type="submit"
                                wire:click='sendMessage'
                                class="w-full p-3 text-white transition border rounded border-blue-700 bg-blue-700 hover:bg-opacity-90"
                                >
                                <div >
                                    Envoyer Message
                                </div>
                            <div wire:loading class=" text-red-500">
                                En cours de traitement...
                            </div>
                            </button>
                        </div>
                        <div>
                        <span class="absolute -top-10 -right-9 z-[-1]">
                            <svg
                                width="100"
                                height="100"
                                viewBox="0 0 100 100"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                    fill="#3056D3"
                                    />
                            </svg>
                        </span>
                        <span class="absolute -right-10 top-[90px] z-[-1]">
                            <svg
                                width="34"
                                height="134"
                                viewBox="0 0 34 134"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <circle
                                    cx="31.9993"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 1.66665)"
                                    fill="#13C296"
                                    />
                            </svg>
                        </span>
                        <span class="absolute -left-7 -bottom-7 z-[-1]">
                            <svg
                                width="107"
                                height="134"
                                viewBox="0 0 107 134"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <circle
                                    cx="104.999"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 104.999 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 104.999 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 104.999 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 104.999 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 104.999 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 104.999 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 104.999 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 104.999 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 104.999 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="104.999"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 104.999 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="90.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="75.6654"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="31.9993"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="60.9993"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="17.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 132)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 117.333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 102.667)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 88)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 73.3333)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 45)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 16)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 59)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 30.6666)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="46.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 1.66665)"
                                    fill="#13C296"
                                    />
                                <circle
                                    cx="2.66536"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 1.66665)"
                                    fill="#13C296"
                                    />
                            </svg>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact Section End -->
    <div>
        <livewire:components.home.c-footer>
    </div>
</div>   

