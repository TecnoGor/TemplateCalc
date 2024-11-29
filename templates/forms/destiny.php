
<form method="get" action="" class="container w-50 bg-black bg-gradient bg-opacity-25 row position-absolute top-50 start-50 translate-middle g-3 p-3 border border-danger-subtle rounded">
        <div class="container text-center text-light">
            <h1>Origen</h1>
        </div>

        <div class="container col-md-5">
            <label for="STorigen" class="form-label h3 text-light">Estado:</label>
            <select id="STorigen" required name="STorigen" style="font-size: 15px" onchange="selectEstadoOrigen()" class="form-select">
                <option disabled selected value="">Seleccione...</option>
                <option value="2">Amazonas</option>
                <option value="3">Azoátegui</option>
                <option value="4">Apure</option>
                <option value="5">Aragua</option>
                <option value="6">Barinas</option>
                <option value="7">Bolívar</option>
                <option value="8">Carabobo</option>
                <option value="9">Cojedes</option>
                <option value="10">Delta Amacuro</option>
                <option value="1">Distrito Capital</option>
                <option value="11">Falcón</option>
                <option value="12">Guárico</option>
                <option value="13">Lara</option>
                <option value="14">Mérida</option>
                <option value="15">Miranda</option>
                <option value="16">Monagas</option>
                <option value="17">Nueva Esparta</option>
                <option value="18">Portuguesa</option>
                <option value="19">Sucre</option>
                <option value="20">Táchira</option>
                <option value="21">Trujillo</option>
                <option value="24">La Guaira</option>
                <option value="22">Yaracuy</option>
                <option value="23">Zulia</option>
            </select>
        </div>

        <div class="container col-md-5">
            <label for="OPTorigen" class="form-label h3 text-light">OPT destino:</label>
            <select id="OPTorigen" required name="OPTorigen" style="font-size: 15px" class="form-select">
                <option disabled selected>Seleccione...</option>
                <option>...</option>
            </select>
        </div>
        <hr>

        <div class="container text-center text-light">
            <h1>Destino</h1>
        </div>

        <div class="container col-md-5">
            <label for="ST" class="form-label h3 text-light">Estado:</label>
            <select id="ST" name="ST" required style="font-size: 15px" onchange="selectEstado()" class="form-select">
                <option disabled selected>Seleccione...</option>
                <option value="2">Amazonas</option>
                <option value="3">Azoátegui</option>
                <option value="4">Apure</option>
                <option value="5">Aragua</option>
                <option value="6">Barinas</option>
                <option value="7">Bolívar</option>
                <option value="8">Carabobo</option>
                <option value="9">Cojedes</option>
                <option value="10">Delta Amacuro</option>
                <option value="1">Distrito Capital</option>
                <option value="11">Falcón</option>
                <option value="12">Guárico</option>
                <option value="13">Lara</option>
                <option value="14">Mérida</option>
                <option value="15">Miranda</option>
                <option value="16">Monagas</option>
                <option value="17">Nueva Esparta</option>
                <option value="18">Portuguesa</option>
                <option value="19">Sucre</option>
                <option value="20">Táchira</option>
                <option value="21">Trujillo</option>
                <option value="24">La Guaira</option>
                <option value="22">Yaracuy</option>
                <option value="23">Zulia</option>
            </select>
        </div>

        <div class="container col-md-5">
            <label for="OPT" class="form-label h3 text-light">OPT destino:</label>
            <select id="OPT" required name="OPT" style="font-size: 15px" class="form-select">
                <option disabled selected>Seleccione...</option>
                <option>...</option>
            </select>
        </div>
        <hr>

        <div class="container d-grid gap-2 col-3">
            <button type="button" onclick="nextForm()" id="guardar" class="btn btn-danger btn-lg">Siguiente</button>
        </div>

    </form>
    <input type="hidden" id="servicePostal">