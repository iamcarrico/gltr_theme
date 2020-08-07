// Make navbar catch on scroll
$(window).scroll(function() {
	var pagePosition = $(document).scrollTop();
	var headerHeight = $('.site-title').height() + 35;
	var navHeight = $('.navbar').height();
	var navWidth = 0;
	if (pagePosition >= headerHeight) {
		if ($(window).width() < 1200) {
			navWidth = $(window).width() - 30;
		}
		else {
			navWidth = 1170;
		}
		$('.navbar')
			.css('max-width', navWidth)
			.css('width', '100%')
			.css('z-index', '9999')
			.css('position','fixed')
			.css('border-top', 'none')
			.css('top','0');
		$('.wrapper')
			.css('padding-top', navHeight + 17 + 'px');
	}
	else {
		$('.navbar')
			.css('border-top', '1px solid #041e42')
			.css('position','relative');
		$('.wrapper')
			.css('padding-top', '0');
	}
});

$( window ).resize(function() {
	var navWidth = 0;
	if ($(window).width() < 1200) {
		navWidth = $(window).width() - 30;
	}
	else {
		navWidth = 1170;
	}
	$('.navbar').css('max-width', navWidth);
});


// Sharing Buttons
var getWindowOptions = function() {
  var width = 500;
  var height = 350;
  var left = (window.innerWidth / 2) - (width / 2);
  var top = (window.innerHeight / 2) - (height / 2);

  return [
    'resizable,scrollbars,status',
    'height=' + height,
    'width=' + width,
    'left=' + left,
    'top=' + top,
  ].join();
};


// Twitter Share
var twitterBtn = document.querySelector('.twitter-share');
var via = encodeURIComponent(' (via @GLTReview)');
var twitterUrl = 'https://twitter.com/intent/tweet?url=' + postURL + '&text=' + text + via;
twitterBtn.href = twitterUrl; // 1

twitterBtn.addEventListener('click', function(e) {
  e.preventDefault();
  var winT = window.open(twitterUrl, 'ShareOnTwitter', getWindowOptions());
  winT.opener = null; // 2
});


// Facebook Share
var fbButton = document.querySelector('.facebook-share');
var fbUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + postURL;
fbButton.href = fbUrl; // 1

fbButton.addEventListener('click', function(e) {
  e.preventDefault();
  var winF = window.open(fbUrl, 'facebook-share-dialog', getWindowOptions());
  winF.opener = null; // 2
});



