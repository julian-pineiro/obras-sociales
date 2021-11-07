<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Prestaciones
        </h2>
    </x-slot>

    <!-- Menu Ppal -->
    <div class="container">
    <form onsubmit="event.preventDefault();onFormSubmit()">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <input type="text" class="form-control" id="description" placeholder="Descripcion">
         </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Cobertura</label>
            <select class="form-control" id="cobertura">
                <option>Total</option>
                <option>20%</option>
                <option>40%</option>
                <option>60%</option>
                <option>80%</option>
            </select>
         </div>
         <br>
         <button type="submit" class="btn btn-success">Crear Prestacion</button>
    </form>
    </div>

    <div class="container">
        <table class="table table-light" id="clientList">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Cobertura</th>
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
    formData["cobertura"] = document.getElementById("cobertura").value;

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
    cell3.innerHTML = data.cobertura;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = `<a onClick="onEdit(this)"><button class="btn btn-warning btn-sm"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
</svg></button></a>
                       <a onClick="onDelete(this)"><button class="btn btn-danger btn-sm"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
</svg></button></a>`;
}

function resetForm() {
    document.getElementById("name").value = "";
    document.getElementById("description").value = "";
    document.getElementById("cobertura").value = "";

    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("name").value = selectedRow.cells[0].innerHTML;
    document.getElementById("description").value = selectedRow.cells[1].innerHTML;
    document.getElementById("cobertura").value = selectedRow.cells[2].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.name;
    selectedRow.cells[1].innerHTML = formData.description;
    selectedRow.cells[2].innerHTML = formData.cobertura;
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
