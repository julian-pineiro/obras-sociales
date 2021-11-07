<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Planes
        </h2>
    </x-slot>

    <!-- Menu Ppal -->
    <div class="container">
        <div class="card">
    <form onsubmit="event.preventDefault();onFormSubmit()">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Precio</label>
            <input type="text" class="form-control" id="price" placeholder="Email">
         </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Tipo</label>
            <input type="text" class="form-control" id="type" placeholder="Tipo">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Edad Minima</label>
            <input type="text" class="form-control" id="edadmi" placeholder="Edad Minima">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Edad Maxima</label>
            <input type="text" class="form-control" id="edadma" placeholder="Edad maxima">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Prestaciones</label>
            <select class="form-control" id="features" multiple>
                <option>Odontologia 20%</option>
                <option>Dermatologia 30%</option>
                <option>Pediatria 100%</option>
                <option>Clinica gral. 50%</option>
            </select>
         </div>
         <br>
         <button type="submit" class="btn btn-success">Crear plan</button>
    </form>
    </div>
    </div>
    <br>
    <div class="container">
        <div class="card">
        <table class="table table-light" id="clientList">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Edad Minima</th>
                    <th>Edad Maxima</th>
                    <th>Prestaciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
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
    formData["price"] = document.getElementById("price").value;
    formData["type"] = document.getElementById("type").value;
    formData["edadmi"] = document.getElementById("edadmi").value;
    formData["edadma"] = document.getElementById("edadma").value;
    formData["features"] = document.getElementById("features").value;

    return formData;
}

function insertNewRecord(data) {
    console.log("hola");
    var table = document.getElementById("clientList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.name;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.price;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.type;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.edadmi;
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.edadma;
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = data.features;
    cell7 = newRow.insertCell(6);
    cell7.innerHTML = `<a onClick="onEdit(this)"><button class="btn btn-warning btn-sm"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
</svg></button></a>
                       <a onClick="onDelete(this)"><button class="btn btn-danger btn-sm"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
</svg></button></a>`;
}

function resetForm() {
    document.getElementById("name").value = "";
    document.getElementById("price").value = "";
    document.getElementById("type").value = "";
    document.getElementById("edadmi").value = "";
    document.getElementById("edadma").value = "";
    document.getElementById("features").value = "";

    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("name").value = selectedRow.cells[0].innerHTML;
    document.getElementById("price").value = selectedRow.cells[1].innerHTML;
    document.getElementById("type").value = selectedRow.cells[2].innerHTML;
    document.getElementById("edadmi").value = selectedRow.cells[3].innerHTML;
    document.getElementById("edadma").value = selectedRow.cells[4].innerHTML;
    document.getElementById("features").value = selectedRow.cells[5].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.name;
    selectedRow.cells[1].innerHTML = formData.price;
    selectedRow.cells[2].innerHTML = formData.type;
    selectedRow.cells[3].innerHTML = formData.edadmi;
    selectedRow.cells[4].innerHTML = formData.edadma;
    selectedRow.cells[5].innerHTML = formData.features;
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
