<footer class=" bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center">
        <svg width='50' viewBox='0 0 177 100' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M88 32.5C88 42.165 80.165 50 70.5 50H53V32.5C53 22.835 60.835 15 70.5 15C80.165 15 88 22.835 88 32.5Z' fill='#17CF97'/><path d='M88 67.5C88 57.835 95.835 50 105.5 50H123V67.5C123 77.165 115.165 85 105.5 85C95.835 85 88 77.165 88 67.5Z' fill='#17CF97'/><path d='M53 67.5C53 77.165 60.835 85 70.5 85H88V67.5C88 57.835 80.165 50 70.5 50C60.835 50 53 57.835 53 67.5Z' fill='#17CF97'/><path d='M123 32.5C123 22.835 115.165 15 105.5 15H88V32.5C88 42.165 95.835 50 105.5 50C115.165 50 123 42.165 123 32.5Z' fill='#17CF97'/></svg>
          <div class="font-extrabold tracking-widest text-xl"><a href="#" class="transition duration-500 text-green-500">SOLARHEAVEN</a></div>
            </div>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">

                @if(!auth()->check())

                <li>
                    <a href="{{route('login')}}" class="mr-4 hover:underline md:mr-6 ">Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="mr-4 hover:underline md:mr-6">register</a>
                </li>

                @endif
                <li>
                    <a href="{{route('services.index')}}" class="mr-4 hover:underline md:mr-6 ">Services</a>
                </li>
                <li>
                    <a href="{{route('tech.index')}}" class="mr-4 hover:underline md:mr-6 ">Technicians</a>
                </li>
                <li>
                    <a href="{{route('reviews.index')}}" class="hover:underline">Reviews</a>
                </li>
                
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="{{route('welcome')}}" class="transition duration-500 text-green-500">SOLARHEAVEN</a>. By Mohamed ABRACHE.</span>
    </div>

   
  </footer>