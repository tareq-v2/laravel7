// compare cart toggle function
// admin

function logoutDiv() {
    let card = document.getElementById("login-card");
    if (card.style.display === "none") {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  }

function closeCard() {
  let cart = document.getElementById("login-card");
  cart.style.display = "none";
}