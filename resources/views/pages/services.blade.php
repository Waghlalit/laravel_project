@extends('layouts.app')

@section('title', 'Services - Brand Tree')

@section('content')

<!-- Hero Section -->
<section class="relative h-96 flex items-center justify-center gradient-bg">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fadeInUp">Our Services</h1>
        <p class="text-xl text-white animate-fadeInUp delay-200">Comprehensive branding solutions for your success</p>
    </div>
</section>

<!-- Exhibition Stalls -->
<section id="exhibitions" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-store text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Exhibition Stalls</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Our exhibition stall designs are crafted to make your brand the center of attention at any event or trade show. We understand that exhibition stalls serve as physical expressions of your brand's identity.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    From conceptualization to fabrication, we blend creativity with engineering expertise to ensure each stall reflects your brand ethos while standing out amidst the competition.
                </p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Custom and modular structures</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Interactive and functional designs</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">High-quality materials and techniques</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Storytelling through spatial design</span>
                    </li>
                </ul>
                <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Request Quote
                </a>
            </div>
            <div class="scroll-reveal delay-200">
                <div class="bg-gradient-to-br from-purple-100 to-indigo-100 rounded-2xl p-12 h-96 flex items-center justify-center">
                    <i class="fas fa-store text-purple-600 text-9xl opacity-30"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Outdoor Advertising -->
<section id="outdoor" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal order-2 lg:order-1">
                <div class="bg-gradient-to-br from-green-100 to-teal-100 rounded-2xl p-12 h-96 flex items-center justify-center">
                    <i class="fas fa-bullhorn text-green-600 text-9xl opacity-30"></i>
                </div>
            </div>
            <div class="scroll-reveal delay-200 order-1 lg:order-2">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-bullhorn text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Outdoor Advertising</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Visibility is vital in outdoor advertising, and Brand Tree excels in creating impactful advertising solutions that capture attention and amplify your brand message.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Strategic placement combined with compelling designs ensures your brand remains top-of-mind for potential customers.
                </p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Vibrant signboards and billboards</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Dynamic standees and vehicle wraps</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Weather-resistant materials</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Digital signage solutions</span>
                    </li>
                </ul>
                <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Offset Printing -->
<section id="printing" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-print text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Offset Printing</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Brand Tree's offset printing services provide vibrant, high-resolution prints for your marketing collateral. Leveraging advanced technology, we deliver sharp, accurate, and consistent color reproduction.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Our team works closely with you to select the right paper, finishes, and specifications that align with your brand standards.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <i class="fas fa-book text-purple-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Brochures</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <i class="fas fa-id-card text-purple-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Business Cards</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <i class="fas fa-file-alt text-purple-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Flyers</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <i class="fas fa-folder text-purple-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Catalogues</p>
                    </div>
                </div>
                <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Get Quote
                </a>
            </div>
            <div class="scroll-reveal delay-200">
                <div class="bg-gradient-to-br from-pink-100 to-rose-100 rounded-2xl p-12 h-96 flex items-center justify-center">
                    <i class="fas fa-print text-pink-600 text-9xl opacity-30"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Promotional Items -->
<section id="promotional" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 scroll-reveal">
            <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6 mx-auto">
                <i class="fas fa-mug-hot text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl font-bold mb-6 text-gray-900">Customized Promotional Items</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Promotional items serve as powerful tools to reinforce your brand's message and create tangible connections with your audience.
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition hover-scale scroll-reveal">
                <i class="fas fa-pen text-purple-600 text-4xl mb-4"></i>
                <h3 class="font-semibold text-gray-900">Branded Pens</h3>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition hover-scale scroll-reveal delay-100">
                <i class="fas fa-mug-hot text-purple-600 text-4xl mb-4"></i>
                <h3 class="font-semibold text-gray-900">Custom Mugs</h3>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition hover-scale scroll-reveal delay-200">
                <i class="fas fa-tshirt text-purple-600 text-4xl mb-4"></i>
                <h3 class="font-semibold text-gray-900">Apparel</h3>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition hover-scale scroll-reveal delay-300">
                <i class="fas fa-sticky-note text-purple-600 text-4xl mb-4"></i>
                <h3 class="font-semibold text-gray-900">Stationery</h3>
            </div>
        </div>
        
        <div class="text-center mt-10">
            <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                Explore Options
            </a>
        </div>
    </div>
