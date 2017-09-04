

<?php
// h() 함수를 불러 옵니다. [레시피 041]
require_once './lib/h.php';
// checkInput() 함수를 읽습니다.
require_once './lib/checkInput.php';

// 클릭재킹(clickjacking) 대책을 합니다.
header('X-FRAME-OPTIONS: SAMEORIGIN');

// 세션을 시작합니다.
session_start();

// POST 된 데이터를 체크합니다.
$_POST = checkInput($_POST);


// 토큰을 확인합니다.
/*
if (isset($_POST['token']) && isset($_SESSION['token'])) {
  $token = $_POST['token'];
  if ($token != $_SESSION['token']) {
    die('잘못된 액세스입니다.');
  }
} else {
  die('잘못된 액세스입니다.');
}*/

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
<!DOCTYPE html>
<html class="webkit safari chrome win" lang="ko">
<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery.masonry.js"></script>
	<script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="./js/idangerous.swiper-2.1.min.js"></script>
	<script type="text/javascript" src="./js/jquery.anchor.js"></script>
	<script type="text/javascript" src="./js/header.js"></script>
	<script type="text/javascript" src="./js/common.js"></script>
	<script type="text/javascript" src="./js/top_navi_js.js"></script>
        <script src="./email/bootstrap.min.js"></script>
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/common.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/question_style.css" />
        <link rel="stylesheet" type="text/css" href="./email/default.css">
        <link rel="stylesheet" type="text/css" href="./email/jquerysctipttop.css">
        <link rel="stylesheet" type="text/css" href="./email/style.css">
        <link rel="stylesheet" type="text/css" href="./email/bootstrap.min.css">
        <title>NOVO LIQUID</title>
</head>
<body style="background:#f9f8f6;">
    <div id="confirmwrap">
        <div id="wrap">
            <?php include "./header.php"; ?>
            <section>    
                <article>
                    <div id="title_bg"></div>
                    <div id="title">
                        <p>연락처</p>
                        <div class="title_line"></div>
                        <p>입력한 내용 확인</p>
                    </div>
                </article>
                <article class="confirm">
                    <div class="container" style="position:relative; margin:0 auto; top:100px;">
                        
                        <table>
                            <tbody>
                                <tr>
                                    <td style="width:80px;">
                                        <div class="form-group"><label style="color:#0014ad;" class="control-label">Name</label></div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label><?php echo h($name);?></label></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group"><label style="color:#0014ad;" class="control-label">Email</label></div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label><?php echo h($email);?></label></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top;">
                                        <div class="form-group"><label style="color:#0014ad;" class="control-label">Message</label></div>
                                    </td>
                                    <td style="display:block;">
                                        <div class="form-group"><label><?php echo $comment = nl2br($comment); h($comment);?></label></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        

                        <div class="form-group" style="height:34px; position:relative; text-align:center; top:100px;">
                            <ul> 
                                <li style="display:inline-block; margin-right:20px;">
                                  <form action="./question_korea.php" method="post">
                                      <input type="submit" name="back" value="Back" class="btn btn-primary" >
                                  </form>  
                                </li>
                                <li style="display:inline-block;">
                                  <form action="./mailform_thanks.php" method="post">
                                      <input type="hidden" name="token" value="<?php echo h($token);?>">
                                      <input type="submit" name="submit" value="Submit" class="btn btn-primary" >
                                  </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </section>
            
            <footer class="mailform">
                <?php include "footer.php"; ?>
            </div>
    </div>
 
    <!--<script type="text/javascript">initTopMenu(2,3);</script>-->
    <script type="text/javascript">initTopMenu(0,0);</script>
    
    <!-- <div style='float:left; text-align:center;'>RUN TIME : 0.006382942199707<br></div> -->

</body>
</html>
<?php
}
/* ?>종료 태그 생략 [레시피 001] */
