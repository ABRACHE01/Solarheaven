
<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent">

    <div class="p-4 flex items-center">
        <svg width='50' viewBox='0 0 177 100' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M88 32.5C88 42.165 80.165 50 70.5 50H53V32.5C53 22.835 60.835 15 70.5 15C80.165 15 88 22.835 88 32.5Z' fill='#17CF97'/><path d='M88 67.5C88 57.835 95.835 50 105.5 50H123V67.5C123 77.165 115.165 85 105.5 85C95.835 85 88 77.165 88 67.5Z' fill='#17CF97'/><path d='M53 67.5C53 77.165 60.835 85 70.5 85H88V67.5C88 57.835 80.165 50 70.5 50C60.835 50 53 57.835 53 67.5Z' fill='#17CF97'/><path d='M123 32.5C123 22.835 115.165 15 105.5 15H88V32.5C88 42.165 95.835 50 105.5 50C115.165 50 123 42.165 123 32.5Z' fill='#17CF97'/></svg>
        <div class="font-extrabold tracking-widest text-xl"><a href="{{route('welcome')}}" class="transition duration-500 text-green-500">SOLARHEAVEN</a></div>
    </div>

    <!-- Nav Items Working on Tablet & Bigger Sceen -->
    <div class="p-4 hidden md:flex flex-row justify-between font-bold">
        <a id="hide-after-click" href="{{route('services.index')}}" class="mx-4 text-lg text-green-500 border-b-2 border-transparent hover:border-b-2 hover:border-green-300 transition duration-500">SERVICES</a>
        <a id="hide-after-click" href="{{route('tech.index')}}" class="mx-4 text-lg text-green-500 border-b-2 border-transparent hover:border-b-2 hover:border-green-300 transition duration-500">TEHNISIANS</a>
        <a id="hide-after-click" href="{{route('reviews.index')}}" class="mx-4 text-lg text-green-500 border-b-2 border-transparent hover:border-b-2 hover:border-green-300 transition duration-500">REVIEWS</a>

        
        @if (Route::has('login'))
        @auth
        <a id="hide-after-click" href="{{ url('/home') }}" class="mx-4 text-lg text-green-500 border-b-2 border-transparent hover:border-b-2 hover:border-green-300 transition duration-500">HOME</a>
        @else
        <a id="hide-after-click" href="{{ route('login') }}" class="mx-4 text-lg border-b-2 text-green-500 border-transparent hover:border-b-2 hover:border-green-300 transition duration-500">LOGIN</a>
        @if (Route::has('register'))
        <a id="hide-after-click" href="{{ route('register') }}" class="mx-4 text-lg text-green-500 border-b-2 border-transparent hover:border-b-2 hover:border-green-300 transition duration-500">REGISTER</a>
        @endif
        @endauth
    @endif

    </div>

</nav>

