function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var phn_no = document.getElementById('phn_no').value.trim();
    var date = document.getElementById('date').value.trim();
    var time = document.getElementById('time').value.trim();
    var duration = document.getElementById('duration').value.trim();

    if (name === '' || email === '' || phn_no === '' || date === '' || time === '' || duration === '') {
        alert('All fields are required');
        return false;
    }


    if (!validateName(name)) {
        alert('Please enter a valid name');
        return false;
    }


    if (!validateEmail(email)) {
        alert('Please enter a valid email address');
        return false;
    }


    if (!validatePhoneNumber(phn_no)) {
        alert('Please enter a valid phone number');
        return false;
    }



    return true;
}

function validateName(name) {
   
    return /^[a-zA-Z\s]+$/.test(name);
}

function validateEmail(email) {
   
    return /\S+@\S+\.\S+/.test(email);
}

function validatePhoneNumber(phn_no) {
   
    return /^\d+$/.test(phn_no);
}
