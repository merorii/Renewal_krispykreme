<?php 
    include "inc/session.php"; 
    include "inc/dbcon.php";
    $today = date("Ymd");
    $sql = "select * from event where type='event' and (fdate>=$today or fdate is null) order by sdate desc limit 3;";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="viewport" content="width=1200">
    <title>크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/common.css">
   <!-- 포트폴리오 페이지에서 PC버전을 보여주기 위해 주석처리함 -->
   <!-- 
    <script type="text/javascript">
        var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
        for (var word in mobileKeyWords){
            if (navigator.userAgent.match(mobileKeyWords[word]) != null){
                location.href = "./mobile";
                break;
            }
        }
    </script>
    -->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/logout.js"></script>
    <script src="js/mainpopup.js"></script>
</head>
<body>
    <div class="h_skip">
        <a href="#content">본문으로 바로가기</a>
        <a href="login/login.php">로그인 바로가기</a>
        <a href="sitemap.php">사이트맵 바로가기</a>
    </div>
    
    <header id="header" class="header">
        <div class="header_bottom_wrap">
        <div class="header_bottom">
            <h1><a href="index.php">크리스피크림도넛</a></h1>
            <nav class="gnb">
                <h2>메인메뉴</h2>
                <ul class="gnb_list">
                        <li class="gnb_menu">
                            <a href="newmenu_list.php">MENU</a>
                            <ul>
                                <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
                                <li><a href="dom.php">이 달의 메뉴</a></li>
                                <li><a href="dougnuts_list.php">도넛</a></li>
                                <li><a href="coffee_list.php">커피/음료</a></li>
                                <li><a href="icecream_list.php">아이스크림/프로즌</a></li>
                                <li><a href="branding_product.php">브랜딩 제품 소개</a></li>
                            </ul>
                        </li>
                        <li class="gnb_store">
                            <a href="homeservice.php">STORE</a>
                            <ul>
                                <li><a href="homeservice.php">홈 서비스</a></li>
                                <li><a href="find_store.php">매장찾기</a></li>
                                <li><a href="store_merchants.php">가맹점모집</a></li>
                            </ul>
                        </li>
                        <li class="gnb_event">
                            <a href="event_list.php">EVENT</a>
                            <ul>
                                <li><a href="event_list.php">이벤트</a></li>
                                <li><a href="partner_service.php">제휴 서비스</a></li>
                            </ul>
                        </li>
                        <li class="gnb_brand">
                            <a href="dougnuts_theater.php">BRAND</a>
                            <ul>
                                <li><a href="dougnuts_theater.php">도넛극장</a></li>
                                <li><a href="brand_story.php">브랜드 스토리</a></li>
                                <li><a href="voucher.php">상품권 구입 안내</a></li>
                            </ul>
                        </li>
                        <li class="gnb_customer">
                            <a href="notice_list.php">CUSTOMER</a>
                            <ul>
                                <li><a href="notice_list.php">공지사항</a></li>
                                <li><a href="faq.php">고객의 소리</a></li>
                                <li><a href="https://www.mykkdd.com/kor?AspxAutoDetectCookieSupport=1" target="_blank">설문조사</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav><!--gnb-->
        </div><!--header_bottom-->
        </div>
        <div class="gnb_header_bg"></div>
        <div class="gnb_bg"></div>
        <div class="top_menu_wrap">
            <section class="top_menu">
                <h2 class="hide_text">사용자메뉴</h2>
                    <ul class="top_menu_list">
                        <li class="tm_grade"><a href="#none">등급안내</a></li>
                        <?php
                        if(!$s_id){
                            echo "<li class=\"tm_login\"><a href=\"login/login.php\">로그인</a></li>";
                            echo "<li class=\"tm_join\"><a href=\"members/join_step1.php\">회원가입</a></li>";
                        }else{
                            if($s_id=='admin'){
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"admin/admin.php\">관리자페이지</a></li>";
                            }else{
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"members/mypage_coupon.php\">마이페이지</a></li>";
                            }                        
                        }
                        ?>
                        
                        <li class="tm_sitemap"><a href="sitemap.php">사이트맵</a></li>
                        <li><a href="http://www.krispykreme.co.kr/en/">ENGLISH</a></li>
                    </ul>
                <div class="tm_grade_content">
                    <h3>L.POINT 회원 등급 안내</h3>
                        <p>우수회원 산정 기준 : 연 4회 이상 L.POINT 적립</p>
                        <p>L.POINT 취소, 환불 및 사용한 건은 반영되지 않습니다.</p>
                        <p>회원 등급은 1년간 유지됩니다.</p>
                        <p>등급 산정은 매년 3월 일부터 적용됩니다.<span class="spanblock">ex) 15년 실적 기준 <span class="bold">&rarr;</span> 16년 3월 1일 ~ 17년 2월 28일 등급 적용</span></p>
                        <p class="tm_table_title">등급별 혜택</p>
                        <table class="lpoint_table">
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
    
    <main id="content" class="content">
        <section class="main_banner">
            <h2 class="hide_text">새소식</h2>
            <ul class="banner_all">
                <li class="banner_strawberryfilled">
                    <div>스트로베리/초코 오리지널 필드</div>
                    <img class="bimg" src="images/banner_original_filled_txt.png" alt="스트로베리/초코 오리지널 필드">
                    <p><a href="newmenu.php?idx=13" class="banner_btn">자세히보기</a></p>
                </li>
                <li class="banner_milkkreme">
                    <div>크리스피 밀크 크림</div>
                    <img class="bimg" src="images/banner_milk_kreme_txt.png" alt="크리스피 밀크 크림">
                    <p><a href="newmenu.php?idx=15"><img src="images/banner_btn_green.png" alt="자세히보기"></a></p>
                </li>
                <li class="banner_miniontop"> 
                    <div>파스퇴르 아이스크림 미니온탑</div>
                    <img class="bimg" src="images/banner_miniontop_txt.png" alt="파스퇴르 아이스크림 미니온탑">
                    <p><a href="newmenu.php?idx=17"><img src="images/banner_btn_green.png" alt="자세히보기"></a></p>
                </li>
                <li class="banner_wednesday"> 
                    <div>매주 수요일 오리지널글레이즈드 1+1</div>
                    <img class="bimg" src="images/banner_wednesday_txt.png" alt="매주 수요일 오리지널글레이즈드 1+1">
                    <p><a href="newmenu.php?idx=24"><img src="images/banner_btn_white.png" alt="자세히보기"></a></p>
                </li>
            </ul>
            <div class="btn_wrap">
                <div class="btn">
                    <a href="#" class="banner_prev">이전</a>
                    <a href="#" class="banner_next">다음</a>
                </div>
            </div><!--btn_wrap-->
            <div class="pager">
                <a href="#" class="pager_c">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">3</a>
            </div>
        </section><!--main_banner-->
        <section class="event">
        <h2>EVENT</h2>
            <div class="event_list">
                <div class="event01">
                    <?php 
                         $array = mysqli_fetch_array($result);
                         $e_title=explode("/",$array["title"]);
                    ?>
                    <a href="event.php?idx=<?php echo $array['idx'];?>">
                    <img src="images/<?php echo $array['list_img'];?>" alt="">
                    <dl>
                        <dt><?php echo $e_title[0];?> <span><?php echo $e_title[1];?></span></dt>
                        <dd>기간: <?php 
                            if($array["sdate"]=="0000-00-00"){
                                echo "상시";
                            }else{
                                echo $array["sdate"]."~".$array["fdate"];
                            }
                        ?></dd>
                    </dl>
                    </a>
                </div>
                <div class="event02">
                    <?php 
                         $array = mysqli_fetch_array($result);
                         $e_title=explode("/",$array["title"]);
                    ?>
                    <a href="event.php?idx=<?php echo $array['idx'];?>">
                    <img src="images/<?php echo $array['list_img'];?>" alt="">
                    <dl>
                        <dt><?php echo $e_title[0];?> <span><?php echo $e_title[1];?></span></dt>
                        <dd>기간: <?php 
                            if($array["sdate"]=="0000-00-00"){
                                echo "상시";
                            }else{
                                echo $array["sdate"]."~".$array["fdate"];
                            }
                        ?></dd>
                    </dl>
                    </a>
                </div>
                <div class="event03">
                    <?php 
                         $array = mysqli_fetch_array($result);
                         $e_title=explode("/",$array["title"]);
                    ?>
                    <a href="event.php?idx=<?php echo $array['idx'];?>">
                    <img src="images/<?php echo $array['list_img'];?>" alt="">
                    <dl>
                        <dt><?php echo $e_title[0];?> <span><?php echo $e_title[1];?></span></dt>
                        <dd>기간: <?php 
                            if($array["sdate"]=="0000-00-00"){
                                echo "상시";
                            }else{
                                echo $array["sdate"]."~".$array["fdate"];
                            }
                        ?></dd>
                    </dl>
                    </a>
                </div>
            </div><!--event_list-->
