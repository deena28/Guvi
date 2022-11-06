signin = function(){
    email=document.getElementById('input')
    password=document.getElementById('inputPassword')
    confirmPassword=document.getElementById('inputCPassword')
    fullname=document.getElementById('inputName')
    DOB=document.getElementById('inputDOB')
    gender=document.getElementById('inputGender')
    dept=document.getElementById('inputDept')
    desig=document.getElementById('inputDesignation')
    address=document.getElementById('inputAddress')
    city=document.getElementById('inputCity')
    state=document.getElementById('inputState')
    phone=document.getElementById('inputPhone')
    zip=document.getElementById('inputZip')
    let details = {
        email:email,
        password:password,
        fullname:fullname,
        DOB:DOB,
        gender:gender,
        dept:dept,
        desig:desig,
        address:address,
        city:city,
        state:state,
        phone:phone,
        zip:zip
    }
    let detail = JSON.stringify(details)
    let xhttp = new XMLHttpRequest()
    xhttp.open("POST","php/register.php",true)
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhttp.onreadystatechange = function(){
        if( xhttp.readyState == 4 && xhttp.status == 200){
            login(xhttp.response)
        }
    }
    xhttp.send("detail="+detail)

}