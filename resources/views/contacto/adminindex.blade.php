
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<h2 class="text-center mb-5"> Contactos </h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col">Nombre Cliente</th>
                <th scole="col">Telefono</th>
                <th scole="col">E-mail</th>
                <th scole="col">Mensaje</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $contacto) 
            <tr>
                <td> {{$contacto->nombreyapellido}}</td>
                <td> {{$contacto->numtelefono}}</td>
                <td> {{$contacto->email}}</td>
                <td> {{$contacto->mensaje}}</td>
                <td>  
                    <button type="button" class="btn btn-outline-danger">Eliminar</button>
                    <button type="button" class="btn btn-outline-primary">Editar</button>
                    <button type="button" class="btn btn-outline-info">Ver</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
