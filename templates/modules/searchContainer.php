<div class="container position-absolute top-50 start-50 translate-middle row g-3 p-3">
        
    <div class="card w-50 position-absolute top-0 start-50 translate-middle rounded-5 bg-black bg-gradient bg-opacity-25">
        <div class="card-header text-center text-light">
            <h2>INGRESA EL CÓDIGO DE ENVIO</h2>            
        </div>

        <div class="card-body">
            <form method="post">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="container col-md-8">
                        <div class="input-group">
                            <input type="text" name="searchInput" id="searchInput" style="height:35px; font-size:20px;" class="form-control border border-danger rounded-start-pill">
                            <button class="btn btn-outline-light bg-danger" onclick="searchEnv()" type="button" id="button-addon2"><i class="bi bi-search" style="color: #fff; font-size: 17px;"></i></button><button class="btn btn-outline-light bg-danger rounded-end-circle" onclick="modalEventQuery()" type="button" id="button-addon2"><i class="bi bi-table" style="color: #fff; font-size: 17px;"></i></button>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>                
            </form>

            <hr>

            <blockquote class="blockquote mb-0 text-light">
            <h3>Código de envio: <b id="codEnv"></b> </h3>
            <h3>Origen:  <b id="paisOrig"></b></h3>
            <h3>Destino:  <b id="paisDest"></b></h3>
            <h3>Peso: <b id="weightEnv"></b></h3>
            </blockquote>
        </div>

        <!-- <div class="container d-grid gap-2 col-3 p-3"> -->
            <!-- <button type="button" onclick="searchEnv()" class="btn btn-danger btn-lg">Buscar</button> -->
            
            <!-- <button type="button" onclick="modalEventQuery()" class="btn btn-danger btn-lg" data-bs-toggle="modal" onclick="modalEventQuery()">Eventos</button> -->

            <!-- <button type="button" onclick="location.replace('index.php');" class="btn btn-danger btn-lg">Inicio</button> -->
        <!-- </div> -->

    </div>

</div>