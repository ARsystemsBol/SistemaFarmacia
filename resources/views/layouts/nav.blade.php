<div class="fixed top-0 left-0 w-full z-50 flex bg-teal-800 p-1">
    <!-- Div izquierdo con ancho fijo -->
    <div class="w-[220px] flex items-center justify-center">
        <a href="{{ url('/dashboard')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/farmacia2_favicon.png')}}" class="h-16" alt="Sis farmacia logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Sis Farma</span>
        </a>
       
    </div>
    <div class="hidden sm:block border-r-2 border-gray-200 "></div>
    <!-- Div derecho que ocupa el resto del espacio -->
    <div class="flex-1  flex">
        <!-- Contenedor para los elementos divididos -->
        <div class="flex justify-between w-full">
            <!-- Sección izquierda del div derecho -->
            <div class="p-4 flex">
                <button id="sidebarToggleTop" class="bg-transparent text-orange-500 rounded-full p-2 mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="self-center text-lg font-semibold whitespace-nowrap text-white">
                    <h6 >FARMACIA EJEMPLO</h6>						
                </div>
            </div>
            <!-- Sección derecha del div derecho -->
            <div class="p-4 flex">
                <!-- Separador antes de la lista (si es necesario) -->
                <div class="h-[35px] hidden sm:block border-r border-gray-400 mx-4"></div>
                
                <ul class="flex items-center space-x-4">
                    <!-- Nav Item - Cajas -->
                    <li class="h-[35px] relative flex items-center border-r-2 border-gray-400 pr-4 ">
                        <a href="#" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false" class="flex items-center text-white hover:text-gray-300">
                            <i class="fas fa-cash-register mr-2 text-yellow-400"></i>
                            <span class="hidden lg:inline text-sm">Caja Central Nº1</span>
                        </a>
                    </li>                   
                    <!-- Nav Item - Sucursal -->
                    <li class="h-[35px] relative flex items-center border-r-2 border-gray-400 pr-4 ">
                        <a href="#" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false" class="flex items-center text-white hover:text-gray-300">
                            <i class="fas fa-building mr-2 text-orange-500"></i>
                            <span class="hidden lg:inline text-sm">ALMACEN</span>
                        </a>
                    </li>
                   <!-- Nav Item - Usuario -->
                   
                    <a href="#" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false" class="flex items-center text-white hover:text-gray-300">
                        <i class="fas fa-user mr-2 text-blue-300"></i>
                        <span class="hidden lg:inline text-sm">Demo - Administrador</span>
                        <div class="h-[35px] relative flex items-center border-r-2 border-gray-400 pl-4 "></div>                        
                        <span class="hidden lg:inline text-sm ml-4">ADMINISTRADOR</span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-1 z-20 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-blue-500"></i>
                            EMAIL
                        </a>
                        <div class="border-t border-gray-200"></div>
                        <a href="salir.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-red-500"></i>
                            Salir
                        </a>
                    </div>
                </li>

    
                </ul>
            </div>
            
        </div>
    </div>
</div>


       