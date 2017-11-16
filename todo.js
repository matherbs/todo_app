
//////////////////
// SWITCH PAGES //
//////////////////

let switcher = document.getElementById("main-header-right");

let page1 = document.getElementById("main-container-show");
let page2 = document.getElementById("next-container-show");

function addTask() {

  switcher.classList.toggle("main-header-right-rotate");

  page1.classList.toggle("hide");
  page2.classList.toggle("hide");
};

/////////////////
// CLEAR INPUT //
/////////////////

let inputTitle = document.getElementById("input-title");
let inputDescription = document.getElementById("input-description");

function clearButton() {
  inputTitle.value = " ";
  inputDescription.value = " ";
}
