<?php include("includes/header.php"); ?>

<section class="chatbot-section">
    <div class="chat-container">
        <div class="chat-header">Chatbot Étudiants IT</div>
        <div id="chatbox" class="chat-box"></div>
        <div class="input-area">
            <input type="text" id="userInput" placeholder="Écris ton message..." autocomplete="off">
            <button id="sendBtn">Envoyer</button>
        </div>
    </div>
</section>

<style>
.chatbot-section{
    display: flex;
    justify-content: center;
    align-items: center;  
    min-height: calc(100vh - 120px); 
    padding: 20px 0;
    background: #F9F7F1; 
}

.chat-container{
    width: 700px;
    max-width: 90%;
    height: 75vh;  
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    display: flex;
    flex-direction: column;
    overflow: hidden;
}
.chat-header{
    background: #5C4633;  
    color: #fff;
    padding: 25px;
    font-weight: 600;
    font-size: 1.2rem;
    text-align: center;
}
.chat-box{
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    background: #F9F7F1;
    overflow-y: auto; 
    border-top: 1px solid #8C6D5C;
    border-bottom: 1px solid #8C6D5C;
}

.chat-box::-webkit-scrollbar{
    width: 6px;
}
.chat-box::-webkit-scrollbar-thumb {
    background: #6C63FF;
    border-radius: 3px;
}

.message {
    max-width: 70%;
    padding: 12px 16px;
    border-radius: 20px;
    line-height: 1.4;
    font-size: 0.95rem;
    word-wrap: break-word;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    position: relative;
    opacity: 0;
    transform: translateY(10px);
    animation: appear 0.3s forwards;
}

@keyframes appear {
    to { opacity: 1; transform: translateY(0); }
}

.message.user{
    background: #5C4633;
    color: #fff;
    align-self: flex-end;
    border-bottom-right-radius: 0;
}

.message.bot{
    background: #f0e4cfff;
    color: #333;
    align-self: flex-start;
    border-bottom-left-radius: 0;
}
.input-area{
    display: flex;
    padding: 10px;
    border-top: 1px solid #ddd;
    background: #fff;
}
#userInput{
    flex: 1;
    padding: 10px 14px;
    border-radius: 25px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 0.95rem;
}

#sendBtn{
    margin-left: 8px;
    padding: 10px 14px;
    border: none;
    border-radius: 25px;
    background: #5C4633;
    color: #fff;
    cursor: pointer;
    font-weight: 600;
    transition: 0.3s;
}

#sendBtn:hover {
    background: #f0e4cfff;
    color: black;
}

.chat-box::-webkit-scrollbar{
    width: 6px;
}
.chat-box::-webkit-scrollbar-thumb{
    background: #6C63FF;
    border-radius: 3px;
}
</style>
<script src="chatbot.js"></script>
<?php include("includes/footer.php"); ?>
