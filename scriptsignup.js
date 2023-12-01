
function validateSignUp(){

    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let name = document.getElementById('name').value;
    let vitiLindjes = document.getElementById('ditelindja').getFullYear().value;

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegex.test(email)){
        alert('Please enter a valid email adress');
        return false;
    }

    let passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
    if(!passwordRegex.test(password)){
        alert('Please enter a valid password');
        return false;
    }

    let nameRegex = /^[a-zA-Z \s]+$/;
    if(!nameRegex.test(name)){
        alert("Please enter a valid name");
        return false;
    }

    if((vitiLindjes < 1900 || vitiLindjes > 2023).test(vitiLindjes)){
        alert("Please enter a valid birth year");
        return false;
    }
}