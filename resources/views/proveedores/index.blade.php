@extends('layouts.app')

@section('header')
    @include('layouts.nav') <!-- Esto es tu NavBar -->
@endsection

@section('content')
    <div class="flex h-screen">
        <!-- Sidebar -->      
        @include('layouts.aside') <!-- Sidebar con w-64 -->

        <!-- Main Content -->
        <div class="flex flex-col flex-grow  pt-24 pl-8 pr-12">
            <!-- Parte superior -->          
            <main class="flex-grow">  
                <div class="border border-gray-300 rounded-sm shadow-md">
                    <div class="bg-sky-900 px-8 py-3 border-b border-gray-300 flex justify-between items-center">
                        <h1 class="text-xl text-white ">LISTA DE PROVEEDORES</h1> 
                        <a href="proveedor/create" class="bg-emerald-700 text-white px-4 py-2 rounded hover:bg-emerald-600">Nuevo</a>
                    </div>
                    
                <div class="relative overflow-x-auto p-4">
                    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100 rounded-lg ">
                        <thead class="text-xs text-white uppercase bg-gray-600 dark:text-white border border-gray-600">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">LABORATORIO</th>
                                <th scope="col" class="px-6 py-3">CONTACTO</th>
                                <th scope="col" class="px-6 py-3">NIT</th>
                                <th scope="col" class="px-6 py-3">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="text-lg text-gray-700 ">
                            @foreach ($proveedores as $prov)
                                <tr class="bg-gray-100 border border-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap dark:text-blue-100">
                                        {{ $prov->id }}
                                    </th>
                                    <td class="px-6 py-4">{{ $prov->lab }}</td>
                                    <td class="px-6 py-4">{{ $prov->contacto }} <span class="text-red-700 text-bold text-xl"> - </span> {{ $prov->telefono}}</td>
                                    <td class="px-6 py-4">{{ $prov->nit }}</td>
                                    <td class="px-6 py-4">
                                        <a class="mr-2" href="proveedor/{{ $prov->id }}">
                                            <i class="fa fa-eye text-blue-700" aria-hidden="true"></i>
                                        </a>
                                        <a class="mr-2" href="proveedor/{{ $prov->id }}">
                                            <i class="fa fa-edit text-green-700" aria-hidden="true"></i>
                                        </a>
                                        <a class="mr-2" href="proveedor/{{ $prov->id }}">
                                            <i class="fa fa-trash text-red-700" aria-hidden="true"></i>
                                        </a>
                                    </td>  
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <div class="p-4">
                    {{ $proveedores->links() }}
                </div>  
                
              
              


            </main>
            
            <!-- Parte inferior -->
            <footer class="pr-4">
                <!-- Aquí puedes incluir tu footer pegado abajo -->
                @include('layouts.footer')
             
            </footer>
        </div>
    </div>
@endsection
