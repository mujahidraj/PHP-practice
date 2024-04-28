function validateForm() {
    var name = document.forms["appointmentForm"]["name"].value;
    var email = document.forms["appointmentForm"]["email"].value;
    var phn_no = document.forms["appointmentForm"]["phn_no"].value;
    var date = document.forms["appointmentForm"]["date"].value;
    var time = document.forms["appointmentForm"]["time"].value;
    var duration = document.forms["appointmentForm"]["duration"].value;
    var pro_add = document.forms["appointmentForm"]["pro_add"].value;
    var mls_no = document.forms["appointmentForm"]["mls_no"].value;
    var a_name = document.forms["appointmentForm"]["a_name"].value;
    var a_email = document.forms["appointmentForm"]["a_email"].value;
    var a_phn = document.forms["appointmentForm"]["a_phn"].value;


    if (name.trim() == "" || email.trim() == "" || phn_no.trim() == "" || date.trim() == "" || time.trim() == "" || duration.trim() == "" || pro_add.trim() == "" || mls_no.trim() == "" || a_name.trim() == "" || a_email.trim() == "" || a_phn.trim() == "") {
        alert("All fields must be filled out");
        return false;
    }


    if (!validateName(name) || !validateName(a_name)) {
        alert("Please enter a valid name");
        return false;
    }


    if (!validateEmail(email) || !validateEmail(a_email)) {
        alert("Please enter a valid email address");
        return false;
    }


    if (!validatePhoneNumber(phn_no) || !validatePhoneNumber(a_phn)) {
        alert("Please enter a valid 10-digit phone number");
        return false;
    }

    return true;
}


function validateName(name) {
   
    return /^[a-zA-Z\s]*$/.test(name);
}


function validateEmail(email) {
    var atIndex = email.indexOf("@");
    var dotIndex = email.lastIndexOf(".");


    if (atIndex < 1)
        return false;


    if (dotIndex <= atIndex + 1 || dotIndex === email.length - 1)
        return false;

    return true;
}

function validatePhoneNumber(phn_no) {

    var phoneNumber = phn_no.replace(/\D/g, "");

    if (phoneNumber.length !== 10)
        return false;

    return true;
}
