var btn = $('#back2top');

 $(window).scroll(function() {
 if ($(window).scrollTop() > 300) {
   btn.addClass('show');
 } else {
   btn.removeClass('show');
 }
 });

 btn.on('click', function(e) {
 e.preventDefault();
 $('html, body').animate({scrollTop:0}, '300');
 });

var arrState = [
    {id: 1, state:'AGU'}, {id: 2, state:'BCN'}, {id: 3, state:'BCS'},
    {id: 4, state:'CAM'}, {id: 5, state:'COA'}, {id: 6, state:'COL'},
    {id: 7, state:'CHP'}, {id: 8, state:'CHH'}, {id: 9, state:'CMX'},
    {id: 10, state:'DUR'}, {id: 11, state:'GUA'}, {id: 12, state:'GRO'},
    {id: 13, state:'HID'}, {id: 14, state:'JAL'}, {id: 15, state:'MEX'},
    {id: 16, state:'MIC'}, {id: 17, state:'MOR'}, {id: 18, state:'NAY'},
    {id: 19, state:'NLE'}, {id: 20, state:'OAX'}, {id: 21, state:'PUE'},
    {id: 22, state:'QUE'}, {id: 23, state:'ROO'}, {id: 24, state:'SLP'},
    {id: 25, state:'SIN'}, {id: 26, state:'SON'}, {id: 27, state:'TAB'},
    {id: 28, state:'TAM'}, {id: 29, state:'TLA'}, {id: 30, state:'VER'},
    {id: 31, state:'YUC'}, {id: 32, state:'ZAC'},
];


