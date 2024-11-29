-- Con esta consulta se puede obtener el numero de eventos realizados con el envio a nivel nacional, filtrando por el codigo de envio.

SELECT MAILITM_PID, EVENT_GMT_DT, EVENT_TYPE_CD, MAILITM_FID FROM L_MAILITM_EVENTS WHERE MAILITM_FID = '';

-- Con esta consulta podemos visualizar como cambia el pid del codigo de envio (fid) cuando se convierte en un evento internacional.

SELECT MAILITM_PID, MAILITM_FID FROM N_EDI_MAILITMS WHERE MAILITM_FID = '';

-- Con la anterior consulta tomamos el PID y lo consultamos en la siguiente tabla para obtener los eventos internacionales.

SELECT MAILITM_PID, EVENT_GMT_DT, EVENT_TYPE_CD FROM N_EDI_MAILITM_EVENTS WHERE MAILITM_PID = '';

SELECT EVENT_TYPE_CD, EVENT_TYPE_NM FROM C_EVENT_TYPES WHERE EVENT_TYPE_CD = '';

SELECT COUNTRY_CD, COUNTRY_NM FROM C_COUNTRIES WHERE COUNTRY_CD = '';

SELECT OWN_OFFICES_CD, OFFICE_NM FROM N_OWN_OFFICES;



SELECT LME.EVENT_GMT_DT AS fecha, 
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
    L_MAILITM_EVENTS.MAILITM_FID = 'EF012474555GB';