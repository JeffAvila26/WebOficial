<!-- Bootstrap 4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--BOTON VOLVER -->
<!--<div class="container">
    <div class="row">
        <div class="py-4 mt-5 col-12">
            <a href="/" class="btn btn-primary mr-2 text-white"> Volver</a>
        </div>
    </div>
</div>-->
<hr>
<div id="section1">
    <h2 class="text-center mb-5 mt-3">Contacto</h2>
</div>
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <form method="POST" action="{{ route('contacto.store') }}" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nombre">Nombre y Apellido</label>
                <input type="text" name="nombreyapellido"
                    class="form-control @error('nombreyapellido') is-invalid @enderror" id="nombreyapellido"
                    placeholder="Ingresa tu Nombre y Apellido" value="{{ old('nombreyapellido') }}" />
                @error('nombreyapellido')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="numtelefono">Número de Teléfono</label>
                <input type="text" name="numtelefono" class="form-control @error('numtelefono') is-invalid @enderror"
                    id="numtelefono" placeholder="Ingresa tu Número de Teléfono" value="{{ old('numtelefono') }}" />
                @error('numtelefono')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="Ingresa tu E-mail" value="{{ old('email') }}" />
                @error('email')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea type="text" name="mensaje" class="form-control @error('mensaje') is-invalid @enderror"
                    id="mensaje" placeholder="Cuentanos tu idea" value="{{ old('mensaje') }}"></textarea>
                @error('mensaje')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mt-3">
                <input type="submit" class="btn btn-primary rounded" value="Enviar Solcitud">
            </div>
        </form>
    </div>
</div>
