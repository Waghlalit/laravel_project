@extends('layouts.app')

@section('title', 'Contact Us - Brand Tree')

@section('content')

<!-- Hero Section -->
<section class="relative h-96 flex items-center justify-center gradient-bg">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fadeInUp">Get In Touch</h1>
        <p class="text-xl text-white animate-fadeInUp delay-200">Let's build something remarkable together</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="scroll-reveal">
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Send Us a Message</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Fill out the form below and we'll get back to you within 24 hours.
                </p>
                
                <form action="/contact" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name *</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition"
                            placeholder="Your full name"
                        >
                    </div>
                    
                    <!-- Mobile Field -->
                    <div>
                        <label for="mobile" class="block text-sm font-semibold text-gray-700 mb-2">Mobile *</label>
                        <input 
                            type="tel" 
                            id="mobile" 
                            name="mobile" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition"
                            placeholder="+91-1234567890"
                        >
                    </div>
                    
                    <!-- Notes Field -->
                    <div>
                        <label for="notes" class="block text-sm font-semibold text-gray-700 mb-2">Notes *</label>
                        <textarea 
                            id="notes" 
                            name="notes" 
                            rows="6" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition resize-none"
                            placeholder="Tell us about your project..."
                        ></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full px-8 py-4 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition hover-scale"
                    >
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="scroll-reveal delay-200">
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Contact Information</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Ready to take your brand to new heights? Connect with our team today.
                </p>
                
                <div class="space-y-6 mb-10">
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Email</h3>
                            <a href="mailto:info@brandtree.in" class="text-purple-600 hover:text-purple-700">
                                info@brandtree.in
                            </a>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Phone</h3>
                            <a href="tel:+911234567890" class="text-purple-600 hover:text-purple-700">
                                +91-1234567890
                            </a>
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Address</h3>
                            <p class="text-gray-600">
                                #2, 'Vipul Cottage', Shanti Apartments Compound,<br>
                                Marol, Military Road, Andheri East,<br>
                                Mumbai 400059, Maharashtra, India
                            </p>
                        </div>
                    </div>
                    
                    <!-- Office Hours -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Office Hours</h3>
                            <p class="text-gray-600">
                                Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 10:00 AM - 4:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Links -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-full flex items-center justify-center text-white hover:shadow-lg transition hover-scale">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center text-white hover:shadow-lg transition hover-scale">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full flex items-center justify-center text-white hover:shadow-lg transition hover-scale">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-full flex items-center justify-center text-white hover:shadow-lg transition hover-scale">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 scroll-reveal">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Find Us</h2>
            <p class="text-xl text-gray-600">Visit our office in Mumbai</p>
        </div>
        
        <div class="rounded-2xl overflow-hidden shadow-2xl scroll-reveal">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0267847168176!2d72.87485931490034!3d19.11779068707184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c83b0e4a5c51%3A0x4c6e8b0b5b5b5b5b!2sMarol%2C%20Andheri%20East%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full"
            ></iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Quick answers to common questions</p>
        </div>
        
        <div class="space-y-6">
            <div class="bg-gray-50 rounded-xl p-6 scroll-reveal">
                <h3 class="text-xl font-bold mb-3 text-gray-900 flex items-center">
                    <i class="fas fa-question-circle text-purple-600 mr-3"></i>
                    What services do you offer?
                </h3>
                <p class="text-gray-600 ml-9">
                    We offer comprehensive branding solutions including exhibition stalls, outdoor advertising, graphic design, website development, digital marketing, corporate gifting, and more.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6 scroll-reveal delay-100">
                <h3 class="text-xl font-bold mb-3 text-gray-900 flex items-center">
                    <i class="fas fa-question-circle text-purple-600 mr-3"></i>
                    How long does a typical project take?
                </h3>
                <p class="text-gray-600 ml-9">
                    Project timelines vary depending on scope and complexity. Simple projects may take 2-4 weeks, while comprehensive branding campaigns can take 2-3 months. We'll provide a detailed timeline during consultation.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6 scroll-reveal delay-200">
                <h3 class="text-xl font-bold mb-3 text-gray-900 flex items-center">
                    <i class="fas fa-question-circle text-purple-600 mr-3"></i>
                    Do you work with startups?
                </h3>
                <p class="text-gray-600 ml-9">
                    Absolutely! We work with businesses of all sizes, from startups to established enterprises. We tailor our solutions to fit your budget and growth stage.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6 scroll-reveal delay-300">
                <h3 class="text-xl font-bold mb-3 text-gray-900 flex items-center">
                    <i class="fas fa-question-circle text-purple-600 mr-3"></i>
                    Where is your manufacturing facility?
                </h3>
                <p class="text-gray-600 ml-9">
                    Our state-of-the-art manufacturing facility is located in Kalyan Shilphata, ensuring quality control and fast turnaround times for all physical production needs.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6 scroll-reveal delay-400">
                <h3 class="text-xl font-bold mb-3 text-gray-900 flex items-center">
                    <i class="fas fa-question-circle text-purple-600 mr-3"></i>
                    How do I get started?
                </h3>
                <p class="text-gray-600 ml-9">
                    Simply fill out the contact form above or give us a call. We'll schedule a consultation to discuss your project, understand your goals, and provide a customized proposal.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Let's Start Your Brand Journey
        </h2>
        <p class="text-xl text-white mb-8">
            We're excited to learn about your project and help bring your vision to life
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+911234567890" class="px-8 py-4 bg-white text-purple-600 rounded-full font-semibold hover:bg-gray-100 transition hover-scale">
                <i class="fas fa-phone mr-2"></i>
                Call Us Now
            </a>
            <a href="mailto:info@brandtree.in" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">
                <i class="fas fa-envelope mr-2"></i>
                Email Us
            </a>
        </div>
    </div>
</section>

@endsection