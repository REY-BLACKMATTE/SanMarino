<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GENERAL NAMES
    |--------------------------------------------------------------------------
    */
    'completeSCT' => 'Secretaria de Comunicaciones y Transportes',
    'completeDGCC' => 'Conservación de Carreteras',
    'completeDGCF' => 'Carreteras Federales',
    'completeDGCRCA' => 'Caminos Rurales y Alimentadoras',
    'completeDGDC' => 'Desarrollo Carretero',
    /*
    |--------------------------------------------------------------------------
    | GENERAL BUTTONS
    |--------------------------------------------------------------------------
    */
    'save' => 'Guardar',
    'add' => 'Añadir',
    'search' => 'Buscar',
    'close' => 'Cerrar',
    'cleanTable' => 'Limpiar Tabla',
    'cleanSepecialData' => 'Remover Ficha Cargada',
    'seeMore' => 'Ver más',
    'reload' => 'Actualizar',
    'base_url' => '/SCT_ADMIN_AVANCES/public/',
    'return' => 'Regresar',
    /*
    |--------------------------------------------------------------------------
    | SELECT OF STATUS
    |--------------------------------------------------------------------------
    */
    'select' => 'SELECCIONE',
    'active' => 'ACTIVO',
    'inactive' => 'INACTIVO',

    /*
    |--------------------------------------------------------------------------
    | GENERAL LABELS
    |--------------------------------------------------------------------------
    */
    'state' => 'Estado',
    'subdirection' => 'Sub Dirección',
    'numWork' => 'No. de Obra',
    'period' => 'Periodo',
    'nes' => 'NESD',
    'year' => 'Año',
    'month' => 'Mes',
    'preview' => 'Vista Previa',
    'axn' => 'Acción',
    'total' => 'Total',
    'rol' => 'Rol',

	/*
    |--------------------------------------------------------------------------
    | panel.blade.php (PROGRESS o PANEL)
    |--------------------------------------------------------------------------
    */
    'panelTitle' => 'Panel',
	'progressTitle' => 'Progreso Trazado',
    'panelTotalWorks' => 'Total Obras Registradas',
	'panelWorks' => 'Obras Registradas',
	'panelTotalMaps' => 'Total Trazos Generados',
	'panelMaps' => 'Trazos Generados',
	'panelTotalProgress' => 'Progreso de Trazos Generados',
    'panelDGCC' => 'DGCC',
    'panelDGCF' => 'DGCF',
    'panelDGCRCA' => 'DGCRCA',
	'panelDGDC' => 'DGDC',


    /*
    |--------------------------------------------------------------------------
    | cat_stroke.blade.php (ALTA DE TRAZOS)
    |--------------------------------------------------------------------------
    */
    'strokesTitle' => 'Alta de Trazos',
    'strokesPanelStroke' => 'pendiente',
    'strokesImportStroke&Video' => 'Importar Trazo | Video',
    'strokesImportPhotos' => 'Importar Fotografías',
    'strokesCaptureLinks' => 'Captura de Enlaces',
    'strokesGeojson' => 'Geojson',
    'strokesDragGeojson' => 'Seleccione o arrastre aquí su archivo Geojson',
    'strokesPhoto' => 'Foto',
    'strokesPhotoName' => 'Nombre',
    'strokesGeoposition' => 'Geoposición',
    'strokesComment' => 'Comentario',
    'strokesCreateDate' => 'Fecha Creación',
    'strokesStatus' => 'Estatus',
    'strokesUrlVideoWay' => 'URL video de Trayecto',
    'strokesUrlVideoWork' => 'URL video de Obra',
    'strokesImportDataSpecial' => 'Importar Ficha Especial',
	'strokeSelectAction' => 'Seleccionar Acción(es)',
	'strokesSelectDataSpecial' => 'Seleccionar Ficha Técnica',

    /*
    |--------------------------------------------------------------------------
    | cat_videos.blade.php (ALTA VIDEOS DE OBRAS)
    |--------------------------------------------------------------------------
    */
    'videosTitle' => 'Alta Videos de Obra',
    'videosAddUrl' => 'Añadir URL',
    'videosUrl' => 'URL',
    'videosName' => 'Nombre',
    'videosComment' => 'Comentario',
    'videosCreateDate' => 'Fecha Creación',

    /*
    |--------------------------------------------------------------------------
    | generar_json.blade.php (GENERAR JSON)
    |--------------------------------------------------------------------------
    */
    'jsonTitle' => 'Generar JSON de Obras',
    'jsonGenerate' => 'Generar JSON',
    'jsonState' => 'Estado',
    'jsonSubdirection' => 'Sub Dirección',
    'jsonName' => 'Nombre JSON',
    'jsonCreateDate' => 'Fecha de Creación',
    'jsonPeriod' => 'Periodo',
    'jsonUser' => 'Usuario',

     /*
    |--------------------------------------------------------------------------
    | import_excel.blade.php (IMPORTAR | EXPORTAR EXCEL DE OBRAS)
    |--------------------------------------------------------------------------
    */
    'importTitle' => 'Importar Excel de Obras',
    'importSelectFile' => 'Seleccionar archivo xls/csv',
    'importButtonImport' => 'Importar',
    'importTooltipImport' => 'Importar a Base de Datos',
    'importButtonExport' => 'Exportar',
    'importTooltipExport' => 'Exportar a Excel',


     /*
    |--------------------------------------------------------------------------
    | usuarios.blade.php (CATALOGO USUARIOS)
    |--------------------------------------------------------------------------
    */
    'usersTitle' => 'Usuarios',
    'usersName' => 'Nombre',
    'usersLastName1' => 'Apellido Paterno',
    'usersLastName2' => 'Apellido Materno',
    'usersUser' => 'Usuario',
    'usersEmail' => 'Correo',
    'usersStatus' => 'Estatus',
    'usersId' => 'Id',
    'usersPhoto' => 'Foto',
    'usersAlias' => 'Alias',
    'usersRegisterTitle' => 'Registrar Usuario',
    'usersPassword' => 'Contraseña',
    'usersConfirmPassword' => 'Confirmar Contraseña',
    'usersUpdatePhoto' => 'Actualizar Foto',
    'registerAddress' => 'Registrar Dirección',
    'usersStreet' => 'Calle',
    'usersExtNum' => 'Número Ext',
    'usersIntNum' => 'Número Int',
     /*
    |--------------------------------------------------------------------------
    | cat_users.blade.php (CATALOGO USUARIOS)
    |--------------------------------------------------------------------------
    */

    'searchFilter' => 'Filtros de búsqueda',
    'initialDay' => 'De:',
    'finalDay' => 'Hasta:',
    'aniadir' => 'Añadir',
     /*
    |--------------------------------------------------------------------------
    | Captura de información
    |--------------------------------------------------------------------------
    */
    'pefCaptureInformation' => 'Captura Información',
    'pefObras' => 'Obras en proceso con PEF 2019',
    'pefLicitaciones' => 'Licitaciones',
    'pefCMIC' => 'Empresas contratadas miembros CMIC',
    'pefOrganosFiscalizadores' => 'Observaciones Órganos Fiscalizadores',
    'pefAsuntosGenerales' => 'Asuntos Generales',
    'pefFotografias' => 'Importar Fotografías',
    'pefFotografiasCargadas' => 'Fotografías Cargadas',
    'pefNivelObra' => 'A nivel obra o subprograma',
    'pefKmInicial' => 'Km. inicial',
    'pefKmFinal' => 'Km. final',
    'pefPresupuestoModAnual' => 'Presupuesto Modificado anual (mdp)',
    'pefMeta' => 'Meta 2019 (km)',
    'pefPresupuestoProg' => 'Presupuesto Programado a la fecha (mdp)',
    'pefAvanceFinanciero' => 'Avance financiero a la fecha (mdp)',
    'pefAvanceFinancieroPorcentaje' => 'Avance financiero a la fecha (%)',
    'pefAvanceFisicoProg' => 'Avance Físico Programado a la fecha (%)',
    'pefAvanceFisico' => 'Avance Físico a la fecha (%)',
    'pefComentarios' => 'Comentarios',
    'pefStatusObra' => 'Estatus',
    'pefResidencia' => 'Residencia',
    'pefContrato' => 'Con Contrato / Acta de Fallo',
    'pefProcesoLic' => 'En proceso de licitación',
    'pefPorLicitar' => 'Por licitar',
    'pefObservaciones' => 'Observaciones',
    'pefNo' => 'No.',
    'pefMontoContratado' => 'Monto Contratado (mdp)',
    'pefMonto' => 'Monto (mdp)',
    'pefRazon' => 'Mencionar si se tiene alguna problemática, está detenida, pendiente de autorizar, etc.',
    'pefTotal' => 'Total',
    'pefNoContratos' => 'No. Contratos',
    'idEstatusEnCaptura' => '7',
    'idEstatusCompletada' => '8',

	/*
	|--------------------------------------------------------------------------
	| transfer_strokeEsp.blade.php (TRANSFERIR FICHAS ESPECIALES)
	|--------------------------------------------------------------------------
	*/
	'transferStokesEsp' => 'Transferir Fichas Especiales',
	'transferTitle' => 'Transferencia de Fichas Especiales',
	'transfer' => 'Transferir',
	'transferSpecialData' => 'Transferir Fichas Especiales:',


	/*
	|--------------------------------------------------------------------------
	| jsonFileControl.blade.php (Control Json File)
	|--------------------------------------------------------------------------
	*/
	'ControlJsonTitle' => 'Control de archivos Json',

	/*
	|--------------------------------------------------------------------------
	| mapSwitch.blade.php (Control Json File)
	|--------------------------------------------------------------------------
	*/
	'ControlPanelTitle' => 'Panel de Control',
	'MapSwitchLibrary' => 'Librería Cargada',
	'MapSwitchMapbox' => 'Librería Mapbox',
	'MapSwitchLeaflet' => 'Librería Leaflet',
	'libraryControl' => 'Control de Librerías',
	'themeControl' => 'Tema'
];
