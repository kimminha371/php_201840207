<?php
// 1단계 선언
class foo
{
    // 변수, 함수
    public $name; //프로퍼티
    public static $daelim = "대림대학교";

    public function hello()
    {
        echo self::$daelim.">> ";
        echo $this->name. "짱이에요<br>"; 
        return $this;
    }

    public function greeting()
    {
        echo "반가워요<br>"; 
        return $this;
    }
}

// 2단계 생성
$obj1 = new foo;
$obj1->name = "대림이"; // 객체 프로퍼티 값을 지정
$obj1->hello();

$obj2 = new foo;
$obj2->name = "대숙이";
$obj2->hello();

foo::$daelim = "우주최강";
$obj1->hello();
$obj2->hello();

/*
// 3단계 호출
$result = $obj->hello(); //$this
// $result == $this
$result->hello()->greeting();
//result->hello();
//result->greeting(); 이 코드와 같음
echo "===<br>";

$obj2 = new foo;
$obj2->name = "대숙이";
$result = $obj2->hello();

// 1단계 선언
class bar
{
    public static $name; //정적 변수(static)
    //static은 인스턴스화를 하지않아서 메모리를 할당하지않아 this쓸 수 없음
    public static function username() 
    {
        echo self::$name. "입니다.";
    }
}

bar::$name = "고정값"; //static 호출할때는 -> 대신에 ::사용
bar::username();
*/