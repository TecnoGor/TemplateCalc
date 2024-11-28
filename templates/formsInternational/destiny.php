
<form method="get" action="" class="container bg-white row g-3 p-3 border border-primary-subtle rounded">
        <div class="container">
            <h3>Destino</h3>
        </div>

        <div class="container col-md-5">
            <label for="continente" class="form-label">Continente:</label>
            <select id="continente" required name="continente" onchange="selectPais()" class="form-select">
                <option disabled selected>Seleccione...</option>
                <option value="1">Africa</option>
                <option value="2">Asia</option>
                <option value="3">America</option>
                <option value="4">Europa</option>
                <option value="5">Oceania</option>
            </select>
        </div>

        <div class="container col-md-5">
            <label for="pais" class="form-label">Pais Destino:</label>
            <select id="pais" required name="pais" class="form-select">
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
            <button type="" onclick="nextFormInternational()" id="guardar" class="btn btn-primary btn-lg">Siguiente</button>
    </div>

   
        