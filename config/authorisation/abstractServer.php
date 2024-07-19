<?php
abstract class AbstactServerArray {


    protected $serverArray;

    public function get($key, $default = null)  {
        return $this->serverArray[$key] ?? $default;
    }

    public function has($key)  {
        return isset($this->serverArray[$key]);
    }

    public function add(string $key, $value)  {
        $this->serverArray[$key] = $value;
    }

    public function delete(string $key)  {
        unset($this->serverArray[$key]);
    }

    public abstract function clear();

}