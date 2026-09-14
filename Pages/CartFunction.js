function changeQuantity(index, amount) {
    let quantityInput = document.getElementById("quantity-" + index);
    let quantity = parseInt(quantityInput.value);
    quantity = quantity + amount;
    if (quantity < 1) {
        quantity = 1;
    }
    quantityInput.value = quantity;
    updateTotal(index);
    saveCart();
}

function saveCart() {
    let form = document.getElementById("cartForm");
    let input = document.createElement("input");
    input.type = "hidden";
    input.name = "update";
    input.value = "Update";
    form.appendChild(input);
    form.submit();
}

function updateTotal(index) {
    let quantity = parseInt(document.getElementById("quantity-" + index).value);
    let price = parseFloat(document.getElementById("price-" + index).value);
    let subtotal = quantity * price;

    // Update item's subtotal
    document.getElementById("subtotal-" + index).innerText = subtotal.toLocaleString('en-MY', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    // Update entire cart total
    updateCartTotal();
}

function updateCartTotal() {
    let total = 0;
    
    // Select all quantity and price elements dynamically from the DOM instead of embedding PHP loops
    let quantityInputs = document.querySelectorAll("input[id^='quantity-']");
    
    quantityInputs.forEach(function(input) {
        let index = input.id.split('-')[1];
        let quantityField = document.getElementById("quantity-" + index);
        let priceField = document.getElementById("price-" + index);
        
        if (quantityField && priceField) {
            let quantity = parseInt(quantityField.value) || 0;
            let price = parseFloat(priceField.value) || 0;
            total += (quantity * price);
        }
    });

    let formattedTotal = total.toLocaleString('en-MY', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    let cartTotalEl = document.getElementById("cart-total");
    if (cartTotalEl) {
        cartTotalEl.innerText = formattedTotal;
    }
    
    let summarySubtotalEl = document.getElementById("summary-subtotal");
    if (summarySubtotalEl) {
        summarySubtotalEl.innerText = formattedTotal;
    }
}