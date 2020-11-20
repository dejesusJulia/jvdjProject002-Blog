 // FORM VALIDATION
// var loginBtn = document.querySelector('#loginBtn');

// loginBtn.addEventListener('click', validateLogin);

// function validateLogin(e){
//     var loginForm = document.querySelector('#loginForm');
//     if(loginForm.checkValidity() === false){
//         e.preventDefault();
//         e.stopPropagation();
//     }
//     loginForm.classList.add('was-validated');
// }

var contactBtn = document.querySelector('#contactBtn');

contactBtn.addEventListener('click', validateContact);

function validateContact(e){
    var contactForm = document.querySelector('#contactForm');
    if(contactForm.checkValidity() === false){
        e.preventDefault();
        e.stopPropagation();
    }
    contactForm.classList.add('was-validated');
}

