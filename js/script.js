$(window).on('load', function () {
    var $preloader = $('#preload'),
        $load = $preloader.find('.load');
    $load.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});

var k = 0;

function toggle1() {

    if (k == 0) {
        $("#pop_info").toggle();
        $("#pop_info_exp").toggle();
        $(".popblock").css("height", "740");
        $(".pop_toggle2").css("color", "white");
        $(".pop_toggle1").css("color", "dimgray");
    }
    k = 1;
}

function toggle2() {

    if (k == 1) {
        $("#pop_info_exp").toggle();
        $("#pop_info").toggle();
        $(".popblock").css("height", "540");
        $(".pop_toggle1").css("color", "white");
        $(".pop_toggle2").css("color", "dimgray");
    }
    k = 0;
}


var bz = 0;
//var bx = 0;

$("#in").keypress(function () {
    if ($(this).val()) {
        alert('ok')
    } else alert('NO')
})

var price = 30;
var balance_user = 125;
$("#pop_button1").click(function () {
    var b = 0;


    for (var i = 0; i < ($(".in").length); i++) {
        if ($(".in:eq(" + i + ")").val() === '') {
            b = 0;
            $(".in:eq(" + i + ")").css("border-color", "red")
        } else {
            b += 1;
            $(".in:eq(" + i + ")").css("border-color", "lightgreen")
        }
    }

    if (b == 3) {
        $("#user_who").html('');

        localStorage.setItem("name", JSON.stringify($("#popname").val()));
        localStorage.setItem("off", bz);

        localStorage.setItem("balance", balance_user);

        $("#user_name").html('' + JSON.parse(localStorage.getItem("name")) + '');
        $("#user_balance").html('' + JSON.parse(localStorage.getItem("balance")) + ' руб.');
        localStorage.setItem("bal", JSON.stringify('' + JSON.parse(localStorage.getItem("balance")) + ' руб.'));
        $("#popback").hide();
        localStorage.setItem("who", JSON.stringify('*****'));

    }
});
$("#chat").click(function () {
    $(".chat").show();
})
$(".close").click(function(){
  $(".chat").hide();
})

function closer() {

    if ((JSON.parse(localStorage.getItem("bal"))) != null) {
        $("#popback").hide();
    }
    $("#user_who").html('');
    $("#user_name").html('' + JSON.parse(localStorage.getItem("name")) + '');
    $("#user_balance").html('' + JSON.parse(localStorage.getItem("bal")) + '');

}

setTimeout(closer, 100)


$(document).ready(function () {
    var list = $('.experts_gl_block');

    setInterval(function () {
        list.map(function () {
            var online = Math.random() > .5;
			var state = $(this).find('.fas.fa-circle');

			state.removeClass('online offline');

            if (online)
				state.addClass('online');
			else
				state.addClass('offline');
        });
    }, 5000);
});

$(document).ready(function () {
    var list = $('.revs');
    var display = 1;

    setInterval(function () {
        list.map(function () {
            var group1 = $(this).find('.rev_1');
            var group2 = $(this).find('.rev_2');

            group1.removeClass('rev_dispay rev_none');
            group2.removeClass('rev_dispay rev_none');

            if (display == 1) {
                group1.addClass('rev_dispay');
                group2.addClass('rev_none');
                display = 2;
            }
            else {
                group2.addClass('rev_dispay');
                group1.addClass('rev_none');
                display = 1;
            }
        });
    }, 60000);
});

$(function(){
  $('a[href^="#"]').on('click', function(event) {
    // отменяем стандартное действие
    event.preventDefault();

    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
    /*
    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
    * dn - определяем положение блока на странице
    */

    $('html, body').animate({scrollTop: dn}, 1000);

    /*
    * 1000 скорость перехода в миллисекундах
    */
  });
});
