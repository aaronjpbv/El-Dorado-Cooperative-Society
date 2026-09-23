<x-layout>
    <x-slot name="title">Our Services</x-slot>




     {{-- ============ HERO: the vision, as the page's headline ============ --}}
    

    <section class= "bg-[#0B2E5F] text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <p class="text-base font-semibold text-emerald-600">Our Services</p> 
            <h1 class="mt-4 max-w-4xl text-3xl font-semibold leading-tight sm:text-5xl">
                The El Dorado Consumers Cooperative Society is involved in several business related activities.
            </h1>

        <h1 class="text-3xl font-bold text-center text-emerald-600 mb-8">Our Services</h1> 
        <p class="text-lg text-center mb-12">The El Dorado Consumers Cooperative Society is involved in several business related activities.</p>

        <p class="text-lg text-center mb-12">We currently provide the following services:
           <li> Rental of Commercial Spaces</li>
           <br> 
           <li> Rental of Office Spaces</li>
           <br>
           <li> Rental of Lotto Booth </li>  
        </p>
        <br> 

        <!-- Service Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <img src="{{ asset('img/nlcb.png') }}" alt="Commercial Spaces" class="w-full h-64 object-cover rounded-lg shadow-md">
        </div>

        
    </div>
        <p class="text-lg text-center mb-12">The El Dorado Consumers Cooperative Society is involved in several business related activities.</p>


</x-layout>