@extends('layouts.app')

@section('header')
    @include('layouts.nav') <!-- Esto es tu NavBar -->
@endsection

@section('content')
    <div class="flex h-screen">
        <!-- Sidebar -->      
        @include('layouts.aside') <!-- Sidebar con w-64 -->

        <!-- Main Content -->
        <div class="flex flex-col flex-grow">
            <!-- Parte superior -->
            <main class="flex-grow pt-24 pl-8 pr-12">         
                <h1 class="text-2xl font-bold mb-4">Proveedores</h1>                
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100 ">
                        <thead class="text-xs text-white uppercase bg-gray-600 dark:text-white">
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
                <div class="pt-4">
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
