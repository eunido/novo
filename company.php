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
        <link rel="stylesheet" href="./css/company_style.css">
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
                    <div class="name_txt"><span style="font-weight:500;">회사 소개&nbsp;</span>About Us</div>
                </div>                
                
                <div id="info">
                    <p class="info_txt">
                        <span style="font-size:40px;">저희&nbsp;</span><span style="font-size:40px;font-weight:bold;">씨엔엘은</span><br>
                        앞선 품질과 기술력으로 전자담배 시장을 선도하는 액상 전문 회사입니다.<br><br>
                        우수한 전문 연구진을 바탕으로 연구개발에 집중하여 고객의 니즈를<br>
                        충족시킬 수 있는 우수한 품질의 제품의 개발, 생산에 최선을 다하겠습니다.<br><br>
                        건강한 생명의 미래를 열어갑니다.
                    </p>
                    <ul class="graph">
                        <li>
                            <div class="circle_line"></div>
                        </li>
                        <li class="circle_graph">
                            <div class="circle">
                                <p>
                                    헬스케어<br>제품 개발
                                </p>
                            </div>
                        </li>
                        <li class="circle_graph">
                            <div class="circle">                                        
                                <p>
                                    금연<br>제품 개발
                                </p>
                            </div>
                        </li>
                        <li class="circle_graph">
                            <div class="circle">                                                                       
                                <p>
                                    전자담배 액상<br>개발 및 수출
                                </p>
                            </div>
                        </li>

                    </ul><!--graph-->
                    <div class="graph_logo">
                        <img class="logo2" src="./img/logo_blue.png" alt="logo2">
                    </div>                           

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