<?php 
    include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입 | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="../style/common.css">
    <link rel="stylesheet" type="text/css" href="../style/join_minor.css">
    <?php
        if($s_id){ 
        echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
            <script type=\"text/javascript\">
                alert(\"이미 로그인되어있습니다.\");
                location.href=\"../index.php\";
            </script>
        ";}
    ?>
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
</head>
<body>
    <div class="h_skip">
        <a href="#content">본문으로 바로가기</a>
        <a href="../login/login.php">로그인 바로가기</a>
        <a href="../sitemap.php">사이트맵 바로가기</a>
    </div>
    <header id="header" class="header">
        <div class="header_bottom_wrap">
            <div class="header_bottom">
                <h1><a href="../index.php">크리스피크림도넛</a></h1>
            <nav class="gnb">
                <h2 class="hide_text">메인메뉴</h2>
                <ul class="gnb_list">
                        <li class="gnb_menu">
                            <a href="../newmenu_list.php">MENU</a>
                            <ul>
                                <li><a href="../newmenu_list.php">신메뉴/인기메뉴</a></li>
                                <li><a href="../dom.php">이 달의 메뉴</a></li>
                                <li><a href="../dougnuts_list.php">도넛</a></li>
                                <li><a href="../coffee_list.php">커피/음료</a></li>
                                <li><a href="../icecream_list.php">아이스크림/프로즌</a></li>
                                <li><a href="../branding_product.php">브랜딩 제품 소개</a></li>
                            </ul>
                        </li>
                        <li class="gnb_store">
                            <a href="../homeservice.php">STORE</a>
                            <ul>
                                <li><a href="../homeservice.php">홈 서비스</a></li>
                                <li><a href="../find_store.php">매장찾기</a></li>
                                <li><a href="../store_merchants.php">가맹점모집</a></li>
                            </ul>
                        </li>
                        <li class="gnb_event">
                            <a href="../event_list.php">EVENT</a>
                            <ul>
                                <li><a href="../event_list.php">이벤트</a></li>
                                <li><a href="../partner_service.php">제휴 서비스</a></li>
                            </ul>
                        </li>
                        <li class="gnb_brand">
                            <a href="../dougnuts_theater.php">BRAND</a>
                            <ul>
                                <li><a href="../dougnuts_theater.php">도넛극장</a></li>
                                <li><a href="../brand_story.php">브랜드 스토리</a></li>
                                <li><a href="../voucher.php">상품권 구입 안내</a></li>
                            </ul>
                        </li>
                        <li class="gnb_customer">
                            <a href="../notice_list.php">CUSTOMER</a>
                            <ul>
                                <li><a href="../notice_list.php">공지사항</a></li>
                                <li><a href="../faq.php">고객의 소리</a></li>
                                <li><a href="https://www.mykkdd.com/kor?AspxAutoDetectCookieSupport=1" target="_blank">설문조사</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav><!--gnb-->
            </div><!--header_bottom-->
        </div><!--header_bottom_wrap-->
        <div class="gnb_bg"></div>
        <div class="top_menu_wrap">
            <section class="top_menu">
                <h2 class="hide_text">사용자메뉴</h2>
                    <ul class="top_menu_list">
                        <li class="tm_grade"><a href="#none">등급안내</a></li>
                        <?php
                        if(!$s_id){
                            echo "<li class=\"tm_login\"><a href=\"../login/login.php\">로그인</a></li>";
                            echo "<li class=\"tm_join\"><a href=\"join_step1.php\">회원가입</a></li>";
                        }else{
                            if($s_id=='admin'){
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"../admin/admin.php\">관리자페이지</a></li>";
                            }else{
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"mypage_coupon.php\">마이페이지</a></li>";
                            } 
                        }
                        ?>
                        <li class="tm_sitemap"><a href="../sitemap.php">사이트맵</a></li>
                        <li><a href="#">ENGLISH</a></li>
                    </ul>
                <div class="tm_grade_content">
                    <h3>L.POINT 회원 등급 안내</h3>
                        <p>우수회원 산정 기준 : 연 4회 이상 L.POINT 적립</p>
                        <p>L.POINT 취소, 환불 및 사용한 건은 반영되지 않습니다.</p>
                        <p>회원 등급은 1년간 유지됩니다.</p>
                        <p>등급 산정은 매년 3월 일부터 적용됩니다.<span class="spanblock">ex) 15년 실적 기준 <span class="bold">&rarr;</span> 16년 3월 1일 ~ 17년 2월 28일 등급 적용</span></p>
                        <p class="tm_table_title">등급별 혜택</p>
                        <table cellspacing=0 class="lpoint_table">
                            <tr class="tr_1">
                                <th>구분</th>
                                <th>혜택</th>
                            </tr>
                            <tr>
                                <th>우수회원</th>
                                <td>결제금액의 0.5% 적립</td>
                            </tr>
                            <tr>
                                <th>일반회원</th>
                                <td>결제금액의 0.3% 적립</td>
                            </tr>
                        </table>
                        <p>L.POINT 회원 등급은 롯데리아 홈페이지에서 로그인 후 확인이 가능합니다. <a href="www.lotteria.com" class="lotte_link">(www.lotteria.com)</a></p>
                        <a href="#none" class="exit">닫기</a>
                </div><!--tm_grade_content-->
            </section><!--top_menu-->
        </div><!--top_menu_wrap-->
    </header>
    
    <div id="content">
        <div class="content_wrap">
            <main class="join_content">
                <div class="join_title">
                    <h2>회원가입</h2>
                    <p>크리스피 크림에 가입하시면 다양한 서비스를 제공받으실 수 있습니다.</p>
                    <div class="join_step">
                        <dl class="step1">
                            <dt>STEP 1</dt> 
                            <dd>약관동의</dd>
                            <dd>회원인증</dd>
                        </dl>
                        <span class="step1_step2"></span>
                        <dl class="step2">
                            <dt>STEP 2</dt>
                            <dd>개인정보입력</dd>
                        </dl>
                        <span class="step2_step3"></span>
                        <dl class="step3">
                            <dt>STEP 3</dt>
                            <dd>가입완료</dd>
                        </dl>
                    </div><!--join_step-->
                </div><!--join_title-->
                <div class="join_info">
                    <h3>가입실패</h3>
                    <p class="red_txt">고객님은 14세 미만의 아동 회원이므로, 가입 하기 어렵습니다.</p>
                    <p class="txt_ex">2001년 7월 시행된 관련 법률 (정보통신망이용촉진 및 정보보호 등에 관한 법률)에 따라, 14세 미만의 어린이의 개인정보를 수집하기 위해서는 부모님(법정대리인)의 동의가 있어야 하기 때문에 추후 소중한 회원가입을 부탁드리겠습니다.<br>크리스피 크림을 이용해 주셔서 감사합니다.</p>
                    <div class="btn">
                    <button type="button" class="minor_btn" onclick="javascript:history.back();">확인</button>
                    </div>
                </div>
                
            </main>
        </div>
    </div>
       
    <div class="footer_wrap">
            <footer id="footer">
                <h2 class="hide_text">크리스피크림</h2>
                <div class="footer_top">
                    <h3 class="hide_text">약관</h3>
                        <ul>
                            <li class="footer_term"><a href="#">회사소개</a></li>
                            <li class="footer_term"><a href="#">채용정보</a></li>
                            <li class="footer_term"><a href="#">이용약관</a></li>
                            <li class="footer_term"><a href="#"><span>개인정보처리방침</span></a></li>
                            <li class="footer_term"><a href="#">영상정보 처리기기 운영 및 관리 방침</a></li>
                            <li class="footer_term"><a href="#">이메일무단수집거부</a></li>
                            <li class="footer_term_last"><a href="#">CONTACT US</a></li>
                        </ul>
                </div>
                <div class="family_site">    
                    <h3><a href="#none">family site</a></h3>
                    <ul>
                        <li><a href="#none">롯데그룹</a></li>
                        <li><a href="#none">LOTTE GRS</a></li>
                        <li><a href="#none">롯데리아</a></li>
                        <li><a href="#none">엔제리너스 커피</a></li>
                        <li><a href="#none">L.POINT</a></li>
                        <li><a href="#none">롯데채용센터</a></li>
                        <li><a href="#none">롯데제과</a></li>
                        <li><a href="#none">롯데칠성음료</a></li>
                        <li><a href="#none">롯데푸드</a></li>
                    </ul>
                    <a href="#none" class="btn_go">GO</a>
                </div><!--family_site-->
                
                <div class="footer_txt">
                    <div class="line1">
                        <address class="after">서울특별시 용산구 한강대로71길 47</address>
                        <p>대표문의 : 02-709-1114 (가맹문의, 행사안내 등)</p>
                    </div>
                    <div class="line2">
                        <p class="after">고객지원센터 080-023-9776 (고객불만사항 등)</p>
                        <p class="after">사업자번호 : 106-81-23498</p>
                        <p>대표자 : 남익우</p>
                    </div>
                    <p class="copyright">COPYRIGHT 2013 KRISPY KREME COUGNUTS.ALL RIGHTS RESERVED</p>
                </div>
            </footer>
        </div><!--footer_wrap-->
</body>
</html>