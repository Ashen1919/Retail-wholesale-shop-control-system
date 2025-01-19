const decreaseButton = document.getElementById('decrease');
const increaseButton = document.getElementById('increase');
const quantityInput = document.getElementById('quantity');

decreaseButton.addEventListener('click', () => {
  const currentValue = parseInt(quantityInput.value, 10);
  if (currentValue > 1) {
    quantityInput.value = currentValue - 1;
  }
});

