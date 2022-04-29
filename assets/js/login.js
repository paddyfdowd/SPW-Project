function logincheck() {

  $.ajax({
      type: "GET",
      url: "/SPW-Project/php/auth.php",
    })
    .done(function (data, textStatus, jqXHR) {
      if (data === "loggedin") {
        window.location.href = "http://localhost/SPW-Project/profile.html"
      }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      alert("Error" + errorThrown + textStatus);
    })
    .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
      //alert("complete"); 
    });
}


function login(){


    var uname = document.getElementById("login_1").value;

    var pword = document.getElementById("login_2").value;

    if(uname && pword !== ""){

    $.ajax({
        type: "POST",
        url: "/SPW-Project/php/login.php",
        data: {"uname" : uname, "pword" : pword}

    })
    .done(function (data, textStatus, jqXHR) {
      alert("Success: " + data);
      if (data === "Found Match") {
        window.location.href = "http://localhost/SPW-Project/profile.html"
      }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      alert("Error" + errorThrown + textStatus);
    })
    .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
      //alert("complete"); 
    });
  }
  else{

    alert("Please Enter username and password");
  }
    
}

document.getElementById("loginbutton").addEventListener("click", login);