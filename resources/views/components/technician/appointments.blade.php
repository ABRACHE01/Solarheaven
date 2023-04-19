@foreach($techappointments as $appointement)

  <div id="appointements">
    <section class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
        <div class="border-b px-4 pb-6 mt-32">
            <div class="text-center my-4 ">
              
              <div class="flex justify-center -mt-16 ">
                <a  href="{{route('clients.show', $appointement->client->id ) }}" class=" object-cover rounded-full border-2 -m-3  border-green-500 transform hover:scale-125 "> <img  class=" object-cover rounded-full  w-20 h-20"  src="{{asset('images/usersImages/'.$appointement->client->user->image)}}"></a>
                <a  href="{{route('tech.show', $appointement->technician->id ) }}" class="  object-cover rounded-full border-2 -m-3  border-green-500 transform hover:scale-125 "><img  class=" object-cover rounded-full  w-20 h-20 " src="{{asset('images/usersImages/'.$appointement->technician->user->image)}}"></a>
              </div>

                <div class="py-2">
                    <h3 class="font-bold text-2xl mb-1 mt-2">{{$appointement->service->name}}</h3>
                    <div class="inline-flex text-gray-700 items-center">
                        <svg class="h-5 w-5 text-gray-400 mr-1" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class=""
                                d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                        </svg>
                        {{$appointement->technician->user->city->name}}
                    </div>
                </div>

                {{--   date of appointement --}}
                <div class="flex justify-center">
                  <div class="flex flex-col items-center">
                    <div class="text-gray-600 text-xs font-semibold tracking-wide uppercase"><span class="text-black ">Start day - </span>{{$appointement->start_time }}</div>
                    <div class="text-gray-600 text-xs font-semibold tracking-wide uppercase"><span class="text-black ">End day - </span>{{$appointement->end_time ?? 'not yet'}}</div>
                  </div>
                </div>

            </div>
            <div class="flex gap-2 px-2">
                 <button class="flex-1 rounded-full bg-green-600 text-white antialiased font-bold hover:bg-green-800 px-4 py-2"><a href="{{route('appointments.edit', $appointement->id ) }}" >setting</a></button>
            </div>
        </div>
        <div class="px-4 py-4">
            <div class="flex gap-2 items-center text-gray-800r mb-4">
                <div class="flex-1">
                  <strong class="text-black"><i class="fa fa-calendar mx-2 "></i>Client address : </strong> {{$appointement->address}}
                </div>
                
            </div>

      
            
            <div class="flex ">
              <div class="flex-1 m-5">
              @if ($appointement->status == 'confirmed')
              <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                     <span class="relative">{{ $appointement->status }}</span>
              </span>
              @elseif($appointement->status == 'requested')
              <span class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">

                <span aria-hidden class="absolute inset-0 bg-blue-200 opacity-50 rounded-full"></span>
                                <span class="relative">{{ $appointement->status }}</span>
               </span>
              @elseif($appointement->status == 'cancelled')
              <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">

                <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                <span class="relative">{{ $appointement->status }}</span>
               </span>
              @elseif($appointement->status == 'completed')

              <span class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">

                <span aria-hidden class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                <span class="relative">{{ $appointement->status }}</span>
               </span>
              @endif
              </span>

              </div>

          {{-- confermed by --}}
          
              @if ($appointement->status == 'confirmed'|| $appointement->status == 'completed')
              <a href="{{route('admins.show', $appointement->admin->id ) }}" class=" object-cover rounded-full border-2 m-3  border-green-500 transform hover:scale-110 "> <img  class=" object-cover rounded-full w-10 h-10"
                  src="{{asset('images/usersImages/'.$appointement->admin->user->image)}}"></a>
              @endif

            </div>

            <div class="flex justify-end mr-2">
                 <span class="text-gray-600 text-xs font-semibold tracking-wide uppercase"><span class="text-black ">Created at - </span>{{$appointement->created_at->diffForHumans()}}</span>
          </div>
          <div class="flex justify-end mr-2">
            @foreach($appointement->payments as $payment)
            <span class="text-gray-600 text-xs font-semibold tracking-wide uppercase"><span class="text-black ">Paid at - </span>{{$payment->paid_at}}</span>
            @endforeach
          </div>
        </div>
      </section>
  </div>
<!-- Card end -->
@endforeach