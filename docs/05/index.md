# 2019.09.25
## 수업내용 정리

![img](./images5/1.png)<br>
![img](./images5/2.png)<br>
둘다 똑같음<br>
![img](./images5/3.png)<br>
\n 하면 줄바꿈<br>
![img](./images5/4.png)<br>
![img](./images5/5.png)<br>
br은 브라우저에서 줄바꿈<br>
include하면 합쳐져서 같이 나옴<br>
![img](./images5/6.png)<br>
![img](./images5/7.png)<br>
둘이 똑같음 <br>
![img](./images5/8.png)<br>
include는 그 파일에 있는 모든 소스를 가져다쓰는 것<br>
![img](./images5/9.png)<br>
![img](./images5/10.png)<br>
오류제어연산자 ‘@’를 쓰면 hello_12.php파일이 없어도 콘솔창에 오류가 뜨지 않는다.<br>
![img](./images5/11.png)<br>
![img](./images5/12.png)<br>
Include는 파일이 없어도 실행되지만 require은 파일이 없으면 실행이 중단됨<br>
둘다 중복해서 사용가능<br>
![img](./images5/13.png)<br>
(php_201840207/hello_10.php  php_201840207/php/hello_11.php  php_201840207/php/hello/hello_12.php)<br>
(require)동일한 폴더/동일한 경로 안에 파일이 없으면 실행중단<br>
저런식으로 경로를 지정해주면 실행됨 (중요)<br>
![img](./images5/14.png)<br>
![img](./images5/15.png)<br>
Return 값은 하나만, 반환값을 받아줄 변수를 쓰고 출력<br>
![img](./images5/16.png)<br>
![img](./images5/17.png)<br>
배열을 이용하여 두개의 값을 하나의 값처럼 만들어서 반환<br>
![img](./images5/18.png) list 사용<br>
![img](./images5/19.png) include를 사용하여 실행<br>
![img](./images5/20.png) 아래에 넣으면 실행안됨<br>
![img](./images5/21.png)<br>
두번 include하면 함수명이 중복이 되어서 실행오류<br>
![img](./images5/22.png)<br>
Include_once하면 한번 include된 파일은 다시 include되지않아서 실행됨<br>
Require_once도 있음<br>
![img](./images5/23.png)<br>
함수가 존재하면 함수명이 있어요 출력 존재하지 않으면 함수 선언<br>
함수는 선언, 호출 / 클래스는 선언, 생성(인스턴스화 = 객체화), 호출<br>
![img](./images5/24.png)<br>
Class를 선언하고 생성한 후 함수 호출<br>
![img](./images5/25.png)<br>
클래스명이 다른 두 개를 선언하여 같은 이름의 함수를 호출<br>
![img](./images5/26.png)<br>
클래스 하나에 함수 여러 개 만들 수 있음 (캡슐화)<br>
![img](./images5/27.png)<br>
![img](./images5/28.png) 변수<br>
![img](./images5/29.png) 상수<br>
![img](./images5/30.png) autoload<br>
![img](./images5/31.png)<br>
![img](./images5/32.png)<br>
메소드 체인<br>
![img](./images5/33.png)<br>
인스턴스를 만들지 않아도 접근 허용 (static)<br>
정적으로 사용하면 $를 쓰고 인스턴스를 만들고 사용하려면 $제외하고 쓴다.<br>
![img](./images5/34.png)<br>
인스턴스화를 하지않으면 this를 사용할 수 없다. (static - self사용)<br>
인스턴스화를 하면 this를 사용할 수 있다.<br>
![img](./images5/35.png)<br>
![img](./images5/36.png) 정리<br>
![img](./images5/37.png)<br>
__construct -> 생성하면 자동 실행<br>
![img](./images5/38.png)<br>
![img](./images5/39.png)<br>
둘 다 결과 같음<br>
Public은 어디에서나 가져다가 쓸 수 있음 private은 해당 클래스 안에서만 접근 가능(은닉화)<br>
![img](./images5/40.png) 18번째 줄은 실행되지않음<br>
![img](./images5/41.png)<br>
Daelim을 상속받으면 daelim 안에 있는 메소드 호출 가능<br>
![img](./images5/42.png)<br>
오버라이딩 (앞에 final을 쓰면 오버라이딩 불가)<br>
![img](./images5/43.png)<br>
interface안에 있는 메소드는 무조건 만들어야 함/ 안 만들면 오류<br>
interface는 implements로 상속받음<br>
![img](./images5/44.png)<br>
추상클래스는 extends로 상속받음<br>
앞에 abstract 붙임<br>
인터페이스랑 추상클래스는 인스턴스화 불가<br>
![img](./images5/45.png) trait 혼자서 객체를 만들 수 없음(상속가능)<br>
new trait / new 추상클래스 / new 인터페이스 불가 / new 클래스 만 가능<br>
![img](./images5/46.png)<br>
![img](./images5/47.png)<br>
닉네임 설정 (namespace)<br>
![img](./images5/48.png) 별칭이 너무 길면 use를 써서 간단히 쓸 수 있음<br>
![img](./images5/49.png)<br>
![img](./images5/50.png)<br>
![img](./images5/51.png)<br>
![img](./images5/52.png) global을 쓰면 바깥에 있는 변수를 쓸 수 있음<br>
![img](./images5/53.png) 이렇게 쓸 수도 있음 <br>
![img](./images5/54.png)<br>
REQUEST_URI를 쓰면 경로 보여줌<br>