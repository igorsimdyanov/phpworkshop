<?php
$collection = new ArrayObject(new class {
    private $first = 'первый';
    public $second = 'второй';
    public $third = 'третий';

    public function __construct()
    {
        $this->fourth = 'четвертый';
    }
});

echo $collection['second']; // второй
echo '<br />';

foreach($collection as $key => $value) {
    echo "Элемент с индексом $key и значением $value<br />";
}
