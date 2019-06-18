
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
    $(".popblock").css("height","740");
    $(".pop_toggle2").css("color","white");
    $(".pop_toggle1").css("color","dimgray");
    }
    k = 1;
}

function toggle2() {
     
     if (k == 1) {
     $("#pop_info_exp").toggle();
    $("#pop_info").toggle();
    $(".popblock").css("height","540");
    $(".pop_toggle1").css("color","white");
    $(".pop_toggle2").css("color","dimgray");
     }
   k = 0;
}


var bz = 0;
//var bx = 0;

$("#in").keypress(function() {
    if ($(this).val()) {
         alert('ok')
    } else alert('NO')
})

var price = 30;
var balance_user = 125;
$("#pop_button1").click(function(){
    var b = 0;


    for (var i = 0; i < ($(".in").length); i++) {
        if ($(".in:eq("+i+")").val() === '') {
            b = 0;
            $(".in:eq("+i+")").css("border-color","red")
        } else {
            b+=1;
             $(".in:eq("+i+")").css("border-color","lightgreen")
        }
    
        
    }
    
        
    
    if (b == 3) {
        $("#user_who").html('');
   
    localStorage.setItem("name",JSON.stringify($("#popname").val()));
    localStorage.setItem("off", bz);
    
    localStorage.setItem("balance",balance_user);
    
    $("#user_name").html(''+JSON.parse(localStorage.getItem("name"))+'');
    $("#user_balance").html(''+JSON.parse(localStorage.getItem("balance"))+' руб.');
    localStorage.setItem("bal",JSON.stringify(''+JSON.parse(localStorage.getItem("balance"))+' руб.'));
    $("#popback").hide();
         localStorage.setItem("who",JSON.stringify('*****'));
    
}});

$("#minus").click(function(){
    if (JSON.parse(localStorage.getItem("balance")) < price) {
        alert('Недостаточно средств');
    } else {
        localStorage.setItem("balance",JSON.parse(localStorage.getItem("balance"))-price);
      $("#user_balance").html(''+JSON.parse(localStorage.getItem("balance"))+' руб.');
    localStorage.setItem("bal",JSON.stringify(''+JSON.parse(localStorage.getItem("balance"))+' руб.'));
    }
     
})

function closer() {

if ((JSON.parse(localStorage.getItem("bal"))) != null) {
    $("#popback").hide();
}
    $("#user_who").html('');
$("#user_name").html(''+JSON.parse(localStorage.getItem("name"))+'');
$("#user_balance").html(''+JSON.parse(localStorage.getItem("bal"))+'');
    
}

setTimeout(closer, 100)

