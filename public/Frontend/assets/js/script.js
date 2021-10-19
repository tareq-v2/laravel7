//@tareq2021

// responsive mobile search input function
// index page
function mySearch(){
    let search = document.getElementById("hidden-search-icon");
    search.style.display = "block";
}


// compare cart toggle function
// index page
function compareCart() {
    let cart = document.getElementById("compare-cart");
    if (cart.style.display === "none") {
      cart.style.display = "block";
    } else {
      cart.style.display = "none";
    }
  }

function closeCart() {
  let cart = document.getElementById("compare-cart");
  cart.style.display = "none";
}

// payment option checkout jquery method
// product page
$(document).ready(function(){
  $(".payment-box1").hover(function(){
    $(this).css("border", "1px solid orange");
    }, function(){
    $(this).css("border", "transparent");
  });
  $(".payment-box2").hover(function(){
    $(this).css("border", "1px solid orange");
    }, function(){
    $(this).css("border", "transparent");
  });
});


// quantity increment decrement functions
// product page
let data = 0;
document.getElementById("counting").innerText = data;
function increment() {
  data = data + 1;
  document.getElementById("counting").innerText = data;
}
function decrement() {
  data = data - 1;
  document.getElementById("counting").innerText = data;
}




