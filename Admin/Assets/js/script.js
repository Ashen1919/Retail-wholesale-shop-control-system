document.addEventListener('DOMContentLoaded', () => {
    const contentContainer = document.getElementById('content-container');
    const menuLinks = document.querySelectorAll('.menu-link');

    const loadContent = (file) => {
        fetch(file)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to load content');
                }
                return response.text();
            })
            .then(html => {
                contentContainer.innerHTML = html;
            })
            .catch(error => {
                contentContainer.innerHTML = `<p>Error loading content: ${error.message}</p>`;
            });
    };

    loadContent('http://localhost:8080/Retail-wholesale-shop-control-system/Admin/Dashboard/dashboard.php');
    
    menuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); 
            const file = link.getAttribute('data-file');
            loadContent(file);
        });
    });
});
