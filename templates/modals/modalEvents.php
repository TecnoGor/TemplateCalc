<div class="modal fade modal-lg" id="modalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        
        <h1 id="exampleModalLabel">Eventos</h1>
        <button type="button" class="btn-close" style="font-size: 20px" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>

        <div class="modal-body">

          <table id="tableEventsQuery" class="table table-hover">

            <thead>
              <th scope="col">#</th>
              <th scope="col">Fecha</th>
              <th scope="col">Descripción</th>
              <th scope="col">Oficina</th>
            </thead>

            <tbody>
              <?php
                include('../../includes/conn.php');

                $searchInput = $_POST['search'];

                $sqlEvents = "SELECT LME.EVENT_GMT_DT AS fecha, 
                                  eventNationals.EVENT_TYPE_NM AS eventos,
                                  oficinas.OFFICE_NM AS oficina
                              FROM 
                                  L_MAILITM_EVENTS AS LME
                              JOIN 
                                  C_EVENT_TYPES AS eventNationals ON LME.EVENT_TYPE_CD = eventNationals.EVENT_TYPE_CD
                              JOIN 
                                N_OWN_OFFICES AS oficinas ON LME.EVENT_OFFICE_CD = oficinas.OWN_OFFICE_CD
                              WHERE 
                                  LME.MAILITM_FID = '$searchInput'

                              UNION ALL

                              SELECT ediEvents.EVENT_LOCAL_DT as fecha,
                                eventInt.EVENT_TYPE_NM AS eventos,
                                locationId.OFFICE_LONG_NM AS oficina
                              FROM 
                                  N_EDI_MAILITMS 
                              JOIN 
                                  N_EDI_MAILITM_EVENTS AS ediEvents ON ediEvents.MAILITM_PID = N_EDI_MAILITMS.MAILITM_PID
                              JOIN 
                                  C_EVENT_TYPES AS eventInt ON ediEvents.EVENT_TYPE_CD = eventInt.EVENT_TYPE_CD
                              JOIN
                                C_OFFICES AS locationId ON ediEvents.LOCATION_ID = locationId.OFFICE_FCD 
                              WHERE 
                                  N_EDI_MAILITMS.MAILITM_FID = '$searchInput'
                              ORDER BY
	                                fecha ASC;";
                $stmtEvents = sqlsrv_query($conn, $sqlEvents);
                // $stmtEvents->execute();
                
                $i=1;

                while($resultEvents = sqlsrv_fetch_array($stmtEvents, SQLSRV_FETCH_ASSOC)){
                  
              ?>
              <tr>
                <td scope="row"><?php echo $i++; ?></td>
                <td><?php echo $resultEvents['fecha']->format('d-m-Y H:i'); ?></td>
                <td><?php echo $resultEvents['eventos']; ?></td>
                <td><?php echo $resultEvents['oficina']; ?></td>
              </tr>
              <?php

                }
              ?>
            </tbody>

          </table>

        </div>

      <div class="modal-footer">

      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><h3>Cerrar</h3></button>

      </div>

    </div>

  </div>

</div>
