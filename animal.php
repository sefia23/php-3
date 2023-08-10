<?php
class animal {
    public $name;
    public $legs;
    public $cold_blooded;
    public $leg;

    public function getName() 
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name= $name;
    }
    //
    public function legs()
    {
        return $this->legs=4;
    }
    //
    public function leg()
    {
        return $this->leg=2;
    }
    //
    public function cold_blooded()
    {
        return $this->cold_blooded = 'no';
    }
}
?>