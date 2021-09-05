/*
	Archivo donde se guardaran en un objetos
	los mensajes que se mostraran en los alerts.
*/



var general = {
	/*
    |--------------------------------------------------------------------------
    | TITLES FOR ALERTS
    |--------------------------------------------------------------------------
    */
    success: '¡Éxito!',
	error: 'Error',
	save: 'Guardar',
    emptyTable: 'Tabla Vacía',
	checkEmptyFields: 'Verifique los siguientes campos',
	ready: '¡Listo!',
	warning: '¡Advertencia!',
	wrongLink: 'Link de video incorrecto',
	invalidLink: 'Link inválido',
	cleanTable: 'Limpiar Tabla',
  cleanSepecialData: 'Remover Ficha Cargada',
	alert: 'Alerta',
	selectPosition: 'Seleccionar Posición',

	/*
    |--------------------------------------------------------------------------
    | NORMAL MESSAGES
    |--------------------------------------------------------------------------
    */
	insertError: 'Ocurrió un error al guardar los datos',
	messageSave: '¿Desea guardar la información?',
  messageApply: '¿Desea aplicar los cambios?',
	enterCoordSuccess: 'Coordenadas añadidas.',
	onlyNumbers: 'Este campo sólo admite números.',
	onlyLetters: 'Este campo sólo admite letras.',
	selectOrDragJson: 'Seleccione o arrastre aquí su archivo *.geojson.',
	exceededPhotoSize: 'El archivo de la fotografia no debe exceder 2 MB.',
	messageCleanTable: '¿Desea limpiar la tabla?',
  messageCleanSpecialData: '¿Desea Remover la Ficha Cargada?',
	dragFileInZone: 'Arrastre el documento hasta la zona marcada',
	fileNotFound: 'Archivo no encontrado',
	fileCantRead: 'El archivo no se puede leer',
	fileError: 'Ha ocurrido un error al leer el archivo',
	selectJsonFile: 'Seleccione un archivo *.json',
	ContractsNotFound: 'No se ecnontraron contratos para la obra',


	/*
    |--------------------------------------------------------------------------
    | HTML MESSAGES
    |--------------------------------------------------------------------------
    */
  emptyGeoJson: `<h5>Debe cargar un archivo con las coordenadas.</h5>`,
  emptySpecialData: `<h5>Debe cargar la ficha técnica para la obra.</h5>`,
	emptyInput: `<h5>El campo <strong>*:field</strong> no puede estar vacío.</h5>`,
	emptySelect: `<h5>Debe seleccionar <strong>*:field</strong>.</h5>`,
	emptyTableInput: `<h5>Fila <strong>:row</strong>, campo <strong>*:field</strong> no puede estar vacío. </h5>`,
	lastOneVideo: `<h5>Agregue al menos un video.</h5>`,
	enterLink: `<h5>Por favor ingrese un link de <strong>YouTube</strong>.</h5>`,
	badStructureLink: `<h5>La estructura del link <strong>:link</strong> es inválida o el video no existe.</h5>`,
	noCapturedInfo: `<h5>No se ha capturado informacíon en <strong>:tab</strong>.</h5>`,
	onlyJsonFiles: `<span><strong>Formato de archivo no valido, únicamente archivos *.json <br> Seleccione o arrastre aquí su archivo.</strong></span>`,
	dragMarker: `<div><p>Arrastra el marcador hasta la posición deseada.</p><div id="map" style="height:350px"></div></div>`,
  noActions: `<h5>Debe seleccionar al menos una acción a realizar.</h5>`,

	/*
    |--------------------------------------------------------------------------
    | TYPES OF MESSAGES
    |--------------------------------------------------------------------------
    */
    typeSuccess: 'success',
    typeError: 'error',
    typeQuestion: 'question',
    typeWarning: 'warning',
    typeInfo: 'info',

    /*
    |--------------------------------------------------------------------------
    | BUTTONS
    |--------------------------------------------------------------------------
    */
    buttonHtmlConfirm: '<span class="text-success"><i class="fas fa-check"></i> Aceptar</span>',
    buttonHtmlCancel: '<span class="text-danger"><i class="fas fa-times"></i> Cancelar</span>',
    colorButtonConfirm: 'rgba(255,255,255,0)',
    colorButtonCancel: 'rgba(255,255,255,0)',

    /*
    |--------------------------------------------------------------------------
    | SPINNER AND ICONS
    |--------------------------------------------------------------------------
    */
    spinnerLoading: `<div class="container-load">
                    	<i class="layer"></i>
                    	<i class="layer"></i>
                    	<i class="layer"></i>
                	</div>`,
	iconCheck: `<i class="fas fa-check-circle text-success"></i>`,
	iconFail: `<i class="fas fa-times-circle text-danger"></i>`,


};
