
<form method="get" action="" class="container w-50 bg-black bg-gradient bg-opacity-25 position-absolute top-50 start-50 translate-middle row g-3 p-3 border border-danger-subtle rounded">
        <div class="container text-center text-light">
            <h1>Destino</h1>
        </div>

        <div class="container col-md-5">
            <label for="continente" class="form-label h3 text-light">Continente:</label>
            <select id="continente" required name="continente" style="font-size: 15px" onchange="selectPais()" class="form-select">
                <option disabled selected value="">Seleccione...</option>
                <option value="1">Africa</option>
                <option value="2">Asia</option>
                <option value="3">America</option>
                <option value="4">Europa</option>
                <option value="5">Oceania</option>
            </select>
        </div>

        <div class="container col-md-5">
            <label for="pais" class="form-label h3 text-light">Pais Destino:</label>
            <select id="pais" required name="pais" style="font-size: 15px" class="form-select">
                <option disabled selected value="">Seleccione...</option>
                <option>...</option>
            </select>
        </div>
        <hr>

        <div class="container d-grid gap-2 col-3">
            <button type="button" onclick="nextFormInternational()" id="guardar" class="btn btn-danger btn-lg">Siguiente</button>
        </div>

    </form>

    <input type="hidden" id="servicePostal">


   
        