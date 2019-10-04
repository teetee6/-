<!DOCTYPE html>
<html>
	<head>
	<script type="text/javascript">

	</script>
		<meta charset="UTF-8">
		<title>Insert title here</title>
	</head>
	<body>

			<table border="1">
					<tr style="width: 100px;">
						<td>	인치	</td>
						<td>  센티민터 </td>
					</tr>

				<?php
					$inch=10;
					while($inch < 100) {
						$cm = $inch * 2.54;
				?>
						<tr style="width: 100px;">		<!-- 서버에서 한번에 표현하려면 echo 안에 한줄안에 넣어야함. 교수님은 이렇게 중간에 클라이언트에서 처리하도록 표현하는 걸 좋아함-->
							<td><?=	$inch	?></td>
							<td><?= round($cm,1) ?></td>		<!-- round는 반올림함수. 기본은 1의자리로 나옴. -->
						</tr>
				<?php
						$inch += 10;
					}
				?>

			</table>

	</body>
</html>

<!-- 원래 저렇게 속성값으로 주는 코딩방식은 별로임.. -->
<!-- . 은 클래스란 뜻임. 사실 디자이너 css영역은 따로 txt파일 만들어서 head영역에서 불러오는식임.-->
<!-- table은 테이블을 만든다-->
<!-- tr은 행 -->
<!-- td는 열. 열이 2개-->
