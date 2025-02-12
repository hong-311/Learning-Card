<header>
    <h1><a href="<?=$next_subdomain?>/"><img src="./img/logo.png" alt="로고"></a></h1>
    <button type="button" id="menuBtn"><img src="./img/menubar.png" alt="메뉴"></button>
</header>

<div class="navBg"></div>
<nav>
    <a href="<?=$next_subdomain?>/sub1.php?categorycode=A">국민내일배움카드</a>
    <a href="<?=$next_subdomain?>/sub1.php?categorycode=B">훈련수강 신청</a>
    <a href="<?=$next_subdomain?>/sub1.php?categorycode=C">수강신청 제한</a>
    <a href="<?=$next_subdomain?>/sub1.php?categorycode=D">학습수료기준</a>
    <a href="<?=$next_subdomain?>/sub1.php?categorycode=E">재평가 관련 규정</a>
    <a href="<?=$next_subdomain?>/sub1.php?categorycode=F">FAQ</a>
</nav>
<script>
    const body = document.querySelector('body, html');
    const header = document.querySelector('header');
    const headerImg = document.querySelector('header h1 a img');
    const navBg = document.querySelector('.navBg');
    const nav = document.querySelector('nav');
    const navA = document.querySelectorAll('nav a');
    const menuBtn = document.querySelector('#menuBtn');
    const menuBtnImg = document.querySelector('#menuBtn img');
    const closeBtn = document.querySelector('#closeBtn');

    // 메인 페이지가 아닐 때 헤더 스타일 변경
    if (window.location.pathname !== '/index.php' && window.location.pathname !== '/') {
        header.style.backgroundColor = '#fff';
        headerImg.src = './img/logo.png';
        menuBtnImg.src = './img/menubar.png';
    }

    navBg.style.display = 'none';
    nav.style.display = 'none';

    // 메뉴 버튼 클릭 시 내비게이션 토글 (열기/닫기)
    menuBtn.addEventListener('click', () => {
        if (nav.style.display === 'block') {
            // 메뉴가 열려있으면 닫기
            navBg.style.display = 'none';
            nav.style.display = 'none';
            body.style.overflow = 'auto';
        } else {
            // 메뉴가 닫혀있으면 열기
            navBg.style.display = 'block';
            nav.style.display = 'block';
            body.style.overflow = 'hidden';
        }
    });

    // 내비게이션 배경을 클릭하면 메뉴 닫기
    navBg.addEventListener('click', () => {
        navBg.style.display = 'none';
        nav.style.display = 'none';
        body.style.overflow = 'auto';
    });

    // 현재 페이지에 맞는 메뉴 항목 하이라이트
    switch (window.location.search) {
        case '?categorycode=A':
            navA[0].style.color = '#002d68';     
            navA[0].style.fontFamily = 'NanumBarunGothicBold, sans-serif'; 
            break;
        case '?categorycode=B':
            navA[1].style.color = '#002d68';
            navA[1].style.fontFamily = 'NanumBarunGothicBold, sans-serif'; 
            break;
        case '?categorycode=C':
            navA[2].style.color = '#002d68';
            navA[2].style.fontFamily = 'NanumBarunGothicBold, sans-serif'; 
            break;
        case '?categorycode=D':
            navA[3].style.color = '#002d68';
            navA[3].style.fontFamily = 'NanumBarunGothicBold, sans-serif'; 
            break;
        case '?categorycode=E':
            navA[4].style.color = '#002d68';
            navA[4].style.fontFamily = 'NanumBarunGothicBold, sans-serif'; 
            break;
        case '?categorycode=F':
            navA[5].style.color = '#002d68';
            navA[5].style.fontFamily = 'NanumBarunGothicBold, sans-serif'; 
            break;
        default:
            break;
    }
</script>