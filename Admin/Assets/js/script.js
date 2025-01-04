const navLinkEls = document.querySelector('.dashboard');

navLinkEls.forEach(navLinkEl => {
    navLinkEl.addEventListener('click', ()=> {
        document.querySelector('.active')?.classList.remove('active');
        navLinkEl.classList.add('active');
    });
});