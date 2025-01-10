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
const productsPerPage = 4;
const productDetails = document.querySelectorAll('.products-content');
const totalProducts = productDetails.length;
const totalPages = Math.ceil(totalProducts / productsPerPage);

const paginationContainer = document.querySelector('.pagination');
const prevButton = document.querySelector('.previous');
const nextButton = document.querySelector('.next');

// Create dynamic page buttons based on total pages
paginationContainer.innerHTML = '<button class="previous"> <i class="bi bi-arrow-left"></i> Previous</button>';
for (let i = 1; i <= totalPages; i++) {
    const pageButton = document.createElement('button');
    pageButton.classList.add('page-btn');
    pageButton.textContent = i;
    paginationContainer.appendChild(pageButton);
}
paginationContainer.innerHTML += '<button class="next">Next <i class="bi bi-arrow-right"></i></button>';

const pageButtons = Array.from(paginationContainer.querySelectorAll('.page-btn'));
let currentPage = 1;

// Function to show products based on the current page
function showProducts(page) {
    const start = (page - 1) * productsPerPage;
    const end = start + productsPerPage;

    productDetails.forEach((product, index) => {
        product.style.display = index >= start && index < end ? 'block' : 'none';
    });

    // Highlight the active page button
    pageButtons.forEach((btn, index) => {
        btn.classList.toggle('active', index === page - 1);
    });

    // Enable/Disable prev/next buttons
    prevButton.disabled = page === 1;
    nextButton.disabled = page === totalPages;
}

// Event listeners for page buttons
pageButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        currentPage = index + 1;
        showProducts(currentPage);
    });
});

// Event listeners for prev/next buttons
prevButton.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        showProducts(currentPage);
    }
});

nextButton.addEventListener('click', () => {
    if (currentPage < totalPages) {
        currentPage++;
        showProducts(currentPage);
    }
});

// Initialize the first page
showProducts(currentPage);

