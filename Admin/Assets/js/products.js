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


