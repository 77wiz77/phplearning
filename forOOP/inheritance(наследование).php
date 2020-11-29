<?php //Наслдеование
/*Наследование является одним из основных аспектов объектно-ориентированного программирования. 
Наследование позволяет переопределить функционал уже имеющихся классов в классах-наследниках. 

Если у нас есть какой-нибудь класс, в котором не хватает пары функций, 
то гораздо проще переопределить имеющийся класс, написав пару строк, чем создавать новый с нуля, переписывая кучу кода.

Чтобы наследовать один класс от другого, нам надо применить инструкцию extends. Например, унаследуем класс Customer от класса User:*/

  class User
  {
    public $name, $age;
    
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function getClassInfo()
    {
        echo "Класс User описывает пользователей<br />";
    }
    function getInfo()
    {
        echo "Имя: $this->name ; Возраст: $this->age <br />";
    }
  }
  class Customer extends User //класс Customer наследуется от User
  {
    public $account, $sum;
    
    function __construct($name, $age, $acc)
    {
        // вызов конструктора базового класс
        parent::__construct($name, $age); 
        $this->account=$acc;
        $this->sum=20;
    }
    
    // скрывает родительский метод getClassInfo()
    function getClassInfo()
    {
        echo "Класс Customer описывает клиентов <br />";
    }
    
    function getInfo()
    {
        parent::getInfo();
        echo "Номер счета $this->account ; Сумма: $this->sum <br />";
    }
  }
  
  $client = new Customer("Джон", 25, "1123400895");
  $client->getInfo();
  $client->getClassInfo();
?>