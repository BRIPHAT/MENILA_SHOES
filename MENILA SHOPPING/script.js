/*---javascript for search button in the top navigation---*/
function searchShoes(){
     const navSearch = document.getElementById('navSearch').value.toLowerCase();
     const shoes = document.getElementById('shoeslist').getElementsByTagName('li');

let foundMatches = 0;

     for(let i=0; i<shoes.length; i++){
          const shoeName = shoes[i].textContent.toLocaleLowerCase();

          if (shoeName.includes(navSearch) || navSearch ==='' ){
               shoes[i].style.display = 'inline-block';
               foundMatches++;
          }
          else{
               shoes[i].style.display = 'none';
          }
          }

          if (foundMatches === 0 && navSearch !== '' ){
               alert('No product found by that Name');
          }
     }

/*----javascript for adding product to the cart---*/
function addToCart(){
     const productName ="ATHLETIC SHOES";
     const productPrice = 12;

     //declare above variable
     const product ={
          name: productName,
          price: productPrice,
          quantity: 1//this is deafult quantity in cart
     };

/*--- in on side i use the localstorage to check if cart create eor not---*/
let cart = localStorage.getItem('cart');
if (!cart){
     cart = [];
}
else{
     cart = JSON.parse(cart);
}

//this show to check if product already exist in the cart

let productIndex = cart.findIndex((item) =>item.name === productName);

if(productIndex !== -1){
     cart[productIndex].quantity++;
}

else{
     //add product to the cart
     cart.push(product);
}

//save the update details in the cart to localstorage
localStorage.setItem('cart', JSON.stringify(cart));

//show meaasaage when update sucessfully and added in the cart

alert('Product successfully added into the cart');

}

//show the value of product at first
let quantity = 1;

//increase the number of product value into cart
function increaseQuantity(){
     quantity++;
     updateQuantityDisplay();
}

//decrease the number of product value into cart
function decreaseQuantity(){
     if(quantity > 1){
          quantity--;
          updateQuantityDisplay();
     }
}


//make the correction of user interface to show the exctally number of product added
function updateQuantityDisplay(){
     document.getElementById('quantity').innerText = quantity;
}



/*----javascript to count cart budge in cart product added---*/
// Function to retrieve the cart items from localStorage
function getCartItems() {
    return JSON.parse(localStorage.getItem('cartItems')) || [];
}

// Function to update the cart badge with the current count
function updateCartBadge(count) {
    let cartBadge = document.getElementById('cart-badge');
    cartBadge.innerText = count;
}

// Function to display cart items with details
function displayCartItems() {
    let cartItemsDiv = document.getElementById('cart-items');
    cartItemsDiv.innerHTML = ''; // Clear previous items

    let cartItems = getCartItems();

    cartItems.forEach(item => {
        cartItemsDiv.innerHTML += `
            <div>
                <img src="${item.image}" alt="${item.productName}" style="width: 100px; height: 100px;">
                <div>${item.productName} - Price: $${item.price}</div>
            </div>
        `;
    });
}
// Function to add a product to the cart
function addToCart(productName, price, image) {
    let cartItems = getCartItems();
    cartItems.push({ productName: productName, price: price, image: image });
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    updateCartBadge(cartItems.length);
    displayCartItems();
    
    // Display a confirmation message
    alert(`"${productName}" added to cart!`);
}


//javascript to make the option in selection to successfully functionality
document.addEventListener("DOMContentLoaded", function () {
     const paymentMethodSelect = document.getElementById("payment-method");
     const mobilePaymentDetails = document.getElementById("mobile-payment-details");
     const bankPaymentDetails = document.getElementById("bank-payment-details");
   
     // Initially hide payment details
     mobilePaymentDetails.style.display = "none";
     bankPaymentDetails.style.display = "none";
   
     // Event listener for payment method change
     paymentMethodSelect.addEventListener("change", function () {
       if (paymentMethodSelect.value === "mobile-payment") {
         mobilePaymentDetails.style.display = "block";
         bankPaymentDetails.style.display = "none";
       } else if (paymentMethodSelect.value === "bank-payment") {
         bankPaymentDetails.style.display = "block";
         mobilePaymentDetails.style.display = "none";
       }
     });
   
     const generateControlNumberButton = document.getElementById("generate-control-number");
     const controlNumberDisplay = document.getElementById("control-number-display");
   
     // Event listener for generating control number
     generateControlNumberButton.addEventListener("click", function () {
       // Logic to generate the control number (replace this with your logic)
       const generatedControlNumber = Math.floor(Math.random() * 10000); // Example: Generating a random number
       controlNumberDisplay.textContent = `Control Number: ${generatedControlNumber}`;
     });
   });
   
   

//javascript for payment.html page functionality

  document.addEventListener('DOMContentLoaded', function() {
    const generateControlNumberBtn = document.getElementById('generate-control-number');
    const controlNumberDisplay = document.getElementById('control-number-display');
    const finishPaymentBtn = document.getElementById('finish-payment');
    const paymentForm = document.getElementById('payment-form');

    function generateControlNumber() {
      const randomNumber = Math.floor(100000 + Math.random() * 900000); // Generates a 6-digit random number
      return randomNumber;
    }

    generateControlNumberBtn.addEventListener('click', function() {
      const controlNumber = generateControlNumber();
      controlNumberDisplay.textContent = `Control Number: ${controlNumber}`;
    });

    finishPaymentBtn.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent form submission
      const controlNumber = controlNumberDisplay.textContent.replace('Control Number: ', '');
      if (controlNumber) {
        // Store payment details in local storage
        const paymentDetails = {
          paymentMethod: document.getElementById('payment-method').value,
          controlNumber: controlNumber,
          // You can add more fields here if needed
        };
        localStorage.setItem('paymentDetails', JSON.stringify(paymentDetails));
        alert('Payment finished successfully! Payment details saved.');
      } else {
        alert('Please generate a control number before finishing the payment.');
      }
    });

    paymentForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent actual form submission
      // For demonstration, let's display an alert about the form submission
      alert('Payment submitted!'); // You can customize this message or perform other actions
    });
  });
  

  // Function to make payment (simulated)
function makePayment() {
     let cartItems = getCartItems();
     if (cartItems.length > 0) {
         // Simulated payment process
         alert('Payment successful! Thank you for your purchase.');
         localStorage.removeItem('cartItems'); // Clear cart after successful payment
         updateCartBadge(0); // Update cart badge to show zero items
         displayCartItems(); // Display updated cart items (empty)
     } else {
         alert('Your cart is empty. Please add items to proceed with payment.');
     }
 }
 
 // Initialize cart count and display cart items on page load
 window.onload = function() {
     updateCartBadge(getCartItems().length);
     displayCartItems();
 }
 //javascript for payment button functionality
 function makePayment() {
   window.location.href = "payment.html"; // Redirect to payment.html
 }
 
 let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};


document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'admin.php';
};