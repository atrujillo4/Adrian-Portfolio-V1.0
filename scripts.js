function validation(){
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var errormessage = document.getElementById("error-message");
    var text;

    errormessage.style.padding = "10px";

    if(name.length < 5){
        text = "Please Enter Valid Name";
        errormessage.innerHTML = text;
        return false;
    }

    if(subject.length < 4){
        text = "Please Enter Correct Subject";
        errormessage.innerHTML = text;
        return false;
    }

    // If I want to add a phone number field to the Contact Me Form
    
    // if(isNaN(phone) || phone.length != 10){
    //     text = "Please Enter Valid Phone Number";
    //     errormessage.innerHTML = text;
    //     return false;
    // }

    if(email.indexOf("@") == -1 || email.length < 6){
        text = "Please Enter Valid Email";
        errormessage.innerHTML = text;
        return false;
    }

    if(message.length <= 30){
        text = "Please Enter More Than 30 Charachers";
        errormessage.innerHTML = text;
        return false;
    }

 
    return true;

}