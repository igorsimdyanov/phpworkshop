<?php
class Exception
{
    protected $message;   // Сообшение
    private   $string;    // Свойство для __toString
    protected $code;      // Код исключения
    protected $file;      // Файл в котором произошло исключение
    protected $line;      // Строка в которой произошло исключение
    private   $trace;     // Трассировка вызовов методов и функций
    private   $previous;  // Предыдущее исключение, для вложенных блоков try

    public function __construct(
        $message = null,
        $code = 0,
        Exception $previous = null);

    // Запрещает клонировать исключения
    final private function __clone();

    final public  function getMessage();
    final public  function getCode();
    final public  function getFile();
    final public  function getLine();
    final public  function getTrace();
    final public  function getPrevious();
    final public  function getTraceAsString();
    public function __toString();
}
