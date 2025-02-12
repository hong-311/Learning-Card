<?php
include './db.php'; 
error_reporting(E_ALL);
ini_set("display_errors", 1);

$categorycode = $_GET['categorycode']; 
$sql = "SELECT DISTINCT title FROM content WHERE categorycode = ?"; 
$params = [$categorycode];
$result = query($sql, $params)->fetch();
$category = $result['title'];

// 변수 초기화
$title = "";

if (!empty($result)) {
    $title = $result['title'];
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "./front_header.php"; ?>
    <link rel="stylesheet" href="./css/sub.css">
    <title><?php echo $title; ?></title>
    <script type="text/javascript">
        // == 마스킹코드 ==
        window.addEventListener('load', function() {
            document.getElementById('loading-mask').remove();
        });
    </script>
</head>
<body>
    <div id="loading-mask" style="position: fixed; z-index: 999; left: 0; right: 0; top: 0; bottom: 0;"></div>
    <div id="wrap">
        <?php include "./header.php"; ?>
        <main>
        <div class="section_<?php echo $categorycode; ?>">
            <?php
            if ($categorycode == 'A') {
                $sql2 = "SELECT * FROM content WHERE categorycode = ?";
                $result2 = query($sql2, [$categorycode])->fetchAll();
               echo ' <div class="ads_wrap ads_main_sm">
                    <ins class="adsbygoogle"
                        style="display: block;"
                        data-language="ko"
                        data-ad-client="ca-pub-6499164332093487"
                        data-ad-slot="3576839545"
                    ></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>';
                echo '<p class="title">' . $title . '</p>';
                echo '<div class="content1">';
              
                foreach ($result2 as $key => $val) {
                    echo '<div class="box">'; 
                    echo '<pre class="bold">' . $val['bold'] . '</pre>';
                    echo '<pre class="con">' . $val['content'] . '</pre>';
                    echo '</div>'; // 'box' div 닫기
                    echo ' <div class="ads_wrap ads_main_sm">
                    <ins class="adsbygoogle"
                        style="display: block;"
                        data-language="ko"
                        data-ad-client="ca-pub-6499164332093487"
                        data-ad-slot="3576839545"
                    ></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>';
                }
                
                echo '<a class="btn2" href="' . $next_subdomain . '/sub1.php?categorycode=B">
						<img src="./img/sub_img1.png">
                        <div class="text-overlay">훈련수강 신청</div>
					</a>';
                echo '</div>'; // 'content1' div 닫기
            }
              else if ($categorycode == 'B') {
                $sql2 = "SELECT * FROM content WHERE categorycode = ?";
                $result2 = query($sql2, [$categorycode])->fetchAll();
                echo ' <div class="ads_wrap ads_main_sm">
                <ins class="adsbygoogle"
                    style="display: block;"
                    data-language="ko"
                    data-ad-client="ca-pub-6499164332093487"
                    data-ad-slot="3576839545"
                ></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>';
                echo '<p class="title">' . $title . '</p>';
                echo '<div class="content1">';
              
                foreach ($result2 as $key => $val) {
                    echo '<div class="box">'; 
                    echo '<pre class="bold">' . $val['bold'] . '</pre>';
                    echo '<pre class="con">' . $val['content'] . '</pre>';
                    echo '</div>'; // 'box' div 닫기
                    
                    if ($key == 2 || $key == 4 || $key == 5) {
                        echo ' <div class="ads_wrap ads_main_sm">
                        <ins class="adsbygoogle"
                            style="display: block;"
                            data-language="ko"
                            data-ad-client="ca-pub-6499164332093487"
                            data-ad-slot="3576839545"
                        ></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>';
                    }
                }
                
                echo '<a class="btn2" href="' . $next_subdomain . '/sub1.php?categorycode=C">
						<img src="./img/sub_img2.png">
                        <div class="text-overlay">수강신청 제한</div>
					</a>';
                echo '</div>'; // 'content1' div 닫기
            }
              
            else if ($categorycode == 'C') {
                $sql2 = "SELECT * FROM content WHERE categorycode = ?";
                $result2 = query($sql2, [$categorycode])->fetchAll();
                echo ' <div class="ads_wrap ads_main_sm">
                <ins class="adsbygoogle"
                    style="display: block;"
                    data-language="ko"
                    data-ad-client="ca-pub-6499164332093487"
                    data-ad-slot="3576839545"
                ></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>';
                echo '<p class="title">' . $title . '</p>';
                echo '<div class="content1">';
              
                foreach ($result2 as $key => $val) {
                    echo '<div class="box">'; 
                    echo '<pre class="bold">' . $val['bold'] . '</pre>';
                    echo '<pre class="con">' . $val['content'] . '</pre>';
                    echo '</div>'; // 'box' div 닫기
                    
                    if ($key == 1 || $key == 3) {
                        echo ' <div class="ads_wrap ads_main_sm">
                        <ins class="adsbygoogle"
                            style="display: block;"
                            data-language="ko"
                            data-ad-client="ca-pub-6499164332093487"
                            data-ad-slot="3576839545"
                        ></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>';
                    }
                }
                
                echo '<a class="btn2" href="' . $next_subdomain . '/sub1.php?categorycode=D">
						<img src="./img/sub_img3.png">
                        <div class="text-overlay">학습수료 기준</div>
					</a>';
                echo '</div>'; // 'content1' div 닫기
            }else if ($categorycode == 'D') {
                $sql2 = "SELECT * FROM content WHERE categorycode = ?";
                $result2 = query($sql2, [$categorycode])->fetchAll();
                echo ' <div class="ads_wrap ads_main_sm">
                <ins class="adsbygoogle"
                    style="display: block;"
                    data-language="ko"
                    data-ad-client="ca-pub-6499164332093487"
                    data-ad-slot="3576839545"
                ></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>';
                echo '<p class="title">' . $title . '</p>';
                echo '<div class="content1">';
              
                foreach ($result2 as $key => $val) {
                    echo '<div class="box">'; 
                    echo '<pre class="bold">' . $val['bold'] . '</pre>';
                    echo '<pre class="con">' . $val['content'] . '</pre>';
                    echo '</div>'; // 'box' div 닫기
                    
                    if ($key == 0 || $key == 1 ) {
                        echo ' <div class="ads_wrap ads_main_sm">
                        <ins class="adsbygoogle"
                            style="display: block;"
                            data-language="ko"
                            data-ad-client="ca-pub-6499164332093487"
                            data-ad-slot="3576839545"
                        ></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>';
                    }
                }
                
                echo '<a class="btn2" href="' . $next_subdomain . '/sub1.php?categorycode=E">
						<img src="./img/sub_img4.png">
                        <div class="text-overlay">재평가 관련 규정</div>
					</a>';
                echo '</div>'; // 'content1' div 닫기
            }else if ($categorycode == 'E') {
                $sql2 = "SELECT * FROM content WHERE categorycode = ?";
                $result2 = query($sql2, [$categorycode])->fetchAll();
                echo ' <div class="ads_wrap ads_main_sm">
                <ins class="adsbygoogle"
                    style="display: block;"
                    data-language="ko"
                    data-ad-client="ca-pub-6499164332093487"
                    data-ad-slot="3576839545"
                ></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>';
                echo '<p class="title">' . $title . '</p>';
                echo '<div class="content1">';
              
                foreach ($result2 as $key => $val) {
                    echo '<div class="box">'; 
                    echo '<pre class="bold">' . $val['bold'] . '</pre>';
                    echo '<pre class="con">' . $val['content'] . '</pre>';
                    echo '</div>'; // 'box' div 닫기
                    
                    if ($key == 3 || $key == 5 || $key == 6) {
                        echo ' <div class="ads_wrap ads_main_sm">
                        <ins class="adsbygoogle"
                            style="display: block;"
                            data-language="ko"
                            data-ad-client="ca-pub-6499164332093487"
                            data-ad-slot="3576839545"
                        ></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>';
                    }
                }
                
                echo '<a class="btn2" href="' . $next_subdomain . '/sub1.php?categorycode=F">
						<img src="./img/sub_img5.png">
                        <div class="text-overlay">FAQ</div>
					</a>';
                echo '</div>'; // 'content1' div 닫기
            }else if ($categorycode == 'F') {
                $sql2 = "SELECT * FROM content WHERE categorycode = ?";
                $result2 = query($sql2, [$categorycode])->fetchAll();
                echo ' <div class="ads_wrap ads_main_sm">
                <ins class="adsbygoogle"
                    style="display: block;"
                    data-language="ko"
                    data-ad-client="ca-pub-6499164332093487"
                    data-ad-slot="3576839545"
                ></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>';
                echo '<p class="title">' . $title . '</p>';
                echo '<div class="content1">';
              
                foreach ($result2 as $key => $val) {
                    echo '<div class="box">'; 
                    echo '<pre class="bold">' . $val['bold'] . '</pre>';
                    echo '<pre class="con">' . $val['content'] . '</pre>';
                    echo '</div>'; // 'box' div 닫기
                    
                    if ($key == 2 || $key == 5) {
                        echo ' <div class="ads_wrap ads_main_sm">
                        <ins class="adsbygoogle"
                            style="display: block;"
                            data-language="ko"
                            data-ad-client="ca-pub-6499164332093487"
                            data-ad-slot="3576839545"
                        ></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>';
                    }
                }
                
                echo '<a class="btn2" href="' . $next_subdomain . '/sub1.php?categorycode=A">
						<img src="./img/sub_img6.png">
                        <div class="text-overlay">국민내일배움카드</div>
					</a>';
                echo '</div>'; // 'content1' div 닫기
            }
                
            ?>
        </div>
    </div>
    </main>
</body>
<script>
    // 텍스트 인식
    var preTags = document.getElementsByTagName("pre");
    for (var i = 0; i < preTags.length; i++) {
        var preTag = preTags[i];
        var processedText = preTag.innerHTML;
        processedText = processedText.replace(/\[\[\[(.*?)\]\]\]/gs, '<span class="point1">$1</span>');
        processedText = processedText.replace(/\[\[(.*?)\]\]/gs, '<span class="point2">$1</span>');
        processedText = processedText.replace(/\[(.*?)\]/gs, '<span class="point3">$1</span>');
        preTag.innerHTML = processedText;
    }

    var preTags = document.getElementsByTagName("p");
    for (var i = 0; i < preTags.length; i++) {
        var preTag = preTags[i];
        var processedText = preTag.innerHTML;
        processedText = processedText.replace(/\[\[\[(.*?)\]\]\]/gs, '<span class="point1">$1</span>');
        processedText = processedText.replace(/\[\[(.*?)\]\]/gs, '<span class="point2">$1</span>');
        processedText = processedText.replace(/\[(.*?)\]/gs, '<span class="point3">$1</span>');
        preTag.innerHTML = processedText;
    }
</script>
<script>
    // QNA :: OPEN-CLOSE TOGGLE EVENTS
    const allLists = document.querySelectorAll('.box');
    const allQuestions = document.querySelectorAll('.box .bold');
    allQuestions.forEach(el => {
        el.addEventListener('click', (e) => {
            if (e.target.parentNode.classList.contains('on')) {
                return e.target.parentNode.classList.remove('on');
            }
            allLists.forEach(v => v.classList.remove('on'));
            e.target.parentNode.classList.add('on');
        })
    })
    
</script>
</html>
