// Initialize new SpeechSynthesisUtterance object
let speech = new SpeechSynthesisUtterance();

// Set Speech Language
speech.lang = "en";

let voices = []; // global array of available voices

window.speechSynthesis.onvoiceschanged = () => {
    // Get List of Voices
    voices = window.speechSynthesis.getVoices();

    // Initially set the First Voice in the Array.
    // speech.voice = voices[0];

    var read = document.getElementById("volume-icon").classList.contains("fa-volume-off");
    if (read) {
        var lang = document.getElementById("hiddenLang").value;
        var enIndex = -1;
        var zhIndex = -1;
        console.log(voices);
        for (var key in voices) {
            // console.log(voices[key]["lang"]);
            if (voices[key]["lang"] == "en-US" && enIndex == -1) {
                // console.log(voices[key]);
                enIndex = key;
            }
            if (voices[key]["lang"] == "zh-TW" && zhIndex == -1) {
                // console.log(voices[key]);
                zhIndex = key;
            }
        }
        console.log("zhIndex:" + zhIndex);
        console.log("enIndex:" + enIndex);
        if (lang == "chinese") {
            speech.voice = voices[parseInt(zhIndex)];
        } else {
            speech.voice = voices[parseInt(enIndex)];
        }
        speech.text = document.getElementById("text").innerText;
        speech.volume = 1;
        speech.pitch = 1;
        speech.rate = 1;
        window.speechSynthesis.speak(speech);
    }
};

function changeLanguage(url) {
    window.speechSynthesis.cancel();
    window.location.href = url;
}


function read(url, read) {
    window.speechSynthesis.cancel();
    window.location.href = url;
}

function nextPage(url) {
    window.speechSynthesis.cancel();
    window.location.href = url;
}

function previousPage(url) {
    window.speechSynthesis.cancel();
    window.location.href = url;
}