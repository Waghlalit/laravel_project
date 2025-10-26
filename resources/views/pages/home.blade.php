@extends('layouts.app')

@section('content')
<section class="hero-bg py-20" >
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-6xl font-extrabold animate__animated animate__fadeInDown">{{ __('messages.welcome') }}</h1>
    <p class="mt-6 text-lg max-w-3xl mx-auto opacity-90" data-aos="fade-up">For over 12 years, Brand Tree has been dedicated to transforming ideas into compelling brand identities that stand the test of time.</p>
    <div class="mt-8" data-aos="zoom-in">
      <a href="{{ route('contact') }}" class="bg-white text-teal-600 px-6 py-3 rounded-full font-semibold shadow">Get in touch</a>
    </div>
  </div>
</section>

<section class="py-16">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6" data-aos="fade-right">Our Services</h2>
    <div class="grid md:grid-cols-3 gap-6">
      @foreach($services as $s)
        <article class="card p-6" data-aos="fade-up">
          <h3 class="text-xl font-semibold">{{ $s->title }}</h3>
          <p class="mt-2 text-sm text-gray-600">{{ $s->summary }}</p>
          <p class="mt-4 text-gray-700">{{ $s->content }}</p>
        </article>
      @endforeach
    </div>
  </div>
</section>
@endsection
