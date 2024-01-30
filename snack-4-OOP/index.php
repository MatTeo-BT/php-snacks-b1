<!-- Creare un nuovo oggetto Persona con un metodo setAge()
 che cambia il valore della proprieta' age della classe
  Persona, che accetti esclusivamente un numero intero. 
  Se il numero inserito come argomento non dovesse essere un 
  numero intero: allora lanciare un'eccezione! -->
<?php
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->setAge($age);
    }

    public function setAge($age)
    {
        if (!is_int($age)) {
            throw new exception('Type a whole number.');
        }

        $this->age = $age;
    }
}