@extends('layouts.app')

@section('title', 'Our Clients - Brand Tree')

@section('content')

<!-- Hero Section -->
<section class="relative h-96 flex items-center justify-center gradient-bg">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fadeInUp">Our Clients</h1>
        <p class="text-xl text-white animate-fadeInUp delay-200">Trusted by industry leaders across sectors</p>
    </div>
</section>

<!-- Introduction -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-6 text-gray-900">
                Partnerships Built on <span class="gradient-bg bg-clip-text text-transparent">Trust & Excellence</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Brand Tree has proudly partnered with a diverse portfolio of esteemed clients across various sectors, including banking, hospitality, corporate enterprises, FMCG brands, and event management agencies.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="text-center scroll-reveal">
                <div class="w-24 h-24 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-white text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2 text-gray-900">200+</h3>
                <p class="text-gray-600">Satisfied Clients</p>
            </div>
            
            <div class="text-center scroll-reveal delay-100">
                <div class="w-24 h-24 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-industry text-white text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2 text-gray-900">10+</h3>
                <p class="text-gray-600">Industries Served</p>
            </div>
            
            <div class="text-center scroll-reveal delay-200">
                <div class="w-24 h-24 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-trophy text-white text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2 text-gray-900">500+</h3>
                <p class="text-gray-600">Successful Projects</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Clients -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Featured Clients</h2>
            <p class="text-xl text-gray-600">Industry leaders who trust Brand Tree</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Client Logo Placeholders -->
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal">
                <div class="text-center">
                    <i class="fas fa-university text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">ICICI Bank</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal delay-100">
                <div class="text-center">
                    <i class="fas fa-mug-hot text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">Lipton</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal delay-200">
                <div class="text-center">
                    <i class="fas fa-briefcase text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">Corporate Client</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal delay-300">
                <div class="text-center">
                    <i class="fas fa-hotel text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">Hospitality Brand</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal delay-400">
                <div class="text-center">
                    <i class="fas fa-shopping-cart text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">FMCG Brand</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal delay-100">
                <div class="text-center">
                    <i class="fas fa-store text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">Retail Chain</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal delay-200">
                <div class="text-center">
                    <i class="fas fa-calendar-alt text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">Event Agency</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 flex items-center justify-center hover:shadow-2xl transition hover-scale scroll-reveal delay-300">
                <div class="text-center">
                    <i class="fas fa-building text-purple-600 text-5xl mb-4"></i>
                    <p class="font-bold text-gray-900">Tech Startup</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Served -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Industries We Serve</h2>
            <p class="text-xl text-gray-600">Diverse expertise across multiple sectors</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-8 text-white hover-scale scroll-reveal">
                <i class="fas fa-university text-5xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Banking & Finance</h3>
                <p class="text-white text-opacity-90">
                    Creating professional brand experiences for financial institutions and banking services.
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl p-8 text-white hover-scale scroll-reveal delay-100">
                <i class="fas fa-hotel text-5xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Hospitality</h3>
                <p class="text-white text-opacity-90">
                    Elevating guest experiences through compelling brand identities and marketing materials.
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl p-8 text-white hover-scale scroll-reveal delay-200">
                <i class="fas fa-briefcase text-5xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Corporate</h3>
                <p class="text-white text-opacity-90">
                    Building powerful corporate identities for enterprises of all sizes.
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-8 text-white hover-scale scroll-reveal delay-300">
                <i class="fas fa-shopping-cart text-5xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">FMCG & Retail</h3>
                <p class="text-white text-opacity-90">
                    Driving consumer engagement with eye-catching packaging and branding.
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl p-8 text-white hover-scale scroll-reveal delay-400">
                <i class="fas fa-calendar-alt text-5xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Events & Entertainment</h3>
                <p class="text-white text-opacity-90">
                    Creating memorable event experiences with comprehensive branding solutions.
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl p-8 text-white hover-scale scroll-reveal delay-100">
                <i class="fas fa-laptop-code text-5xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Technology & Startups</h3>
                <p class="text-white text-opacity-90">
                    Helping innovative companies establish strong digital presence.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">What Our Clients Say</h2>
            <p class="text-xl text-gray-600">Success stories from satisfied partners</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition scroll-reveal">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Brand Tree transformed our brand identity completely. Their attention to detail and creative approach exceeded our expectations. Highly recommended!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900">Client Name</p>
                        <p class="text-gray-600 text-sm">Banking Sector</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition scroll-reveal delay-100">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Working with Brand Tree has been a game-changer for our business. Their strategic approach and flawless execution delivered outstanding results."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900">Client Name</p>
                        <p class="text-gray-600 text-sm">FMCG Industry</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition scroll-reveal delay-200">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Professional, creative, and reliable. Brand Tree understood our vision and brought it to life beautifully. We couldn't be happier with the results."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900">Client Name</p>
                        <p class="text-gray-600 text-sm">Hospitality</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Join Our Growing Family of Satisfied Clients
        </h2>
        <p class="text-xl text-white mb-8">
            Let's create something extraordinary together
        </p>
        <a href="/contact" class="inline-block px-8 py-4 bg-white text-purple-600 rounded-full font-semibold hover:bg-gray-100 transition hover-scale">
            Become a Client
        </a>
    </div>
</section>

@endsection