var id_exp='';
var id_user='';
$(".chat_button").click(function () {
  id_exp = this.id;
  id_user = JSON.parse(localStorage.getItem('id_user'));
  if (document.getElementById("chat-content")!=null){
    $(".chat").show();
    loadchat();
  }
  else{
    $("#popback").show();
  }
});
$(".close").click(function(){
  $(".chat").hide();
});
function loadchat(){
  var arr=[];
  id_exp = id_exp.replace(/expert/g, '');
  $.ajax({
    url:     'registration.php',
    type:     "POST",
    dataType: "html",
    data: {
       type:'chat',
       id_exp: id_exp,
       id_user: id_user
    },
    success: function(response) {
      result = $.parseJSON(response);
      if (result!=''){
        for (var i = 0; i < (result.length); i++) {
          var chat_container = document.createElement('div');
          chat_container.className = "message-container";
          $message = " <div class=\"pic-container\"> <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg\" alt=\"\" class=\"profilePic\" />     <div class=\"status\"></div>  </div>  <h3 class=\"name\">";
          $message += ''+'name'+'';
          $message += "</h3><div class=\"message\">";
          $message += "<p>"+result[i].text+"</p>";
          $message += "</div><div class=\"time\"><span>"+result[i].datetime+"</span></div>"
          chat_container.innerHTML = $message;
          document.getElementById("chat-content").appendChild(chat_container);
        }
      }
    },
    error: function(response) {
      alert('Ошибка'+response);
    }
  });

  $("#send").click(function(){
    if (JSON.parse(localStorage.getItem("balance")) < price) {
      alert('Недостаточно средств');
    } else {
      if($("#message").val()){
        var chat_container = document.createElement('div');
        chat_container.className = "message-container";
        $message = " <div class=\"pic-container\"> <img src=\"https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg\" alt=\"\" class=\"profilePic\" />     <div class=\"status\"></div>  </div>  <h3 class=\"name\">";
        $message += ''+JSON.parse(localStorage.getItem("name"))+'';
        $message += "</h3><div class=\"message\">";
        $message += "<p>"+$("#message").val()+"</p>";
        var date = new Date();
        var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();

        $message += "</div>  <div class=\"time\"><span>"+time+"</span></div>"

        chat_container.innerHTML = $message;
        arr.push($message);
        localStorage.setItem('chat',JSON.stringify(arr));

        document.getElementById("chat-content").appendChild(chat_container);
        document.getElementById("message").value = "";
        document.getElementById("chat-content").scrollTop = 9999;
        localStorage.setItem("balance", JSON.parse(localStorage.getItem("balance")) - price);
        $("#user_balance").html('' + JSON.parse(localStorage.getItem("balance")) + ' руб.');
        localStorage.setItem("bal", JSON.stringify('' + JSON.parse(localStorage.getItem("balance")) + ' руб.'));
      }
      else alert('Введите сообщение')
    }
  })
}
