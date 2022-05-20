<?php
error_reporting(0);

class Config
{
    private $values = [
        'first' => "apple",
        'third' => "banana",
    ];

    public function getValues()
    {
        return $this->values;
    }

    public function getValue($key)
    {
        return $this->values[$key];
    }

    public function addValue($key, $value)
    {
        $this->values += [$key => $value];
    }
}

$config = new Config();

$config->addValue('second', 'mango');

echo $config->getValue('first') . PHP_EOL;
echo $config->getValue('second') . PHP_EOL;
echo $config->getValue('third') . PHP_EOL;

 ?>