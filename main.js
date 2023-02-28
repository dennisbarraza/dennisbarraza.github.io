function login()
{
    var user,password
    user = document.getElementById("inputuser").value;
    password = document.getElementById("inputPassword").value;
    if( user=="dennis" && password=="1234" )
    {
        window.location = "index2.html";
    }
    else
    {
        alert("EERRor")
    }
}