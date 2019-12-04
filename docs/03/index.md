# 수업 2019.09.11
## 수업내용 정리

![img](./images3/1.png)<br>
Live server 다운로드<br>
![img](./images3/2.png)<br>
Script 폴더 만들고 그 안에 hello.html 생성 후 탐색기에서 hello.html 실행<br>
![img](./images3/3.png)<br>
위와 같이 하기 귀찮으면 마우스 오른쪽 클릭 후 open with live server 누르면 실행됨<br>
![img](./images3/4.png)<br>
자바스크립트가 body 요소의 일부를 제어를 하려고 할 때 아직 브라우저가 해석이 되지 않은 상태에서 먼저 자바스크립트 코드가 실행이 될 수도 있기 때문에 자바스크립트 코드를 바디의 종료태그 앞에 작성하는 경우가 많다.<br>
![img](./images3/5.png)<br>
Script.js파일을 따로 만들어서 hello.html에 src 코드를 써서 연결해주면 안녕하세요. 가 나온다.<br>
![img](./images3/6.png)<br>
(F12-개발자 도구 실행) console.log를 쓰면 크롬 콘솔창에서 실행되는 것을 볼 수 있다.<br>
![img](./images3/7.png)<br>
Console.log(“안녕하세요.”) 실행화면 - 콘솔모드에서도 바로 실행이 가능하다.<br>
![img](./images3/8.png)<br>
콘솔모드에 document.write를 쓰면 화면에도 출력된다.<br>
![img](./images3/9.png)<br>
Alert를 쓰면 메시지 창이 뜬다.<br>
자바스크립트 파일명에 .min이라는 단어가 포함되어 있는 것이 있는데 이 파일에서는 명령을 해석하는 과정에서 공백은 제외된다. 소스코드에서 명령 사이에 있는 공백을 제거하여 크기를 줄인 파일을 말한다.<br>
![img](./images3/10.png)<br>
Node.js 다운<br>
![img](./images3/11.png)<br>
설치 다 하면 path환경변수에 있는지 확인<br>
![img](./images3/12.png)<br>
git bash에서 실행한 화면<br>
![img](./images3/13.png)<br>
gitbash에서 실행 화면<br>
자바스크립트는 변수 선언할 때 $를 붙이지 않아도 됨 붙여도 상관없음<br>
![img](./images3/14.png)<br>
Settings – features – terminal – edit in settings.json을 열어서 위와 같이 작성하면 바로 터미널에서 gitbash 사용가능하다.<br>
![img](./images3/15.png)<br>
터미널에서 실행한 화면<br>
![img](./images3/16.png)<br>
Js 파일과 php 파일 실행 화면<br>
Js, php변수명은 숫자로 시작할 수 없음 (_은 처음에 사용가능)<br>
![img](./images3/17.png)<br>
변수명 대소문자 구분<br>
![img](./images3/18.png)<br>
소수 사용가능<br>
![img](./images3/19.png)<br>
0을 붙이면 문자에서 첫번째 문자가 나옴<br>
![img](./images3/20.png)<br>
\n을 쓰면 다음 줄에 출력됨<br>
![img](./images3/21.png)<br>
변수명앞에 아무것도 안써도 상관없지만 var, let 써주는게 좋다.<br>
![img](./images3/22.png)<br>
변수는 다른 변수의 값을 이용하여 입력을 할 수 있다.<br>
값이 복사되어 저장이 됨 이후 원본 변수의 값을 변경하더라도 복사된 값은 변함이 없음<br>
![img](./images3/23.png)<br>
Js는 typeof php는 var_dump를 쓰면 문자열인지 숫자형인지 알 수 있음<br>
상수 선언할 때 이름을 대문자로 하고 php에서는 const, define() js에서는 const를 사용한다.<br>
![img](./images3/24.png)<br>
![img](./images3/25.png)<br>
Git commit – esc + I – 파일명 – esc+:wq<br>
![img](./images3/26.png)<br>
![img](./images3/27.png)<br>
a값을 바꾸면 b값도 바뀜<br>
![img](./images3/28.png)<br>
intval - int형으로(정수로) 출력<br>
![img](./images3/29.png)<br>
1씩 더하는 3가지 방법<br>
![img](./images3/30.png)<br>
a—는 일단 a에 5를 대입한 후 -1하기 때문에 5가 나온다.<br>
![img](./images3/31.png)<br>
if(조건) – 조건이 참이면 {}안에 있는거 실행 거짓이면 else 실행<br>
![img](./images3/32.png)<br>
if에 있는 조건에 맞지않고 else if()조건에 맞으면 실행<br>
![img](./images3/33.png)<br>
&&은 조건이 다 맞아야 실행한다. ||은 조건중에 하나만 맞으면 된다.<br>
![img](./images3/34.png)<br>
n이 2이면 둘 실행, 1이면 하나 실행 break가 실행되면 switch문 밖으로 나감<br>
![img](./images3/35.png)<br>
3항 연산자 조건이 참이면 앞에꺼 실행<br>
![img](./images3/36.png)<br>
![img](./images3/37.png)<br>
![img](./images3/38.png)<br>
3개 다 같은 결과<br>
![img](./images3/39.png)<br>
$i가 2면 아니야 실행하고 빠져나옴<br>
![img](./images3/40.png)<br>
$i를 2로 나눴을 때 나머지가 0이면 짝수 실행<br>
![img](./images3/41.png)<br>
continue를 쓰면 그 문은 실행하지 않고 바로 else로 넘어감<br>
![img](./images3/42.png)<br>
![img](./images3/43.png)<br>
디렉토리 출력<br>
![img](./images3/44.png)<br>
.과 ..제외한 파일들 출력<br>
![img](./images3/45.png)<br>
foreach 사용<br>
![img](./images3/46.png)<br>
무한루프<br>
![img](./images3/47.png)<br>
![img](./images3/48.png)<br>
같은 결과<br>
![img](./images3/49.png)<br>
for01.php의 코드가 그대로 출력됨<br>
![img](./images3/50.png)<br>
![img](./images3/51.png)<br>
$를 읽어올때마다 count가 1씩 늘어나서 코드에 $표시가 몇 개 있는지 출력<br>