@extends('layouts.app')

@section('content')
<section class="py-16">
  <div class="max-w-3xl mx-auto px-6" data-aos="fade-up">
    <h2 class="text-2xl font-bold">{{ __('messages.contact_heading') }}</h2>

    @if(session('success'))
      <div class="p-4 bg-green-100 text-green-800 rounded mt-4">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" class="mt-6 bg-white p-6 card">
      @csrf
      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="text-sm">{{ __('messages.name') }}</label>
          <input type="text" name="name" required class="w-full mt-1 p-2 border rounded" />
        </div>
        <div>
          <label class="text-sm">{{ __('messages.mobile') }}</label>
          <input type="text" name="mobile" required class="w-full mt-1 p-2 border rounded" />
        </div>
      </div>
      <div class="mt-4">
        <label class="text-sm">{{ __('messages.email') }}</label>
        <input type="email" name="email" class="w-full mt-1 p-2 border rounded" />
      </div>
      <div class="mt-4">
        <label class="text-sm">{{ __('messages.notes') }}</label>
        <textarea name="notes" class="w-full mt-1 p-2 border rounded" rows="4"></textarea>
      </div>

      <div class="mt-4">
        <button class="px-5 py-2 bg-teal-600 text-white rounded">Send</button>
      </div>
    </form>

    <div class="mt-6 text-gray-600">
      <p>Email: info@brandtree.in</p>
      <p>Phone: +91-1234567890</p>
      <p>Address: #2, ‘Vipul Cottage’, Shanti Apartments Compound, Marol, Military Road, Andheri East, Mumbai 400059</p>
    </div>
  </div>
</section>
@endsection
