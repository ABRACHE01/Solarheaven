

@extends('layouts.sec')

@section('content')
<body class="bg-gray-100 dark:bg-gray-800 ">
  

<header>
  @include('components.authnavbar')
</header>

   <section class="relative pt-28 pb-36 bg-blueGray-100 overflow-hidden">
      
  <div class="max-w-6xl  mx-auto px-4 sm:px-6 lg:px-4 py-12">
      <div class="text-center pb-12">
        <h1 class="md:text-8xl xl:text-1 text-center font-bold font-heading tracking-px-n pb-12 leading-none">
       Appointements section
      </h1>

        <label
            class="mx-auto mt-8 relative bg-white min-w-sm max-w-2xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-2xl gap-2 shadow-2xl focus-within:border-gray-300"
            for="search-bar">

            <input id="search-input" placeholder="your keyword here" name="q"
                class="px-6 py-2 w-full rounded-md flex-1 outline-none bg-white" required="">
            <button type="submit"
                class="w-full md:w-auto px-6 py-3 bg-green-600 border-green-600 text-white fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                <div class="flex items-center transition-all opacity-1">
                    <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                        Search
                    </span>
                </div>
            </button>
        </label>
  
  
        
      </div>
      <div id="myTechnicians" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">



@if(Auth:: user()->hasRole('technician')) 

@include('components.technician.appointments')

@endif



 @if(Auth::user()->hasRole('admin'))

  @include('components.admin.appointments')

@endif



@if(Auth::user()->hasRole('client'))

  @include('components.client.appointments')

 @endif

  



</section> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#search-input').on('keyup', function() {
      var value = $(this).val().toLowerCase();
      $('#myTechnicians section').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
@include('components.footer')
</body>

@endsection

