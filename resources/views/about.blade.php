@php
    // ---------------------------------------------------------------
    // DATA lives here, DESIGN lives in the markup below.
    // To add or change a person, edit only this block.
    // ---------------------------------------------------------------

    $values = ['Equity', 'Respect', 'Integrity', 'Ethics', 'Honesty', 'Trust'];



    $officers = [
        [
            'name' => 'Mr. Suresh Sewaliah', 
             'role' => 'President', 
             'image' => 'img/12Suresh_Sewaliah.png', 
             'slug' => 'suresh-sewaliah',
             ], 

            [
            'name'  => 'Shane Durgah',
            'role'  => 'Vice-President',
            'image' => 'img/13Shane_Durgah.jpg',
            'slug'  => 'shane-durgah',
            'bio'   => 'Vice-President of the Board of Directors. Fisheries Officer – Ministry of Agriculture, Land and Fisheries.', 
        ],
        [
            'name'  => 'Anthony Ramsahai',
            'role'  => 'Secretary',
            'image' => 'img/02_Anthony_Ramsahai.png', 
            'slug'  => 'anthony-ramsahai',
            'bio'   => 'Professional Counselor – Ministry of National Security (Prison Services).',
        ],
        [
            'name'  => 'Swamy Morgan',
            'role'  => 'Secretary',
            'image' => 'img/03_Swamy_Morgan.png',
            'slug'  => 'swamy-morgan',
            'bio'   => 'Entrepreneur – Prestige Tours and Rentals. Over 40 years of business experience.',
        ],
        [
            'name'  => 'Ramesh Ramcharan',
            'role'  => 'Treasurer',
            'image' => 'img/04_Ramesh_Ramcharan.png',
            'slug'  => 'ramesh-ramcharan',
            'bio'   => 'Chartered Accountant with extensive experience in auditing and financial management.',
        ],
    ];

    $directors = [
        [
            'name'  => 'Shane Durgah',
            'role'  => 'Director',
            'image' => 'img/05_Shane_Durgah.png',
            'slug'  => 'shane-durgah',
            'bio'   => 'Fisheries Officer – Ministry of Agriculture, Land and Fisheries.',
        ],
        [
            'name'  => 'Roshad Ramsawak',
            'role'  => 'Director',
            'image' => 'img/06_Roshad_Ramsawak.png',
            'slug'  => 'roshad-ramsawak',
            'bio'   => 'Investment Banker at Republic Bank Limited.',
        ],
        [
            'name'  => 'Siewdath Dupraj',
            'role'  => 'Director',
            'image' => 'img/10_Siewdath_Dupraj.png', 
            'slug'  => 'siewdath-dupraj',
            'bio'   => 'Farmer and former Agricultural Officer.',
        ],
        [
            'name'  => 'Kawal Mahabal',
            'role'  => 'Director',
            'image' => 'img/07_Kawal_Mahabal.png', 
            'slug'  => 'kawal-mahabal',
            'bio'   => 'Owner & Operator – Auto Electrical Business.',
        ],
        [
            'name'  => 'Indramattie Seenath',
            'role'  => 'Director', 
            'image' => 'img/11_Indramattie_Seenath.png',
            'slug'  => 'indramattie-seenath',
            'bio'   => 'Community Development Advocate and former Women’s Group President.',
        ],
    ];

    // PLACEHOLDERS: replace with the real committee members.
    // Add 'image' => 'img/10_First_Last.png' and 'slug' => '...' when you have them.
    $supervisory = [
        ['name' => 'Samantha Sammy', 'role' => 'Chairperson', 'image' => 'img/14Samantha_Sammy.jpg', 'slug' => 'samantha-sammy'],
        ['name' => 'Shivani Lutchman', 'role' => 'Secretary', 'image' => 'img/15Shivani_Lutchman.jpg', 'slug' => 'shivani-lutchman'],
        ['name' => 'Shelly Ann Ramcharan', 'role' => 'Member', 'image' => 'img/111ShellyAnn_Ramcharan.jpg', 'slug' => 'shelly-ann-ramcharan'],
        
    ];
@endphp

<x-layout>
    <x-slot name="title">About Us</x-slot>

    {{-- ============ HERO: the vision, as the page's headline ============ --}}
    <section class="bg-[#0B2E5F] text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <p class="text-base font-semibold text-lime-300">Our vision</p>
            <h1 class="mt-4 max-w-4xl text-3xl font-semibold leading-tight sm:text-5xl">
                To be the premier co-operative society through commercial growth whilst maintaining our social responsibility.
            </h1>
        </div>
    </section>

    {{-- ============ MISSION ============ --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-12 lg:px-8 lg:py-20">
            <h2 class="text-2xl font-semibold text-[#0B2E5F] sm:text-3xl lg:col-span-4">Our mission</h2>
            <p class="mt-4 text-xl leading-relaxed text-slate-700 lg:col-span-8 lg:mt-0">
                To provide unique business diversifications in achieving sustainable growth, strengthening stakeholder confidence while broadening membership base through transparency and accountability.
            </p>
        </div>
    </section>

    {{-- ============ VALUES ============ --}}
    <section class="border-y border-slate-200 bg-slate-50">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-12 lg:px-8 lg:py-20">
            <h2 class="text-2xl font-semibold text-[#0B2E5F] sm:text-3xl lg:col-span-4">Our values</h2>

            <ul class="mt-8 grid grid-cols-2 gap-x-8 gap-y-10 sm:grid-cols-3 lg:col-span-8 lg:mt-0">
                @foreach ($values as $value)
                    <li class="border-t-2 border-lime-600 pt-4 text-lg font-semibold text-slate-900">
                        {{ $value }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- ============ BOARD OF DIRECTORS ============ --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
            <h2 class="text-2xl font-semibold text-[#0B2E5F] sm:text-3xl">Board of Directors</h2>

            <h2 class="mt-10 text-lg font-semibold text-slate-900">Executive officers</h2>
            <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">  
                @foreach ($officers as $officer) 
                    <x-member-card :member="$officer" /> 
                @endforeach
            </div>

            <h3 class="mt-14 text-lg font-semibold text-slate-900">Directors</h3>
            <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @foreach ($directors as $director)
                    <x-member-card :member="$director" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ SUPERVISORY COMMITTEE ============ --}}
     {{-- ============ SUPERVISORY COMMITTEE ============ --}}
<section class="border-t border-slate-200 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <h2 class="text-2xl font-semibold text-[#0B2E5F] sm:text-3xl">Supervisory Committee</h2>

        <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
            @foreach ($supervisory as $member)
                <x-member-card :member="$member" />
            @endforeach
        </div>
    </div>
</section>

    
</x-layout> 