
<?php
  $namePage = 'Все страницы'; // название страницы
  include "../sections/head.php"; // вывод head
?>
<body class="test-body">

	<ol>
	<a href="../km.its-node(1.3).zip" download="../km.its-node(1.3).zip">Скачать архив (1.3)</a>
	<br>
	<br>
		<?
		$dir = "../";
		if($dir){
		    if ($handle = opendir($dir)) {
						$ar = array();
		        while (false !== ($file = readdir($handle))) {
							if(substr($file,-4,4) == ".php"){
								$ar[] = $file;
							}
		        }
		        closedir($handle);

						sort($ar);
						foreach ($ar as $key => $value) {
							echo '<li><a target="blank" href="'.$dir.$value.'">'.$value.'</a></li>';
						}
		    }
		}
		?>
	</ol>
	<script src="../app/js/jquery/jquery-1.11.3.min.js"></script>
	<script>
		$('.test-body a').click(function() {
			$('.test-body a').removeClass('vis');
			$(this).addClass('vis');
		});
	</script>
</body>
</html>
