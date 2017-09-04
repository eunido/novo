<?php
// h( ) 함수를 불러 옵니다. [레시피 041]
require_once './lib/h.php';

// 클릭재킹(clickjacking) 대책을 합니다.
header('X-FRAME-OPTIONS: SAMEORIGIN');

// 세션을 시작합니다.
session_start();

// 고정 토큰를 생성해 세션 변수에 저장합니다. 
// 폼의 Hidden 필드에서 출력합니다.
if (! isset($_SESSION['token'])) {
  $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
}
$token = $_SESSION['token'];
?>

<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
	<title>NOVO</title>
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" href="./css/reset.css" type="text/css">
	<link rel="stylesheet" href="./css/common.css" type="text/css">
        <link rel="stylesheet" href="./css/question_style.css" type="text/css">
        <link rel="stylesheet" href="./email/default.css" type="text/css">
        <link rel="stylesheet" href="./email/jquerysctipttop.css" type="text/css">
        <link rel="stylesheet" href="./email/style.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/header.js"></script>
	<script type="text/javascript" src="./js/common.js"></script>
        <script type="text/javascript" src="./js/QuickAccord.js"></script>
        <script>
            function fnMove(seq){
                var offset = $("#div"+seq).offset();
                $('html, body').animate({scrollTop:offset.top}, 400);
            }        
        </script>
    </head>
    <body>
        <div id="wrap">
            
            <?php include "./header.php"; ?>
            
            <div id="content">                    
                <div class="page_name">
                    <div class="name_txt"><span style="font-weight:500;">한국/문의</span>Q &amp; A</div>
                </div>                
                
                <p class="qna_txt">노보 제품에 대해 궁금한 사항이 있으면 보내주세요. <br>빠른 시일 내에 메일로 답변해 드리겠습니다.</p>
                
                <div class="container">
                    <?php
                    // 에러가 있으면 표시합니다.
                    if (isset($_SESSION['error'])) {
                      foreach ($_SESSION['error'] as $value) {
                        echo '  <span style="color:red;">' . h($value) . '</span><br>' . "\n";
                      }
                    }

                    // 3항 연산자 [레시피 025]를 사용하여 세션에 저장된 데이터가
                    // 있는 경우, 변수에 대입합니다.
                    $name    = isset($_SESSION['name'])    ? $_SESSION['name']    : '';
                    $email   = isset($_SESSION['email'])   ? $_SESSION['email']   : '';
                    $comment = isset($_SESSION['comment']) ? $_SESSION['comment'] : '';
                    ?>

                    <form id="simpleForm" action="mailform_thanks.php" method="post" class="well">
                        <div class="form-group">
                          <dl>
                            <dt><label id="labelName" for="name" class="control-label">이름(Name)</label></dt>
                            <dd><input type="text" name="name" id="name" class="form-control required"
                                value="<?php echo h($name); ?>" maxlength="100" required></dd>
                          </dl>
                        </div>
                        <div class="form-group">
                          <dl>
                            <dt><label id="labelEmail" for="email" class="control-label">메일 주소(E-mail)</label></dt>
                            <dd><input type="email" name="email" id="email" class="form-control required"
                                value="<?php echo h($email); ?>" maxlength="256" required></dd>
                          </dl>
                        </div>
                        <div class="form-group">
                          <dl>
                            <dt><label id="labelQuestion" for="comment" class="control-label">내용(Question)</label></dt>
                            <dd><textarea rows="12" cols="30" id="comment" name="comment" class="form-control required" 
                                required><?php echo h($comment); ?></textarea></dd>
                          </dl>
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <input type="hidden" name="token" value="<?php echo h($token); ?>" class="btn btn-primary">
                            <input type="submit" name="submit" value="전송" id="submitBtn" class="btn btn-primary">                            
                        </div>
                    </form>                                 
                </div> <!-- .container -->
                
                
                
                
            </div><!--#content-->
            
            <footer class="footer">
                <div class="footer_company">
                    상호명 : 씨엔엘&nbsp;&nbsp;&nbsp;&nbsp;대표자 : 이혜연&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;사업자등록번호 : 171-40-00216<br>
                    주소 : 경기도 성남시 분당구 판교로 700, E동 305호 (야탑동 151 분당테크노파크)<br>
                    Tel : 1661-0162&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax : 070-8228-4772&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail : cflavor@naver.com<br>
                    Copyright ⓒ 2017 씨엔엘. All Rights Reserved. <br>
                    <span style="color:#ff0">본 제품은 19세 미만 청소년에게 판매할 수 없습니다.</span><br>
                </div>
                <div class="footer_caution">
                    1. 노보 제품은 니코틴을 사용하고 있습니다. 2. 용도이외의 사용을 금합니다. 3. 본 제품은 금연을 위한 제품이 아닙니다. <br>
                    4. 법적연령 미만자(19세미만 청소년)에게 판매를 금지하며, 사용 또한 금지합니다. 5. 흡연 시 현기증, 구토, 설사 등 이상 <br>
                    증상이 나타나는 경우에는 즉시 사용을 중단하시고 의사와 상담하세요. 6. 유아, 어린이, 애완동물이 접근할 수 없도록 <br>
                    안전한 곳에 보관하세요. 7. 본제품은 중독성이 있는 제품입니다. 사용상 주의 하십시요. 8. 지나친 흡연은 당신의 건강을 <br>
                    해칠 수 있습니다. 일단 흡연을 하게 되면 끊기가 매우 어려우므로 주의하세요. <span style="color:#ff0">금연상담전화 1544-9030</span><br>
                </div>
            </footer>
           
        </div>
        <script type="text/javascript">initTopMenu(0,0);</script>
        <script type="text/javascript">
            $(".accordion-trigger").QuickAccord();
        </script>

        <!--<script type="text/javascript">initTopMenu(2,3);</script>-->
        <script type="text/javascript">initTopMenu(0,0);</script>
     
        </body>
</html>
