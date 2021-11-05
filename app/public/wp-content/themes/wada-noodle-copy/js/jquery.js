// ----------------------------------------
// サイト全体のJSを記述するファイル
// ----------------------------------------
$(function () {

	// ---------- ページ内とページ内からのアンカーリンク ----------
	var headerHeight = $('#header').outerHeight() + 20; //headerの高さを取得
	var urlHash = location.hash;
	if (urlHash) {
		$('body,html').stop().scrollTop(0);
		setTimeout(function () {
			var target = $(urlHash);
			var position = target.offset().top - headerHeight;
			$('body,html').stop().animate({ scrollTop: position }, 500);
		}, 100);
	}
	$('a[href^="#"]').click(function () {
		var href = $(this).attr('href');
		var target = $(href);
		var position = target.offset().top - headerHeight;
		$('body,html').stop().animate({ scrollTop: position }, 500);
	});
});
