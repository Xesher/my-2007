<?php
class person {
    public $name;
    public $age;
    public $job;
    function __construct($name, $age, $job) {
        $this->name=$name;
        $this->age=$age;
        $this->job=$job;
        echo $this->huy(); 
        
    }  
    function huy(){
        return "<h2>Проверьте правильность</h2>
         Ваше имя:<strong> {$this->name}</strong> <br />
         Ваш возраст: {$this->age}<br />
         Ваша проффесия: {$this->job}<hr />  ";
         
    }
}
$max= new person("Максим", 19, "web-designer");
$vitya= new person ("Виктор", 19, "web-designer")




?>