<?php
class frog extends Animal
{
    public $jump;
    public function jump()
    {
        return $this->jump = "hop hop";
    }
}
?>