<?php
class right //선언
{
    public $name;
    public function greeting()
    {
        echo "right hello : ". $this->name ."<br>";
        return $this;
    }

    public function daelim()
    {
        echo "대림대학교";
        return $this;
    }

    public function fool()
    {
        echo "너는 바보야<br>";
        return $this;
    }

    public function bar()
    {
        echo "나도 바보야<br>";
    }
}