$(document).ready(function () {

// CONTROLADOR DE PESTAÑAS ACTIVAS
  var pantalla = document.querySelector('#screen');
  var target = pantalla.getAttribute('data-toggle');
  $("[data-target='"+target+"']")[0].className = '';
  $("[data-target='"+target+"']").addClass('nav-link active');


  $.fn.datepicker.defaults.format = 'yyyy-mm-dd';
  $.fn.datepicker.defaults.language = 'es';
  $.fn.datepicker.defaults.todayHighlight = true;
  $.fn.datepicker.defaults.endDate = '0d';

  // $('.datetimepicker').datetimepicker({
  //   format: 'DD-MM-YYYY', // H:mm:ss
  //   locale: 'es',
  //   // minDate: '2019/01/01', //YYYY/MM/DD
  //   maxDate: 'now',
  //   ignoreReadonly: true,
  //   icons: {
  //     time: "fa fa-clock-o",
  //     date: "fa fa-calendar",
  //     up: "fas fa-caret-up",
  //     down: "fas fa-caret-down",
  //   }
  // });

    $('.dataTable').DataTable({
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        ordering: true,
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [{
            className: 'control',
            orderable: false,
            targets: 0
        }],
        order: [1, 'asc'],
    });

    $('.dataTable-pag').DataTable();

    $(".alert-success").fadeTo(900, 500).slideUp(500, function () {
        $(".alert-success").slideUp(500);
    });

    $(".alert-danger").fadeTo(2000, 500).slideUp(500, function () {
        $(".alert-danger").slideUp(500);
    });

    $(".alert-warning").fadeTo(2000, 500).slideUp(500, function() {
        $(".alert-warning").slideUp(500);
    });

    $('[data-toggle="tooltip"]').tooltip();

    // **** Función para cambiar icono para colapso de formularios ****
    $('i').on('click', function (e) {
        var c = $(this).attr('class')
        if (c == 'fas fa-angle-up control-collapse') {
            $(this).removeClass("fas fa-angle-up control-collapse")
            $(this).addClass("fas fa-angle-down control-collapse").attr('data-original-title', 'Maximizar')
        } else if (c == 'fas fa-angle-down control-collapse') {
            $(this).removeClass("fas fa-angle-down control-collapse")
            $(this).addClass("fas fa-angle-up control-collapse").attr('data-original-title', 'Minimizar');
        }//else if (c == 'fa fa-arrow-circle-right control-collapse') {
        //     $(this).removeClass("fa fa-arrow-circle-right control-collapse")
        //     $(this).addClass("fa fa-arrow-circle-left control-collapse").attr('data-original-title', 'Maximizar')
        // } else if (c == 'fa fa-arrow-circle-left control-collapse') {
        //     $(this).removeClass("fa fa-arrow-circle-left control-collapse")
        //     $(this).addClass("fa fa-arrow-circle-right control-collapse").attr('data-original-title', 'Minimizar');
        // }else if (c == 'fa fa-arrow-circle-down control-collapse') {
        //     $(this).removeClass("fa fa-arrow-circle-down control-collapse")
        //     $(this).addClass("fa fa-arrow-circle-up control-collapse").attr('data-original-title', 'Maximizar')
        // } else if (c == 'fa fa-arrow-circle-up control-collapse') {
        //     $(this).removeClass("fa fa-arrow-circle-up control-collapse")
        //     $(this).addClass("fa fa-arrow-circle-down control-collapse").attr('data-original-title', 'Minimizar');
        // }
    });

    //llamado a Multiselect tail para pantalla de generar Json
    tail.select('.estado', {
      animate: true,              // [0.3.0]      Boolean
      classNames: null,           // [0.2.0]      Boolean, String, Array, null
      csvOutput: false,           // [0.3.4]      Boolean
      csvSeparator: ",",          // [0.3.4]      String
      descriptions: false,        // [0.3.0]      Boolean
      deselect: false,            // [0.3.0]      Boolean
      disabled: false,            // [0.5.0]      Boolean
      height: 350,                // [0.2.0]      Integer, null
      hideDisabled: false,        // [0.3.0]      Boolean
      hideSelected: false,        // [0.3.0]      Boolean
      items: {},                  // [0.3.0]      Object
      locale: "es",               // [0.5.0]      String
      linguisticRules: {          // [0.5.9]      Object
          "е": "ё",
          "a": "ä",
          "o": "ö",
          "u": "ü",
          "ss": "ß"
      },
      multiple: true,            // [0.2.0]      Boolean
      multiLimit: Infinity,       // [0.3.0]      Integer, Infinity
      multiPinSelected: false,    // [0.5.0]      Boolean
      multiContainer: false,      // [0.3.0]      Boolean, String
      multiShowCount: true,       // [0.3.0]      Boolean
      multiShowLimit: false,      // [0.5.0]      Boolean
      multiSelectAll: true,      // [0.4.0]      Boolean
      multiSelectGroup: true,     // [0.4.0]      Boolean
      openAbove: null,            // [0.3.0]      Boolean, null
      placeholder: null,          // [0.2.0]      String, null
      search: true,              // [0.3.0]      Boolean
      searchConfig: [             // [0.5.13]     Array
          "text", "value"
      ],
      searchFocus: true,          // [0.3.0]      Boolean
      searchMarked: true,         // [0.3.0]      Boolean
      searchMinLength: 1,         // [0.5.13]     Integer
      searchDisabled: true,       // [0.5.5]      Boolean
      sortItems: false,           // [0.3.0]      String, Function, false
      sortGroups: false,          // [0.3.0]      String, Function, false
      sourceBind: false,          // [0.5.0]      Boolean
      sourceHide: true,           // [0.5.0]      Boolean
      startOpen: false,           // [0.3.0]      Boolean
      stayOpen: false,            // [0.3.0]      Boolean
      width: 265,                // [0.2.0]      Integer, String, null
      cbComplete: undefined,      // [0.5.0]      Function
      cbEmpty: undefined,         // [0.5.0]      Function
      cbLoopItem: undefined,      // [0.4.0]      Function
      cbLoopGroup: undefined      // [0.4.0]      Function
    });


    tail.select('.subdireccion', {
      animate: true,              // [0.3.0]      Boolean
      classNames: null,           // [0.2.0]      Boolean, String, Array, null
      csvOutput: false,           // [0.3.4]      Boolean
      csvSeparator: ",",          // [0.3.4]      String
      descriptions: false,        // [0.3.0]      Boolean
      deselect: false,            // [0.3.0]      Boolean
      disabled: false,            // [0.5.0]      Boolean
      height: 350,                // [0.2.0]      Integer, null
      hideDisabled: false,        // [0.3.0]      Boolean
      hideSelected: false,        // [0.3.0]      Boolean
      items: {},                  // [0.3.0]      Object
      locale: "es",               // [0.5.0]      String
      linguisticRules: {          // [0.5.9]      Object
          "е": "ё",
          "a": "ä",
          "o": "ö",
          "u": "ü",
          "ss": "ß"
      },
      multiple: true,            // [0.2.0]      Boolean
      multiLimit: Infinity,       // [0.3.0]      Integer, Infinity
      multiPinSelected: false,    // [0.5.0]      Boolean
      multiContainer: false,      // [0.3.0]      Boolean, String
      multiShowCount: true,       // [0.3.0]      Boolean
      multiShowLimit: false,      // [0.5.0]      Boolean
      multiSelectAll: true,      // [0.4.0]      Boolean
      multiSelectGroup: true,     // [0.4.0]      Boolean
      openAbove: null,            // [0.3.0]      Boolean, null
      placeholder: null,          // [0.2.0]      String, null
      search: true,              // [0.3.0]      Boolean
      searchConfig: [             // [0.5.13]     Array
          "text", "value"
      ],
      searchFocus: true,          // [0.3.0]      Boolean
      searchMarked: true,         // [0.3.0]      Boolean
      searchMinLength: 1,         // [0.5.13]     Integer
      searchDisabled: true,       // [0.5.5]      Boolean
      sortItems: false,           // [0.3.0]      String, Function, false
      sortGroups: false,          // [0.3.0]      String, Function, false
      sourceBind: false,          // [0.5.0]      Boolean
      sourceHide: true,           // [0.5.0]      Boolean
      startOpen: false,           // [0.3.0]      Boolean
      stayOpen: false,            // [0.3.0]      Boolean
      width: 265,                // [0.2.0]      Integer, String, null
      cbComplete: undefined,      // [0.5.0]      Function
      cbEmpty: undefined,         // [0.5.0]      Function
      cbLoopItem: undefined,      // [0.4.0]      Function
      cbLoopGroup: undefined      // [0.4.0]      Function
    });
});

