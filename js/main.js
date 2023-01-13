const showOnPx = 100;
const backToTopButton = document.querySelector(".back-home")

const scrollContainer = () => {
  return document.documentElement || document.body;
};

document.addEventListener("scroll", () => {
  if (scrollContainer().scrollTop > showOnPx) {
    backToTopButton.classList.remove("top")
  } else {
    backToTopButton.classList.add("top")
  }
})

 
var navLinks = document.getElementById("nav-links");

function showMenu() {
  // navLinks.style.right = "0";
  navLinks.style.display = "block";
}
function hideMenu() {
  //navLinks.style.right = "-200px";
  navLinks.style.display = "none";
}


const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    // inputsValid = validateInputs();
    
    // if (inputsValid) {
      formStepsNum++;
      updateFormSteps();
      updateProgressbar();
    // }
  
    
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

// function validateInputs() {
//   let inputsValid = true;

//   const inputs = document.querySelectorAll(".fill");
//   for (let i = 0; i < inputs.length; i++) {
//       const valid = inputs[i].checkValidity();
//       if (!valid) {
//           inputsValid = false;
//           inputs[i].classList.add("invalid-input");
//       } else {
//           inputs[i].classList.remove("invalid-input");
//       }
//   }
//   return inputsValid;
// }