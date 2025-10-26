@extends('layouts.app')

@section('content')
<section class="py-16">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6" data-aos="fade-right">Team</h2>

    <div class="grid md:grid-cols-3 gap-6">
      @foreach($team as $member)
        <div class="card p-6 text-center" data-aos="zoom-in">
          <div class="h-24 w-24 rounded-full bg-gray-100 mx-auto flex items-center justify-center">{{ strtoupper(substr($member->name,0,1)) }}</div>
          <h3 class="mt-4 font-semibold">{{ $member->name }}</h3>
          <p class="text-sm text-teal-600">{{ $member->role }}</p>
          <p class="mt-2 text-gray-600">{{ $member->bio }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
