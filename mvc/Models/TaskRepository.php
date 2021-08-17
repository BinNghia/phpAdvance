<?php
namespace MVC\Models;
use MVC\Core\Model;
use MVC\Config\Database;
use MVC\Models\TaskResourceModel;
    class TaskRepository {
    	private $taskresource;
    	public function __construct()
	    {
	        $this->taskresource = new TaskResourceModel();
	    }

	    public function add($model)
	    {
	    	// die("anf");
	        return $this->taskresource->save($model);
	    }

	    public function get($id)
	    {
	        return $this->taskresource->get($id);
	    }

	    public function getAll()
	    {
	        return $this->taskresource->getAll();
	    }

	    public function delete($id)
	    {
	        return $this->taskresource->delete($id);
	    }
	}
?>