let cleanDate = (elemento) => {
  var target = elemento.getAttribute('data-toggle');
  $("[data-target='"+target+"']").val('');
};

function OPENMODAL(){
  ALERTACARGANDO();
	setTimeout(function(){ CERRARALERTA() }, 2000);
}

function ALERTAGENERAL(titulo, mensaje, tipo) {
    // La posición modal de la ventana puede ser
    // 'top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end'.
    // Los modales pueden ser de tipo
    // 'success', 'info', 'error', 'warning', 'question'
    Swal.fire({
        // toast: true,
        position: 'center',
        title: titulo,
        text: mensaje,
        type: tipo,
        confirmButtonText: general.buttonHtmlConfirm,
        confirmButtonColor: general.colorButtonConfirm,
        allowOutsideClick: false,
        // timer: 1500
    })
}

function ALERTAGENERALHTML(titulo, html, tipo) {
    Swal.fire({
        position: 'center',
        confirmButtonText: general.buttonHtmlConfirm,
        confirmButtonColor: general.colorButtonConfirm,
        title: titulo,
        html: html,
        type: tipo,
        allowOutsideClick: false,
    })
}

function ALERTAMAPA(titulo, html, id, cveEstado) {
    var inputVal = $('#' + id).val();
    Swal.fire({
        title: titulo,
        type: '',
        html: html,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: general.buttonHtmlConfirm,
        cancelButtonText: general.buttonHtmlCancel,
        confirmButtonColor: general.colorButtonConfirm,
        cancelButtonColor: general.colorButtonCancel,
        allowOutsideClick: false,
        focusConfirm: true
    }).then((result) => {
        if (result.value) {
            if ($('#' + id).val() != '') {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    title: general.ready,
                    text: general.enterCoordSuccess,
                    type: general.typeSuccess,
                    showConfirmButton: false,
                    timer: 1500
                })
                $('#' + id).removeClass('is-invalid');
            }
        }else{
          if ($('#' + id).val() != '') {
            $('#' + id).val('');
          }
        }
    })

    var edo = cveEstado;

    var lat = 0;
    var lng = 0;
    var zoom = 0;
    var elemento = id;

    var estadosObject = {
        01:['AGU','01_AGU',{'_Lat':-102.299872,'_Lng':22.013356,'_Zoom':10}],02:['BCN','02_BCN',{'_Lat':-114.994415,'_Lng':29.983486,'_Zoom':07}],
        03:['BCS','03_BCS',{'_Lat':-111.723119,'_Lng':25.739110,'_Zoom':07}],04:['CAM','04_CAM',{'_Lat':-90.0551653,'_Lng':18.672267,'_Zoom':08}],
        05:['COA','05_COA',{'_Lat':-102.019042,'_Lng':27.215556,'_Zoom':07}],06:['COL','06_COL',{'_Lat':-103.893585,'_Lng':19.143876,'_Zoom':10}],
        07:['CHP','07_CHP',{'_Lat':-92.4671911,'_Lng':16.625665,'_Zoom':08}],08:['CHH','08_CHH',{'_Lat':-106.997232,'_Lng':28.905671,'_Zoom':07}],
        09:['CMX','09_CMX',{'_Lat':-99.1461181,'_Lng':19.308551,'_Zoom':11}],10:['DUR','10_DUR',{'_Lat':-104.776611,'_Lng':24.796708,'_Zoom':07}],
        11:['GUA','11_GUA',{'_Lat':-101.063232,'_Lng':20.884475,'_Zoom':08}],12:['GRO','12_GRO',{'_Lat':-99.8822020,'_Lng':17.769612,'_Zoom':08}],
        13:['HID','13_HID',{'_Lat':-98.8934330,'_Lng':20.529933,'_Zoom':09}],14:['JAL','14_JAL',{'_Lat':-103.573608,'_Lng':20.349777,'_Zoom':08}],
        15:['MEX','15_MEX',{'_Lat':-99.6817020,'_Lng':19.350019,'_Zoom':09}],16:['MIC','16_MIC',{'_Lat':-101.920166,'_Lng':19.212616,'_Zoom':08}],
        17:['MOR','17_MOR',{'_Lat':-99.0884400,'_Lng':18.746409,'_Zoom':10}],18:['NAY','18_NAY',{'_Lat':-104.798584,'_Lng':21.825807,'_Zoom':08}],
        19:['NLE','19_NLE',{'_Lat':-99.6734620,'_Lng':25.562265,'_Zoom':08}],20:['OAX','20_OAX',{'_Lat':-96.6467290,'_Lng':17.009515,'_Zoom':08}],
        21:['PUE','21_PUE',{'_Lat':-97.8332520,'_Lng':18.786717,'_Zoom':08}],22:['QUE','22_QUE',{'_Lat':-99.7915650,'_Lng':20.876777,'_Zoom':09}],
        23:['ROO','23_ROO',{'_Lat':-88.0389400,'_Lng':19.875226,'_Zoom':08}],24:['SLP','24_SLP',{'_Lat':-100.338135,'_Lng':22.548074,'_Zoom':08}],
        25:['SIN','25_SIN',{'_Lat':-107.341919,'_Lng':24.721885,'_Zoom':08}],26:['SON','26_SON',{'_Lat':-110.511475,'_Lng':29.286399,'_Zoom':07}],
        27:['TAB','27_TAB',{'_Lat':-92.6037608,'_Lng':17.994407,'_Zoom':09}],28:['TAM','28_TAM',{'_Lat':-98.3935559,'_Lng':24.417142,'_Zoom':07}],
        29:['TLA','29_TLA',{'_Lat':-98.1559757,'_Lng':19.429039,'_Zoom':10}],30:['VER','30_VER',{'_Lat':-97.1521006,'_Lng':19.518375,'_Zoom':08}],
        31:['YUC','31_YUC',{'_Lat':-88.8601688,'_Lng':20.727860,'_Zoom':09}],32:['ZAC','32_ZAC',{'_Lat':-102.799072,'_Lng':23.185813,'_Zoom':08}]
      };

    var gray = L.layerGroup({ maxZoom: 16, minZoom: 5 });
    var earth = L.layerGroup({ maxZoom: 16 });
    L.esri.basemapLayer('Imagery').addTo(earth);
    L.esri.basemapLayer('ImageryLabels').addTo(earth);
    L.esri.basemapLayer("Gray").addTo(gray);
    L.esri.basemapLayer("GrayLabels").addTo(gray);
    var open = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    });

    var map = L.map('map', {
        maxBounds: [
            [32.843448, -117.641669],
            [13.394022, -83.002867]
        ],
        attributionControl: true,
        zoom: 16,
        minZoom: 5,
        layers: [earth]
    });
    if (inputVal == '') {
        for (let i in estadosObject) {
            if (estadosObject[i][0] == edo) {
                lat = estadosObject[i][2]._Lat;
                lng = estadosObject[i][2]._Lng;
                zoom = estadosObject[i][2]._Zoom;
            } else if (edo == '') {
                lat = -101.865234375;
                lng = 22.715390019335942;
                zoom = 5;
            }
        }
    } else {
        var latlng = inputVal;
        var ln = latlng.split(',');
        lat = ln[0];
        lng = ln[1];
        zoom = 16;
    }

    map.setView([lng, lat], zoom);

    L.marker([lng, lat], {
        draggable: true
    }).addTo(map)
        .bindPopup()
        .on('dragend', dragEndHandler);

    setTimeout(function () {
        map.invalidateSize();
    }, 1);

    function dragEndHandler(e) {
        var latitud = this.getLatLng().lat;
        var longitud = this.getLatLng().lng;
        var coord = longitud.toFixed(6) + ',' + latitud.toFixed(6);

        $('#' + elemento).val(coord);
    }
}

