<!-- input.php -->

<?php

	// 入力画面 実質の トップページ
	var_dump($_POST);
	$target_file = array_search('check_target_file', $_POST);
	// var_dump($target_file);

	if(!empty($_POST)){
		$color = $_POST['c1'];
		$size = $_POST['size'];
	}

?>

<h1 class="h1">ラジオボタンのCSSジェネレーター</h1>

<form class="m-radio" action="" method="post" accept-charset="utf-8">
	<div class="color">
		<label for="t1">色を選ぶ</label>
		<input type="text" name="c1" value="#e4521e" size="12" id="t1" class="html5jp-cpick [width:600;height:400]" />
		<span class="pick_color" style="background-color: <?php echo $color; ?>;">
			pickした色表示
		</span>
	</div>
	<div class="size">
		<label for="size">サイズ</label>
		<span class="bar">
			bar
		</span>
		<input type="text" value="" name="size" id="size"></input>
	</div>

	<div class="type_list">
		<input type="radio" name="type-A" checked>タイプA</input>
		<input type="radio" name="type-A">タイプA</input>
		<input type="radio" name="type-A">タイプA</input>
	</div>
	<button type="submit" name="type-A" value="check_target_file">コードを表示</button>
	<div class="type_list">
		<input type="radio" name="type-B" checked>タイプB</input>
		<input type="radio" name="type-B">タイプB</input>
		<input type="radio" name="type-B">タイプB</input>
	</div>
	<button type="submit" name="type-B" value="check_target_file">コードを表示</button>
	<div class="type_list">
		<input type="radio" name="type-C" checked>タイプC</input>
		<input type="radio" name="type-C">タイプC</input>
		<input type="radio" name="type-C">タイプC</input>
	</div>
	<button type="submit" name="type-C" value="check_target_file">コードを表示</button>
</form>


<h2>CSS</h2>
<div class="show_code">
	<pre>
		<code>
			<?php
				// TODO パスの変更
				if($target_file !== false){
					$get_code = file_get_contents('/vagrant/public/css_generate/code/' . $target_file . '.php');
					echo $get_code;
				}
			?>
		</code>
	</pre>
</div>

<h2>HTML</h2>
<div class="show_code">
	<pre>
		<code>
			<?php
				if($target_file !== false){
					$html = '<input type="radio" name="type-A" value="type-A">タイプA</input>';
					echo code_escape($html);
				}
			?>
		</code>
	</pre>
</div>