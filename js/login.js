function log(val) {
    if (val == 0) {

    } else {

    }
}

function signin(login) {
    let email = document.getElementById("inputEmail").value
    let password = document.getElementById("inputPassword").value
    console.log(email)
    let logincred = {
        email: email,
        password: password
    }
    let login = JSON.stringify(logincred)
    let xhttp = new XMLHttpRequest()
    xhttp.open("POST", "php/login.php", true)
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            if (xhttp.response == 0) {

            } else {
                window.location.replace("profile.php")
            }
        }
    }
    xhttp.send("cred=" + login)
}