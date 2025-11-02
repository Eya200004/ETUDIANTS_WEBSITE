const chatbox = document.getElementById('chatbox');
const input = document.getElementById('userInput');
const sendBtn = document.getElementById('sendBtn');

let data = [];
fetch('data.json')
    .then(response => response.json())
    .then(json => { data = json; console.log("JSON chargé :", data); })
    .catch(err => console.error("Erreur chargement JSON:", err));

function addMessage(text, sender) {
    const msg = document.createElement('div');
    msg.classList.add('message', sender);
    msg.textContent = text;
    chatbox.appendChild(msg);
    chatbox.scrollTop = chatbox.scrollHeight;
}

function findBestMatch(message) {
    if (data.length === 0) return "Base de réponses non chargée.";
    message = message.toLowerCase();
    let bestMatch = null;
    let maxMatches = 0;

    for (let item of data) {
        let matches = 0;
        for (let keyword of item.keywords) {
            if (message.includes(keyword.toLowerCase())) matches++;
        }
        if (matches > maxMatches) {
            maxMatches = matches;
            bestMatch = item;
        }
    }

    return bestMatch ? bestMatch.answer : "Désolé, je ne connais pas la réponse.";
}

function sendMessage() {
    const message = input.value.trim();
    if (!message) return;

    addMessage(message, 'user');
    const reply = findBestMatch(message);
    setTimeout(() => addMessage(reply, 'bot'), 500);
    input.value = '';
    input.focus();
}

sendBtn.addEventListener('click', sendMessage);
input.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendMessage(); });
