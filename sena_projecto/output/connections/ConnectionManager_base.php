<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "mega_ya_at_localhost" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "mega_ya_at_localhost";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "mega_ya_at_localhost" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->getDefault();
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "mega_ya_at_localhost";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "mega_ya_at_localhost";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "mega_ya_at_localhost";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["materiales"] = "mega_ya_at_localhost";
		$connectionsIds["localidades"] = "mega_ya_at_localhost";
		$connectionsIds["Reporte de Material Gastado"] = "mega_ya_at_localhost";
		$connectionsIds["Informe de Tickets"] = "mega_ya_at_localhost";
		$connectionsIds["tickets"] = "mega_ya_at_localhost";
		$connectionsIds["ingreso de equipo"] = "mega_ya_at_localhost";
		$connectionsIds["ingreso de materiales"] = "mega_ya_at_localhost";
		$connectionsIds["empresas"] = "mega_ya_at_localhost";
		$connectionsIds["Gasto general de materiales"] = "mega_ya_at_localhost";
		$connectionsIds["cargue de materiales"] = "mega_ya_at_localhost";
		$connectionsIds["Equipos Libres"] = "mega_ya_at_localhost";
		$connectionsIds["logistica inversa"] = "mega_ya_at_localhost";
		$connectionsIds["clientes"] = "mega_ya_at_localhost";
		$connectionsIds["datos de red"] = "mega_ya_at_localhost";
		$connectionsIds["inventario_ general"] = "mega_ya_at_localhost";
		$connectionsIds["inventario_ general_consulta"] = "mega_ya_at_localhost";
		$connectionsIds["mega_ya_tecnicos_audit"] = "mega_ya_at_localhost";
		$connectionsIds["mega_ya_tecnicos_locking"] = "mega_ya_at_localhost";
		$connectionsIds["Onts Cargadas"] = "mega_ya_at_localhost";
		$connectionsIds["Instalaciones"] = "mega_ya_at_localhost";
		$connectionsIds["Mantenimientos"] = "mega_ya_at_localhost";
		$connectionsIds["Equipos Entregados a Bodega"] = "mega_ya_at_localhost";
		$connectionsIds["Retiros"] = "mega_ya_at_localhost";
		$connectionsIds["Logistica Inversa Para Admin"] = "mega_ya_at_localhost";
		$connectionsIds["Equipos sin entregar a Bodega"] = "mega_ya_at_localhost";
		$connectionsIds["Material Reintegrado a Bodega"] = "mega_ya_at_localhost";
		$connectionsIds["Material Recuperado"] = "mega_ya_at_localhost";
		$connectionsIds["admin_rights"] = "mega_ya_at_localhost";
		$connectionsIds["admin_members"] = "mega_ya_at_localhost";
		$connectionsIds["admin_users"] = "mega_ya_at_localhost";
		$connectionsIds["mega_ya_tecnicos_uggroups"] = "mega_ya_at_localhost";
		$connectionsIds["mega_ya_tecnicos_ugmembers"] = "mega_ya_at_localhost";
		$connectionsIds["mega_ya_tecnicos_ugrights"] = "mega_ya_at_localhost";
		$connectionsIds["mega_ya_tecnicos_ugrights1"] = "mega_ya_at_localhost";
		$connectionsIds["usuarios"] = "mega_ya_at_localhost";
		$connectionsIds["Cargue Material A Bodega"] = "mega_ya_at_localhost";
		$connectionsIds["Bodegas"] = "mega_ya_at_localhost";
		$connectionsIds["Bodegas Contratista"] = "mega_ya_at_localhost";
		$connectionsIds["Cargue de Material a Tecnicos"] = "mega_ya_at_localhost";
		$connectionsIds["Cargue de Onts Contratista"] = "mega_ya_at_localhost";
		$connectionsIds["Logistica Inversa Para Contratistas"] = "mega_ya_at_localhost";
		$connectionsIds["Cargue Material A Bodega Contratistas"] = "mega_ya_at_localhost";
		$connectionsIds["Cargue de Material a Tecnicos Contratistas"] = "mega_ya_at_localhost";
		$connectionsIds["usuarios1"] = "mega_ya_at_localhost";
		$connectionsIds["Inventario_Contratistas"] = "mega_ya_at_localhost";
		$connectionsIds["usuarios2"] = "mega_ya_at_localhost";
		$connectionsIds["Consultar empresa de Usuarios1"] = "mega_ya_at_localhost";
		$connectionsIds["Consultar Ticket Para Modificarlo"] = "mega_ya_at_localhost";
		$connectionsIds["Tickets_Contratistas"] = "mega_ya_at_localhost";
		$connectionsIds["Tecnicos_Contratistas"] = "mega_ya_at_localhost";
		$connectionsIds["Usiarios_Contratista"] = "mega_ya_at_localhost";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>