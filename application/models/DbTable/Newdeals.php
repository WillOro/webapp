<?php

class Application_Model_DbTable_Newdeals extends Zend_Db_Table_Abstract
{

    protected $_name = 'newdeals';

	public function save($post_data) 
	{
	
	try{
		$connParams = array("host" => "mysql6.000webhost.com",
		"username" => "a6886501_zf",
		"password" => "MoOwebapp1",
		"dbname" => "a6886501_zf");
		$db = new Zend_Db_Adapter_Pdo_Mysql($connParams);

		$userData1 = $post_data;
		
		$db->insert('newdeals', $userData1);

		$db->closeConnection();
		// echo "Registered";
		}
	catch(Zend_Db_Exception $e){
		echo $e->getMessage();
		}
    }

}

