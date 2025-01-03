document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".menu-button");
    const contentDiv = document.querySelector(".content");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            // Get the page URL from the data-page attribute
            const page = button.getAttribute("data-page");

            // Show a loading message while fetching the page
            contentDiv.innerHTML = "<p>Loading...</p>";

            // Fetch the content of the selected page
            fetch(page)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`Failed to load ${page}`);
                    }
                    return response.text();
                })
                .then((html) => {
                    // Insert the loaded HTML into the content div
                    contentDiv.innerHTML = html;
                })
                .catch((error) => {
                    console.error("Error loading page:", error);
                    contentDiv.innerHTML = `<p>Error loading page: ${error.message}</p>`;
                });
        });
    });
});
