function submitMessage(){

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  
  
  
     $.ajax({
        type: "POST",
        url: "/SPW-Project/php/submitMessage.php",
        data: {"message" : message , "name" : name, "email" : email}
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


document.getElementById("messagesubmit").addEventListener("click", submitMessage); 