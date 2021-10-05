<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Usuarios
        </h2>
    </x-slot>

    <div class="container">
    <form >
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
         </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Cliente</option>
                <option>Empleado</option>
                <option>Administrador</option>
            </select>
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Contraseña</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Reingresar contraseña</label>
            <input type="password" class="form-control" id="pwd2" placeholder="Enter password">
         </div>
         <br>
         <button type="submit" class="btn btn-success">Crear usuario</button>
    </form>
    <br>
    </div>

    <div class="container">
        <table class="table table-light">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Fecha de nacimiento</th>
                    <th>Nacionalidad</th>
                    <th>Sexo</th>
                    <th>Localidad</th>
                    <th>Domicilio</th>
                    <th>Descripcion</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Nombre 1</td>
                    <td>Caracteristica 1</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</x-app-layout>
