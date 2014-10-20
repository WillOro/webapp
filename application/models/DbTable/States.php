<?php

class Application_Model_DbTable_States extends Zend_Db_Table_Abstract
{
    protected $_name = 'states';
	public function getState($id) 
	{
	$id = (int)$id;
	$row = $this->fetchRow('id = ' . $id);
	if (!$row) {
	throw new Exception("Could not find row $id");
	}
	return $row->toArray(); 
	}

	public function addState($name, $abbrev)
	{
	$data = array(
	'name' => $name,
	'abbrev' => $abbrev,
	);
	$this->insert($data);
	}

	public function updateState($id, $name, $abbrev)
	{
	$data = array(
	'name' => $name,
	'abbrev' => $abbrev,
	);
	$this->update($data, 'id = '. (int)$id);
	}

	public function deleteState($id)
	{
	$this->delete('id =' . (int)$id);
	}
}

