<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Brand Tree - Creative Branding Solutions')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        
        .nav-link {
            position: relative;
            transition: color 0.3s;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #10b981;
            transition: width 0.3s;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-3xl font-bold gradient-bg bg-clip-text text-transparent">
                        Brand Tree
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="nav-link text-gray-700 hover:text-green-600 font-medium">Home</a>
                    <div class="relative group">
                        <a href="/about" class="nav-link text-gray-700 hover:text-green-600 font-medium">About Us</a>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 py-2 w-48">
                            <a href="/about#overview" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Overview</a>
                            <a href="/about#statements" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Our Mission</a>
                            <a href="/about#team" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Team</a>
                        </div>
                    </div>
                    <div class="relative group">
                        <a href="/services" class="nav-link text-gray-700 hover:text-green-600 font-medium">Services</a>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 py-2 w-56">
                            <a href="/services#exhibitions" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Exhibition Stalls</a>
                            <a href="/services#outdoor" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Outdoor Advertising</a>
                            <a href="/services#printing" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Offset Printing</a>
                            <a href="/services#promotional" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Promotional Items</a>
                            <a href="/services#gifting" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Corporate Gifting</a>
                            <a href="/services#events" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Management</a>
                            <a href="/services#design" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Graphic Design</a>
                            <a href="/services#websites" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Website Design</a>
                            <a href="/services#webapps" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Web Applications</a>
                            <a href="/services#digital" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Digital Marketing</a>
                        </div>
                    </div>
                    <a href="/why-choose-us" class="nav-link text-gray-700 hover:text-green-600 font-medium">Why Us</a>
                    <a href="/clients" class="nav-link text-gray-700 hover:text-green-600 font-medium">Clients</a>
                    <a href="/contact" class="nav-link text-gray-700 hover:text-green-600 font-medium">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu md:hidden fixed top-0 right-0 h-full w-64 bg-white shadow-2xl z-50">
            <div class="p-6">
                <button id="close-menu" class="absolute top-6 right-6 text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <div class="mt-12 space-y-4">
                    <a href="/" class="block text-gray-700 hover:text-green-600 font-medium">Home</a>
                    <a href="/about" class="block text-gray-700 hover:text-green-600 font-medium">About Us</a>
                    <a href="/services" class="block text-gray-700 hover:text-green-600 font-medium">Services</a>
                    <a href="/why-choose-us" class="block text-gray-700 hover:text-green-600 font-medium">Why Us</a>
                    <a href="/clients" class="block text-gray-700 hover:text-green-600 font-medium">Clients</a>
                    <a href="/contact" class="block text-gray-700 hover:text-green-600 font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-4 gradient-bg bg-clip-text text-transparent">Brand Tree</h3>
                    <p class="text-gray-400">Creative Branding Solutions for 12+ years</p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/about" class="text-gray-400 hover:text-green-500 transition">About Us</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-green-500 transition">Services</a></li>
                        <li><a href="/clients" class="text-gray-400 hover:text-green-500 transition">Clients</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-green-500 transition">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="/services#exhibitions" class="text-gray-400 hover:text-green-500 transition">Exhibition Stalls</a></li>
                        <li><a href="/services#design" class="text-gray-400 hover:text-green-500 transition">Graphic Design</a></li>
                        <li><a href="/services#websites" class="text-gray-400 hover:text-green-500 transition">Website Design</a></li>
                        <li><a href="/services#digital" class="text-gray-400 hover:text-green-500 transition">Digital Marketing</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i>info@brandtree.in</li>
                        <li><i class="fas fa-phone mr-2"></i>+91-1234567890</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i>Andheri East, Mumbai</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Brand Tree. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });
        
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });
        
        // Scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });
        
        // Active nav link
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>