/*function ALERTACARGANDO() {
    const alerta = Swal.mixin({
        customClass: {
            popup: 'containerTransparent',
        }
    })

    alerta.fire({
        position: 'center',
        title: '',
        // html: '<div class="loader">Loading...</div>',
        html: '<div class="container-load">'+
              '<i class="layer"></i>'+
              '<i class="layer"></i>'+
              '<i class="layer"></i>'+
              '</div>',
        type: '',
        showConfirmButton: false,
        allowOutsideClick: false,
    })
}*/

function ALERTACARGANDO() {
    const alerta = Swal.mixin({
        customClass: {
            popup: 'containerTransparent',
        }
    })

    alerta.fire({
        position: 'center',
        title: '',
        // html: '<div class="loader">Loading...</div>',
        html: '<div class="preloader loading">'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '</div>',
        type: '',
        showConfirmButton: false,
        allowOutsideClick: false,
    })
}

function CERRARALERTA() {
    Swal.close()
}

function IMAGENENMODAL(url) {
    const alerta = Swal.mixin({
        customClass: {
            popup: 'bg-light',
        }
    })

    alerta.fire({
        imageUrl: url,
        imageWidth: '-webkit-fill-available',
        imageHeight: 'auto',
        animation: true,
        showConfirmButton: false,
        showCloseButton: false,
        width: '70rem',
    })
}
function modalForm(modalConstruct) {

    $('#modal-title').text(modalConstruct.data.title);
    $('#axn_form').val(modalConstruct.data.axn);
    $('#id').val(modalConstruct.data.id);
    $('.modal-dialog').css('max-width', modalConstruct.properties.size.width);
}

