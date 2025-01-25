<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact - Geosfera</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
  
    <!-- Favicons -->
    <link href="assets/img/logo (2).png" rel="icon">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const nameInput = document.getElementById("name");
            const messageInput = document.getElementById("message");
            const imageInput = document.getElementById("image");
            const chatBox = document.getElementById("chat-box");
            const form = document.getElementById("chat-form");

            const apiUrl = "{{ url('/') }}";

            let username = localStorage.getItem("username");

            if (!username) {
                username = prompt("Enter your name:");
                localStorage.setItem("username", username);
            }
            nameInput.value = username;

            async function fetchChats() {
                const response = await fetch(`${apiUrl}/chats`);
                const chats = await response.json();

                chatBox.innerHTML = chats
                    .map(chat => `
                        <div class="mb-2">
                            <strong>${chat.name}</strong>: ${chat.message || ""}
                            ${chat.image_path ? `<br><img src="${apiUrl}/storage/${chat.image_path}" style="max-width: 200px;">` : ""}
                        </div>
                    `)
                    .join("");
            }

            form.addEventListener("submit", async (e) => {
                e.preventDefault();

                const formData = new FormData(form);
                formData.append("name", username);

                await fetch(`${apiUrl}/chats`, {
                    method: "POST",
                    body: formData,
                });

                messageInput.value = "";
                imageInput.value = "";
                fetchChats();
            });

            fetchChats();
            setInterval(fetchChats, 3000); // Refresh chats every 3 seconds
        });
    </script>
</head>
<body class="contactbody">

    <div class="container mt-4">
        <h1>Public Chat</h1>
        <div id="chat-box" class="border p-3 mb-3" style="height: 300px; overflow-y: scroll;"></div>
        <form id="chat-form" class="d-flex flex-column gap-2" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="name" name="name">
            <textarea id="message" name="message" class="form-control" placeholder="Type your message here"></textarea>
            <input type="file" id="image" name="image" class="form-control" accept="image/*">
            <button type="submit" class="btn btn-primary mt-2">Send</button>
        </form>
    </div>

    <!-- Footer -->

    <section class="footer">
        <div class="foot">
            <div class="footer-content">

                <div class="footlinks">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="booking.html">Register</a></li>
                        <li><a href="info.html">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footlinks">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/profile.php?id=100007787415175" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/iamit010/" target="_blank"><i class='bx bxl-instagram'></i></a>
                        <a href="https://twitter.com/sarcasmit_" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.linkedin.com/in/amit-kumar-singh-475b36212/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://github.com/iamit010" target="_blank"><i class='bx bxl-github'></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="end">
            <p>Copyright © 2025 Adventour All Rights Reserved.<br>Website developed by: Geosfera's Team</p>
        </div>
    </section>

</body>
</html>
