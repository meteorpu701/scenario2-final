<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NHS Video Page</title>
    <link rel="stylesheet" href="nhs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
    <style>
    a {
        display: inline;
        background-color: #005eb8 ;
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #003d70;
    }

    .media-container {
        background: #fff;
        width: 600px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden; 
        margin: 20px;
    }

    .search-container {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background: #f9f9f9;
        border-bottom: 1px solid #e1e1e1;
    }

    .search-container input[type="text"] {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
        width: 80%;
        margin-right: 10px;
    }

    .search-container button {
        border: none;
        color: white;
        padding: 10px;
        width: 10%;
        margin-right: 15px;
        margin-bottom: 17px;
        cursor: pointer;
        border-radius: 5px;
    }

    .media-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
        gap: 10px;
        padding: 10px;
        height: 300px; 
        overflow-y: auto; 
        scrollbar-width: thin;
        scrollbar-color: #005eb8 #f1f1f1;
    }

    .media-item {
        background: #f4f4f4;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
    }

    .media-item img {
        max-width: 150px;
        height: 100px;
        border-radius: 3px; 
    }

    .media-item p {
        margin-top: 10px;
    }
    .media-list::-webkit-scrollbar {
    width: 10px;
    }

    .media-list::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    .media-list::-webkit-scrollbar-thumb {
        background: #005eb8; 
        border-radius: 5px;
    }

    .media-list::-webkit-scrollbar-thumb:hover {
        background: #003974;
    }
    .modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: 10% auto;
  padding: 0;
  border: 1px solid #888;
  width: 70%; 
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  animation-name: animatetop;
  animation-duration: 0.4s;
}

@keyframes animatetop {
  from {top: -300px; opacity: 0}
  to {top: 0; opacity: 1}
}

.close {
  color: gray;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

#videoPlayer {
  width: 100%;
}
.chat-modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.chat-modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 300px; /* You can adjust the width */
  position: relative;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.chat-messages {
  height: 200px; /* Adjust as needed */
  overflow-y: auto;
  background-color: #f1f1f1;
  margin-bottom: 20px;
}

.chat-input {
  display: flex;
}

.chat-input input[type="text"] {
  width: 80%;
  padding: 10px;
  margin-right: 5px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

.chat-input button {
  width: 20%;
  background-color: #005eb8;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
}

.chat-input button:hover {
  background-color: #003974;
}
.user-message {
  background-color: #f4f4f4;
  text-align: right;
}

.bot-message {
  background-color: #e1e1e1;
  text-align: left;
}
    </style>
</head>
<body>
    <div class="header">
        <img src="nhslogo.jpeg" alt="NHS Logo" class="nhs-logo">
        <a href="#" id="chatBtn">Chat bot</a>
        <a href="whyhelpful.php">Why is this helpful?</a>
        <a href="contact.php">Contact us</a>
        <a href="login.php">Login</a>

    </div>
    <div class="media-container">
    <div class="search-container">
        <input type="text" id="mediaSearch" placeholder="Search">
        <button type="submit" onclick="filterMedia()">&#x1F50D;</button>

    </div>
    <div class="media-list">
        <div class="media-item" data-title="Hypnosis 1">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" id="mediaLink">Hypnosis 1</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 2</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 3</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 4</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 5</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 6</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 7</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 8</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 9</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 10</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 11</a>
        </div>
        <div class="media-item" data-title="Audio Title A">
        <img src="green.png" alt="Audio File Cover">
        <a href="#" class="mediaLink1">Hypnosis 12</a>
        </div>
    </div>
    </div>
    <div id="mediaModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <video id="videoPlayer" controls>
        <source src="relax.mp3" type="audio/mp3">
        </video>
    </div>
    </div>
    <div id="chatModal" class="chat-modal">
        <div class="chat-modal-content">
            <span class="close">&times;</span>
            <h2>Chat bot</h2>
            <div class="chat-messages">
            </div>
        <div class="chat-input">
            <input type="text" placeholder="Write a message" id="chatInput">
            <button onclick="sendMessage()">Send</button>
    </div>
  </div>
</div>
    <footer>
        <div class="container">
            <p>&copy; 2024 NHS. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="media.js"></script>
</body>
</html>