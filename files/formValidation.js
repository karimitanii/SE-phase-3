

const inputPass1 = document.getElementById('pass1');
const inputPass2 = document.getElementById('pass2');
const firstNameElement = document.getElementById('fn');
const dobElement = document.getElementById('dob');
const dnElement = document.getElementById('dn');
const emailElement = document.getElementById('user-email');
const formElement = document.querySelector('form');


inputPass2.addEventListener('input', passwordConfirmation);

function passwordConfirmation(){
   if (inputPass1.value !== inputPass2.value){
    inputPass2.classList.remove('confirmed')
    inputPass2.classList.add('error');

   }
   else{
    inputPass2.classList.add('confirmed');
    inputPass2.classList.remove('error');

   }

}


function validityCheck(){
    if (inputPass1.value && inputPass2.value && firstNameElement.value && dobElement.value && dnElement.value && emailElement.value){
        if (inputPass2.value==inputPass1.value){
            formElement.submit();

        }
        else{
            alert("The passwords must be the same!")
        }
        
    }
    else{
        alert("Please fill the missing input field(s)!");
    }
}

