

//slider
$(function() {
	$('.hero_slider').slick({
		infinite: true,
		autoplay:true,
		dots:false,
        fade:true,
		speed: 2000,
		arrows: false
	});
});
$(function() {
	$('.reason_inr').slick({
		infinite: true,
		autoplay:false,
		dots:true,
        fade:true,
        pause: 4000,
		speed: 2000,
		arrows: false
	});
});

$(function(){
$(".global_nav li").hover(function(){
    $(this).children('ul').stop().slideDown();
  }, function(){
    $(this).children('ul').stop().slideUp();
  });
});

$(function() {
	$('.single_slider').slick({
		infinite: true
	});
});
$(function(){
	var $setElem = $('.imgchange'),
		pcName = '_pc',
		spName = '_sp',
		replaceWidth = 425; //分岐するサイズ
	$setElem.each(function(){
		var $this = $(this);
		var windowWidth = parseInt($(window).width());
		function imgSize(){
			var windowWidth = parseInt($(window).width());
			if(windowWidth >= replaceWidth) {
				$this.attr('src',$this.attr('src').replace(spName,pcName)).css({visibility:'visible'});
			} else if(windowWidth < replaceWidth) {
				$this.attr('src',$this.attr('src').replace(pcName,spName)).css({visibility:'visible'});
			}
		}
		$(window).resize(function(){
			imgSize();
		});
		imgSize();
	});
});


//inview.js
$(function() {
	$('section').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('animation');
    }
    else{
    }
  });
});
$(function() {
    //return
  $('section.re').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('animation');
    }
    else{
      $(this).stop().removeClass('animation');
    }
  });
});


// SP Slider Navigation
$(function(){
  $('#menu_btn').click(function(){
    if($(this).hasClass('open')){
      $(this).removeClass('open');
      $('.global_nav').removeClass('open');
      $(window).off('.noScroll');
    }
    else{
      $(this).addClass('open');
      $('.global_nav').addClass('open');
      $(window).on('touchmove.noScroll', function(e) {
          e.preventDefault();
      });
    }
  });
});


$(function(){
	$('#nav li a').click(function(){
		$('#nav').removeClass('open');
		$('#menu_btn').removeClass('open');
		$(window).off('.noScroll');
	});
});


//Link area fix
$(function(){
	$(".link").click(function(){
		window.location=$(this).find("a").attr("href");
		return false;
	});
});

//PC Fixed nav
$(window).on('load', function(){
	var bt = $("#nav").offset().top;
	var ds = 0;
	$(document).scroll(function(){
		ds = $(this).scrollTop();

		if (bt <= ds) {
			$("#nav").addClass('fix');
		} else if (bt >= ds) {
			$("#nav").removeClass('fix');
		}
	});
});


//SP bottom bar fix
$(function(){
  var sp_nav = $('#sp_nav');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        sp_nav.addClass('active');
      } else {
        sp_nav.removeClass('active');
      }
    });
});


$(function(){
  var ua = navigator.userAgent;
  var headerHight = 100; //ヘッダの高さ
  if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) {
    //スマートフォンからアクセスの場合
    $('a[href^=#]').click(function(){
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top; //ヘッダの高さ分位置をずらす
      $("html, body").animate({scrollTop:position}, 550, "swing");
      return false;
    });
  } else {
    //それ以外の場合
    $('a[href^=#]').click(function(){
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
      $("html, body").animate({scrollTop:position}, 550, "swing");
      return false;
    });
  };
});

//Pagetop script
$(document).ready(function() {
	var pagetop = $('#pagetop');
	pagetop.click(function () {
		$('body, html').animate({ scrollTop: 0 }, 500);
		return false;
	});
});


//modal js
$(function(){
	//テキストリンクをクリックしたら
	$("#modal-open").click(function(){
		//body内の最後に<div id="modal-bg"></div>を挿入
		$("body").append('<div id="modal-bg"></div>');
		//画面中央を計算する関数を実行
		modalResize();
		//モーダルウィンドウを表示
		$("#modal-bg,#modal-main").fadeIn("slow");
		//画面のどこかをクリックしたらモーダルを閉じる
		$("#modal-bg").click(function(){
			$("#modal-main,#modal-bg").fadeOut("slow",function(){
				//挿入した<div id="modal-bg"></div>を削除
				$('#modal-bg').remove() ;
			});
		});

		//画面の左上からmodal-mainの横幅・高さを引き、その値を2で割ると画面中央の位置が計算できます
		$(window).resize(modalResize);
		function modalResize(){
			var w = $(window).width();
			var h = $(window).height();
			var cw = $("#modal-main").outerWidth();
			var ch = $("#modal-main").outerHeight();
			//取得した値をcssに追加する
			$("#modal-main").css({
				"left": ((w - cw)/2) + "px",
				"top": ((h - ch)/2) + "px"
			});
		}
	});
});
$(function(){
	$("#faq .col2 li h4").on("click", function() {
		$(this).next().slideToggle();
		$(this).next().toggleClass('open');
		$(this).toggleClass('open');
	});
});
$(function(){
  // 「.modal-open」をクリック
  $('.modal-open').click(function(){
    $('#searchbtn').addClass('open');
    // オーバーレイ用の要素を追加
    $('body').append('<div class="modal-overlay"></div>');
    // オーバーレイをフェードイン
    $('.modal-overlay').slideDown('slow');

    // モーダルコンテンツのIDを取得
    var modal = '#' + $(this).attr('data-target');
    // モーダルコンテンツの表示位置を設定
    modalResize();
    // モーダルコンテンツフェードイン
    $(modal).fadeIn('slow');

    // 「.modal-overlay」あるいは「.modal-close」をクリック
    $('.modal-overlay, .modal-close').off().click(function(){
      // モーダルコンテンツとオーバーレイをフェードアウト
      $(modal).fadeOut('slow');
      $('#searchbtn').removeClass('open');
      $('.modal-overlay').fadeOut('slow',function(){
        // オーバーレイを削除
        $('.modal-overlay').remove();
      });
    });

    // リサイズしたら表示位置を再取得
    $(window).on('resize', function(){
      modalResize();
    });

    // モーダルコンテンツの表示位置を設定する関数
    function modalResize(){
      // ウィンドウの横幅、高さを取得
      var w = $(window).width();
      var h = $(window).height();

      // モーダルコンテンツの表示位置を取得
      var x = (w - $(modal).outerWidth(true)) / 2;
      var y = (h - $(modal).outerHeight(true)) / 2;

      // モーダルコンテンツの表示位置を設定
      $(modal).css({'left': x + 'px','top': y + 'px'});
    }
  });
});