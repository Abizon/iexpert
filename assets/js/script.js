/*******Загрузка preload перед загрузкой страницы*******/
$(window).on('load', function () {
    var $preloader = $('#preload'),
        $load = $preloader.find('.load');
    $load.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});

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
        $(".popblock").css("height", "750");
        $(".pop_toggle1").css("color", "white");
        $(".pop_toggle2").css("color", "dimgray");
    }
    k = 0;
}

/*******Локальная регистрация пользователя*******/
// var bz = 0;
//var bx = 0;

// $("#in").keypress(function () {
//     if ($(this).val()) {
//         alert('ok')
//     } else alert('NO')
// })
var price = 30;
function localRegistr(){

  var balance_user = 125;
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

  if (b == 6) {
    $("#user_who").html('');

    localStorage.setItem("name", JSON.stringify($("#popname").val()));
    // localStorage.setItem("off", bz);
    localStorage.setItem("balance", balance_user);

    $("#user_name").html('' + JSON.parse(localStorage.getItem("name")) + '');
    $("#user_balance").html('' + JSON.parse(localStorage.getItem("balance")) + ' руб.');
    localStorage.setItem("bal", JSON.stringify('' + JSON.parse(localStorage.getItem("balance")) + ' руб.'));
    $("#popback").hide();
    localStorage.setItem("who", JSON.stringify('*****'));
    document.getElementById('pop_info').reset()
    }
}

/******** Обновление данных из локального хранилища ********/
// function closer() {
//     if ((JSON.parse(localStorage.getItem("bal"))) != null) {
//         $("#popback").hide();
//     }
//     $("#user_who").html('');
//     $("#user_name").html('' + JSON.parse(localStorage.getItem("name")) + '');
//     $("#user_balance").html('' + JSON.parse(localStorage.getItem("bal")) + '');
// }
// setTimeout(closer, 100)

/******** Загрузка данных из базы ********/
$(document).ready(function () {
  $.ajax({
      url:     'registration.php',
      type:     "POST",
      dataType: "html",
      data: {type:'profile'},
      success: function(response) {
        //alert(response);
        result = $.parseJSON(response);
        if (result!=''){
          result = $.parseJSON(response);
          if (result.type=="user"){
            localStorage.setItem('id_user', result.id);
            localStorage.setItem("name", result.name);
            localStorage.setItem("balance", result.balance);
            $("#user_name").html('' + result.name+'');//JSON.parse(localStorage.getItem("name")) + '');
            $("#user_balance").html('' + result.balance+' руб.');//JSON.parse(localStorage.getItem("balance")) + ' руб.');
            localStorage.setItem("bal", JSON.stringify('' + JSON.parse(localStorage.getItem("balance")) + ' руб.'));
          }
          if (result.type=="exp"){
            //localStorage.setItem("balance", result.balance);
            $("#user_name").html('' + result.name+'');//JSON.parse(localStorage.getItem('name')) + '');
            //$("#user_balance").html('' + JSON.parse(localStorage.getItem("balance")) + ' руб.');
            //localStorage.setItem("bal", JSON.stringify('' + JSON.parse(localStorage.getItem("balance")) + ' руб.'));
          }
        }
    },
    error: function(response) {
          alert(response);
    }
  });
});
/******** Регистрация пользователя ********/
function registr(){
  $.ajax({
      url:     'registration.php',
      type:     "POST",
      dataType: "html",
      data: {
         type:'registr',
         popsurname: $('#popsurname').val(),
         popname: $('#popname').val(),
         popmiddlename: $('#popmiddlename').val(),
         popmail: $('#popmail').val(),
         poptel: $('#poptel').val(),
         poppas: $('#poppas').val()
    },
      success: function(response) {
        //alert(response);
        location.reload();
    },
    error: function(response) {
          alert(response);
    }
  });
}
/******** Регистрация эксперта ********/
function registr_exp(){
  $.ajax({
      url:     'registration.php',
      type:     "POST",
      dataType: "html",
      data: {
         type:'registr_exp',
         exp_surname: $('#exp_surname').val(),
         exp_name: $('#exp_name').val(),
         exp_middlename: $('#exp_middlename').val(),
         exp_mail: $('#exp_mail').val(),
         exp_phone: $('#exp_phone').val(),
         expcategory: $('#expcategory').val(),
         exp_pas: $('#exp_pas').val()
    },
      success: function(response) {
        alert(response);
        //location.reload();
    },
    error: function(response) {
          alert(response);
    }
  });
}
/******** Вход в аккаунт ********/
function signin(){
  $.ajax({
      url:     'registration.php',
      type:     "POST",
      dataType: "html",
      data: {
         type:'signin',
         popnamein: $('#popnamein').val(),
         poppasin: $('#poppasin').val()
    },
      success: function(response) {
        //alert(response);
        location.reload();
    },
    error: function(response) {
          alert(response);
    }
  });
}
/******** Выход из аккаунта ********/
function exit(){
  $.ajax({
      url:     'registration.php',
      type:     "POST",
      data: {type:'exit'},
      success: function(response) {
        //alert(response);
        localStorage.removeItem("name");
        localStorage.removeItem("balance");
        location.reload();
      },
      error: function(response) {
          alert('Ошибка'+response);
      }
  });
}

$(".registration").click(function(){
  $("#popback").show();
})
$(".pop_close").click(function(){
  $("#popback").hide();
  document.getElementById('pop_info').reset()
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
  $("#exp_phone").mask("+7(999) 999-9999");
  $("#poptel").mask("+7(999) 999-9999");
});
