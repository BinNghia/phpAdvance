<?php
namespace MVC\Models;
use MVC\Core\Model;
use MVC\Config\Database;
use MVC\Models\CarResourceModel;
    class CarRepository {
    	private $carresource;
    	public function __construct()
	    {
	        $this->carResource = new CarResourceModel();
	    }

	    public function add($model)
	    {
	        return $this->carResource->save($model);
	    }

	    public function get($id)
	    {
	        return $this->carResource->get($id);
	    }

	    public function getAll()
	    {
	        return $this->carResource->getAll();
	    }

	    public function delete($id)
	    {
	        return $this->carResource->delete($id);
	    }
	}
?>