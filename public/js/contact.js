const MAX_CHARACTERS = 2000;
var remaining = MAX_CHARACTERS;

function getRemaining() {
	console.log(remaining)
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