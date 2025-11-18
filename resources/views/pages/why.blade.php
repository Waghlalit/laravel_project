@extends('layouts.app')

@section('title', 'Why Choose Brand Tree - Brand Tree')

@section('content')

<!-- Hero Section -->
<section class="relative h-96 flex items-center justify-center gradient-bg">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fadeInUp">Why Choose Brand Tree?</h1>
        <p class="text-xl text-white animate-fadeInUp delay-200">Your trusted partner for exceptional branding solutions</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-6 text-gray-900">
                Combining Creativity, Experience & Technology
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Choosing Brand Tree means partnering with a dynamic agency that delivers exceptional branding solutions with proven results over 12+ years
            </p>
        </div>
        
        <!-- Key Benefits -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
            <div class="scroll-reveal">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mr-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Client-First Partnership</h3>
                        <p class="text-gray-600 text-lg mb-4">
                            Your goals are our goals. We listen deeply, collaborate transparently, and tailor every strategy to your specific business objectives, ensuring a true partnership at every step.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Transparent communication
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Collaborative decision-making
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Customized strategies
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="scroll-reveal delay-100">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mr-6">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Creative & Strategic Excellence</h3>
                        <p class="text-gray-600 text-lg mb-4">
                            We fuse artistic creativity with data-driven marketing strategy. Our multidisciplinary team delivers innovative solutions that are beautiful, effective, and forward-thinking.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Data-driven insights
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Innovative designs
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Strategic planning
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="scroll-reveal delay-200">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mr-6">
                        <i class="fas fa-industry text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Quality Craftsmanship, Seamlessly Delivered</h3>
                        <p class="text-gray-600 text-lg mb-4">
                            From initial concept to physical fabrication, we control the process with precision. Our state-of-the-art manufacturing facilities guarantee unmatched quality and consistency.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                In-house manufacturing
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Quality control
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Fast turnaround
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="scroll-reveal delay-300">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mr-6">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Relentless Evolution</h3>
                        <p class="text-gray-600 text-lg mb-4">
                            In a rapidly changing world, your brand cannot afford to stand still. We constantly evolve our methods and embrace new technologies to keep your brand ahead of the curve.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Latest technologies
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Continuous improvement
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Market adaptability
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 gradient-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
            <div class="scroll-reveal">
                <h3 class="text-5xl md:text-6xl font-bold mb-2">12+</h3>
                <p class="text-xl">Years of Excellence</p>
            </div>
            <div class="scroll-reveal delay-100">
                <h3 class="text-5xl md:text-6xl font-bold mb-2">500+</h3>
                <p class="text-xl">Projects Delivered</p>
            </div>
            <div class="scroll-reveal delay-200">
                <h3 class="text-5xl md:text-6xl font-bold mb-2">200+</h3>
                <p class="text-xl">Happy Clients</p>
            </div>
            <div class="scroll-reveal delay-300">
                <h3 class="text-5xl md:text-6xl font-bold mb-2">100%</h3>
                <p class="text-xl">Satisfaction Rate</p>
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Additional Advantages</h2>
            <p class="text-xl text-gray-600">What else sets us apart</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-leaf text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Sustainability Focus</h3>
                <p class="text-gray-600">
                    Committed to responsible practices and eco-friendly solutions that benefit both your brand and the environment.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-100">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Measurable Outcomes</h3>
                <p class="text-gray-600">
                    Focus on delivering measurable results with clear metrics and continuous improvement to maximize ROI.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-200">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-handshake text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Long-Term Partnerships</h3>
                <p class="text-gray-600">
                    Building lasting relationships based on trust, reliability, and consistent delivery of exceptional work.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-300">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-cogs text-orange-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Full-Service Solutions</h3>
                <p class="text-gray-600">
                    One-stop-shop for all branding needs from strategy to execution, saving you time and resources.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-400">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-award text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Proven Track Record</h3>
                <p class="text-gray-600">
                    12+ years of success stories with clients ranging from startups to industry leaders like ICICI and Lipton.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition hover-scale scroll-reveal delay-100">
                <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-clock text-pink-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Timely Delivery</h3>
                <p class="text-gray-600">
                    Commitment to meeting deadlines without compromising on quality, ensuring your projects launch on time.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Our Process</h2>
            <p class="text-xl text-gray-600">How we bring your brand to life</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center scroll-reveal">
                <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-3xl font-bold">1</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Discovery</h3>
                <p class="text-gray-600">Understanding your brand, goals, and target audience</p>
            </div>
            
            <div class="text-center scroll-reveal delay-100">
                <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-3xl font-bold">2</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Strategy</h3>
                <p class="text-gray-600">Developing tailored solutions and creative direction</p>
            </div>
            
            <div class="text-center scroll-reveal delay-200">
                <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-3xl font-bold">3</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Execution</h3>
                <p class="text-gray-600">Bringing designs to life with precision craftsmanship</p>
            </div>
            
            <div class="text-center scroll-reveal delay-300">
                <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-3xl font-bold">4</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Optimization</h3>
                <p class="text-gray-600">Measuring results and continuous improvement</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Experience the Brand Tree Difference
        </h2>
        <p class="text-xl text-white mb-8">
            Join hundreds of satisfied clients who trust us with their brand
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="px-8 py-4 bg-white text-purple-600 rounded-full font-semibold hover:bg-gray-100 transition hover-scale">
                Get Started
            </a>
            <a href="/services" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">
                View Services
            </a>
        </div>
    </div>
</section>

@endsection