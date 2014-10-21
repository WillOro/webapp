<?php

class Application_Model_DbTable_Newdeals extends Zend_Db_Table_Abstract
{

    protected $_name = 'newdeals';

	public function save() {
        return $this->getMapper()->save($this);
    }

}

