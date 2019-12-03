<?php
//윈도우 운영체제 : 파일명 대소문자 구분없음
//리눅스 운영체제 : 파일명 대소문자 구분
include "dbconf.php";
require "database.php"; //1개
require "table.php"; //2개

$config = include "dbconf.php";
$db = new Database($config);
echo "<br>";
$query = "SHOW TABLES";
$result = $db->queryExecute($query);

$count = mysqli_num_rows($result);
for($i=0;$i<$count;$i++) {
    $row = mysqli_fetch_object($result);
    echo $row->Tables_in_php."<br>";
}
// $table = new Table($db);

// // 테이블 객체를 생성해서 연결
// //$db->setTable($table)->getTable()->createTable(); // 연결된 객체 읽기
// $db->getTable()->createTable(
//     "members2",[
//     'Last'=>"varchar(50)",
//     'First'=>"varchar(50)",
//     'Age'=>"varchar(50)"
// ]);

// if($db->isTable("members")){
//     echo "테이블이 존재합니다.";
// } else {
//     echo "테이블이 없어요";
// }

/*
//mysql 접속
$connect = new mysqli($host, $user, $passwd, $database);
// 성공 : connect_errno = 0
// 실패 : connect_errno = 1
if (!$connect->connect_errno){
    echo "DB 접속 성공이에요";
} else {
    echo "접속이 안돼요";
}

$query = "
CREATE TABLE `members` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `LastName` varchar(255),
    `FirstName` varchar(255),
    PRIMARY KEY(`id`)
    ) ENGINE=innodb default charset=utf8;
";

    if (mysqli_query($connect,$query)) {
        echo "테이블 생성 성공";
    } else{
        print "테이블 못만들었어요.";
    }

//mysqli_close($connect);
*/