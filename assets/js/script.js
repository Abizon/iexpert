$(window).on('load', function () {
    var $preloader = $('#preload'),
        $load = $preloader.find('.load');
    $load.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});


var profile = $(".profile");
var registration = $(".registration");


/*******Сброс формы регистрации/формы*******/
function reset_form(){
document.getElementById("popname").value = "";
document.getElementById("popmail").value = "";
document.getElementById("poptel").value = "";
document.getElementById("poppas").value = "";
document.getElementById("popnamein").value = "";
document.getElementById("poppasin").value = "";
}

/*******Табы в форме регистрации/формы*******/
var k = 0;
function toggle1() {

    if (k == 0) {
        $("#pop_info").toggle();
        $("#pop_info_exp").toggle();
        $(".popblock").css("height", "450");
        $(".pop_toggle2").css("color", "white");
        $(".pop_toggle1").css("color", "dimgray");
    }
    k = 1;
}

function toggle2() {

    if (k == 1) {
        $("#pop_info_exp").toggle();
        $("#pop_info").toggle();
        $(".popblock").css("height", "600");
        $(".pop_toggle1").css("color", "white");
        $(".pop_toggle2").css("color", "dimgray");
    }
    k = 0;
}

/*******Регистрация пользователя*******/
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
        if ($(".in:eq(" + i + ")").val() == null) {
            b = 0;
            $(".in:eq(" + i + ")").css("border-color", "red");
        } else {
            b += 1;
            $(".in:eq(" + i + ")").css("border-color", "lightgreen");
        }
    }

    if (b == 4) {
        $("#user_who").html('');

        localStorage.setItem("name", JSON.stringify($("#popname").val()));
        localStorage.setItem("off", bz);

        localStorage.setItem("balance", balance_user);

        $("#user_name").html('' + JSON.parse(localStorage.getItem("name")) + '');
        $("#user_balance").html('' + JSON.parse(localStorage.getItem("balance")) + ' руб.');
        localStorage.setItem("bal", JSON.stringify('' + JSON.parse(localStorage.getItem("balance")) + ' руб.'));
        $("#popback").hide();
        localStorage.setItem("who", JSON.stringify('*****'));

        profile.show();
        registration.hide();
        reset_form();

    }
});

$("#exit").click(function () {
    localStorage.removeItem("name");
    localStorage.removeItem("off");
    localStorage.removeItem("balance");
    profile.hide();
    registration.show();
});

$(".chat_button").click(function () {
  var name = JSON.parse(localStorage.getItem("name"));
  if (name != null){
    $(".chat").show();
  }
  else{
    $("#popback").show();
  }
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

/******** Проверка регистрации ********/
$(document).ready(function () {
  var name = JSON.parse(localStorage.getItem("name"));
  if (name != null){
    profile.show();
    registration.hide();
  }
  else {
    profile.hide();
    registration.show();
  }
});
$(".registration").click(function(){
  $("#popback").show();
})
$(".pop_close").click(function(){
  $("#popback").hide();
  reset_form();
})

/******** Онлайн экспертов ********/
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
/******** Смена отзывов ********/
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
/******** Плавное перемещение к якорю********/
$(function(){
  $("a[href^='#']").on('click', function(event) {
    event.preventDefault();

    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
    $('html, body').animate({scrollTop: dn}, 1000);
  });
});
/******** Маски для формы регистрации********/
$(function(){
  $("#poptel").mask("+7(999) 999-9999");
});
