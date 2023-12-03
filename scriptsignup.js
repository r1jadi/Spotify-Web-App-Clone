
function validateSignUp(){

    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let name = document.getElementById('name').value;
    let vitiLindjes = document.getElementById('ditelindja').value;

    let selectedDate = vitiLindjes;
    let dateObject = new Date(selectedDate);
    let year = dateObject.getFullYear();

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegex.test(email)){
        alert('Please enter a valid email adress');
        return false;
    }

    let passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
    if(!passwordRegex.test(password)){
        alert('Please enter a valid password(The password must contain at least 8 characters, including at least 1 number and 1 special character.)');
        return false;
    }

    let nameRegex = /^[a-zA-Z]+$/;
    if(!nameRegex.test(name)){
        alert("Please enter a valid name");
        return false;
    }

    if(year < 1900 || year > 2023){
        alert("Please enter a valid birth year");
        return false;
    }
}