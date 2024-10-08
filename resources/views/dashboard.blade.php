@extends('layouts.app')

@section('header')
    @include('layouts.nav')
@endsection

@section('content')
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->      
        @include('layouts.aside')
       
        <!-- Main Content -->
        <main class="flex pt-24 pl-4">
            <h1 class="text-2xl font-semibold mb-4">Administracion General - Dashboard</h1>     
        </main>
        
    </div>
   
@endsection


@section('footer')
    @include('layouts.footer')
@endsection
