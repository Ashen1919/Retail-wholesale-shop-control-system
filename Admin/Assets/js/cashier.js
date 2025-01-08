const cashierTableBody = document.getElementById("cashierTableBody");
const addCashierBtn = document.getElementById("addCashierBtn");

// Sample Data
const cashiers = [
  { id: 1, firstName: "John", lastName: "Doe", nic: "123456789V", phone: "0771234567", email: "john@example.com" },
  { id: 2, firstName: "Jane", lastName: "Smith", nic: "987654321V", phone: "0777654321", email: "jane@example.com" }
];

// Function to Render Table Rows
function renderTable() {
  cashierTableBody.innerHTML = "";
  cashiers.forEach((cashier) => {
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${cashier.id}</td>
      <td>${cashier.firstName}</td>
      <td>${cashier.lastName}</td>
      <td>${cashier.nic}</td>
      <td>${cashier.phone}</td>
      <td>${cashier.email}</td>
      
      <td>
          <div class="action">
             <button onclick="openModal('updatePromoModal')" class="edit"><i
                        class="bi bi-pencil-square"></i></button>
             <button class="delete"><i class="bi bi-trash-fill"></i></button>
          </div>         
      </td>
    `;
    cashierTableBody.appendChild(row);
  });
}

// Add New Cashier (Static Example)

// Initial Render
renderTable();
