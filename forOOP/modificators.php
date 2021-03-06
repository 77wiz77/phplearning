<?php //Модификаторы доступа
 /*С помощью специальных модификаторов можно задать область видимости для свойств и методов класса. В PHP есть три таких модификатора:
  public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы
  protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников
  private: свойства и методы с данным модификатором доступны только из текущего класса
  Рассмотрим на примере. Например, у нас есть следующий класс:*/

  class User
  {
    private $privateA ="private";
    public  $publicA = "public";
    protected $protectedA = "protected";
    
    private function getPrivateMethod()
    {
        echo "private method <br />";
        echo "$this->privateA <br />";
        echo "$this->protectedA <br />";
        echo "$this->publicA <br />";
    }
    
    protected function getProtectedMethod()
    {
        echo "protected method <br />";
    }
    
    public function getPublicMethod()
    {
        echo "public method <br />";
        $this->getPrivateMethod();
    }
  }

  /*Класс определяет три свойства и три метода с разными модификаторами доступа. 
  Из любого метода этого класса мы можем обратиться к любом методу и любому свойству.
  Теперь создадим класс, производный от класса User:*/
  class Customer extends User
  {
    public function getCustomerMethod()
    {
        //echo $this->privateA; // нельзя, так как privateA - private в классе-родителе
        echo $this->protectedA;
        echo $this->publicA; 
        //$this->getPrivateMethod(); // нельзя, так как private в классе-родителе
        $this->getProtectedMethod();
        $this->getPublicMethod();
    }
  }

  /*
  Классу-наследнику доступны все свойства и методы с модификаторами public и protected, 
  но недоступны методы и свойства с модификатором private.
  Теперь рассмотрим использование класса User во внешнем коде:
  */
  $user = new User;
  // $user->getPrivateMethod(); // недоступно, так как private
  // $user->getProtectedMethod(); // недоступно, так как protected
  $user->getPublicMethod(); 
  // echo $user->privateA; // недоступно, так как private
  // echo $user->protectedA; // недоступно, так как protected
  echo $user->publicA;

  /*При использовании объектов данного класса нам доступны только публичные методы и свойства, 
  а свойства и методы с модификаторами private и protected не доступны.*/
?>