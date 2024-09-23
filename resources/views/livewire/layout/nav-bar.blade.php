<!-- vista del componente de livewire que muestra el meno de navegacion -->
<div class="container">
  {{-- <nav class="bg-white shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a class="text-xl font-bold text-gray-800" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div class="hidden lg:flex lg:items-center lg:space-x-4">
                <a href="{{ url('/') }}" class="text-gray-800 hover:text-indigo-600">Inicio</a>
                <a href="{{ url('/hoy') }}" class="text-gray-800 hover:text-indigo-600">Hoy</a>
                <a href="{{ url('/tareas-pendientes') }}" class="text-gray-800 hover:text-indigo-600">Pendientes</a>
                <a href="{{ url('/tareas-completadas') }}" class="text-gray-800 hover:text-indigo-600">Completadas</a>
                <a href="{{ url('/crear-tarea') }}" class="text-gray-800 hover:text-indigo-600">Nueva Tarea</a>
                <a href="{{ url('/perfil') }}" class="text-gray-800 hover:text-indigo-600">Perfil</a>
            </div>
            <li class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center text-gray-800 hover:text-indigo-600">
                    {{ Auth::user()->name }}
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg z-10">
                    <a class="block px-4 py-2 text-gray-800 hover:bg-indigo-600 hover:text-white" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </li>
        </div>
    </div>
</nav> --}}
<nav class="fixed w-full z-20 top-0 start-0 border-b border-gray-800" style="background-color:#313840;">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <!-- url de home -->
      <a href="{{ url('/home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-white"> {{ config('app.name', 'Laravel') }}</span>
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <button type="button" class="text-white bg-[#6aa8ca] hover:bg-[#6aa8ca] focus:ring-4 focus:outline-none focus:ring-[#6aa8ca] font-medium rounded-lg text-sm px-4 py-2 text-center">Crear Tarea</button>
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#6aa8ca] rounded-lg md:hidden hover:bg-[#313840] focus:outline-none focus:ring-2 focus:ring-gray-200">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0" style="background-color:#313840;">
              <li>
                  <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent md:text-[#6aa8ca] md:p-0">Home</a>
              </li>
              <li>
                  <a href="#" class="block py-2 px-3 text-white rounded hover:bg-[#313840] md:hover:text-[#6aa8ca] md:p-0">About</a>
              </li>
              <li>
                  <a href="#" class="block py-2 px-3 text-white rounded hover:bg-[#313840] md:hover:text-[#6aa8ca] md:p-0">Services</a>
              </li>
              <li>
                  <a href="#" class="block py-2 px-3 text-white rounded hover:bg-[#313840] md:hover:text-[#6aa8ca] md:p-0">Contact</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
</div>