</section>

<!-- Corporate Gifting -->
<section id="gifting" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal">
                <div class="bg-gradient-to-br from-yellow-100 to-orange-100 rounded-2xl p-12 h-96 flex items-center justify-center">
                    <i class="fas fa-gift text-orange-600 text-9xl opacity-30"></i>
                </div>
            </div>
            <div class="scroll-reveal delay-200">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-gift text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Corporate Gifting</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Corporate gifting is an art that strengthens professional relationships and reinforces brand loyalty. Brand Tree specializes in curating unique corporate gift solutions.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    From luxury gift hampers and personalized keepsakes to eco-friendly merchandise, we create memorable experiences that foster goodwill.
                </p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Luxury gift hampers</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Personalized keepsakes</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Eco-friendly merchandise</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                        <span class="text-gray-700">Full gifting process management</span>
                    </li>
                </ul>
                <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Start Gifting
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Event Management Support -->
<section id="events" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-calendar-alt text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Event Management Support</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Events offer dynamic platforms for brands to engage audiences directly. Brand Tree provides comprehensive event branding and management support to maximize your impact.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    From product launches and trade fairs to corporate conferences, we design cohesive branding elements that ensure consistency across all touchpoints.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-lg border-l-4 border-purple-600">
                        <p class="font-semibold text-gray-900">Product Launches</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-l-4 border-purple-600">
                        <p class="font-semibold text-gray-900">Trade Fairs</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-l-4 border-purple-600">
                        <p class="font-semibold text-gray-900">Corporate Events</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-l-4 border-purple-600">
                        <p class="font-semibold text-gray-900">Cultural Events</p>
                    </div>
                </div>
                <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Plan Your Event
                </a>
            </div>
            <div class="scroll-reveal delay-200">
                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 rounded-2xl p-12 h-96 flex items-center justify-center">
                    <i class="fas fa-calendar-alt text-blue-600 text-9xl opacity-30"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Graphic Design -->
<section id="design" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal order-2 lg:order-1">
                <div class="bg-gradient-to-br from-purple-100 to-pink-100 rounded-2xl p-12 h-96 flex items-center justify-center">
                    <i class="fas fa-palette text-purple-600 text-9xl opacity-30"></i>
                </div>
            </div>
            <div class="scroll-reveal delay-200 order-1 lg:order-2">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-palette text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Graphic Design</h2>
                <p class="text-lg text-gray-600 mb-4">
                    We build the visual identity that makes your brand recognizable and memorable. From the first impression to lasting loyalty, we craft designs that tell your story.
                </p>
                <div class="space-y-4 mb-6">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Brand Identity & Strategy</h4>
                        <p class="text-gray-600">Logo design, brand style guides, color palettes, and typography systems</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Marketing Collateral</h4>
                        <p class="text-gray-600">Brochures, flyers, business cards, posters, and packaging design</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Digital Graphics</h4>
                        <p class="text-gray-600">Social media assets, banners, infographics, and presentations</p>
                    </div>
                </div>
                <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Start Designing
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Website Design -->
<section id="websites" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 scroll-reveal">
            <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6 mx-auto">
                <i class="fas fa-laptop-code text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl font-bold mb-6 text-gray-900">Website Design & Development</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Your website is your digital storefront. We build beautiful, functional, and high-performing websites tailored to your business goals.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-file-code text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Static Websites</h3>
                <p class="text-gray-600 mb-4">
                    Fast, secure, and cost-effective brochure-style sites perfect for establishing a basic online presence.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li>• Portfolio sites</li>
                    <li>• Business profiles</li>
                    <li>• Landing pages</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-100">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-shopping-cart text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">E-commerce</h3>
                <p class="text-gray-600 mb-4">
                    Full-featured online stores with product catalogs, secure payments, and seamless customer journey.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li>• Product catalogs</li>
                    <li>• Payment gateways</li>
                    <li>• Inventory management</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-200">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fab fa-wordpress text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">WordPress</h3>
                <p class="text-gray-600 mb-4">
                    Powerful, scalable, and easy-to-manage websites using the world's most popular CMS.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li>• Custom themes</li>
                    <li>• Full control</li>
                    <li>• SEO optimized</li>
                </ul>
            </div>
        </div>
        
        <div class="text-center mt-10">
            <a href="/contact" class="inline-block px-8 py-4 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                Build Your Website
            </a>
        </div>
    </div>
