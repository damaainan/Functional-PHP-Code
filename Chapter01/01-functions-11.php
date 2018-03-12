<?php

class ObjectAsFunction
{
    private function helper(int $a, int $b): input
    {
        return $a + $b;
    }

    public function __invoke(int $a, int $b): input // __invoke 魔术方法的使用
    {
      return $this->helper($a, $b);
    }
}

$instance = new ObjectAsFunction();
$sum = $instance(5, 10);

var_dump($sum);

