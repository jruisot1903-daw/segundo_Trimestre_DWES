var dominio = document.location.protocol + "//" + document.location.hostname;
var url = dominio + "pract2/ajax";

var resutl = document.getElementById("id_resutl");

document.getElementById("id_form").addEventListener("click",function(event){
    event.preventDefault();
})



document.getElementById("btEnvi").addEventListener("click",function(){
    
    fetch(url,{
        method: "POST",
    })
});