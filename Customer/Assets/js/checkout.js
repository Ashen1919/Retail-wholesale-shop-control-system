// Select all payment method items
const methodItems = document.querySelectorAll('.method-item');

// Add click event to toggle "active" class on payment method
methodItems.forEach(item => {
    item.addEventListener('click', () => {
        // Remove "active" class from all items
        methodItems.forEach(el => el.classList.remove('active'));
        // Add "active" class to the clicked item
        item.classList.add('active');
    });
});
// Event listener for Pay Now button
document.querySelector(".pay-now").addEventListener("click", () => {
    alert("Payment process initiated!");
});

// Event listener for Cancel button
document.querySelector(".shopping-btn").addEventListener("click", () => {
    alert("Payment process canceled!");
});

// Event listener for Add Code button
document.querySelector(".add-code").addEventListener("click", () => {
    const promoCode = prompt("Enter your promo code:");
    if (promoCode) {
        alert(`Promo code "${promoCode}" applied successfully!`);
    } else {
        alert("No promo code entered.");
    }
});

