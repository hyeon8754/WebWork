# Week 6 PHP Assignments

## [6-1](http://webprogram.dothome.co.kr/1113/6-1.php)

## [6-2](http://webprogram.dothome.co.kr/1113/6-2.php)

## [6-3](http://webprogram.dothome.co.kr/1113/6-3.php)

1. **동적 웹페이지와 정적인 웹페이지의 차이:**
   - **정적인 웹페이지:** 미리 저장된 파일이 그대로 전달되어 고정된 웹페이지를 보여줌.
   - **동적인 웹페이지:** 사용자의 요청을 해석하여 서버에서 데이터를 가공한 후 생성되는 웹페이지를 보여줌.

2. **PHP에 설치된 모듈(20개)은 어떤 것이 있는지:**  
   - 설치된 모듈 목록을 알기 위해서는 서버의 PHP 설정 또는 phpinfo() 함수를 사용해야 합니다.

3. **PHP에서 사용되는 스크립트 엔진에 대해 기술하시오:**  
   - PHP는 Zend 엔진을 사용합니다. Zend 엔진은 1999년 php4 버전에서 처음 등장했으며, 매우 최적화된 모듈 백엔드로서 C로 개발되었으며 최초로 PHP 밖의 애플리케이션에 사용할 수 있었고 메모리 및 리소스 관리, PHP 언어의 기타 표준 서비스를 제공합니다. 최신 버전은 Zend 엔진 III입니다.

4. **웹브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때 서버는 어떤 일을 수행하는지:**
   - 도메인 이름 해석: 먼저, 브라우저는 www.abc.com 도메인을 IP 주소로 해석하기 위해 DNS 서버에 요청을 보낸다.
   - 서버 연결: 브라우저는 얻어낸 IP 주소로 서버에 직접 연결한다.
   - HTTP 요청 전송: 브라우저는 서버에게 "abc.php"라는 파일을 요청한다.
   - PHP 스크립트 실행: 서버는 받은 요청을 해석하고, 서버 상에서 위치한 "abc.php" 파일을 찾는다. 이 파일은 PHP 코드를 포함하고 있으므로, PHP 엔진이 해당 스크립트를 실행한다.
   - HTTP 응답 생성: PHP 스크립트가 실행되면서 생성된 결과물(HTML, 데이터 등)이 HTTP 응답으로 브라우저에게 전송된다.
   - 브라우저에서의 렌더링: 브라우저는 받은 응답을 해석하고, 웹 페이지를 렌더링하여 사용자에게 표시한다.

5. **call by value와 call by reference의 차이점:**
   - **Call by Value:** 함수에 인자를 전달할 때, 해당 인자의 값을 복사하여 전달. 함수 내에서 매개변수를 변경해도 원본 값에는 영향을 주지 않음.
   ```php
   function increment($num) {
    $num++;
    echo $num;
   }

   $value = 5;
   increment($value); // 출력: 6
   echo $value; // 출력: 5
   ```     
   - **Call by Reference:** 함수에 인자를 전달할 때, 해당 인자의 메모리 주소를 전달. 함수 내에서 매개변수를 변경하면 원본 값도 변경.
   ```php
   function incrementByReference(&$num) {
       $num++;
       echo $num;
   }

   $value = 5;
   incrementByReference($value); // 출력: 6
   echo $value; // 출력: 6
   ```
