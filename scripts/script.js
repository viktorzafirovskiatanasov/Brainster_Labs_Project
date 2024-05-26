function validateForm() {
  var nameSurname = document.forms[0].nameSurname.value;
  var companyName = document.forms[0].companyName.value;
  var email = document.forms[0].email.value;
  var phoneNumber = document.forms[0].phoneNumber.value;
  var studentType = document.forms[0].studentType.value;

  if (!isValidNameSurname(nameSurname)) {
    showError("nameSurname", "Ве молиме внесете го вашето име и презиме.");
    return false;
  } else {
    clearError("nameSurname");
    
  }
  if (companyName === "") {
    showError("companyName", "Внесете го името на компанијата");
    return false;
  } else {
    clearError("companyName");
  }

  if (!isValidEmail(email)) {
    showError("email", "Ве молиме внесете валидна е-пошта.");
    return false;
  } else {
    clearError("email");
  }


  if (phoneNumber.length < 9) {
    showError("phoneNumber", "Внесете валиден број за контакт");
    return false;
  } else {
    clearError("phoneNumber");
  }

  if (studentType === "1") {
    showError("studentType" , "");
    return false;
  } else {
    clearError("studentType");
  }

  return true;
}
function isValidNameSurname(nameSurname) {
  var parts = nameSurname.trim().split(" ");
  

  if (parts.length !== 2) {
    return false;
  }
  
  
  for (var i = 0; i < parts.length; i++) {
    if (parts[i].length < 3) {
      return false;
    }
  }
  
  return true;
}
function isValidEmail(email) {
  
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}
function showError(fieldName , errorMessage) {
  var inputElement = document.getElementById(fieldName);
  inputElement.classList.add("error");
  inputElement.placeholder = errorMessage;
}

function clearError(fieldName) {
  var inputElement = document.getElementById(fieldName);
  inputElement.classList.remove("error");
}

document.querySelector("#filter-coding").addEventListener("change", filterCoding);
document.querySelector("#filter-design").addEventListener("change", filterDesign);
document.querySelector("#filter-marketing").addEventListener("change", filterMarketing);

var prevSelectedFilter = null;

function filterCoding() {
  hideAllCards();

  if (document.querySelector("#filter-coding").checked) {
    var codingCards = document.querySelectorAll(".coding");

    codingCards.forEach((codingCard) => {
      codingCard.style.display = "inline-block";
    });

    document.querySelector("#filter-design").checked = false;
    document.querySelector("#filter-marketing").checked = false;
    if (prevSelectedFilter) {
      prevSelectedFilter.style.backgroundColor = "";
    }
    document.querySelector("#Coding-selector").style.backgroundColor = "red";
    prevSelectedFilter = document.querySelector("#Coding-selector");
  } else {
    showAllCards();
    document.querySelector("#Coding-selector").style.backgroundColor = "";
    prevSelectedFilter = null;
  }
}

function filterDesign() {
  hideAllCards();

  if (document.querySelector("#filter-design").checked) {
    var designCards = document.querySelectorAll(".design");

    designCards.forEach((designCard) => {
      designCard.style.display = "inline-block";
    });

    document.querySelector("#filter-coding").checked = false;
    document.querySelector("#filter-marketing").checked = false;
    if (prevSelectedFilter) {
      prevSelectedFilter.style.backgroundColor = "";
    }
    document.querySelector("#Design-selector").style.backgroundColor = "red";
    prevSelectedFilter = document.querySelector("#Design-selector");
  } else {
    showAllCards();
    document.querySelector("#Design-selector").style.backgroundColor = "";
    prevSelectedFilter = null;
  }
}

function filterMarketing() {
  hideAllCards();

  if (document.querySelector("#filter-marketing").checked) {
    var marketingCards = document.querySelectorAll(".marketing");

    marketingCards.forEach((marketingCard) => {
      marketingCard.style.display = "inline-block";
    });

    document.querySelector("#filter-design").checked = false;
    document.querySelector("#filter-coding").checked = false;
    if (prevSelectedFilter) {
      prevSelectedFilter.style.backgroundColor = "";
    }
    document.querySelector("#Marketing-selector").style.backgroundColor = "red";
    prevSelectedFilter = document.querySelector("#Marketing-selector");
  } else {
    showAllCards();
    document.querySelector("#Marketing-selector").style.backgroundColor = "";
    prevSelectedFilter = null;
  }
}

function hideAllCards() {
  var allCards = document.querySelectorAll(".project");

  allCards.forEach((card) => {
    card.style.display = "none";
  });
}

function showAllCards() {
  var allCards = document.querySelectorAll(".project");

  allCards.forEach((card) => {
    card.style.display = "inline-block";
  });
}