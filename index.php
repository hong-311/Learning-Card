<!DOCTYPE html>
<html lang="ko">
<head>
	<?php include "./front_header.php";?>
	<link rel="stylesheet" href="./css/index.css">
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
		<?php include './header.php'; ?>
		<main>
		<div class="ads_wrap ads_main_sm">
				<ins class="adsbygoogle"
					style="display: block;"
					data-language="ko"
					data-ad-client="ca-pub-6499164332093487"
					data-ad-slot="3576839545"
				></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div class="section1">
				<img src="./img/img1.png">
				<div class="text-overlay">
					<pre>취업난에 도움을 주고자
						<span>나라에서 지원해주는 훈련제도!</span>
						신청하고 참여해보세요!
					</pre>
					<a href="<?=$next_subdomain?>/sub1.php?categorycode=A">자세히 알아보기</a>
				</div>
			</div>
			<div class="ads_wrap ads_main_sm">
				<ins class="adsbygoogle"
					style="display: block;"
					data-language="ko"
					data-ad-client="ca-pub-6499164332093487"
					data-ad-slot="3576839545"
				></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div class="section2">
				<h1>신청은 어떻게 이루어지는걸까요?</h1>
				<div class="btn_wrap">
					<a href="<?=$next_subdomain?>/sub1.php?categorycode=B"><img src="./img/icon1.png">훈련수강 신청</a>
					<a href="<?=$next_subdomain?>/sub1.php?categorycode=C"><img src="./img/icon2.png">수강신청 제한</a>
				</div>
			</div>
			<div class="ads_wrap ads_main_sm">
				<ins class="adsbygoogle"
					style="display: block;"
					data-language="ko"
					data-ad-client="ca-pub-6499164332093487"
					data-ad-slot="3576839545"
				></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div class="section3">
				<h1>여기서 잠깐! 중요내용 꼭 확인해보세요!</h1>
				<div class="btn_wrap">
					<a href="<?=$next_subdomain?>/sub1.php?categorycode=D">
						<img src="./img/img2.png">
						<div class="right">
							<h2>학습수료기준</h2>
							<pre>수료 기준 놓치게 되면 억울하죠.
							사전에 미리 알아놓으세요.
							</pre>
						</div>
					</a>
					<a href="<?=$next_subdomain?>/sub1.php?categorycode=E">
						<img src="./img/img3.png">
						<div class="right">
							<h2>재평가 관련 규정</h2>
							<pre>재평가 받을 수 있는지
								궁금하신 분들 여기 주목해주세요!
							</pre>
						</div>
					</a>
					<a href="<?=$next_subdomain?>/sub1.php?categorycode=F">
						<img src="./img/img4.png">
						<div class="right">
							<h2>FAQ</h2>
							<pre>그밖에 궁금한 사항이
								있으시다면 확인해보세요.
							</pre>
						</div>
					</a>
				</div>
			</div>
			<div class="ads_wrap ads_main_sm">
				<ins class="adsbygoogle"
					style="display: block;"
					data-language="ko"
					data-ad-client="ca-pub-6499164332093487"
					data-ad-slot="3576839545"
				></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</main>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>