<?php
			$optionsArray = array( 'totals' => array( 'id tickets' => array( 'totalsType' => '' ),
'Tickets' => array( 'totalsType' => '' ),
'Fecha de atencioón' => array( 'totalsType' => '' ),
'Localidad' => array( 'totalsType' => '' ),
'Estado del Ticket' => array( 'totalsType' => '' ),
'Observaciones' => array( 'totalsType' => '' ),
'Tecnico' => array( 'totalsType' => '' ),
'Empresa' => array( 'totalsType' => '' ),
'Cedula/nit-Cliente' => array( 'totalsType' => '' ),
'Tipo de Actividad' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Tecnico',
'Tickets',
'Fecha de atencioón',
'Localidad',
'Estado del Ticket',
'Observaciones',
'Empresa',
'Cedula/nit-Cliente',
'Tipo de Actividad',
'id tickets' ),
'exportFields' => array( 'id tickets',
'Cedula/nit-Cliente',
'Localidad',
'Tickets',
'Fecha de atencioón',
'Tipo de Actividad',
'Estado del Ticket',
'Tecnico',
'Empresa',
'Observaciones' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Tecnico' => array( 'export_field' ),
'Tickets' => array( 'export_field1' ),
'Fecha de atencioón' => array( 'export_field2' ),
'Localidad' => array( 'export_field3' ),
'Estado del Ticket' => array( 'export_field4' ),
'Observaciones' => array( 'export_field5' ),
'Empresa' => array( 'export_field6' ),
'Cedula/nit-Cliente' => array( 'export_field7' ),
'Tipo de Actividad' => array( 'export_field8' ),
'id tickets' => array( 'export_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field9',
'export_field7',
'export_field3',
'export_field1',
'export_field2',
'export_field8',
'export_field4',
'export_field',
'export_field6',
'export_field5' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field9' => 'grid',
'export_field7' => 'grid',
'export_field3' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field8' => 'grid',
'export_field4' => 'grid',
'export_field' => 'grid',
'export_field6' => 'grid',
'export_field5' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field9',
'export_field7',
'export_field3',
'export_field1',
'export_field2',
'export_field8',
'export_field4',
'export_field',
'export_field6',
'export_field5' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'Tecnico',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Tickets',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Fecha de atencioón',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Localidad',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Estado del Ticket',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'Observaciones',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Empresa',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'Cedula/nit-Cliente',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'Tipo de Actividad',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'id tickets',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>