function validation(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  if(name.length < 3){
    alert("Introduceti un nume valid!");
  }

  else if(isNaN(phone) || phone.length < 8  ){
    alert("Introduceti un numar de telefon valid!")
  }

  else if(email.indexOf("@") == -1 || email.length < 5  ){
    alert("Introduceti o adresa de e-mail valida!")
  }
  else if(message.length < 10  ){
    alert("Marimea minima a mesajului este de 10 caractere!")
  }
  else alert("Ati trimis datele cu succes. In scrut timp va vom contacta")
}

// clock
function currentTime() {
  var date = new Date();
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);

  document.getElementById("clock").innerText = hour + " : " + min + " : " + sec;
    var t = setTimeout(function(){ currentTime() }, 1000);
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime();
