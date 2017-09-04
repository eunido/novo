<?php
// h() 함수를 불러 옵니다. [레시피 041]
require_once './lib/h.php';
// checkInput() 함수를 읽습니다.
require_once './lib/checkInput.php';
// 메일 전송용 sendmail() 함수를 불러옵니다.
require_once './lib/sendmail.php';



// 클릭재킹(clickjacking) 대책을 합니다.
header('X-FRAME-OPTIONS: SAMEORIGIN');

// 세션을 시작합니다.
session_start();

// POST 된 데이터를 체크합니다.
$_POST = checkInput($_POST);

// 토큰을 확인합니다.
if (isset($_POST['token']) && isset($_SESSION['token'])) {
  $token = $_POST['token'];
  if ($token != $_SESSION['token']) {
    die('잘못된 액세스입니다.');
  }
} else {
  die('잘못된 액세스입니다.');
}

// 변수에 POST 된 데이터를 대입합니다.
$name    = isset($_POST['name'])    ? $_POST['name']    : '';
$email   = isset($_POST['email'])   ? $_POST['email']   : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';

// 에러 메시지를 저장하는 배열을 초기화합니다.
$error = array();

// 이름 필드를 확인합니다.
if (trim($name) == '') {
  $error[] = '이름은 필수 항목입니다.';
} elseif (mb_strlen($name) > 100) {
  $error[] = '이름은 100문자 이내로 부탁드립니다.';
}
// 메일 주소 필드를 확인합니다.
if (trim($email) == '') {
  $error[] = '메일 주소는 필수 항목입니다.';
} elseif (mb_strlen($email) > 256) {
  $error[] = '메일 주소는 256문자 이내로 해주세요';
} else {
  $pattern = '/\A([a-z0-9_\-\+\/\?]+)(\.[a-z0-9_\-\+\/\?]+)*' .
             '@([a-z0-9\-]+\.)+[a-z]{2,6}\z/i';
  if (! preg_match($pattern, $email)) {
    $error[] = '메일 주소 형식이 올바르지 않습니다.';
  }
}
// 내용을 확인합니다.
if (trim($comment) == '') {
  $error[] = '내용은 필수 항목입니다.';
} elseif (mb_strlen($comment) > 5000) {
  $error[] = '내용은 5000문자 이내로 해주세요.';
}

// POST 된 데이터와 에러 메시지를 세션 변수에 저장합니다.
$_SESSION['name']    = $name;
$_SESSION['email']   = $email;
$_SESSION['comment'] = $comment;
$_SESSION['error']   = $error;

// 에러 수를 확인합니다.
if (count($error) > 0) {
// 에러가 있다면, 입력 폼으로 되돌립니다. [레시피 238]
  $dirname = dirname($_SERVER['SCRIPT_NAME']);
  // Windows에서는 dirname() 함수의 결과가 '/'의 경우는 '\'가 됩니다.
  $dirname = ($dirname == DIRECTORY_SEPARATOR) ? '' : $dirname;
  $uri = 'http://' . $_SERVER['SERVER_NAME'] . $dirname . '../question_korea.php';
  header('HTTP/1.1 303 See Other');
  header('Location: ' . $uri);

// 확인 화면을 표시합니다.
} else {
?>

?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="js/popWindow.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="css/popWindow.css"/>

   
</head>
<body> 
    
    
    <?php
    // h() 함수를 불러옵니다. [레시피 041]
    require_once './lib/h.php';
    // checkInput() 함수를 불러옵니다.
    require_once './lib/checkInput.php';
    // 메일 전송용 sendmail() 함수를 불러옵니다.
    require_once './lib/sendmail.php';

    // 받는이의 메일 주소
    $mailTo  = 'eunido@naver.com';
    // 메일 제목
    $newsubject = "문의 사항이 접수되었습니다.";
    mb_internal_encoding("UTF-8"); 
    $subject = html_entity_decode (  $newsubject, ENT_QUOTES, 'UTF-8' );

    // Return-Path 로 지정할 메일 주소
    $returnMail = $mailTo;

    // 클릭재킹(clickjacking) 대책을 합니다.
    header('X-FRAME-OPTIONS: SAMEORIGIN');

    // 세션을 시작합니다.
    session_start();

    // POST 된 데이터를 확인합니다.
    $_POST = checkInput($_POST);

    // 토큰을 확인합니다.
    if (isset($_POST['token']) && isset($_SESSION['token'])) {
      $token = $_POST['token'];
      if ($token != $_SESSION['token']) {
        die('잘못된 액세스입니다.');
      }
    } else {
      die('잘못된 액세스입니다.');
    }

    // 변수에 세션 변수를 대입합니다.
    $name    = $_SESSION['name'];
    $email   = $_SESSION['email'];
    $comment = $_SESSION['comment'];

    // mbstring 의 한국어 설정을 합니다.
    mb_language('ko');
    mb_internal_encoding('UTF-8');

    // 전송 결과를 알리는 변수를 초기화합니다.
    $message = '';

    // 메일의 전송과 결과를 확인합니다.
    $result = sendmail($name, $email, $mailTo, $subject, $comment, $returnMail);
    if ($result) {
      $message =  '문의사항 접수가 완료되었습니다.\n빠른 시일 내에 입력하신 이메일 주소로 연락 드리도록 하겠습니다.';
    // 세션 변수를 종료합니다.
      $_SESSION = array();
      session_destroy();
    } else {
      $message = '전송실패';
    }
    
}?>
    
    <script type="text/javascript">
        var returnValue = alert("<?php echo h($message);?>");
        document.write(returnValue);
        
    </script>
    
    
    
    <?php echo("<script>location.replace('./question_kr.php');</script>"); ?>
    
</body>

</html>


