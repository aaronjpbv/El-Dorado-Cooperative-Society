<x-layout>
    <x-slot name="title">Our Services</x-slot>

    {{-- ============ HERO SECTION ============ --}}
    <section class="bg-[#0B2E5F] text-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-base font-semibold text-emerald-400 uppercase tracking-wide">What We Offer</p> 
            <h1 class="mt-4 mx-auto max-w-4xl text-3xl font-semibold leading-tight sm:text-5xl">
                The El Dorado Consumers Cooperative Society is involved in several business related activities.
            </h1> 
        </div> 
    </section>

    {{-- ============ SERVICES SECTION ============ --}}
    <section class="bg-slate-50 py-16 sm:py-24"> 
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> 
            
            <!-- Section Title & Subtitle -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-emerald-600 sm:text-4xl">Our Services</h2> 
                <p class="mt-3 text-lg text-slate-700">We supply strategic commercial spaces for your business needs.</p> 
            </div>

            <!-- Modern 3-Card Grid (Contains all 3 services) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                
                <!-- Service Card 1 -->
                <div class="flex flex-col justify-between bg-white p-8 rounded-2xl shadow-sm ring-1 ring-slate-200 transition hover:shadow-md">
                    <div>
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-between p-3 text-emerald-600 mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h5m-5 0V11m0 0h5m-5 0H7m5 0v10"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Commercial Spaces</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Prime commercial retail spaces positioned to support operational and business growth.</p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="flex flex-col justify-between bg-white p-8 rounded-2xl shadow-sm ring-1 ring-slate-200 transition hover:shadow-md">
                    <div>
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-between p-3 text-blue-600 mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Office Spaces</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Professional, private administrative suites customized for business operations.</p>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="flex flex-col justify-between bg-white p-8 rounded-2xl shadow-sm ring-1 ring-slate-200 transition hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center p-3 text-amber-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2H5z"></path></svg>
                            </div>
                            <img src="{{ asset('img/nlcb.png') }}" alt="NLCB Lotto" class="h-8 w-auto object-contain">
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Lotto Booth Facilities</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Dedicated retail gaming booth spaces outfitted for national lottery operators.</p>
                    </div>
                </div>

            </div>

            <!-- Bottom Statement -->
            <div class="pt-8 border-t border-slate-200 text-center">
                <p class="text-base text-slate-600 font-medium">
                    The El Dorado Consumers Cooperative Society remains dedicated to providing strategic infrastructure for local enterprise.
                </p>
            </div>

        </div> <!-- Inner Container ends HERE -->
    </section> <!-- Outer Section ends HERE -->

</x-layout> 