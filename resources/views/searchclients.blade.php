<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->name != "Carlos")
   <h1>¡Bienvenido Empleado!</h1>
   <br>
   <div class="row container">
   <select class="form-control" id="cobertura">
                <option>Plan 210</option>
                <option>Plan 310</option>
                <option>Plan 410</option>
            </select>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
        Buscar Clientes
    </button>
       
   </div>
   @endif
    
</x-app-layout>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Asociados al plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <table>
                <ul>
                    <li>Fulano Detal</li>
                    <li>Mengano Detal</li>
                    <li>Cosme Fulanito</li>
                    <li>Javier Rodriguez Tierno</li>
                    <li>Julian Pineiro</li>
                    <li>Tomas Nueve</li>
                    <li>Karina Simple</li>

                </ul>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar
        </button>
      </div>
    </div>
  </div>
</div>