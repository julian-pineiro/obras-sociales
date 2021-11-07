<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Administración de Familia
        </h2>
    </x-slot>

    <!-- Menu Ppal -->
    <div class="container">
    <form onsubmit="event.preventDefault();onFormSubmit()">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre Completo</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">DNI</label>
            <input type="text" class="form-control" id="description" placeholder="Descripcion">
         </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="dob" placeholder="Fecha de Nacimiento">
         </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Sexo</label>
            <select class="form-control" id="sexo">
                <option>M</option>
                <option>F</option>
            </select>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Localidad</label>
            <input type="text" class="form-control" id="localidad" placeholder="Localidad">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Domicilio</label>
            <input type="text" class="form-control" id="domicilio" placeholder="Domicilio">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="text" class="form-control" id="telefono" placeholder="Telefono">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Mail</label>
            <input type="text" class="form-control" id="mail" placeholder="Mail">
         </div>

         <br>
         <button type="submit" class="btn btn-success">Dar de alta</button>
    </form>
    </div>

    <div class="container">
        <table class="table table-light" id="clientList">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>
                    <th>Localidad</th>
                    <th>Domicilio</th>
                    <th>Telefono</th>
                    <th>Mail</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script>
function onFormSubmit() {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
}
let selectedRow=null;

function readFormData() {
    console.log("hola");
    var formData = {};
    formData["name"] = document.getElementById("name").value;
    formData["description"] = document.getElementById("description").value;
    formData["dob"] = document.getElementById("dob").value;
    formData["sexo"] = document.getElementById("sexo").value;
    formData["localidad"] = document.getElementById("localidad").value;
    formData["domicilio"] = document.getElementById("domicilio").value;
    formData["telefono"] = document.getElementById("telefono").value;
    formData["mail"] = document.getElementById("mail").value;


    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("clientList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.name;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.description;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.dob;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.sexo;
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.localidad;
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = data.domicilio;
    cell7 = newRow.insertCell(6);
    cell7.innerHTML = data.telefono;
    cell8 = newRow.insertCell(7);
    cell8.innerHTML = data.mail;
    cell9 = newRow.insertCell(8);
    cell9.innerHTML = `<a onClick="onEdit(this)"><button class="btn btn-warning btn-sm"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
</svg></button></a>
                       <a onClick="onDelete(this)"><button class="btn btn-danger btn-sm"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
</svg></button></a>`;
}

function resetForm() {
    document.getElementById("name").value = "";
    document.getElementById("description").value = "";
    document.getElementById("dob").value = "";
    document.getElementById("sexo").value = "";
    document.getElementById("localidad").value = "";
    document.getElementById("domicilio").value = "";
    document.getElementById("telefono").value = "";
    document.getElementById("mail").value = "";


    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("name").value = selectedRow.cells[0].innerHTML;
    document.getElementById("description").value = selectedRow.cells[1].innerHTML;
    document.getElementById("dob").value = selectedRow.cells[2].innerHTML;
    document.getElementById("sexo").value = selectedRow.cells[3].innerHTML; 
    document.getElementById("localidad").value = selectedRow.cells[4].innerHTML;
    document.getElementById("domicilio").value = selectedRow.cells[5].innerHTML;
    document.getElementById("telefono").value = selectedRow.cells[6].innerHTML;
    document.getElementById("mail").value = selectedRow.cells[7].innerHTML;

}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.name;
    selectedRow.cells[1].innerHTML = formData.description;
    selectedRow.cells[2].innerHTML = formData.dob;
    selectedRow.cells[3].innerHTML = formData.sexo;
    selectedRow.cells[4].innerHTML = formData.localidad;
    selectedRow.cells[5].innerHTML = formData.domicilio;
    selectedRow.cells[6].innerHTML = formData.telefono;
    selectedRow.cells[7].innerHTML = formData.mail;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("clientList").deleteRow(row.rowIndex);
        resetForm();
    }
}
    </script>
    
</x-app-layout>
