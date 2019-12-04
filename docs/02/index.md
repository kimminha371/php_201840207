# 수업 2019.09.04
## 수업내용 정리

![img](./images2/1.png)<br>
교수님의 계정에 들어가 daelim_2019_2을 내 계정에 복사한 후 D드라이브에 daelim_2019_2파일 생성 후 git bash를 열어 주소 복사 후 git clone (주소) . 을 입력하면 복사됨<br>
![img](./images2/2.png)<br>
결과<br>
![img](./images2/3.png)<br>
code index.md 입력하면 해당 파일 열림<br>
![img](./images2/4.png)<br>
학번과 저장소 입력 후 저장 (md에서 spacebar 두번 = br)<br>
![img](./images2/5.png)<br>
git status 입력 시 빨간 글씨 뜸 (수정했다는 뜻)<br>
![img](./images2/6.png)<br>
수정했으면 꼭 add해주기 (깃 워킹트리, 스테이징)<br>
![img](./images2/7.png)<br>
add하면 초록색 글씨로 바뀜<br>
![img](./images2/8.png)<br>
report_201840207 이라는 파일 만듬<br>
![img](./images2/9.png)<br>
git hub 서버로 올라감 (내 계정에)<br>
![img](./images2/10.png)<br>
내 계정에서 Pull request 들어가서 New pull request 후 create 누르면 교수님 계정에 수정한 게 올라감<br>
![img](./images2/11.png)<br>
Git hub에 Jinyphp 계정에 들어가서 jiny들어가서 컴포저 다운로드 <br>
cmd 창에 composer 입력해서 다운로드<br>
![img](./images2/12.png)<br>
d 드라이브에 jiny파일 생성 후 gitbash 실행 <br>
설치관리자에 있는 명령어 복사 후 gitbash에 복사해서 설치한다.<br>
![img](./images2/13.png)<br>
git bash에 jiny new myweb하고 다운로드 완료되면 myweb이라는 파일 생성됨<br>
![img](./images2/14.png)<br>
myweb파일로 들어간 후 php –S localhost:8000을 입력해 서버를 연 다음 localhost:8000에 들어가면 웹사이트 뜸<br>
![img](./images2/15.png)<br>
Terminal에 php –S localhost:8000입력해서 서버 열어준 후 chrome 창에서 열어줌<br>
![img](./images2/16.png)<br>
phpinfo()하면 화면에 저렇게 뜸<br>
![img](./images2/17.png)<br>
Php에서는 문자열을 합할 때 ‘.’을 쓴다<br>
![img](./images2/18.png)<br>
함수 쓸 때는 const랑 define을 쓴다.<br>
![img](./images2/19.png)<br>
모든 함수 다 나옴<br>
![img](./images2/20.png)<br>
중복해서 사용할 수 없음 , __LINE__ 은 코드에서 몇번째 줄인지 알려줌<br>
![img](./images2/21.png)<br>
page.php<br>
![img](./images2/22.png)<br>
page.html<br>
![img](./images2/23.png)<br>
Php에 코드를 이렇게 작성하면 html에 있는 내용이 그대로 화면에 출력된다.<br>
![img](./images2/24.png)<br>
$body = str_replace("{(daeilm)}", "대림이", $body);<br>
이 코드를 쓰면 html파일에 {(daelim)}을 대림이로 바꿔서 출력됨<br>
![img](./images2/25.png)<br>
코드를 저렇게 작성하고 창을 띄우면 안녕하세요만 나옴<br>
![img](./images2/26.png)<br>
주소창에 ?name=대림이를 쓰면 저렇게 나옴<br>
만약 $_GET[‘name’]에서 name이 아닌 v1으로 바꾼다면 주소창에도 ?v1=대림이로 바꿔야 한다.<br>
![img](./images2/27.png)<br>
값을 두개를 넣고 싶다면 주소창에 &를 넣어주면 된다. (?v1=김&v2=민하)<br>
![img](./images2/28.png)<br>
Page.html, page.php php_201840207로 옯긴 후 터미널 열어서 git add . 입력<br>
![img](./images2/29.png)<br>
add 한 후 commit<br>
![img](./images2/30.png)<br>
push하려고 할 때 저렇게 뜨면 pull부터 해준 다음 push 해주면 됨<br>
![img](./images2/31.png)<br>
.htaccess 파일을 php_201840207파일에 옮겨준다.<br>
![img](./images2/32.png)<br>
Index.php 파일을 만들어 준 후 주소창에 아무거나 써넣으면 내가 처음이야가 나옴<br>
![img](./images2/33.png)<br>
$_SEVER[‘REQUEST_URI’]를 쓰면 도메인 뒤에 쓰여있는 것이 그대로 출력됨<br>
![img](./images2/34.png)<br>
php_201840207에서 터미널을 열고 php –S localhost:8000 –t ./public으로 서버를 열어줌 <br>
Public이라는 폴더를 만들고 그 안에 .htaccess파일과 index.php파일을 옮긴 다음 저렇게 코드를 작성하고 주소창에 도메인 뒤에 hello를 쓰면 화면에 위의 사진과 같이 나옴<br>
![img](./images2/35.png)<br>
Startbootstrap.com에서 템플릿 다운받은 후 php_201840207에 압축 푼 다음 파일 이름을 theme로 바꿈<br>
![img](./images2/36.png)<br>
Index.php에 저렇게 코드를 입력하면 화면에 저렇게 나옴<br>
![img](./images2/37.png)<br>
Vendor랑 css파일을 public으로 옮겨준 다음 index.html 코드에서 css와 vendor경로 앞에 /를 넣어주면 화면에 저렇게 뜸<br>
![img](./images2/38.png)<br>
Index.html에서 Jumbotron Header부분을 잘라서 hello.html에 붙여넣은 다음 잘라낸 부분에 {(main)}을 써넣는다.<br>
![img](./images2/39.png)<br>
Index.php에 코드를 저렇게 쓰고 주소창에 aaa/hello를 넣으면 index.html에 {(main)}에 hello.html코드가 들어가서 화면 위에 헤더가 표시됨<br>
![img](./images2/40.png)<br>
파일이 존재하면 화면에 출력, 존재하지 않으면 공백으로 처리<br>
![img](./images2/41.png)<br>
Home.html파일에 hello.html의 코드를 붙여넣기 한 다음 제목을 처음 페이지로 바꾼 후 index.php의 코드를 저렇게 변경하면 화면에 저렇게 뜸<br>