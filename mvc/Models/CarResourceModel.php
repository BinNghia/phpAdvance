<?php
namespace MVC\Models;
use MVC\Core\ResourceModel;
use MVC\Models\CarModel;
    class CarResourceModel extends ResourceModel {
        public function __construct() 
        {
           parent:: _init("cars", "id", new CarModel);
        }
    }
?>