    
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    var pletter = false;
    var pcapital = false;
    var pnumber = false;
    var plength = false;


    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
            pletter = true;
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
            pletter = false;
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
            pcapital = true;
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
            pcapital = false;
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
            pnumber = true;
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
            pnumber = false;
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
            plength = true;

        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
            plength = false;
        }



        if (pletter && pcapital && pnumber && plength) {

            document.getElementById("myBtn").disabled = false;
            document.getElementById("myBtn").value = "OK";
        } else {
            document.getElementById("myBtn").disabled = true;
            document.getElementById("myBtn").value = "N OK";

        }




    }
