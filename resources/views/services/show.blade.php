


@extends('layouts.sec')

@section('content')
      
  @include('components.navbar')

<section>
  <div class="">
      <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
        <div>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">PACK - {{ $service->name }}</h2>
          <p class="mt-4 text-gray-500">{{ $service->description }}</p>
    
          <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
            <div class="border-t border-gray-200 pt-4">
              <dt class="font-medium text-gray-900"> Admin Poster </dt>
              <dd class="mt-2 text-sm text-gray-500"> {{$service->admin->user->name}} </dd>
            </div>
    
            <div class="border-t border-gray-200 pt-4">
              <dt class="font-medium text-gray-900">Material</dt>
              <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and powder coated steel card cover</dd>
            </div>
    
            <div class="border-t border-gray-200 pt-4">
              <dt class="font-medium text-gray-900">Dimensions</dt>
              <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
            </div>
    
            <div class="border-t border-gray-200 pt-4">
              <dt class="font-medium text-gray-900">Finish</dt>
              <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
            </div>
    
            <div class="border-t border-gray-200 pt-4">
              <dt class="font-medium text-gray-900">Includes</dt>
              <dd class="mt-2 text-sm text-gray-500">Wood card tray and 3 refill packs</dd>
            </div>
    
            <div class="border-t border-gray-200 pt-4">
              <dt class="font-medium text-gray-900">Considerations</dt>
              <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each item.</dd>
            </div>
          </dl>
        </div>
   
        <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
          @forEach($service->images as $image)
          <img src="{{ asset('images/serviceImages/' . $image->url) }}"alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100 w-[300px] h-[300px] object-cover object-center">

          @endforeach
        </div>

      </div>
    </div>
</section>

@include('components.footer')


@endsection


