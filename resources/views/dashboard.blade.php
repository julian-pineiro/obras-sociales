<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->name != "Carlos")
   <h1>¡Bienvenido Empleado!</h1>
   <br>
   <div class="row">
       <div class="col">
           <a href="{{route('users')}}"><button class="btn btn-danger" :href="route('users')" height="100px">
                Administrar Clientes
            </button></a>
       </div>
       <div class="col">
           <a href="{{route('refunds')}}"><button class="btn btn-danger" :href="route('refunds')" height="100px">
                Reintegros
            </button></a>
       </div>
       
       <div class="col">
       <a href="{{route('searchclients')}}"><button class="btn btn-danger" :href="route('searchclients')" height="100px">
                Buscar Clientes por Plan
            </button></a>
       </div>
       <div class="col">
           <button class="btn btn-danger" :href="route('clientes')" height="100px" disabled>
               Prestaciones
            </button>
       </div>
   </div>
   @endif
    
</x-app-layout>

