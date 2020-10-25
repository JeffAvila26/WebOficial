<div id="section1">
    <h2 class="text-center mb-3 mt-3">Contacto</h2>
</div>
<div class="row justify-content-center mt-3">
    <div class="col-md-1">
        <form method="POST" action="{{ route('contacto.store') }}" novalidate>
            <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">  -->
            <div class="form-group inputs-form-contacto">
                <label class="distancia" for="nombre">Nombre y Apellido*</label>
                <input type="text" name="nombreyapellido"
                    class="form-control distancia @error('nombreyapellido') is-invalid @enderror" id="nombreyapellido"
                    placeholder="Ingresa tu Nombre y Apellido" value="{{ old('nombreyapellido') }}" />
                @error('nombreyapellido')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group inputs-form-contacto">
                <label class="distancia" for="numtelefono">Número de Teléfono*</label>
                <input type="text" name="numtelefono" class="form-control distancia @error('numtelefono') is-invalid @enderror"
                    id="numtelefono" placeholder="Ingresa tu Número de Teléfono" value="{{ old('numtelefono') }}" />
                @error('numtelefono')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group inputs-form-contacto">
                <label class="distancia" for="email">E-mail*</label>
                <input type="text" name="email" class="form-control distancia @error('email') is-invalid @enderror" id="email"
                    placeholder="Ingresa tu E-mail" value="{{ old('email') }}" />
                @error('email')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group inputs-form-contacto">
                <label class="distancia" for="mensaje">Mensaje*</label>
                <textarea type="text" name="mensaje" class="form-control distancia @error('mensaje') is-invalid @enderror"
                    id="mensaje" placeholder="Cuentanos tu idea" value="{{ old('mensaje') }}"></textarea>
                @error('mensaje')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mt-3 submitbtn">
                <input type="submit" class="btn btn-primary input-submit-ctn rounded-pill" value="Enviar Solicitud">
            </div>
        </form>

    
    </div>
</div>