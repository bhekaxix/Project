function validateForm() {
  // Retrieve form field values
  const firstName = document.getElementById("firstname").value;
  const lastName = document.getElementById("lastname").value;
  const dob = document.getElementById("dob").value;
  const email = document.getElementById("email").value;
  const accountType = document.getElementById("accountType").value;
  const password = document.getElementById("password").value;

  // Regular expressions for validation
  const nameRegex = /^[a-zA-Z]+$/;
  const ageRegex = /^\d+$/;
  const passwordRegex = /^(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/;

  // Error message elements
  const errorFirstname = document.getElementById("errorFirstname");
  const errorLastname = document.getElementById("errorLastname");
  const errorDob = document.getElementById("errorDob");
  const errorEmail = document.getElementById("errorEmail");
  const errorAccountType = document.getElementById("errorAccountType");
  const errorPassword = document.getElementById("errorPassword");

  // Reset error messages
  errorFirstname.textContent = "";
  errorLastname.textContent = "";
  errorDob.textContent = "";
  errorEmail.textContent = "";
  errorAccountType.textContent = "";
  errorPassword.textContent = "";

  // Validation steps
  let isValid = true;

  if (firstName.trim() === "") {
    errorFirstname.textContent = "Please enter your First Name.";
    isValid = false;
  } else if (!nameRegex.test(firstName)) {
    errorFirstname.textContent = "First Name should only contain alphabets.";
    isValid = false;
  }

  if (lastName.trim() === "") {
    errorLastname.textContent = "Please enter your Last Name.";
    isValid = false;
  } else if (!nameRegex.test(lastName)) {
    errorLastname.textContent = "Last Name should only contain alphabets.";
    isValid = false;
  }

  if (dob === "") {
    errorDob.textContent = "Please enter your Date of Birth.";
    isValid = false;
  }

  if (email.trim() === "") {
    errorEmail.textContent = "Please enter your Email.";
    isValid = false;
  }

  if (accountType === "") {
    errorAccountType.textContent = "Please select an Account Type.";
    isValid = false;
  }

  if (password.trim() === "") {
    errorPassword.textContent = "Please enter your Password.";
    isValid = false;
  } else if (!passwordRegex.test(password)) {
    errorPassword.textContent = "Password should contain at least one uppercase letter and one number.";
    isValid = false;
  }

  // Display success message or return validation status
  if (isValid) {
    const username = firstName + " " + lastName;
    const age = calculateAge(dob);
    if (age >= 18) {
      alert("You (" + username + ") have successfully registered as " + accountType + ".");
      return true;
    } else {
      errorDob.textContent = "You must be at least 18 years old to register.";
      return false;
    }
  } else {
    return false;
  }
}

function calculateAge(dob) {
  const birthDate = new Date(dob);
  const today = new Date();
  let age = today.getFullYear() - birthDate.getFullYear();
  const monthDiff = today.getMonth() - birthDate.getMonth();
  if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
  return age;
}
