
@extends('layouts.sec')

@section('content')

@include('components.authnavbar')

              <form  action="{{ route('profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <section aria-label="Breadcrumb " class="flex m-5 mt-10 px-32 ">
                    <ol
                      role="list"
                      class="flex overflow-hidden rounded-lg border border-gray-200 text-gray-600"
                    >
                      <li class="flex items-center">
                        <a
                          href="{{ route('home') }}"
                          class="flex h-10 items-center bg-gray-100 px-4 transition hover:text-gray-900"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            />
                          </svg>
                  
                          <span class="ml-1.5 text-xs font-medium"> Home </span>
                        </a>
                      </li>
                         <li class="relative flex items-center">
                            <span
                            class="absolute inset-y-0 -left-px h-10 w-4 bg-gray-100 [clip-path:_polygon(0_0,_0%_100%,_100%_50%)]"
                            >
                            </span>
                    
                            <a
                            href=""
                            class="flex h-10 items-center bg-white pl-8 pr-4 text-xs font-medium transition hover:text-gray-900"
                            >
                            Profile settings 
                            </a>
                        </li>

                    </ol>
                  </section>

    <div class="bg-white dark:bg-gray-800   mt-16 ">
            <div class="container mx-auto bg-white dark:bg-gray-800 rounded">
                     @if($message= Session::get('success')) 
                        <div class="p-6 border-l-4 border-green-500 -6 rounded-r-xl bg-green-50">
                          <div class="flex">
                            <div class="flex-shrink-0">
                              <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                              </svg>
                            </div>
                            <div class="ml-3">
                              <div class="text-sm text-green-600">
                                <p> {{$message}}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                    @endif
                          <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 bg-white dark:bg-gray-800">
                              <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                                  <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Profile settings</p>
                                  <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                      <svg xlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                          <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                      </svg>
                                  </div>
                              </div>
                          </div>
                          <div class="mx-auto">
                              <div class="xl:w-11/12 w-11/12 mx-auto xl:mx-0">
                                  <div class="rounded relative mt-8 h-48">
                                      <img src="{{asset('images/staticpictures/solarheaven.png')}}" alt="" class="w-full h-full object-cover rounded absolute shadow" />
                                      <div class="absolute bg-black opacity-60 top-0 right-0 bottom-0 left-0 rounded"></div>
                                      <div class="flex items-center px-3 py-2 rounded absolute right-0 mr-4 mt-4 cursor-pointer">
                                      </div>
                                      <div class="w-32 h-32 rounded-full bg-cover bg-center bg-no-repeat absolute bottom-0 -mb-10 ml-12 shadow flex items-center justify-center">
                                        <div class="shrink-0">
                                          <img id='preview_img' class="h-32 w-32 object-cover rounded-full" src="{{  asset('images/usersImages/'.$user->image) }}" alt="Current profile photo" />
                                        </div>
                                      </div>
                                  </div>
                    <div class="mt-16">
                      
                            <div class="flex items-center space-x-6">
                                <label class="block">
                                  <span class="sr-only">Choose profile photo</span>
                                  <input type="file" onchange="loadFile(event)" name="image" class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-violet-700
                                    hover:file:bg-violet-100
                                  "/>
                                </label>
                              </div>
                        </div> 

                        <div class="mt-16 mb-6 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <label for="name" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Username</label>
                            <input tabindex="0" type="text" id="name" name="fullname" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" value="{{$user->name}} " />
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class=" mb-6 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                          <label for="name" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Role</label>
                          <input tabindex="0" type="text" id="role" name="role" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" value="{{$user->getRoleNames()}}" disabled/> 
                        </div>

                
                        {{-- technician infos --}}
                      @if(Auth::user()->hasRole('technician'))
                    <div class=" mb-6 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                        <label for="name" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Qualification</label>
                        <input tabindex="0" type="text" id="qualification" name="qualification" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" value="{{$user->technician->qualification}} " />
                        @if ($errors->has('qualification'))
                        <span class="text-danger">{{ $errors->first('qualification') }}</span>
                         @endif
                    </div>

                    <div class=" mb-6 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                        <label for="name" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Years of experience</label>
                        <input tabindex="0" type="number" id="years_of_experience" name="years_of_experience" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" value="{{$user->technician->years_of_experience}}" /> 
                    </div>
                    @endif
                     {{-- technician and admin infos --}}
                      @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('admin') )
                        <div class="mb-6 flex flex-col xl:w-3/5 lg:w-1/2 md:w-1/2 w-full">
                            <label for="about" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">About</label>
                            <textarea id="bio" name="bio" required class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="Let the world know who you are" rows="5">

                                @if(Auth::user()->hasRole('technician'))
                                {{ $user->technician->bio }}
                                @endif

                                @if(Auth::user()->hasRole('admin'))
                                {{ $user->admin->bio ? $user->admin->bio : 'No bio' }}
                                @endif

                            </textarea>
                            <p class="w-full text-right text-xs pt-1 text-gray-600 dark:text-gray-400">Character Limit: 200</p>
                        </div>
                    @endif
                    

                    </div>
                </div>

                <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5">
                    <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                        <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Personal Information</p>
                        <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                  
                  <div class="mx-auto pt-4">
                      <div class="container mx-auto">
                          <div class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0">
                            
                              <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                  <label for="email" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                                  <div class="border shadow-sm rounded flex">
                                      <div tabindex="0" class="focus:outline-none px-4 py-3 dark:text-gray-100 flex items-center border-r ">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" />
                                              <rect x="3" y="5" width="18" height="14" rx="2" />
                                              <polyline points="3 7 12 13 21 7" />
                                          </svg>
                                      </div>
                                      <input tabindex="0" type="text" id="Email" name="email" required class="pl-3 py-3 w-full text-sm focus:outline-none placeholder-gray-500 rounded bg-transparent text-gray-600 dark:text-gray-400 border-gray-300  dark:border-gray-700 focus:border-indigo-700" value="{{$user->email}} " />
                                      @if ($errors->has('email'))
                                      <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                  @endif
                                  </div>
                                 
                              </div>
                              <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                  <label for="StreetAddress" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">phone number</label>
                                  <input tabindex="0" type="text" id="StreetAddress" name="streetAddress" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded bg-transparent text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" value="{{$user->phone_number}}" />
                                  @if ($errors->has('phone_number'))
                                  <small class="form-text text-danger">{{ $errors->first('phone_number') }}</small>
                              @endif
                                </div>

                            {{-- show and update city --}}
                            <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                <label for="city" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">City</label>
                                <select name="city_id"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    @foreach ($cities as $city)
                                    <option value="{{$city->id}}" {{ $user->city_id == $city->id ? 'selected' : ''  }}>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                                     {{-- Client infos --}}
                                     @if(Auth::user()->hasRole('client'))
                                     <div class=" xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                         <label for="address" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">address</label>
                                         <input tabindex="0" type="text" id="address" name="address" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded bg-transparent text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" value="{{ $user->client->address}} " />
                                         @if ($errors->has('address'))
                                         <span class="text-danger">{{ $errors->first('address') }}</span>
                                         @endif
                                     </div>
                                     @endif
                            <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 ">
                              <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                                  <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Change password</p>
                                  <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                          <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                      </svg>
                                  </div>
                              </div>
                          </div>
                  
                        <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6  pt-4">
                            <label for="State/Province" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">new password </label>
                            <input tabindex="0" type="password" id="newpassword" name="newpassword"  class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="**************" />
                       @if ($errors->has('newpassword'))
                        <small class="form-text text-danger">{{ $errors->first('newpassword') }}</small>
                    @endif
                        </div>



                    <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 ">
                        <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                            <p class="text-lg text-gray-800 dark:text-gray-100 font-bold"> Current password </p>
                            <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                    <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6 mt-4 ">
                      <label for="State/Province" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Password </label>
                      <input tabindex="0" type="password" id="password" name="password" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="**************" />
                  @If($errors->has('password'))
                  <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                  @endif
                    </div>
                </div>
                      </div>
                  </div>
              </div>
              <div class="container mx-auto mt-10 rounded bg-gray-100 dark:bg-gray-700 w-11/12 xl:w-full">
                  <div class="xl:w-full py-5 px-8">
                      <div class="flex items-center mx-auto">
                          <div class="container mx-auto">
                              <div class="mx-auto xl:w-full">
                                  <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Alerts</p>
                                  <p class="text-sm text-gray-600 dark:text-gray-400 pt-1">Any changes fome this list require filling the <span class="font-bold"> current password </span> input . </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container mx-auto w-11/12 xl:w-full">
                  <div class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end">
                      <button role="button" aria-label="Save form" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm" type="submit">Save</button>
                  </div>
              </div>
              
     </div>
            
     <button data-collapse-toggle="mobile-menu-2" type="button"
     class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
     aria-controls="mobile-menu-2" aria-expanded="true">
     <span class="sr-only">Open main menu</span>
     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd"
         d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
         clip-rule="evenodd"></path>
     </svg>
     <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd"
         d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
         clip-rule="evenodd"></path>
     </svg>
   </button>

     <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
         <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
             <li>
                 <a href="#"
                     class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white"
                     aria-current="page">Home</a>
             </li>
             <li>
                 <a href="#"
                     class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
             </li>
             <li>
                 <a href="#"
                     class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
             </li>
             <li>
                 <a href="#"
                     class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
             </li>
             <li>
                 <a href="#"
                     class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
             </li>
             <li>
                 <a href="#"
                     class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
             </li>
         </ul>
     </div>

     
    </form>
            <script>
    var loadFile = function(event) {
        
        var input = event.target;
        var file = input.files[0];
        var type = file.type;

       var output = document.getElementById('preview_img');


        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@include('components.footer')
@endsection