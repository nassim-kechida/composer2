<?php
namespace App\wcs;

class Hello {

    public function __construct() {
        $this->talk();
    }

    public function talk():void {
        echo "hello world";
    }
}
?>