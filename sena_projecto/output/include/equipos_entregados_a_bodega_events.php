<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_equipos_entregados_a_bodega  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
$pageObject->hideField("Entregado en Bodega");
$pageObject->hideField("Fecha de Entrega");
;
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
$pageObject->hideField("Entregado en Bodega");
$pageObject->hideField("Fecha de Entrega");
;
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>