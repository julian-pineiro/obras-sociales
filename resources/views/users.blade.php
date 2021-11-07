<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Gestion de Clientes
        </h2>
    </x-slot>

    <div class="row">
       <div class="col">
           <div class="card">
                <card-title>Esperando Alta</card-title>
                <table id="altas" class="table">
                    <thead>
                    <td>
                        Cliente
                    </td>
                    <td>
                        Acciones
                    </td>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Fabrizio Almaraz</td>
                        <td><a onClick="onDelete(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDelete(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Angel Di Maria</td>
                        <td><a onClick="onDelete(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDelete(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Zucoli Ezequiel</td>
                        <td><a onClick="onDelete(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDelete(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Kylian Mbappe</td>
                        <td><a onClick="onDelete(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDelete(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Carlos</td>
                        <td><a onClick="onDelete(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteCambios(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    </tbody>
                </table>
            </div class="card">
       </div>
       <div class="col">
           <div class="card">
           <card-title>Esperando Baja</card-title>
           <table id="bajas" class="table">
                    <thead>
                    <td>
                        Cliente
                    </td>
                    <td>
                        Acciones
                    </td>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Geoffroy Nicolás</td>
                        <td><a onClick="onDeleteBajas(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteBajas(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Macenco Mike</td>
                        <td><a onClick="onDeleteBajas(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteBajas(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Pacione Luciano</td>
                        <td><a onClick="onDeleteBajas(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteBajas(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Carlos</td>
                        <td><a onClick="onDeleteBajas(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteBajas(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    
                    </tbody>
                </table>
            </div class="card">
       </div>
       <div class="col">
           <div class="card">
           <card-title>Cambio de Plan</card-title>
           <table id="cambios" class="table">
                    <thead>
                    <td>
                        Cliente
                    </td>
                    <td>
                        Acciones
                    </td>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Rosales Santiago</td>
                        <td><a onClick="onDeleteCambios(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteCambios(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Tierno, Javier</td>
                        <td><a onClick="onDeleteCambios(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteCambios(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Messi, Lionel</td>
                        <td><a onClick="onDeleteCambios(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteCambios(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    <tr>
                        <td>Carlos</td>
                        <td><a onClick="onDeleteCambios(this)"><button class="btn btn-success">Aceptar</button></a><a onClick="onDeleteCambios(this)"><button class="btn btn-danger">Rechazar</button></a></td>
                    </tr>
                    </tbody>
                </table>
            </div class="card">
       </div>
   </div>
    <script>

    function onDelete(td) {
            row = td.parentElement.parentElement;
            document.getElementById("altas").deleteRow(row.rowIndex);
    }
    function onDeleteBajas(td) {
            row = td.parentElement.parentElement;
            document.getElementById("bajas").deleteRow(row.rowIndex);
    }
    function onDeleteCambios(td) {
            row = td.parentElement.parentElement;
            document.getElementById("cambios").deleteRow(row.rowIndex);
    }
    </script>

    
</x-app-layout>
