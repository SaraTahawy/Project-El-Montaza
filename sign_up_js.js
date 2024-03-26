
function sign_up_Validation() {

const name = document.forms["sign_up_Form"]["name"].value;
const email = document.forms["sign_up_Form"]["email"].value;
const password = document.forms["sign_up_Form"]["password"].value;
const confirm_password= document.forms["sign_up_Form"]["confirm_password"].value; 
const error = document.getElementById("sign_up_Error");

if (
name === ""|| email ===""|| password ===""|| confirm_password === ""
)

 {
 error.textContent = "All fields are required."; 
 return false;
} 

else if (password !== confirm_password) {
error.textContent = "Passwords don't match.";
return false;

} else {
  error.textContent = "";
return true;
}
}

