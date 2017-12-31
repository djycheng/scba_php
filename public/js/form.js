const MAX_CHARACTERS = 2000;
var remaining = MAX_CHARACTERS;

function getRemaining() {
    document.getElementById("messageLabel").innerHTML = "Message (" + remaining + " characters remaining):";
};

function allowKeyPress(text) {
    if (text.value.length <= MAX_CHARACTERS) {
        remaining = MAX_CHARACTERS - (text.value.length);
        getRemaining();
        return true;
    } else {
        text.value = text.value.slice(0, 2000);
    };
};

$("#contact").submit(function(event) {
    event.preventDefault()
    $.ajax({
        url: "/public/functions/submit_form.php",
        type: "POST",
        data: {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            message: $("#message").val()
        },
        success: function(data) {
            alert('Message successfully sent!');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('There was an issue with your message.  Please try again.\nError: ' + errorThrown);
        }
    });
});