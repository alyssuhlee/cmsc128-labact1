// validate new password as user inputs 
let parameters = {
    len : false,
    letters : false,
    numbers : false,
    specialChars : false
}

// pass strength bar
let strengthBar = document.getElementById("password-check-bar");    

// check if pass meets requirements
function passwordStrengthChecker() {
    // pass field
    let password = document.getElementById("auth_pass").value;  

    // change the value in object param
    parameters.letters = (/[A-Z]+/.test(password)) ? true : false; // Check if password contains capital letters
    parameters.numbers = (/[0-9]+/.test(password)) ? true : false; // check if password contains numbers
    parameters.specialChars = (/[!\"$%&/()=?@~`\\.\';:+=^*_-]+/.test(password)) ? true : false; // check if password contains special char
    parameters.len = (password.length > 7) ? true : false; // check if password has 8 characters or more

    // determine length and create div of strength bar
    let barLength = Object.values(parameters).filter(value=>value);

    // insert child elements for pass strength bar
    strengthBar.innerHTML = "";
    for (let i in barLength) {      // creates span elements for strength bar based on num of true parameters
        let span = document.createElement("span");
        span.classList.add("strength");
        // insert span element to strength bar
        strengthBar.appendChild(span);      
    }
    // design newly created span elements
    let spanRef = document.getElementsByClassName("strength"); // get class name of span in strength bar
    let reg_btn = document.getElementById('register-btn'); // reg button

    // change color of strength bar based on num of span elements
    for (let i = 0; i < spanRef.length; i++) {
        switch (spanRef.length - 1) {     
             // num of span elements = 1  
            case 0 :       
                spanRef[i].style.background = "#ff3e36";
                reg_btn.disabled = true;
                break;
            // num of span elements = 2
            case 1:     
                spanRef[i].style.background = "#ff691f";
                reg_btn.disabled = true;
                break;
            // num of span elements = 3
            case 2:     
                spanRef[i].style.background = "#ffda36";
                reg_btn.disabled = true;
                break;
            // num of span elements = 4
            case 3:     
                spanRef[i].style.background = "#0be881";
                reg_btn.disabled = false; // a user can proceed from the reg form if the strength bar turns green
        }
    }
}

// toggle or untoggle password
function passwordToggle() {
    let password = document.getElementById("auth_pass");    // pass field
    let eye = document.getElementById("password-toggle");   // eye icon

    // if password is the type of pass field, change type to text to show password as text
    if (password.getAttribute("type") == "password") {   
        password.setAttribute("type", "text");    
        eye.style.color = "#00FFFF";  // change color to cyan if it is not in password form
    }
    // if type of password field input is text, hide password
    else {   
        password.setAttribute("type", "password");   
        eye.style.color = "#000000"; // color is black if it is in password form
    }
}