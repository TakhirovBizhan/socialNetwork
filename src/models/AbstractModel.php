<?php

abstract class AbstactModel {

    protected $id;

    public function getId()  {
        return $this->id;
    }
    public function __set($name, $value){
        $property = $this->underscoreToCamelcase($name);
        $this->$property = $value;
    }

    private function underscoreToCamelcase($name){
        return lcfirst(str_replace('_', '', ucwords($name, '_')));
    }

    

}