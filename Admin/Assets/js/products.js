document
  .getElementById("addPromoForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    addPromo();
  });

document
  .getElementById("updatePromoForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    updatePromo();
  });

function openModal(modalId) {
  document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
  document.getElementById(modalId).style.display = "none";
}

function previewImage(event) {
  var output = document.getElementById("imagePreview");
  var container = document.getElementById("imagePreviewContainer");

  container.style.display = "block";

  output.src = URL.createObjectURL(event.target.files[0]);
}

function upreviewImage(event) {
  var output = document.getElementById("u_imagePreview");
  var container = document.getElementById("u_imagePreviewContainer");

  container.style.display = "block";

  output.src = URL.createObjectURL(event.target.files[0]);
}

/* Button dropdown script */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

// Pagination Script
const pageNumbers = document.querySelector(".pageNumbers");
const listItems = document.querySelectorAll(".products-content");
const prevButton = document.getElementById("prev");
const nextButton = document.getElementById("next");

const contentLimit = 10;
const pageCount = Math.ceil(listItems.length / contentLimit);
let currentPage = 1;

const displayPageNumbers = (index) => {
    const pageNumber = document.createElement("a");
    pageNumber.innerText = index;
    pageNumber.setAttribute('href', "#");
    pageNumber.setAttribute("index", index);
    pageNumber.classList.add("page-number");
    pageNumbers.appendChild(pageNumber);
};

const getPageNumbers = () => {
    for (let i = 1; i <= pageCount; i++) {
        displayPageNumbers(i);
    }
};

const disableButton = (button) => {
    button.classList.add("disabled");
    button.setAttribute("disabled", true);
};

const enableButton = (button) => {
    button.classList.remove("disabled");
    button.removeAttribute("disabled");
};

const controlButtonsStatus = () => {
    if (currentPage === 1) {
        disableButton(prevButton);
    } else {
        enableButton(prevButton);
    }
    if (pageCount === currentPage) {
        disableButton(nextButton);
    } else {
        enableButton(nextButton);
    }
};

const handleActivePageNumber = () => {
    document.querySelectorAll('.page-number').forEach((button) => {
        button.classList.remove("active");
        const pageIndex = Number(button.getAttribute("index"));
        if (pageIndex === currentPage) {
            button.classList.add("active");
        }
    });
};

const setCurrentPage = (pageNum) => {
    currentPage = pageNum;

    handleActivePageNumber();
    controlButtonsStatus();

    const prevRange = (pageNum - 1) * contentLimit;
    const currRange = pageNum * contentLimit;

    listItems.forEach((item, index) => {
        if (index >= prevRange && index < currRange) {
            item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });
};

window.addEventListener('load', () => {
    getPageNumbers();
    setCurrentPage(1);

    prevButton.addEventListener('click', () => {
        setCurrentPage(currentPage - 1);
    });

    nextButton.addEventListener("click", () => {
        setCurrentPage(currentPage + 1);
    });

    // Re-adding click listeners for dynamically created page numbers
    document.querySelector(".pageNumbers").addEventListener('click', (event) => {
        if (event.target.classList.contains("page-number")) {
            const pageIndex = Number(event.target.getAttribute('index'));
            setCurrentPage(pageIndex);
        }
    });
});


