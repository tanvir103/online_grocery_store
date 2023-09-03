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

function checkform(){
        let username = document.getElementById('name').value;
        let phone = document.getElementById('phone').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let repassword = document.getElementById('repassword').value;

        let usernameError = document.getElementById('usernameerror').innerText;
        let phoneError = document.getElementById('phoneerror').innerText;
        let mailError = document.getElementById('emailerror').innerText;
        let passwordError = document.getElementById('passworderror').innerText;
        let repasswordError = document.getElementById('repassworderror').innerText;

        let submitButton = document.getElementById('submit');

        if (
            username === '' ||
            phone === '' ||
            email === '' ||
            password === '' ||
            repassword === '' ||
            usernameError !== '' ||
            phoneError !== '' ||
            mailError !== '' ||
            passwordError !== '' ||
            repasswordError !== '' ||
            password !== repassword
        ) {
            submitButton.disabled = true;
        } else {
            submitButton.disabled = false;
        }

    
}

function checkpassword(){
    let password=document.getElementById('password').value;
    let repassword=document.getElementById('repassword').value;
    if(repassword!=password){
        document.getElementById("repassworderror").innerHTML="Password Do not match";
    }else{
        document.getElementById("repassworderror").innerHTML="";
    }
    checkform()
}
function checkp(){
    let password=document.getElementById('password').value;
    if(password.length<8){
        document.getElementById("passworderror").innerHTML="Password should have more than 8 character";
    }else{
        document.getElementById("passworderror").innerHTML="";
    }
    checkform()
}
function checkphone(){
    let phone=document.getElementById('phone').value;
    if(phone.length<11){
        document.getElementById("phoneerror").innerHTML="Phone number should have 11 digit";
    }else{
        document.getElementById("phoneerror").innerHTML="";
    }
    checkform()
}
function checkMail() {
    let mail = document.getElementById('email').value;
    let atPos = mail.indexOf('@');
    let dotPos = mail.lastIndexOf('.');

    if (!mail) {
        document.getElementById('emailerror').innerHTML = "Email cannot be empty.";
    } else if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === mail.length - 1) {
        document.getElementById('emailerror').innerHTML = "Invalid email address.";
    } else {
        document.getElementById('emailerror').innerHTML = "";
    }
    checkform()
}

function checkusername(){
    let username=document.getElementById('name').value;
    if(username.length<4){
        document.getElementById('usernameerror').innerHTML = "Name can't less than 4 character";  
    }else {
        document.getElementById('usernameerror').innerHTML = "";
    }
    checkform()
}

function checkadd(){
    let productname=document.getElementById('name').value;
    let productprice=document.getElementById('price').value;
    let productquantity=document.getElementById('quantity').value;

    let nameerror= document.getElementById('nameerror').innerText;
    let priceerror= document.getElementById('priceerror').innerText;
    let quantityerror= document.getElementById('quantityerror').innerText;
    let submitButton = document.getElementById('submit');

    if (
        productname === '' ||
        productprice === '' ||
        productquantity === '' || nameerror !== '' ||priceerror !== '' ||quantityerror !== '') {
        submitButton.disabled = true;
    } else {
        submitButton.disabled = false;
    }

}

function productname(){
    let productname=document.getElementById('name').value;
    if(productname.length==0){
        document.getElementById('nameerror').innerHTML="Product name should be added";
    }else{
        document.getElementById('nameerror').innerHTML=""; 
    }
    checkadd()
    
}
function productprice(){
    let productprice=document.getElementById('price').value;
    if(productprice.length==0){
        document.getElementById('priceerror').innerHTML="Product price should be added";
    }else{
        document.getElementById('priceerror').innerHTML=""; 
    }
    checkadd()
}

function productquantity(){
    let productquantity=document.getElementById('quantity').value;
    if(productquantity.length==0){
        document.getElementById('quantityerror').innerHTML="Product quantity should be added";
    }else{
        document.getElementById('quantityerror').innerHTML=""; 
    }
    checkadd()
}

function checkaddsales(){
    let username = document.getElementById('username').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let repassword = document.getElementById('repassword').value;

    let usernameError = document.getElementById('nameerror').innerText;
    let phoneError = document.getElementById('phoneerror').innerText;
    let mailError = document.getElementById('emailerror').innerText;
    let passwordError = document.getElementById('passworderror').innerText;
    let repasswordError = document.getElementById('repassworderror').innerText;

    let submitButton = document.getElementById('submit');

    if (
        username === '' ||
        phone === '' ||
        email === '' ||
        password === '' ||
        repassword === '' ||
        usernameError !== '' ||
        phoneError !== '' ||
        mailError !== '' ||
        passwordError !== '' ||
        repasswordError !== '' ||
        password !== repassword
    ) {
        submitButton.disabled = true;
    } else {
        submitButton.disabled = false;
    }


}
function checksalesusername(){
    let username=document.getElementById('username').value;
    if(username.length<4){
        document.getElementById('nameerror').innerHTML = "Name can't less than 4 character";  
    }else {
        document.getElementById('nameerror').innerHTML = "";
    }
    checkaddsales();
}
function checksalesrepassword(){
    let password=document.getElementById('password').value;
    let repassword=document.getElementById('repassword').value;
    if(repassword!=password){
        document.getElementById("repassworderror").innerHTML="Password Do not match";
    }else{
        document.getElementById("repassworderror").innerHTML="";
    }
    checkaddsales();
}

function checkEmail() {
    let mail = document.getElementById('email').value;
    let atPos = mail.indexOf('@');
    let dotPos = mail.lastIndexOf('.');

    if (!mail) {
        document.getElementById('emailerror').innerHTML = "Email cannot be empty.";
    } else if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === mail.length - 1) {
        document.getElementById('emailerror').innerHTML = "Invalid email address.";
    } else {
        document.getElementById('emailerror').innerHTML = "";
    }
    checkaddsales();
}
function checksalesphone(){
    let phone=document.getElementById('phone').value;
    if(phone.length<11){
        document.getElementById("phoneerror").innerHTML="Phone number should have 11 digit";
    }else{
        document.getElementById("phoneerror").innerHTML="";
    }
    checkaddsales();
}
function checksalespassword(){
    let password=document.getElementById('password').value;
    if(password.length<8){
        document.getElementById("passworderror").innerHTML="Password should have more than 8 character";
    }else{
        document.getElementById("passworderror").innerHTML="";
    }
    checkaddsales();
}

function checkpurchase(){
    let quantity = document.getElementById('quantity').value;

    let quantityerror = document.getElementById('quantityerror').innerText;

    let submitButton = document.getElementById('submit');

    if (
        quantity === '' ||
        quantityerror !== '' 
    ) {
        submitButton.disabled = true;
    } else {
        submitButton.disabled = false;
    }


}


function checkquantity(){
    let password=document.getElementById('quantity').value;
    if(password.length==0){
        document.getElementById("quantityerror").innerHTML="Quantity should be added";
    }else{
        document.getElementById("quantityerror").innerHTML="";
    }
    checkpurchase();
}