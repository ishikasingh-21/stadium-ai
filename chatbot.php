<!DOCTYPE html>
<html>

<head>
    <title>AI Assistant | StadiumAI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
        }

        .chat-box {
            height: 420px;
            overflow-y: auto;
            background: white;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .user {
            text-align: right;
            margin: 10px 0;
        }

        .bot {
            text-align: left;
            margin: 10px 0;
        }

        .msg {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 12px;
            max-width: 70%;
        }

        .user .msg {
            background: #0d6efd;
            color: white;
        }

        .bot .msg {
            background: #e9ecef;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">
        StadiumAI Assistant
    </h2>

    <div class="chat-box" id="chatBox">

        <div class="bot">
            <span class="msg">
                Hello! Welcome to StadiumAI. Ask me anything about the stadium.
            </span>
        </div>

    </div>

    <form id="chatForm" class="mt-3">

        <div class="input-group">

            <input
                type="text"
                id="message"
                class="form-control"
                placeholder="Type your question..."
                required>

            <button class="btn btn-primary">
                Send
            </button>

        </div>

    </form>

</div>

<script>

document.getElementById("chatForm").addEventListener("submit", function(e){

    e.preventDefault();

    let input = document.getElementById("message");
    let msg = input.value.trim();

    if(msg === "") return;

    let chat = document.getElementById("chatBox");

    chat.innerHTML += `<div class="user"><span class="msg">${msg}</span></div>`;

    input.value = "";

    fetch("ai.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            message: msg
        })
    })

    .then(response => response.json())

    .then(data => {

        let reply = "";

       if (data.error) {
    reply = data.error.message;
} else if (data.reply) {
    reply = data.reply;
} else {
    reply = "No response received from AI.";
}

       chat.innerHTML += `
<div class="bot">
    <div class="stadium-card">
        ${reply.replace(/\n/g, "<br>")}
    </div>
</div>`;

        chat.scrollTop = chat.scrollHeight;

    })

    .catch(error => {

        chat.innerHTML += `<div class="bot"><span class="msg">Error connecting to AI.</span></div>`;

        console.log(error);

    });

});

</script>

</body>
</html>