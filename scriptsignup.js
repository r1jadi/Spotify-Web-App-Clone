
function validateSignUp(){

    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let name = document.getElementById('name').value;
    let ditelindja = document.getElementById('ditelindja').value;

    let emailRegex = /^[^zs@] + @[^\s@] +\.[^\s@] + $/;
    if(!emailRegex.test(email)){
        alert('Please enter a valid email adress');
        return false;
    }

    let passwordRegex = /^[a-zA-Z0-9!@#$%^&*] {6,16}$/;
    if(!passwordRegex.test(password)){
        alert('Please enter a valid password');
        return false;
    }

    let nameRegex = /^[a-zA-Z\s] + $/;
    if(!nameRegex.test(name)){
        alert("Please enter a valid name");
        return false;
    }

    if(ditelindja.getFullYear() < 1900){
        alert("Please enter a valid birth year");
    }
}