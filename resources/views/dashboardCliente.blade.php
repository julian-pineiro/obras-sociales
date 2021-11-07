<x-app-layout>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <h1>¡Bienvenido Carlos!</h1>

   <div class="row">
       <div class="col">
             <div class="row">
                    <div class="card">
                        <card-title>Datos Personales</card-title>
                        <label>Nombre</label>
                        <input type="text" placeholder="{{Auth::user()->name}} " disabled> </input>
                        <label>DNI</label>
                        <input type="text" placeholder="34443343 " disabled> </input>
                        <label>Fecha de Nacimiento</label>
                        <input type="text" placeholder="29/3/1946 " disabled> </input>
                        <label>Nacionalidad</label>
                        <input type="text" placeholder="Argentino " disabled> </input>
                        <label>Sexo</label>
                        <input type="text" placeholder="Masc. "> </input>

                    </div>
                </div>
       </div>
       <div class="col">
            <div class="row">
            <div class="card">
            <label>Localidad</label>
                <input type="text" placeholder="Bahia Blanca"> </input>
                <label>Domicilio</label>
                <input type="text" placeholder="Rosales 445"> </input>
                <label>Telefono</label>
                <input type="text" placeholder="291-543-6554"> </input>
                <label>Mail</label>
                <input type="text" placeholder="Carlito@gmail.com"> </input>
                <button class="btn btn-warning">Modificar </button>            
            </div>
            </div>
            
       </div>
       <div class="col">
            <div class="row">
                 <button class="btn btn-warning" onclick="alert('Se ha enviado el cupón de pago a su correo electrónico')">Generar Cupón de Pago </button>  
            </div>
            <br>
            <div class="row">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
  Solicitar reintegro
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Generar Reintegro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
                            <div class="col">
                                <div class="row">
                                    <h1>Reintegros</h1>
                                </div>
                                <div class="card">
                                    <label>Banco</label>
                                    <input type="text">
                                    <label>Tipo de cuenta</label>
                                    <input type="text">
                                    <label>Numero de cuenta</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                        <label>Motivo</label>
                                        <input type="text">
                                        <label>Especialidad</label>
                                        <input type="text">
                                        <label>Hospital</label>
                                        <input type="text">
                                        <label>Medico</label>
                                        <input type="text">
                                        <label>Adjuntar Factura</label>
                                        <input type="file" name="File" id="fact">
                                        <br>
                                        <div class="row">
                                            <button class="btn btn-warning" onclick="alert('Se ha solicitado el reintegro exitosamente')">Generar Reintegro </button>  
                                        </div>
                                    </div>
                            </div>
                        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar
        </button>
      </div>
    </div>
  </div>
</div>
            </div>
               
            <br><br>
            <div class="row">
                <!-- <div class="card"> -->
                    <card-title>Solicitar cambio de plan</card-title>
                    <select >
                        <option>Plan 210</option>
                        <option>Plan 310</option>
                        <option>Plan 410</option>
                    </select>
                    <button class="btn btn-info">Generar Cupón de Pago </button>  
                <!-- </div> -->
            </div>
        <br><br>
            <div class="row">
            <!-- <div class="card"> -->
                    
                    <button class="btn btn-danger">Darme de baja </button>  
                <!-- </div> -->

            </div>
       </div>
   </div>


    
</x-app-layout>

 