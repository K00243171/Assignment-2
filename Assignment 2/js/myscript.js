window.onload = SetDefaultValues

function AddressFunction(){
    if(document.getElementById('same').checked)
{
document.getElementById("line1").value=document.activeElement
    getElementById("line1").value;
document.getElementById("line2").value=document.activeElement
    getElementById("line2").value;
document.getElementById("postcode").value=document.activeElement
    getElementById("postcode").value;
document.getElementById("countryAd").value=document.activeElement
    getElementById("countryAd").value;
}
    else{
        document.getElementById("line1").value="";
        document.getElementById("line2").value="";
        document.getElementById("postcode").value="";
        document.getElementById("countryAd").value="";
    }
}
function validateEmail() {
    var email = document.getElementById("EmailAd").value;
    if (email.length == 0)
        { alert("Please enter an email address");
        return false;
        }
    else {
        alert("Thank you",+ email);
    }
}
function validateCard() {
    var cardNo = document.getElementById("CardNo").value;
    if (cardNo.length < 16){
        alert("Please enter 16 digit card number");
        return false;
    }
    else {
        return true;
    }
}