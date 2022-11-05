function signin(){
    let email = document.getElementById("inputEmail").value
    let password = document.getElementById("inputPassword").value
    console.log(email)
    let logincred = {
        email:email,
        password:password
    }
    let login = JSON.stringify(logincred)
    let xhttp = new XMLHttpRequest()
    xhttp.open("POST","php/login.php",true)
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhttp.onreadystatechange = function(){
        if( xhttp.readyState == 4 && xhttp.status == 200){
            console.log(xhttp.response)
        }
    }
    xhttp.send("cred="+login)
    // let data = xhttp.responseText;
    // console.log(data)
    // if(data==0)
    //     window.open("profile.html")
}