//Se utiliza para que el campo de texto solo acepte letras
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÝÉÝÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      // let mensaje = 'Advertencia! Este campo sólo admite letras.';
      let mensaje = `${general.warning} ${general.onlyLetters}`;
      mensajeCampos(mensaje);
      return false;
    }
}

//Se utiliza para que el campo de texto solo acepte numeros
function soloNumeros(evt) {
    if (window.event) {//asignamos el valor de la tecla a keynum
        keynum = evt.keyCode; //IE
    }
    else {
        keynum = evt.which; //FF
    }
    //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
    if ((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 || keynum == 46) {
        return true;
    }
    else {
      // let mensaje = 'Advertencia! Este campo sólo admite números.';
      let mensaje = `${general.warning} ${general.onlyNumbers}`;
      mensajeCampos(mensaje);
      return false;
    }
}

function mensajeCampos(mensaje){
  toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "4000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
  toastr.warning(mensaje)
}

function message(type, message){
  toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "3500",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
  switch (type) {
    case 'success':
      toastr.success(message);
    break;
    case 'error':
      toastr.error(message);
    break;
    case 'warning':
      toastr.warning(message);
    break;
    case 'success':
      toastr.info(message);
    break;
  }

}

function welcomeMessage(type, message, photo){

  const Toast = Swal.mixin({
    toast: false,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000
  })

  Toast.fire({
    showCancelButton: false,
    title: '',
    html: `<div class="">
             <div class="text-muted border-bottom-0"></div>
                 <div class="pt-0">
                     <div class="row">
                        <div class="col-3 text-center">
                           <img src="`+photo+`" alt="" class="img-circle img-fluid elevation-2">
                         </div>
                     <div class="col-9 text-left">
                    <br>
                      <h2 class="lead"><b>Bienvenido! Accediste como</b></h2>
                      <h3 class=""><label>`+message+`</label></h3>
                    </div>
                </div>
              </div>
          </div>`,
    type: '',
    allowOutsideClick: true,
    animation: false,
    width: '28rem',

})

}

function findInfoState(codeState) {
    let findState;
    findState = arrState.find((element) => {
        return element.state === codeState
    })

    return findState;
}

function formatNumberTo2Digits(number) {
    return `${(number < 10 ? '0' : '')}${number}`;
}

function getSubdir(number){
  switch (number) {
    case '1':
      return 'DGCF';
      break;
      case '2':
      return 'DGCC';
        break;
        case '3':
        return 'DGCRCA';
          break;
          case '4':
          return 'DGDC';
            break;
  }
}
