<?
	session_start();
?>
<!DOCTYPE HTML>
<head>
<meta charset = "utf--8">
<title>Information cars</title>
<style>
div { border : 1px solid gray;}
#container{ width:1200px;p;adding:40px;margin:0 auto;}
#header{padding:40px; margin-bottom:15px;}
#contents{width:1200px;padd?ing:40px;margin-bottom:0px}
#footer{padd?ing:20px;}
div.images img{width:150px;}

</style>
<body>
	<div class="images">
	<div id="container">
		<div id="header">
			<h1>Information cars</h1>
			<div id="top_login">
				<a href="./login/login form.php">로그인</a>
				" | "
				<a href="./member/member form.php">회원가입</a>
			</div>
		</div>
		<div id="contents">
			<form action="inform.php" method="get">
			<table border="1">
			<tr>
				<td><b>기아</td>
				<td><img src="k7.png"></br><input type="radio" value="k7" name = "car">k7</br></td>
				<td><img src="스포티지.png"></br><input type="radio" value="스포티지" name = "car">스포티지</br></td>
				<td><img src="쏘렌토.png"></br><input type="radio" value="쏘렌토" name = "car">쏘렌토</br></td>
			</tr>
			<tr> 
				<td><b>현대</td>
				<td><img src="그랜져.png"></br><input type="radio" value="그랜져" name = "car">그랜져</br></td>
				<td><img src="쏘나타.png"></br><input type="radio" value="쏘나타" name = "car">쏘나타</br></td>
                 			<td><img src="아반테.png"></br><input type="radio" value="아반테" name = "car">아반테</br></td>
			</tr>
			<tr>
				<td><b>쌍용</td>
				<td><img src="렉스톤.png"></br><input type="radio" value="렉스톤" name = "car">렉스톤</br></td>
				<td><img src="티볼리.png"></br><input type="radio" value="티볼리" name = "car">티볼리</br></td>
				<td><img src="코란드.png"></br><input type="radio" value="코란드" name = "car">코란도</br></td>
			</tr>
			<tr>
				<td><b>외제차</td>
				<td><img src="페라리.png"></br><input type="radio" value="페라리" name = "car">페라리</br></td>
				<td><img src="포르쉐.png"></br><input type="radio" value="포르쉐" name = "car">포르쉐</br></td>
				<td><img src="람보르기니.png"></br><input type="radio" value="람보르기니" name = "car">람보르기니</br></td>
			</tr>
			</table>
				<input type="submit" value="submit">
			</form>
		</div>
	</div>
	</div>
<?
if(isset($_GET["car"])) {
	print $_GET["car"];
	print "<br>";
	if($_GET["car"] == k7) {
		print "가격은 3094~3799만원입니다.";
		print "<br>";
		print "연비는 7.3km/ℓ~14.6km/ℓ입니다.";
	}
	elseif($_GET["car"] == 스포티지) {
		print "가격은 2,342~3,171만원입니다.";
		print "<br>";
		print "연비는 10.5km/ℓ~16.3km/ℓ입니다.";
	}
	elseif($_GET["car"] == 쏘렌토) {
		print "가격은 2,763~3,878만원입니다.";
		print "<br>";
		print "연비는 8.7km/ℓ~13.8km/ℓ입니다.";
	}
	elseif($_GET["car"] == 그랜져) {
		print "가격은 3,172~4,349만원입니다.";
		print "<br>";
		print "연비는 7.4km/ℓ~11.9km/ℓ입니다.";
	}
	elseif($_GET["car"] == 쏘나타) {
		print "가격은 2,346~3,367만원입니다.";
		print "<br>";
		print "연비는 9.8km/ℓ~13.7km/ℓ입니다.";
	}
	elseif($_GET["car"] == 아반테) {
		print "가격은 1,411~2,454만원입니다.";
		print "<br>";
		print "연비는 10.6km/ℓ~17.8km/ℓ입니다.";
	}
	elseif($_GET["car"] == 렉스톤) {
		print "가격은 3,439~4,607만원입니다.";
		print "<br>";
		print "연비는 10.1km/ℓ~10.5km/ℓ입니다.";
	}
	elseif($_GET["car"] == 티볼리) {
		print "가격은 1,678~2,712만원입니다.";
		print "<br>";
		print "연비는 10.2km/ℓ~14.5km/ℓ입니다.";
	}
	elseif($_GET["car"] == 코란도) {
		print "가격은 3,439~4,607만원입니다.";
		print "<br>";
		print "연비는 10.1km/ℓ~10.5km/ℓ입니다.";
	}
	elseif($_GET["car"] == 페라리) {
		print "가격은 2억8,000만원입니다.";
		print "<br>";
		print "연비는 8.1km/ℓ입니다.";
	}
	elseif($_GET["car"] == 포르쉐) {
		print "가격은 14,020~16,760만원입니다.";
		print "<br>";
		print "연비는 11.1km/ℓ입니다.";
	}
	else {
		print "가격은 2억5천만원 입니다.";
		print "<br>";
		print "연비는 7.9km/ℓ입니다.";
	}
} 
else {
        print "차종을 선택해 주세요";
        print "<br>";
}
?>
</body>
</html>
