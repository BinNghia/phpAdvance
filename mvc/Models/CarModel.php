<?php
namespace MVC\Models;
use MVC\Core\Model;
    class CarModel extends Model{
        protected $id;
        protected $name;
        protected $colour;
        protected $created_at;
        protected $updated_at;
        
        public function setId($id) {
            $this->id = $id;
        }
        
        public function getId() {
            return $this->id;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setColour($colour) {
            $this->colour = $colour;
        }

        public function getColour() {
            return $this->colour;
        }

        public function getCreatedAt() {
            return $this->created_at;
        }
        
        public function setCreateAt($created_at) {
            $this->created_at = $created_at;
        }

        public function getUpdateAt() {
            return $this->updated_at;
        }
        
        public function setUpdateAt($updated_at) {
            $this->updated_at = $updated_at;
        }

    }
?>