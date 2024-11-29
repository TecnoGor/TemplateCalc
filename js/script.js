const buttons = document.querySelectorAll('.button_style');
buttons.forEach((div) => {
  let target = div.querySelector('.target');
  function handleMove(e) {
    const x = -50 + (e.pageX - div.offsetLeft - 2800 / 2) / 3;
    const y = -10 + (e.pageY - div.offsetTop - 100 / 2) / 3;

    target.style.setProperty('--x', `${ x }px`)
    target.style.setProperty('--y', `${ y }px`)
  }
  div.addEventListener('mousemove', (e) => {
    handleMove(e);
  });
  div.addEventListener('touchmove', (e) => {
    handleMove(e.changedTouches[0]);
  });
});

function containSearch() {
  $.get('./templates/modules/searchContainer.php', function(mensaje, estado){
    document.getElementById('contentCardsBlogs').style = 'display:none';
    document.getElementById('contentButtonTracking').style = 'display:none';
    document.getElementById('contentTemplates').innerHTML=mensaje;
  })

}

function searchEnv() {
  var a = document.getElementById('searchInput').value;

  if (a == null || a == "") {
    swal({
      title: 'Error!',
        text: "Debe ingresar el codigo de envio.",
      type: 'error',
      showCancelButton: false,
      confirmButtonText: 'OK',
      closeOnConfirm: false
    });
  } else {
    $.ajax({
      url: './includes/TRACK_IPS.php',
      method: 'POST',
      data: {
        buscar: a
      },
      success: function(data){
        var data = JSON.parse(data);
  
        if (data.status) {
          swal({
            title: 'Encontrado!',
              text: "El envio fue rastreado con exito!.",
            type: 'success',
            showCancelButton: false,
            confirmButtonText: 'OK',
            closeOnConfirm: false
          });
          document.getElementById('codEnv').textContent = data.data.MAILITM_FID;
          document.getElementById('paisOrig').textContent = data.data.ORIG_COUNTRY_CD;
          document.getElementById('paisDest').textContent = data.data.DEST_COUNTRY_CD;
          document.getElementById('weightEnv').textContent = data.data.MAILITM_WEIGHT + " G";
          let codeOrig = data.data.countryCode;
          let codeOrigLower = codeOrig.toLowerCase();
          let codeDest = data.data.destCountryCode;
          let codeDestLower = codeDest.toLowerCase();
          fetch('./assets/c_svg/' + codeOrigLower + '.svg')
            .then(response => response.text())
            .then(data => {

                const parserOrig = new DOMParser();
                const svgOrig = parserOrig.parseFromString(data, 'image/svg+xml');
                const svgOrigElement = svgOrig.querySelector('svg');

                svgOrigElement.setAttribute("width", "50px");
                svgOrigElement.setAttribute("height", "20px");

                document.getElementById('svgContainerOrig').innerHTML = svgOrigElement.outerHTML;
            })

            fetch('./assets/c_svg/' + codeDestLower + '.svg')
            .then(response => response.text())
            .then(data => {

                const parserDest = new DOMParser();
                const svgDest = parserDest.parseFromString(data, 'image/svg+xml');
                const svgDestElement = svgDest.querySelector('svg');

                svgDestElement.setAttribute("width", "50px");
                svgDestElement.setAttribute("height", "20px");

                document.getElementById('svgContainerDest').innerHTML = svgDestElement.outerHTML;
            })
          // const svgNameOrig = "./assets/c_svg/" + "ve" + ".svg";

          // const svgOrig = document.createElementNS(svgNameOrig, "svg");
          // svgOrig.setAttribute("width", "80px");
          // svgOrig.setAttribute("height", "50px");

          // document.getElementById('svgContainerOrig').appendChild(svgOrig);
            // EE002978569VE
        } else {
          swal({
            title: 'Error!',
              text: "El codigo de envio no se encuentra.",
            type: 'error',
            showCancelButton: false,
            confirmButtonText: 'OK',
            closeOnConfirm: false
          });
        }
      }
    })

    $.ajax({
      url: "./templates/modals/modalEvents.php",
      method: "POST",
      data: {
        search: a
      },
      success: function(data) {
          document.getElementById('modalContainerJs').innerHTML=data;
          $(document).ready( function () {
            $('#tableEventsQuery').DataTable({
                "language": {
                    "url": "./js/langDT.json"
                },
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50, 100]
            })

            $('#tableEventsQuery').css('font-size', '15px');
          });
      }
    });
  }
  
}

function modalDevelop(){
  swal({
    title: 'En desarrollo! <i class="bi bi-gear"></i>',
    text: "Disculpe los inconvenientes, pero este módulo aún se encuentra en desarrollo. Esperamos que para su próxima visita esté en funcionamiento. 😉",
    type: 'warning',
    showCancelButton: false,
    confirmButtonText: 'OK',
    closeOnConfirm: false
  });
}

function modalEventQuery(){

  var a = document.getElementById('searchInput').value;

  if (a == "" || a == null) {
    swal({
      title: 'Error!',
      text: "Debe ingresar el codigo de envio.",
      type: 'error',
      showCancelButton: false,
      confirmButtonText: 'OK',
      closeOnConfirm: false
    });
  } else {
    $('#modalEventos').modal('show');  
  }
}