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