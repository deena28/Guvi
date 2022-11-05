async function signin(){
    let email = document.getElementById("inputEmail")
    let password = document.getElementById("inputPassword")
    let logincred = {
        email:email,
        password:password
    }
    let login = JSON.stringify(logincred)
    let xhttp = XMLHttpRequest()
    xhttp.open("GET", "localhost:8080/login.php",true)
    xhttp.send(login)
    let data = xhttp.responseText;
    if(data==0)
        window.open("profile.html")
}