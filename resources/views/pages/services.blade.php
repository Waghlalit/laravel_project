@extends('layouts.app')

@section('content')
<section class="py-16">
  <div class="max-w-6xl mx-auto px-6" data-aos="fade-up">
    <h2 class="text-3xl font-bold">Services</h2>
    <p class="mt-4 text-gray-700">We offer a broad set of services to cover all branding needs.</p>

    <div class="mt-8 grid md:grid-cols-3 gap-6">
      @foreach($services as $s)
        <div class="card p-6" data-aos="flip-left">
          <h3 class="font-semibold text-xl">{{ $s->title }}</h3>
          <p class="mt-2 text-gray-600">{{ $s->summary }}</p>
          <p class="mt-3 text-gray-700">{{ $s->content }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
