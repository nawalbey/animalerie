<?php

//creer la classe utilisateur avec les proprietes:

class AnimalClass
{
    private $id_animal;
    private $type;
    private $race;
    private $name;

    public function __construct($id_animal, $type, $race, $name)
    {
        $this->id_animal = $id_animal;
        $this->type = $type;
        $this->race = $race;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getRace()
    {
        return $this->race;
    }

    public function setrace($race)
    {
        $this->race = $race;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setname($name)
    {
        $this->name = $name;
    }





}