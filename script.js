function liveSearch(str){
    if(str==""){
        document.getElementById('message').innerHTML="<tr><td align=\"center\"><font color=\"white\" face=\"times new roman\" size=\"6\">Please Type Title</font><br><br><br>";
        return;
    }
    let xhttp=new XMLHttpRequest(); 
    xhttp.open('post','../Controller/search-controller.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name='+str);
    xhttp.onload=function(){
        document.getElementById('message').innerHTML=this.responseText;
    }
}

function live(str){
    if(str.length==0){
        document.getElementById('message').innerHTML="";
        return;
    }
    let xhttp=new XMLHttpRequest(); 
    xhttp.open('post','../Controller/add-search.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name='+str);
    xhttp.onload=function(){
        document.getElementById('message').innerHTML=this.responseText;
    }
}
function getprice(){
  let x=document.getElementById("ProductPrice").value;
  let y=document.getElementById("quantity").value;
   return document.getElementById("totalprice").innerHTML=x*y;
}

function checkpassword(){
    let password=document.getElementById('password').value;
    let repassword=document.getElementById('repassword').value;
    if(repassword!=password){
        document.getElementById("repassworderror").innerHTML="Password Do not match";
    }else{
        document.getElementById("repassworderror").innerHTML="";
    }
}