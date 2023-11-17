const hm = document.querySelector(".hm");
const typewriter = document.getElementById("typewriter");
const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");
const registerForm = document.getElementById("registerForm");

hm.addEventListener("click", function () {
  const navbar = document.querySelector(".link");
  navbar.classList.toggle("active");
});

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

form.addEventListener("submit", (e) => {
  e.preventDefault();
  validateInputs();
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = message;
  inputControl.classList.add("error");
  inputControl.classList.remove("success");
};

const setSuccess = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = "";
  inputControl.classList.add("success");
  inputControl.classList.remove("error");
};

const isValidEmail = (email) => {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  if (usernameValue === "") {
    setError(username, "Username is required");
  } else {
    setSuccess(username);
  }

  if (emailValue === "") {
    setError(email, "Email is required");
  } else if (!isValidEmail(emailValue)) {
    setError(email, "Provide a valid email address");
  } else {
    setSuccess(email);
  }

  if (passwordValue === "") {
    setError(password, "Password is required");
  } else if (passwordValue.length < 8) {
    setError(password, "Password must be at least 8 characters");
  } else {
    setSuccess(password);
  }

  if (password2Value === "") {
    setError(password2, "Please confirm your password");
  } else if (password2Value !== passwordValue) {
    setError(password2, "Passwords don't match");
  } else {
    setSuccess(password2);
  }
};

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

function changeButtonColor() {
  const submitButton = document.getElementById("submitButton");
  submitButton.style.backgroundColor = "green";
  setTimeout(() => {
    submitButton.style.backgroundColor = "";
  }, 500);
}

const submitButton = document.getElementById("submitButton");
submitButton.addEventListener("click", () => {
  changeButtonColor();
});