<!--
            <div class="event_list">
                <div class="event01">
                    <a href="#">
                    <dl>
                        <dt>밀크 미니콘 더즌 구매시, <span>시그니처 쇼퍼백 2,000원</span></dt>
                        <dd>2020-05-15 ~ 2020-06-30</dd>
                    </dl>
                    </a>
                </div>
                <div class="event02">
                    <a href="#">
                    <dl>
                        <dt>달콤한 수요일 <span>오리지널 글레이즈드 하프더즌 1+1</span></dt>
                        <dd>매주 수요일</dd>
                    </dl>
                    </a>
                </div>
                <div class="event03">
                    <a href="#">
                    <dl>
                        <dt>매장 또는 롯데잇츠에서 L.Pay 사용시 <span>최대 1천P 페이백!</span></dt>
                        <dd>2020-05-01 ~ 2020-05-31</dd>
                    </dl>
                    </a>
                </div>
            </div>
-->
            <a href="event_list.php" class="event_more">진행 이벤트 더보기</a>
        </section><!--event-->
        <section class="dnc">
            <h2 class="hide_text">커피&amp;도넛 메뉴</h2>
            <ul>
                <li class="coffee">
                    <span class="line"></span>
                    <p>달콤한 도넛과 <span>조화를 이루는 커피와</span><span>음료의 맛을 느껴보세요</span></p>
                    <a href="coffee_list.php">커피&amp;음료 바로가기</a>
                </li>
                <li class="dougnuts">
                    <span class="line"></span>
                    <p>다양한 <span>크리스피크림 도넛의</span><span>세계로 초대합니다</span></p>
                    <a href="dougnuts_list.php">도넛 바로가기</a>
                </li>
            </ul>
        </section><!--dnc-->
        <section class="dom">
            <h2>DOGNUTS OF MONTH</h2>
                <ul>
                    <li class="cookie">
                        <img src="images/dom_cookie.png" alt="쿠키 밀크케잌 미니콘">
                        <p>쿠키 밀크케잌 미니콘</p>
                        <a href="dom.php">자세히보기 +</a>
                    </li>
                    <li class="choco">
                        <img src="images/dom_choco.png" alt="초코 밀크케잌 미니콘">
                        <p>초코 밀크케잌 미니콘</p>
                        <a href="dom.php">자세히보기 +</a>
                    </li>
                    <li class="strawberry">
                        <img src="images/dom_strawberry.png" alt="스트로베리 밀크 미니콘">
                        <p>스트로베리 밀크 미니콘</p>
                        <a href="dom.php">자세히보기 +</a>
                    </li>
                    <li class="caramel">
                        <img src="images/dom_caramel.png" alt="카라멜 밀크 미니콘">
                        <p>카라멜 밀크 미니콘</p>
                        <a href="dom.php">자세히보기 +</a>
                    </li>
                    <li class="originalfilled">
                        <img src="images/dom_originalfilled.png" alt="오리지널 스트로베리 필드">
                        <p>오리지널 스트로베리 필드</p>
                        <a href="dom.php">자세히보기 +</a>
                    </li>
                </ul>
        </section><!--dom-->
        <section class="delivery">
        <h2>딜리버리서비스</h2>
            <p>크리스피크림 도넛이 생각날 때, <span>이제 크리스피 크림 도넛을 집에서 즐겨보세요!</span></p>
            <a href="#">홈서비스 주문 가능 매장 리스트 확인하기 ></a>
        </section><!--delivery-->
        <section class="sns">
            <h2>SNS</h2>
                <ul>
                    <li class="sns_facebook"><a href="https://www.facebook.com/kkdkorea1937" target="_blank">facebook</a></li>
                    <li class="sns_twitter"><a href="https://twitter.com/krispykremekr" target="_blank">twitter</a></li>
                    <li class="sns_instagram"><a href="https://www.instagram.com/krispykremekr/" target="_blank">instagram</a></li>
                </ul>
        </section><!--sns-->
    </main>
       
    <div class="top_btn"><a href="#none">맨 위로</a></div>
    <footer class="footer_wrap">
            <div id="footer">
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
                <p class="validator">
                    <a href="http://validator.kldp.org/check?uri=referer"
                      onclick="this.href=this.href.replace(/referer$/,encodeURIComponent(document.URL))">
                    <img src="//validator.kldp.org/w3cimgs/validate/html5-blue.png" alt="Valid HTML 5" height="15" width="80">
                    </a>
                </p>
            </div>
        </footer><!--footer_wrap-->
        
    <div id="showimage" style="z-index:99;position:absolute;width:322px;left:50px;top:150px;">
      <script>
        function closeWin(){
           var chk = document.getElementById('Notice')
           if ( chk.checked ) {
                 setCookie( "Notice", "done" , 1); //1이란 숫자는 1일간 안보임을 뜻합니다. 날짜는 자신에 맞게 수정하세요
            }
        }
       if ( getCookie( "Notice" ) == "done" ) {
           hidebox();
       }
     </script>
        <div class="pop_wrap">
        <div class="popup">
              <img src="images/popup.png" alt="본 사이트는 상업적 목적이 아닌 개인 포트폴리오 용도로 만들어졌습니다. 홈페이지의 일부 내용과 기타 이미지 등은 그 출처가 따로 있음을 밝힙니다.">
        </div>
         <div style="font-size:12px;text-align:center;color:#222;" class="pop_close">
           <input type="checkbox" name="Notice" id="Notice" value="" title="오늘은 이창을 열지 않음 선택상자"><label for="Notice">오늘은 이창을 열지 않음.</label>
         <a href="#" onclick="closeWin();hidebox();return false;"> [닫기] </a>
          </div>
          </div>
    </div>
        
</body>
</html>

