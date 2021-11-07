<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Gestion de Reintegros
        </h2>
    </x-slot>

    <div class="row">
       <div class="col">
           <div class="card container">
                <card-title>Solicitudes</card-title>
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
