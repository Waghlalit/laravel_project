<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Brand Tree</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    .hero-bg { background: linear-gradient(90deg,#0f172a 0%, #0ea5a4 100%); color: white; }
    .card { background: white; border-radius: 12px; box-shadow: 0 6px 20px rgba(2,6,23,0.08); }
  </style>
</head>
<body class="antialiased font-sans">
  <header class="bg-white shadow">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-4">
        <div class="text-xl font-bold">Brand Tree</div>
        <nav class="hidden md:flex space-x-4 text-gray-600">
          <a href="{{ route('home') }}" class="hover:text-teal-600">Home</a>
          <a href="{{ route('about') }}" class="hover:text-teal-600">About</a>
          <a href="{{ route('services') }}" class="hover:text-teal-600">Services</a>
          <a href="{{ route('team') }}" class="hover:text-teal-600">Team</a>
          <a href="{{ route('clients') }}" class="hover:text-teal-600">Clients</a>
          <a href="{{ route('why') }}" class="hover:text-teal-600">Why</a>
          <a href="{{ route('contact') }}" class="hover:text-teal-600">Contact</a>
        </nav>
      </div>

      <div class="flex items-center space-x-4">
        <a href="/lang/en" class="text-sm px-2 py-1 border rounded">EN</a>
        <a href="/lang/hi" class="text-sm px-2 py-1 border rounded">HI</a>
      </div>
    </div>
  </header>

  <main class="max-w-6xl mx-auto">
    @yield('content')
  </main>

  <footer class="mt-12 bg-gray-50 py-8">
    <div class="max-w-6xl mx-auto px-6 text-center text-gray-600">
      &copy; {{ date('Y') }} Brand Tree — Creative Branding Solutions
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>
</html>