</section>

<!-- Web Applications -->
<section id="webapps" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-code text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Web Applications</h2>
                <p class="text-lg text-gray-600 mb-4">
                    We develop custom, interactive software solutions that run in your web browser to solve complex business problems and automate workflows.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    From CRM systems to progressive web apps, we create robust, scalable applications that give you a competitive advantage.
                </p>
                <div class="space-y-4 mb-6">
                    <div class="flex items-start">
                        <i class="fas fa-database text-purple-600 text-xl mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-gray-900">Custom Business Tools</h4>
                            <p class="text-gray-600">CRM systems, project management portals, dashboards</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-users text-purple-600 text-xl mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-gray-900">Interactive Portals</h4>
                            <p class="text-gray-600">Member areas, customer portals, booking systems</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-mobile-alt text-purple-600 text-xl mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-gray-900">Progressive Web Apps</h4>
                            <p class="text-gray-600">App-like experiences that work offline</p>
                        </div>
                    </div>
                </div>
                <a href="/contact" class="inline-block px-6 py-3 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                    Build Custom Solution
                </a>
            </div>
            <div class="scroll-reveal delay-200">
                <div class="bg-gradient-to-br from-indigo-100 to-blue-100 rounded-2xl p-12 h-96 flex items-center justify-center">
                    <i class="fas fa-code text-indigo-600 text-9xl opacity-30"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Marketing -->
<section id="digital" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6 mx-auto">
                <i class="fas fa-chart-line text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">Digital Marketing</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive online presence from brand strategy to execution
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-xl p-6 hover:shadow-lg transition hover-scale scroll-reveal delay-400">
                <i class="fas fa-hashtag text-purple-600 text-3xl mb-4"></i>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Social Media</h3>
                <p class="text-gray-600">Build community and engagement across platforms</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 hover:shadow-lg transition hover-scale scroll-reveal delay-100">
                <i class="fas fa-envelope text-purple-600 text-3xl mb-4"></i>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Email Marketing</h3>
                <p class="text-gray-600">Automated sequences that nurture leads and drive loyalty</p>
            </div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-lg p-8 scroll-reveal">
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Our Strategic Approach</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-lg mb-2 text-purple-600">Foundation-First Methodology</h4>
                    <p class="text-gray-600">We ensure your brand's roots are strong so all marketing activities grow in a consistent direction.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-2 text-purple-600">Climbing the Tree</h4>
                    <p class="text-gray-600">Starting with quick-win tactics for early results and progressively scaling to more complex strategies.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-10">
            <a href="/contact" class="inline-block px-8 py-4 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale">
                Grow Your Online Presence
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Ready to Transform Your Brand?
        </h2>
        <p class="text-xl text-white mb-8">
            Let's discuss how our services can help you achieve your business goals
        </p>
        <a href="/contact" class="inline-block px-8 py-4 bg-white text-purple-600 rounded-full font-semibold hover:bg-gray-100 transition hover-scale">
            Contact Us Today
        </a>
    </div>
</section>

@endsection 