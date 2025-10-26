@extends('layouts.app')

@section('content')
<section class="py-16">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Our Clients</h2>
    <div class="grid md:grid-cols-3 gap-6">
      @foreach($clients as $c)
        <div class="card p-6" data-aos="fade-up">
          <h3 class="font-semibold">{{ $c->name }}</h3>
          <p class="text-gray-600 mt-2">{{ $c->notes }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
