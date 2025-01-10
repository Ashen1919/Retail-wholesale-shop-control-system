document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".menu-button");
    const contentDiv = document.querySelector(".content");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            const page = button.getAttribute("data-page");

            contentDiv.innerHTML = "<p>Loading...</p>";

            fetch(page)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`Failed to load ${page}`);
                    }
                    return response.text();
                })
                .then((html) => {
                    contentDiv.innerHTML = html;
                })
                .catch((error) => {
                    console.error("Error loading page:", error);
                    contentDiv.innerHTML = `<p>Error loading page: ${error.message}</p>`;
                });
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".menu-button");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            buttons.forEach((btn) => btn.classList.remove("active"));

            button.classList.add("active");
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".menu-button");
    const contentDiv = document.querySelector(".content");

    const loadPage = (url) => {
        fetch(url)
            .then((response) => response.text())
            .then((html) => {
                contentDiv.innerHTML = html;
            })
            .catch((error) => {
                console.error("Error loading page:", error);
                contentDiv.innerHTML = "<p>Error loading content. Please try again.</p>";
            });
    };

    loadPage("./counter.php");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            buttons.forEach((btn) => btn.classList.remove("active"));

            button.classList.add("active");

            const pageUrl = button.getAttribute("data-page");
            loadPage(pageUrl);
        });
    });

    document.getElementById("counter-button").classList.add("active");
});

