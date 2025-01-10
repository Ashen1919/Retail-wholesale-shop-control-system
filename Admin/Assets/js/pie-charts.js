const ctx1 = document.getElementById("myPieChart");

new Chart(ctx1, {
  type: "doughnut",
  data: {
    labels: [
      "Grocery",
      "Fruits",
      "Household",
      "Vegetables",
      "Beverage",
    ],
    datasets: [
      {
        label: "Shop by category",
        data: [85, 59, 61, 81, 56],
        backgroundColor: [
          "rgba(254, 0, 55, 0.2)",
          "rgba(255, 159, 64, 0.2)",
          "rgba(255, 205, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(54, 162, 235, 0.2)",
        ],
        borderColor: [
          "rgb(255, 99, 132)",
          "rgb(255, 159, 64)",
          "rgb(255, 205, 86)",
          "rgb(75, 192, 192)",
          "rgb(54, 162, 235)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    plugins: {
      legend: {
        labels: {
          color: "white",
        },
      },
    },
    scales: {
      x: {
        ticks: {
          color: "white",
        },
      },
      y: {
        ticks: {
          color: "white",
        },
      },
    },
  },
});
