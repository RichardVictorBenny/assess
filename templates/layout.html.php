<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../mobile.css" media="screen and (max-width: 800px)">
    <link rel="stylesheet" href="../desktop.css" media="screen and (min-width: 800px)">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Assess</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<body>

    <header>
        <div class="header-container">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <div class="auth-links">
                    <p><a href="../admin/logout">Logout</a></p>
                    <p><a href="../admin/dashboard">Dashboard</a></p>
                </div>
            <?php else: ?>
                <div class="auth-links">
                    <p><a href="../admin/register" class="admin-signup">Sign Up</a></p>
                    <p><a href="../admin/login" class="admin-login">Login</a></p>
                </div>
            <?php endif; ?>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>

                    <li><a href="../about">About Us</a></li>
                    <li><a href="../contact">Contact Us</a></li>
                    <li><a href="../faqs">Faqs</a></li>
                </ul>
            </nav>

        </div>
    </header>
    <div>
        <?= $output ?? ""; ?>
    </div>


    <!-- Chat Box -->
    <div id="chatBox" class="chat-box" style="display: none;">
        <div class="chat-box-header">
            Chat with Us
            <button id="closeChat" class="close-chat">&times;</button>
        </div>
        <div class="chat-box-messages">
            <!-- Preloaded Messages for Demo -->
            <div class="message user-message">Hello, I have a question.</div>
            <div class="message admin-message">Sure, how can we assist you?</div>
            <div class="message user-message">Can you tell me more about your services?</div>
            <div class="message admin-message">Certainly! We offer a wide range of healthcare services...</div>
            <!-- More messages can be added here -->
        </div>
        <input type="text" id="chatInput" placeholder="Type a message..." class="chat-box-input">
    </div>

    <div class="chat-icon-container">
        <button class="chat-icon-button">
            <i class="fas fa-comments"></i>
        </button>
    </div>

    <footer>
        &copy; NHS
        <?= date('Y'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

<script>
    let isUser = true;

    document.querySelector('.chat-icon-button').addEventListener('click', function () {
        document.getElementById('chatBox').style.display = 'block';
    });

    document.getElementById('closeChat').addEventListener('click', function () {
        document.getElementById('chatBox').style.display = 'none';
    });

    // Functionality to handle chat input and display messages
    document.getElementById('chatInput').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            const message = this.value.trim();
            if (message) {
                // Create a message div
                const msgDiv = document.createElement('div');
                msgDiv.classList.add('message');

                // Alternate between 'User' and 'Admin'
                const sender = isUser ? 'User: ' : 'Admin: ';
                msgDiv.textContent = sender + message;
                msgDiv.classList.add(isUser ? 'user-message' : 'admin-message');
                document.querySelector('.chat-box-messages').appendChild(msgDiv);

                // Scroll to the bottom of the chat box
                const chatBox = document.querySelector('.chat-box-messages');
                chatBox.scrollTop = chatBox.scrollHeight;

                this.value = ''; // Clear input field
                isUser = !isUser; // Toggle sender
            }
        }
    });
</script>




</html>