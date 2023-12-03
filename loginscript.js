function validateLogIn(){

    let email = document.getElementById('usremail').value;
    let password = document.getElementById('psw').value;

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegex.test(email)){
        alert('Please enter a valid email adress');
        return false;
    }

    let passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
    if(!passwordRegex.test(password)){
        alert('Please enter a valid password (The password must contain at least 8 characters, including at least 1 number and 1 special character.)');
        return false;
    }
}

/*function setRememberMeCookie() {
    document.cookie = "rememberMe=true; expires=Sun, 31 Dec 2030 12:00:00 UTC; path=/";
}

function checkRememberMeCookie() {
    let cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i].trim();
        if (cookie.indexOf("rememberMe=true") === 0) {
            // Log in the user automatically
            // Your login logic here
            return true;
        }
    }
    return false;
}*/ 