var arr=[];
var arr2=JSON.parse(localStorage.getItem("chat"));
if (arr2!=null){
      arr=arr2;
      for (var i = 0; i < (arr2.length); i++) {
        var chat_container = document.createElement('div');
        chat_container.className = "message-container";
        chat_container.innerHTML = arr2[i];
        document.getElementById("chat-content").appendChild(chat_container);
      }
}
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
