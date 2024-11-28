
<form method="get" action="" class="container bg-white row g-3 p-3 border border-primary-subtle rounded">
        <div class="container">
            <h3>Origen</h3>
        </div>

        <div class="container col-md-5">
            <label for="STorigen" class="form-label">Estado:</label>
            <select id="STorigen" required name="STorigen" onchange="selectEstadoOrigen()" class="form-select">
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
            <label for="OPTorigen" class="form-label">OPT destino:</label>
            <select id="OPTorigen" required name="OPTorigen" class="form-select">
                <option disabled selected>Seleccione...</option>
                <option>...</option>
            </select>
        </div>
        <hr>

        <div class="container">
            <h3>Destino</h3>
        </div>

        <div class="container col-md-5">
            <label for="ST" class="form-label">Estado:</label>
            <select id="ST" name="ST" required onchange="selectEstado()" class="form-select">
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
            <label for="OPT" class="form-label">OPT destino:</label>
            <select id="OPT" required name="OPT" class="form-select">
                <option disabled selected>Seleccione...</option>
                <option>...</option>
            </select>
        </div>
        <hr>

        <div class="container d-grid gap-2 col-3">
            <button type="submit" class="btn btn-primary btn-lg">Inicio</button>
        </div>

    </form>

    <input type="hidden" id="servicePostal">

    <div class="container d-grid gap-2 col-3 p-3">
            <button type="" onclick="nextForm()" id="guardar" class="btn btn-primary btn-lg">Siguiente</button>
    </div>

   
        