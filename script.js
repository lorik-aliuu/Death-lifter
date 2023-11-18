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

form.addEventListener("submit", function (e) {
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

function redirectToSuccess() {
  window.location.href = "success.html";
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
    redirectToSuccess();
  }
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

const aboutLink = document.querySelector('a[href="about.html"]');
aboutLink.addEventListener("click", function (event) {
  event.preventDefault();
  window.location.href = "about.html";
});

document.addEventListener("DOMContentLoaded", function () {
  const servicesLink = document.getElementById("servicesLink");
  const ourServices = document.getElementById("ourServices");

  servicesLink.addEventListener("click", function (event) {
    event.preventDefault();
    smoothScrollTo(ourServices);
  });

  function smoothScrollTo(target) {
    const targetPosition = target.getBoundingClientRect().top + window.scrollY;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 1000;
    let start = null;

    function animation(currentTime) {
      if (start === null) {
        start = currentTime;
      }
      const timeElapsed = currentTime - start;
      const scroll = easeInOutQuad(
        timeElapsed,
        startPosition,
        distance,
        duration
      );
      window.scrollTo(0, scroll);
      if (timeElapsed < duration) {
        requestAnimationFrame(animation);
      }
    }

    function easeInOutQuad(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return (c / 2) * t * t + b;
      t--;
      return (-c / 2) * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
  }
});
