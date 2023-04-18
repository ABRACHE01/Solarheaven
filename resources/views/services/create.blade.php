@extends('layouts.sec')

@section('content')
@include('components.authnavbar')

 <!-- component -->

 <h4
 class="md:text-8xl xl:text-1 text-center font-bold font-heading tracking-px-n pt-14 leading-none">
 Create a Service </h4>

 
  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
        <div class="mx-auto w-full max-w-[550px]">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
              @endif
            <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
        
            <div class="mb-5">
              <label
                for="email"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
               Service Name:
              </label>
              <input
              value="{{ old('name') }}"
                type="text"
                name="name"
                id="name"
                placeholder="Service Name"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
    
            <div class="mb-5">
                <label
                  for="description"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Service Description:
                </label>
                <textarea 
                placeholder="Service description"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                id="description" name="description" required>{{ old('description') }}</textarea>
              
              </div>
    
              <div class="mb-5">
                <label
                  for="price"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Price:
                </label>
                <input
                value="{{ old('price') }}"
                  type="number"
                  name="price"
                  id="price"
                  placeholder="Price with DH"
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>

      
            <div class="mb-6 pt-4">
              <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                Upload image
              </label>
      
              <div class="mb-8">
                <input type="file"   id="file" name="url[]" class="sr-only" accept="image/*" multiple>
                <label
                  for="file"
                  class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
                >
                  <div>
                   
                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                      Drop image here
                    </span>
                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                      Or
                    </span>
                    <span
                      class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                    >
                      Browse
                    </span>
                  </div>
                </label>
              </div>
              
            </div>
            <div>
              <button
             type="submit"
                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
              >
                Create Service
              </button>
            </div>
          </form>
        </div>

    <div id="preview" class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
     
      <img src="{{ asset('images/staticpictures/photo-frame.png') }}"  alt="Walnut card tray filled with cards and card angled in dedicated groove." class="">
      <img src="{{ asset('images/staticpictures/photo-frame.png') }}"  alt="Walnut card tray filled with cards and card angled in dedicated groove." class="">
      <img src="{{ asset('images/staticpictures/photo-frame.png') }}"  alt="Walnut card tray filled with cards and card angled in dedicated groove." class="">
      <img src="{{ asset('images/staticpictures/photo-frame.png') }}"  alt="Walnut card tray filled with cards and card angled in dedicated groove." class="">
    </div>

  </div>

<script>
    document.getElementById('file').addEventListener('change', function() {
        var preview = document.getElementById('preview');
        preview.innerHTML = '';
        for (var i = 0; i < this.files.length; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.createElement('img');
                img.setAttribute('src', e.target.result);
                img.setAttribute('class', 'rounded-lg bg-gray-100 w-[300px] h-[300px] object-cover object-center');
                preview.appendChild(img);
            };
            reader.readAsDataURL(this.files[i]);
        }
    });
</script>


@include('components.footer')
@endsection

