<div  class="bg-white max-w-7xl mx-auto pt-4 pb-4 lg:pb-10 px-4" x-data="{ isMobileNavOpen: false }">
    <div class="relative pt-6">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                    <img  class="pl-4 h-20 w-auto sm:h-20" src="{{asset('images/skyhire-logo.png')}}" alt="SkyHire GmbH Logo">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                    <button  @click="isMobileNavOpen = !isMobileNavOpen" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                <a href="/" class="font-medium text-gray-500 hover:text-gray-900">Startseite</a>
                <a href="/#aboutus" class="font-medium text-gray-500 hover:text-gray-900">Über uns</a>
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Kandidaten</a>
                <a href="#contact" class="font-medium text-gray-500 hover:text-gray-900">Kontakt</a>
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Login</a>
            </div>
        </nav>
    </div>

    <div ref={navigationRef} x-show="isMobileNavOpen" class="absolute z-10 top-0 inset-x-0 p-2 transition transform duration-150 ease-out origin-top-right md:hidden shadow-lg">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div class="-mr-2">
                    <button @click="isMobileNavOpen = !isMobileNavOpen" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Close main menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>


            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Startseite</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Über uns</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Kandidaten</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Kontakt</a>
                <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Login </a>
            </div>
        </div>
    </div>
</div>
