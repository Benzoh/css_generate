// common.js

// クリックイベントからキャンバスがクリックされたら
// 色の値取得して 背景色に入れ込む
//

// var clickElement = document.getElementsByTagName("canvas");
// console.log(clickElement);
// clickElement.addEventListener("click", function(event) {
// //クリック時のイベントを記述
// },false);

$(document).ready(function(){

	$('.h1').click(function(){
	// $('canvas').click(function(){
		// var check = $('#t1').html();
		console.log('check!!');
	})

	console.log('done!!')

	$(".color input[name=c1]").on("blur",function(){
	  var color = $(this).val();
	  console.log(color);
	});

});



