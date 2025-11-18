@extends('layouts.app')

@section('title', 'Brand Tree - Creative Branding Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden gradient-bg">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse delay-200"></div>
        <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse delay-400"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-fadeInUp">
            Where Creativity Meets Strategy
        </h1>
        <p class="text-xl md:text-2xl text-white mb-8 animate-fadeInUp delay-200">
            Building brands that resonate and succeed for over 12 years
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fadeInUp delay-300">
            <a href="/services" class="px-8 py-4 bg-white text-purple-600 rounded-full font-semibold hover:bg-gray-100 transition hover-scale">
                Explore Services
            </a>
            <a href="/contact" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">
                Get Started
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i class="fas fa-chevron-down text-white text-3xl"></i>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
                    Transforming Ideas Into <span class="gradient-bg bg-clip-text text-transparent">Compelling Brands</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    For over 12 years, Brand Tree has been dedicated to transforming ideas into compelling brand identities that stand the test of time. Our bespoke branding services cater to a diverse range of clients, from startups to corporate giants.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    We understand that every brand has a unique story to tell, and we skillfully craft narratives and visual elements that speak directly to your audience.
                </p>
                <a href="/about" class="inline-block px-8 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Learn More About Us
                </a>
            </div>
            
            <div class="scroll-reveal delay-200">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gradient-to-br from-purple-500 to-indigo-600 p-8 rounded-2xl text-white hover-scale">
                        <h3 class="text-5xl font-bold mb-2">12+</h3>
                        <p class="text-lg">Years Experience</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-500 to-teal-600 p-8 rounded-2xl text-white hover-scale">
                        <h3 class="text-5xl font-bold mb-2">500+</h3>
                        <p class="text-lg">Projects Done</p>
                    </div>
                    <div class="bg-gradient-to-br from-pink-500 to-rose-600 p-8 rounded-2xl text-white hover-scale">
                        <h3 class="text-5xl font-bold mb-2">200+</h3>
                        <p class="text-lg">Happy Clients</p>
                    </div>
                    <div class="bg-gradient-to-br from-yellow-500 to-orange-600 p-8 rounded-2xl text-white hover-scale">
                        <h3 class="text-5xl font-bold mb-2">10+</h3>
                        <p class="text-lg">Services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Our Services</h2>
            <p class="text-xl text-gray-600">Comprehensive branding solutions for your business</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-store text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Exhibition Stalls</h3>
                <p class="text-gray-600 mb-4">Crafted exhibition stall designs that make your brand the center of attention at any event.</p>
                <a href="/services#exhibitions" class="text-purple-600 font-semibold hover:text-purple-700">Learn More →</a>
            </div>
            
            <!-- Service Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-100">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-bullhorn text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Outdoor Advertising</h3>
                <p class="text-gray-600 mb-4">Impactful advertising solutions including signboards, billboards, and vehicle wraps.</p>
                <a href="/services#outdoor" class="text-purple-600 font-semibold hover:text-purple-700">Learn More →</a>
            </div>
            
            <!-- Service Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-200">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-palette text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Graphic Design</h3>
                <p class="text-gray-600 mb-4">Visual identity that makes your brand recognizable, from logos to marketing materials.</p>
                <a href="/services#design" class="text-purple-600 font-semibold hover:text-purple-700">Learn More →</a>
            </div>
            
            <!-- Service Card 4 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-300">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-laptop-code text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Website Design</h3>
                <p class="text-gray-600 mb-4">Beautiful, functional websites from static sites to e-commerce platforms.</p>
                <a href="/services#websites" class="text-purple-600 font-semibold hover:text-purple-700">Learn More →</a>
            </div>
            
            <!-- Service Card 5 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-400">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Digital Marketing</h3>
                <p class="text-gray-600 mb-4">Comprehensive online presence from SEO to social media marketing.</p>
                <a href="/services#digital" class="text-purple-600 font-semibold hover:text-purple-700">Learn More →</a>
            </div>
            
            <!-- Service Card 6 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-100">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-gift text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Corporate Gifting</h3>
                <p class="text-gray-600 mb-4">Unique corporate gift solutions that strengthen professional relationships.</p>
                <a href="/services#gifting" class="text-purple-600 font-semibold hover:text-purple-700">Learn More →</a>
            </div>
        </div>
        
        <div class="text-center mt-12 scroll-reveal">
            <a href="/services" class="inline-block px-8 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                View All Services
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Why Choose Brand Tree?</h2>
            <p class="text-xl text-gray-600">We combine creativity, experience, and technology</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex items-start space-x-4 scroll-reveal">
                <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center">
                    <i class="fas fa-users text-white text-xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Client-First Partnership</h3>
                    <p class="text-gray-600">Your goals are our goals. We listen deeply and collaborate transparently at every step.</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4 scroll-reveal delay-100">
                <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center">
                    <i class="fas fa-lightbulb text-white text-xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Creative Excellence</h3>
                    <p class="text-gray-600">We fuse artistic creativity with data-driven strategy for innovative, effective solutions.</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4 scroll-reveal delay-200">
                <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center">
                    <i class="fas fa-industry text-white text-xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">In-House Manufacturing</h3>
                    <p class="text-gray-600">Our Kalyan Shilphata facility ensures quality control and fast turnaround times.</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4 scroll-reveal delay-300">
                <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center">
                    <i class="fas fa-rocket text-white text-xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Continuous Evolution</h3>
                    <p class="text-gray-600">We constantly evolve our methods to keep your brand ahead of the curve.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Ready to Elevate Your Brand?
        </h2>
        <p class="text-xl text-white mb-8">
            Let's collaborate to build a brand that stands out and drives meaningful engagement
        </p>
        <a href="/contact" class="inline-block px-8 py-4 bg-white text-purple-600 rounded-full font-semibold hover:bg-gray-100 transition hover-scale">
            Get In Touch
        </a>
    </div>
</section>

@endsection