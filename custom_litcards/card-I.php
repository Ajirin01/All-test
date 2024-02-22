<?php include_once "constants.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CARD DESIGN I</title>
    <meta charset="UTF-8">
    <style>
        body {
            background-image: url(images/CARD-DESIGN-I-BG.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container styles */
        #card-container {
            width: 400px;
            height: 360px;
            position: relative;
            background-color: white; /* Change the background color as needed */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Add a shadow for a nice effect */
        }

        /* Styles for draggable elements */
        .draggable {
            position: absolute;
            cursor: grab;
        }
    </style>
</head>
<body>
    <!-- Container for the card elements -->
    <div id="card-container">
        <!-- HTML content with draggable elements -->
        <div id="position" class="beautifulWildFlower draggable" style="font-size: 2rem; top: 20px; left: 20px; cursor: grab;">Position</div>
        <div id="logo" class="draggable"><img id="logo-image" src="<?=$logo;?>" width="119" height="112" alt=""></div>
        <div id="card-owner-name" class="january draggable"><h1><?= $name ; ?></h1></div>
        <div id="testimony" class="draggable">Testimony</div>
        <p id="phone" class="draggable"><a href="tel:<?=$phone;?>"><?=$phone;?></a></p>
        <p id="email" class="draggable"><a href="mailto:<?=$email?>"><?=$email;?></a></p>
        <p id="address" class="draggable"><?=$address;?></p>

        <!-- Button to record element positions -->
        <button onclick="recordElementPositions()">Record Positions</button>
    </div>

    <script>
        // Function to make an element draggable
        function makeDraggable(element) {
            let isDragging = false;
            let offsetX, offsetY;

            element.addEventListener('mousedown', (e) => {
                isDragging = true;
                offsetX = e.clientX - element.getBoundingClientRect().left;
                offsetY = e.clientY - element.getBoundingClientRect().top;
                element.style.cursor = 'grabbing';
            });

            document.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                const newX = e.clientX - offsetX;
                const newY = e.clientY - offsetY;
                element.style.left = `${newX}px`;
                element.style.top = `${newY}px`;
            });

            document.addEventListener('mouseup', () => {
                isDragging = false;
                element.style.cursor = 'grab';
            });
        }

        // Make draggable elements
        const positionElement = document.getElementById('position');
        const logoElement = document.getElementById('logo');
        const cardOwnerNameElement = document.getElementById('card-owner-name');
        const testimonyElement = document.getElementById('testimony');
        const phoneElement = document.getElementById('phone');
        const emailElement = document.getElementById('email');
        const addressElement = document.getElementById('address');

        makeDraggable(positionElement);
        makeDraggable(logoElement);
        makeDraggable(cardOwnerNameElement);
        makeDraggable(testimonyElement);
        makeDraggable(phoneElement);
        makeDraggable(emailElement);
        makeDraggable(addressElement);

        // Function to record element positions (you can send this data to your server)
        function recordElementPositions() {
            const positions = {
                position: { top: positionElement.style.top, left: positionElement.style.left },
                logo: { top: logoElement.style.top, left: logoElement.style.left },
                cardOwnerName: { top: cardOwnerNameElement.style.top, left: cardOwnerNameElement.style.left },
                testimony: { top: testimonyElement.style.top, left: testimonyElement.style.left },
                phone: { top: phoneElement.style.top, left: phoneElement.style.left },
                email: { top: emailElement.style.top, left: emailElement.style.left },
                address: { top: addressElement.style.top, left: addressElement.style.left }
            };
            console.log(positions); // You can send this data to your server or store it as needed
        }
    </script>
</body>
</html>
