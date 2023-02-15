@extends('inicio')

@section('contenido')
    <div class="calender-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="calender-inner">
                        <div class="card">
                            <div class="card-body">
                                <img style=""
                                     src="images/header_formulario4x2mh.png"><br><br>
                                <center>
                                    <div class="card-header">
                                        <h4>Registro de usuarios</h4>
                                        <hr>
                                    </div>
                                </center>
                            </div>
                            <div class="row">

                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <div class="animated fadeIn">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <form method="POST"
                                                      enctype="multipart/form-data"
                                                      action="{{ route('guardarusuario') }}">
                                                    @csrf
                                                    <div class="card">
                                                        <div class="card-body card-block">

                                                            <div class="form-group">
                                                                <label class=" form-control-label">Nombre (s)</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-user"></i></div>
                                                                    <input class="form-control"
                                                                           placeholder="Ej: Rodrigo "
                                                                           name="nombre"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Imagen </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-image"></i></div>
                                                                    <input type="file"
                                                                           class="form-control"
                                                                           name="image"
                                                                           >
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Fecha de
                                                                    Nacimiento</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-calendar"></i></div>
                                                                    <input type="date"
                                                                           class="form-control"
                                                                           name="fecha_n"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Edad</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                           placeholder="Ej: 34"
                                                                           name="edad"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Sexo</label>
                                                                <div class="input-group">
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="radio"
                                                                               name="sexo"
                                                                               value="Masculino"
                                                                               required>
                                                                        <label class="form-check-label"
                                                                               for="inlineRadio1">Masculino</label>

                                                                        <input type="radio"
                                                                               name="sexo"
                                                                               value="Femenino"
                                                                               required>
                                                                        <label class="form-check-label"
                                                                               for="inlineRadio2">Femenino</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Correo
                                                                    electronico</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-user"></i></div>
                                                                    <input type="email"
                                                                           class="form-control"
                                                                           placeholder="Ej: 1234@gmail.com"
                                                                           name="email"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Telefono de casa</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                           placeholder="Ej: 8489023467"
                                                                           name="num_casa"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Telefono celular</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                           placeholder="Ej: 7228911073"
                                                                           name="celular"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Calle</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-road"></i></div>
                                                                    <input class="form-control"
                                                                           placeholder="Ej: Francisco I Madero"
                                                                           name="calle"
                                                                           required>
                                                                </div>
                                                            </div>


                                                             {{-- MAPA --}}
                                                    <div class="form-group" >
                                                        <label class=" form-control-label" >Buscar dirección (Si no encuentra busque lo mas cercano posible)</label>
                                                        <input class="form-control" id="search" name="calle2" required>
                                                        <input type="button" value="Buscar Dirección" onClick="mapa.getCoords()">

                                                        <div id="mapa" style="width: 530px; height: 550px;"> </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class=" form-control-label">Coordenadas</label>
                                                        <div class="input-group" id="coordenadas">

                                                        </div>
                                                    </div>


                                                    {{-- ------------------------- --}}




                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                                <label class=" form-control-label">Barrio.</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-map-signs"></i></div>
                                                                    <select class="form-control"
                                                                            tabindex="1"
                                                                            name="id_barrio"
                                                                            required>
                                                                        <option disabled>Selecciona una opción.</option>
                                                                        @foreach ($barrios as $barrio)
                                                                            <option value={{ $barrio->id_barrio }}>
                                                                                {{ $barrio->nombre_barrio }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" form-control-label">Número de
                                                                    Domicilio</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><i
                                                                           class="fa fa-hashtag"></i></div>
                                                                    <input class="form-control"
                                                                           placeholder="10"
                                                                           name="num_dom"
                                                                           required>
                                                                </div>
                                                            </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Numero de Inmueble</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i
                                                                       class="fa fa-hashtag"></i></div>
                                                                <input class="form-control"
                                                                       placeholder="1"
                                                                       name="num_inmueble"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Status</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i
                                                                       class="fa fa-map-user"></i></div>
                                                                <select class="form-control"
                                                                        tabindex="1"
                                                                        name="status"
                                                                        required>
                                                                    <option disabled>Selecciona una opción.</option>
                                                                    <option value="Activo">Activo</option>
                                                                    <option value="Inactivo">Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Estado civil</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i
                                                                       class="fa fa-user"></i></div>
                                                                <select class="form-control"
                                                                        tabindex="1"
                                                                        name="estado_civil"
                                                                        required>
                                                                    <option disabled>Selecciona una opción.</option>
                                                                    <option value="Casado">Casado</option>
                                                                    <option value="Divorciado">Divorciado</option>
                                                                    <option value="Viudo">Viudo</option>
                                                                    <option value="Soltero">Soltero</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" form-control-label">Tipo de Inmueble</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-map-signs"></i>
                                                            </div>
                                                            <select class="form-control"
                                                                    tabindex="1"
                                                                    name="tipo_inm"
                                                                    required>
                                                                <option disabled>Selecciona una opción.</option>
                                                                <option value="Casa">Casa</option>
                                                                <option value="Negocio">Negocio</option>
                                                                <option value="Empresa">Empresa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">Observación</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-file"></i>
                                                        </div>
                                                        <textarea class="form-control"
          name="observacion"
          required> </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">Curp</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i>
                                                        </div>
                                                        <input class="form-control"
                                                               placeholder="Ej: AGDR665839HMCTNFA8"
                                                               name="curp"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">RFC</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i>
                                                        </div>
                                                        <input class="form-control"
                                                               placeholder="Ej: AJSR66328P7D"
                                                               name="rfc"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">Google</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-google"></i>
                                                        </div>
                                                        <input class="form-control"
                                                               placeholder="Ej: Francisco I Madero"
                                                               name="google"
                                                               required>

                                                    </div>
                                                </div>
                                                <div class="gcse-searchbox-only">
                                                    <script style="color: #000"
                                                            async
                                                            src="https://cse.google.com/cse.js?cx=f3619e074d308c426"></script>
                                                    <div class="gcse-search"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">URL de Facebook</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-facebook"></i>
                                                        </div>
                                                        <input class="form-control"
                                                               placeholder="Ej: Francisco I Madero"
                                                               name="facebook"
                                                               required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class=" form-control-label">Ine </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-image"></i>
                                                        </div>
                                                        <input type="file"
                                                               class="form-control"
                                                               name="ine"
                                                               >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">Comprobante de Domicilio </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-image"></i>
                                                        </div>
                                                        <input type="file"
                                                               class="form-control"
                                                               name="comdom"
                                                               >
                                                    </div>
                                                </div>

                                                <center>
                                                    <button type="submit"
                                                            class="btn btn-primary btn-md btn-block">Enviar</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6Xs0W2QYrqcUOXbnoH5kHo-9kuCntJYo"></script>
    <script>
        mapa = {
        map : false,
        marker : false,

        initMap : function() {
            // Creamos un objeto mapa y especificamos el elemento DOM donde se va a mostrar.
            mapa.map = new google.maps.Map(document.getElementById('mapa'), {
                center: {lat: 19.2630031, lng: -99.5324296},
                scrollwheel: false,
                zoom: 15,
                zoomControl: true,
                rotateControl : false,
                mapTypeControl: true,
                streetViewControl: false,
            });

            // Creamos el marcador
            mapa.marker = new google.maps.Marker({
                position: {lat: 19.2630031, lng: -99.5324296},
                draggable: true
            });

            // Le asignamos el mapa a los marcadores.
            mapa.marker.setMap(mapa.map);

        },

        // función que se ejecuta al pulsar el botón buscar dirección
        getCoords : function()
        {
            // Creamos el objeto geodecoder
            var geocoder = new google.maps.Geocoder();

            address = document.getElementById('search').value;
            if(address!='')
            {
                // Llamamos a la función geodecode pasandole la dirección que hemos introducido en la caja de texto.
                geocoder.geocode({ 'address': address}, function(results, status)
            {
                if (status == 'OK')
                {
                    // Mostramos las coordenadas obtenidas en el p con id coordenadas
                    document.getElementById("coordenadas").innerHTML='<label class=" form-control-label">Latitud: </label><input class="form-control" name="latitud" id="latitud" value='+results[0].geometry.location.lat()+'>,<br> <label class=" form-control-label">Longitud: </label> <input class="form-control" name="longitud" id="longitud" value='+results[0].geometry.location.lng()+'>';


                    // Posicionamos el marcador en las coordenadas obtenidas
                    mapa.marker.setPosition(results[0].geometry.location);
                    // Centramos el mapa en las coordenadas obtenidas
                    mapa.map.setCenter(mapa.marker.getPosition());
                    agendaForm.showMapaEventForm();
                }
            });
        }
    }
}
</script>

@endsection
