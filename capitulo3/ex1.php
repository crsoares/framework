<?php

include "../framework/inspector.php";
include "../framework/core/exception.php";
include "../framework/arraymethods.php";
include "../framework/stringmethods.php";
include "../framework/base.php";

class Hello extends Framework\Base
{
    /**
     * @readwrite
     */
    protected $_world;
    
    /*public function setWorld($value)
    {
        echo "seu setter est� sendo chamado! <br />";
        $this->_world = $value;
    }
    
    public function getWorld()
    {
        echo "seu getter est� sendo chamado! <br />";
        return $this->_world;
    }*/
}

$hello = new Hello();
$hello->world = "foo";
echo $hello->world;
