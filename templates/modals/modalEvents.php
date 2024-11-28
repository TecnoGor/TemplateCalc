<div class="modal fade modal-lg" id="modalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        

        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <?php echo $codEnv = '<input type="hidden" id="codEnvHidden" name="codEnvHidden">';?>
      </div>

        <div class="modal-body">

          <table id="tableEventsQuery" class="table table-hover">

            <thead>
              <th>Nº</th>
              <th>Fecha</th>
              <th>Descripción</th>
              <th>Oficina</th>
            </thead>

            <tbody>
              <?php
                include('includes/conn.php');

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
                                  LME.MAILITM_FID = 'UD727506523MY'

                              UNION ALL

                              SELECT DISTINCT ediEvents.EVENT_LOCAL_DT as fecha,
                                eventInt.EVENT_TYPE_NM AS eventos,
                                locationId.OFFICE_LONG_NM AS oficina
                              FROM 
                                  L_MAILITM_EVENTS
                              JOIN 
                                  N_EDI_MAILITMS ON L_MAILITM_EVENTS.MAILITM_FID = N_EDI_MAILITMS.MAILITM_FID
                              JOIN 
                                  N_EDI_MAILITM_EVENTS AS ediEvents ON N_EDI_MAILITMS.MAILITM_PID = ediEvents.MAILITM_PID
                              JOIN 
                                  C_EVENT_TYPES AS eventInt ON ediEvents.EVENT_TYPE_CD = eventInt.EVENT_TYPE_CD
                              JOIN
                                C_OFFICES AS locationId ON ediEvents.LOCATION_ID = locationId.OFFICE_FCD 
                              WHERE 
                                  L_MAILITM_EVENTS.MAILITM_FID = 'UD727506523MY';";
                $stmtEvents = sqlsrv_query($conn, $sqlEvents);
                // $stmtEvents->execute();
                
                $i=1;

                while($resultEvents = sqlsrv_fetch_array($stmtEvents, SQLSRV_FETCH_ASSOC)){
                  
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
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

      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      <button type="button" class="btn btn-primary">Save changes</button>

      </div>

    </div>

  </div>

</div>
