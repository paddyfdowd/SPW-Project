function login(){
    var uname = document.getElementById("login_1").value;

    var pword = document.getElementById("login_2").value;

    $.ajax({
        type: "POST",
        url: "/dashboard/SPW/SPW/SPW3/hyperspace/php/login.php",
        data: {"uname" : uname, "pword" : pword}
    })
    .done (function(data, textStatus, jqXHR) { 
      alert("Success: " + data); 
    })
    .fail (function(jqXHR, textStatus, errorThrown) { 
      alert("Error" + errorThrown + textStatus); 
    })
    .always (function(jqXHROrData, textStatus, jqXHROrErrorThrown) { 
      //alert("complete"); 
    });
    
}


document.getElementById("loginbutton").addEventListener("click", login); 