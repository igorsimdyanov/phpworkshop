<?php
class User
{
    private $first_name;
    private $last_name;
    private $email;
    private $password;

    public function __construct(
         $email,
         $password,
         $first_name = null,
         $last_name = null)
    {
        $this->first_name = $first_name;
        $this->last_name  = $last_name;
        $this->email      = $email;
        $this->password   = $password;
    }

    public function __get($index)
    {
        if (isset($this->$index)) {
            return $this->$index;
        } else {
            throw new Exception("Атрибут $index не существует");
        }
    }
    public function __set($index, $value)
    {
      if (isset($this->$index)) {
          $this->$index = $value;
      }
      else {
          throw new Exception("Атрибут $index не существует");
      }
    }
}
