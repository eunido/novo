<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	<title>NOVO</title>
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/common.css">
        <link rel="stylesheet" href="./css/cato_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/header.js"></script>
	<script type="text/javascript" src="./js/common.js"></script>
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
                    <div class="name_txt"><span style="font-weight:500;">카토마이저&nbsp;</span>Catomizer</div>
                </div>
                
                <div class="cato_wrap">
                    <img src="./img/cato.png" alt="cato">
                </div>
                
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
        
        
    </body>
</html>