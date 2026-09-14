document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function (e) {
        let isValid = true;
        
        // Clear previous error states
        clearErrors();
        
        // 1. Full Name
        const fname = document.getElementById('fname');
        if (!fname.value.trim()) {
            showError(fname, 'Full name is required.');
            isValid = false;
        }
        
        // 2. Email
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+/;
        if (!email.value.trim()) {
            showError(email, 'Email address is required.');
            isValid = false;
        } else if (!emailRegex.test(email.value.trim())) {
            showError(email, 'Invalid email address format.');
            isValid = false;
        }
        
        // 3. Street Address
        const adr = document.getElementById('adr');
        if (!adr.value.trim()) {
            showError(adr, 'Street address is required.');
            isValid = false;
        }
        
        // 4. City
        const city = document.getElementById('city');
        if (!city.value.trim()) {
            showError(city, 'City is required.');
            isValid = false;
        }
        
        // 5. State
        const state = document.getElementById('state');
        if (!state.value.trim()) {
            showError(state, 'State is required.');
            isValid = false;
        }
        
        // 6. Cardholder Name
        const cname = document.getElementById('cname');
        if (!cname.value.trim()) {
            showError(cname, 'Cardholder name is required.');
            isValid = false;
        }
        
        // 7. Credit Card Number
        const ccnum = document.getElementById('ccnum');
        const cleanCardNum = ccnum.value.replace(/\D/g, '');
        if (!ccnum.value.trim()) {
            showError(ccnum, 'Credit card number is required.');
            isValid = false;
        } else if (cleanCardNum.length < 13 || cleanCardNum.length > 19) {
            showError(ccnum, 'Invalid credit card number.');
            isValid = false;
        }
        
        // 8. Exp Month
        const expmonth = document.getElementById('expmonth');
        const monthRegex = /^(0?[1-9]|1[0-2])$/;
        const alphaMonthRegex = /^[A-Za-z]+$/;
        if (!expmonth.value.trim()) {
            showError(expmonth, 'Exp month is required.');
            isValid = false;
        } else if (!monthRegex.test(expmonth.value.trim()) && !alphaMonthRegex.test(expmonth.value.trim())) {
            showError(expmonth, 'Invalid month.');
            isValid = false;
        }
        
        // 9. Exp Year
        const expyear = document.getElementById('expyear');
        const currentYear = new Date().getFullYear();
        const yearRegex = /^\d{4}$/;
        if (!expyear.value.trim()) {
            showError(expyear, 'Exp year is required.');
            isValid = false;
        } else if (!yearRegex.test(expyear.value.trim()) || parseInt(expyear.value.trim(), 10) < currentYear) {
            showError(expyear, 'Invalid or expired year.');
            isValid = false;
        }
        
        // 10. CVV
        const cvv = document.getElementById('cvv');
        const cvvRegex = /^\d{3,4}$/;
        if (!cvv.value.trim()) {
            showError(cvv, 'CVV is required.');
            isValid = false;
        } else if (!cvvRegex.test(cvv.value.trim())) {
            showError(cvv, 'Invalid CVV (3-4 digits).');
            isValid = false;
        }
        
        // Stop form submission if validation fails
        if (!isValid) {
            e.preventDefault();
        }
    });
    
    function showError(inputElement, message) {
        inputElement.classList.add('error-input');
        const errorSpan = document.createElement('span');
        errorSpan.className = 'field-error';
        errorSpan.textContent = message;
        inputElement.parentNode.appendChild(errorSpan);
    }
    
    function clearErrors() {
        document.querySelectorAll('.error-input').forEach(el => el.classList.remove('error-input'));
        document.querySelectorAll('.field-error').forEach(el => el.remove());
    }
});