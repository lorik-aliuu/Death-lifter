const typewriter = document.getElementById("typewriter");
const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");
const registerForm = document.getElementById("registerForm");

const textToType = "Your only limit is you.";

function typeWriter(text, index) {
  if (index < text.length) {
    typewriter.innerHTML += text.charAt(index);
    index++;
    setTimeout(() => {
      typeWriter(text, index);
    }, 95);
  }
}

window.onload = function () {
  typeWriter(textToType, 0);
};

let homeClicked = false;

function handleClick() {
  if (homeClicked) {
    location.reload();
  } else {
    homeClicked = true;
  }
}

document.getElementById("submitButton").addEventListener("click", function (e) {
  e.preventDefault();
  validateInputs();
});

function setError(element, message) {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = message;
  inputControl.classList.add("error");
  inputControl.classList.remove("success");
}

function setSuccess(element) {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = "";
  inputControl.classList.add("success");
  inputControl.classList.remove("error");
}

function isValidEmail(email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function validateInputs() {
  const usernameValue = document.getElementById("username").value.trim();
  const emailValue = document.getElementById("email").value.trim();
  const passwordValue = document.getElementById("password").value.trim();
  const password2Value = document.getElementById("password2").value.trim();

  if (usernameValue === "") {
    setError(document.getElementById("username"), "Username is required");
  } else {
    setSuccess(document.getElementById("username"));
  }

  if (emailValue === "") {
    setError(document.getElementById("email"), "Email is required");
  } else if (!isValidEmail(emailValue)) {
    setError(document.getElementById("email"), "Provide a valid email address");
  } else {
    setSuccess(document.getElementById("email"));
  }

  if (passwordValue === "") {
    setError(document.getElementById("password"), "Password is required");
  } else if (passwordValue.length < 8) {
    setError(
      document.getElementById("password"),
      "Password must be at least 8 characters"
    );
  } else {
    setSuccess(document.getElementById("password"));
  }

  if (password2Value === "") {
    setError(
      document.getElementById("password2"),
      "Please confirm your password"
    );
  } else if (password2Value !== passwordValue) {
    setError(document.getElementById("password2"), "Passwords don't match");
  } else {
    setSuccess(document.getElementById("password2"));
  }

  const usernameValid = document
    .getElementById("username")
    .parentElement.classList.contains("success");
  const emailValid = document
    .getElementById("email")
    .parentElement.classList.contains("success");
  const passwordValid = document
    .getElementById("password")
    .parentElement.classList.contains("success");
  const password2Valid = document
    .getElementById("password2")
    .parentElement.classList.contains("success");

  if (usernameValid && emailValid && passwordValid && password2Valid) {
    submitForm();
  }
}

function submitForm() {
  document.getElementById("form").submit();
}

function toggleRegisterForm() {
  const registerForm = document.getElementById("registerForm");
  const overlay = document.getElementById("overlay");
  const backgroundImage = document.getElementById("backgroundImage");

  if (registerForm.style.display === "none") {
    registerForm.style.display = "block";
    overlay.style.display = "block";
    document.body.style.overflow = "hidden";
    backgroundImage.style.filter = "blur(50px)";
  }
}

function toggleLoginForm() {
  const loginForm = document.getElementById("loginForm");
  const overlay = document.getElementById("overlay");
  const backgroundImage = document.getElementById("backgroundImage");

  if (loginForm.style.display === "none" || loginForm.style.display === "") {
    loginForm.style.display = "block";
    overlay.style.display = "block";
    document.body.style.overflow = "hidden";
    backgroundImage.style.filter = "blur(50px)";
  } else {
    loginForm.style.display = "none";
    overlay.style.display = "none";
    document.body.style.overflow = "visible";
    backgroundImage.style.filter = "none";
  }
}

document
  .getElementById("showLoginForm")
  .addEventListener("click", function (event) {
    event.preventDefault();
    toggleLoginForm();
  });

document
  .getElementById("submitButton2")
  .addEventListener("click", function (e) {
    e.preventDefault();
    validateLoginInputs();
  });

function validateLoginInputs() {
  const usernameValue = document.getElementById("username2").value.trim();
  const passwordValue = document.getElementById("passwordL").value.trim();

  const usernameError = document.getElementById("usernameError");
  const usernameRegex = /^[^0-9][\w\d]*$/;

  if (!usernameRegex.test(usernameValue)) {
    usernameError.textContent = "Username is not valid.";
  } else {
    usernameError.textContent = "";
  }

  const passwordError = document.getElementById("passwordError");
  const passwordMinLength = 8;

  if (passwordValue.length < passwordMinLength) {
    passwordError.textContent =
      "Password should be at least 8 characters long.";
  } else {
    passwordError.textContent = "";
  }

  if (
    usernameRegex.test(usernameValue) &&
    passwordValue.length >= passwordMinLength
  ) {
    submitLoginForm();
  }
}

function submitLoginForm() {
  document.getElementById("Loginform").submit();
}

function changeButtonColor() {
  const submitButton = document.getElementById("submitButton");
  submitButton.style.backgroundColor = "black";
  submitButton.style.color = "white";
  setTimeout(() => {
    submitButton.style.backgroundColor = "";
  }, 100);
}

function changeButtonColor2() {
  const submitButton2 = document.getElementById("submitButton2");
  submitButton2.style.backgroundColor = "black";
  submitButton2.style.color = "white";
  setTimeout(() => {
    submitButton2.style.backgroundColor = "";
  }, 100);
}

const submitButton2 = document.getElementById("submitButton2");
submitButton2.addEventListener("click", () => {
  changeButtonColor2();
});

const submitButton = document.getElementById("submitButton");
submitButton.addEventListener("click", () => {
  changeButtonColor();
});

const slider = document.querySelector(".image-slider");
const arrowLeft = document.querySelector(".arrow-left");
const arrowRight = document.querySelector(".arrow-right");
const heading = document.querySelector(".caption h1");
const description = document.querySelector(".caption p");

const headings = "Death Lifter";
const descriptions = [
  "Your Only Limit is You",
  "Train insane or remain the same",
  "Embrace the pain to witness the change.",
];

const images = ["photo1slider.png", "p2.avif", "p3.avif"];

let id = 0;

function slide(id) {
  slider.style.backgroundImage = `url(${images[id]})`;
  heading.textContent = headings;
  description.textContent = descriptions[id];
}

function initializeSlider() {
  slide(id);
}

arrowLeft.addEventListener("click", () => {
  id--;

  if (id < 0) {
    id = images.length - 1;
  }
  slide(id);
});

arrowRight.addEventListener("click", () => {
  id++;

  if (id > images.length - 1) {
    id = 0;
  }
  slide(id);
});
