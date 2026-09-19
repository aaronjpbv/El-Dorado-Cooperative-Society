<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'El Dorado Consumers Cooperative Society' }}</title>
    
    <!-- Vite Directives -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <!-- Alert Banner replacing the old blinking marquee -->
    @if(isset($hasAlert))
    <div class="bg-brand-alert text-white text-center py-2 px-4 text-sm font-medium">
        COVID-19 ALERTS: <a href="/alerts" class="underline hover:text-slate-200">Click here for the latest information</a>
    </div>
    @endif

    <!-- Modern Sticky Top Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-sm border-b border-slate-200" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <video width="48" height="48" autoplay loop muted class="rounded-full">
                        <source src="{{ asset('videos/logo.mp4') }}" type="video/mp4" />
                    </video>
                    <div class="font-bold text-xl text-brand-primary hidden md:block">
                        El Dorado Cooperative
                    </div>
                </div>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-slate-600 hover:text-brand-primary font-semibold transition">Home</a>
                    <a href="{{ route('services') }}"class="text-slate-600 hover:text-brand-primary font-semibold transition">Services</a>
                    <a href="{{ route('about') }}" class="text-slate-600 hover:text-brand-primary font-semibold transition">About</a>
                    <a href="/members" class="text-slate-600 hover:text-brand-primary font-semibold transition">Members</a>
                    <a href="/contact" class="bg-brand-primary text-white px-5 py-2 rounded-md hover:bg-blue-900 transition shadow-sm">Contact Us</a>
                </nav>

                <!-- Mobile Menu Button (Alpine.js) -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-600 hover:text-brand-primary focus:outline-none">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Nav Dropdown -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white border-t border-slate-100 shadow-lg absolute w-full">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50">Home</a>
                <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50">Services</a>
                <!-- Add remaining links -->
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-white text-lg font-bold mb-4">Contact</h3>
                <p><i data-lucide="phone" class="inline w-4 h-4 mr-2"></i> (868) 645-9625</p>
                <p><i data-lucide="mail" class="inline w-4 h-4 mr-2"></i> administration@eldocooperative.com</p>
            </div>
            <!-- Additional footer columns for links/address -->
        </div>
    </footer>

</body>
</html>