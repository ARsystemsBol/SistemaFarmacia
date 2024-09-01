@extends('layouts.app')

@section('header')
    @include('layouts.nav')
@endsection

@section('content')
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->      
        @include('layouts.aside')
       
        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-semibold mb-4">Plantilla</h1>     
        </main>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
