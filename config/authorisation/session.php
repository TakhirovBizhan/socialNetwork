<?php

class Session extends AbstactServerArray
{

    public function __construct()
    {
        session_start();
        $this->serverArray = &$_SESSION;
    }

    public function clear()
    {
        session_destroy();
        
    }
}