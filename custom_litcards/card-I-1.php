<?php include_once "constants.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CARD DESIGN I</title>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
        <div id="position" class="beautifulWildFlower draggable" style="font-size: 2rem; top: 20px; left: 20px; cursor: grab;"><?=$position; ?></div>
        <div id="logo" class="draggable" style="top: 60px; left: 200px; cursor: grab;"><img id="logo-image" src="<?=$logo;?>" width="119" height="112" alt=""></div>
        <div id="card-owner-name" class="january draggable" style="top: 75px; left: 20px; cursor: grab;"><h1><?= $name ; ?></h1></div>
        <div id="testimony" class="draggable" style="top: 70px; left: 20px; cursor: grab;"><?=$testimony; ?></div>
        <p id="phone" class="draggable" style="top: 120px; left: 20px; cursor: grab;"><a href="tel:<?=$phone;?>"><?=$phone;?></a></p>
        <p id="email" class="draggable" style="top: 140px; left: 20px; cursor: grab;"><a href="mailto:<?=$email?>"><?=$email;?></a></p>
        <p id="address" class="draggable" style="top: 160px; left: 20px; cursor: grab;"><?=$address;?></p>
    </div>

    <!-- Button to record element positions -->
    <button onclick="recordElementPositions()">Record Positions</button>

    <script>
        var positionElement
        var logoElement
        var cardOwnerNameElement
        var testimonyElement
        var phoneElement
        var emailElement
        var addressElement

        $(document).ready(function() {
            // Select the elements
            positionElement = $('#position');
            logoElement = $('#logo');
            cardOwnerNameElement = $('#card-owner-name');
            testimonyElement = $('#testimony');
            phoneElement = $('#phone');
            emailElement = $('#email');
            addressElement = $('#address');

            

            $(".draggable").draggable({
                containment: "#card-container"
            });

            // Load positions from the server-side script (e.g., load_positions.php)
            $.ajax({
                type: 'GET',
                url: 'load_positions.php', // Replace with your server-side script URL
                dataType: 'json',
                success: function(data) {
                    // Apply positions to elements using jQuery's css() function
                    positionElement.css({ top: data.position.top, left: data.position.left });
                    logoElement.css({ top: data.logo.top, left: data.logo.left });
                    cardOwnerNameElement.css({ top: data.cardOwnerName.top, left: data.cardOwnerName.left });
                    testimonyElement.css({ top: data.testimony.top, left: data.testimony.left });
                    phoneElement.css({ top: data.phone.top, left: data.phone.left });
                    emailElement.css({ top: data.email.top, left: data.email.left });
                    addressElement.css({ top: data.address.top, left: data.address.left });

                    console.log('Positions loaded and applied.');
                },
                error: function(error) {
                    console.error('Error loading positions:', error);
                }
            });

            
        });

        function recordElementPositions() {
            const positions = {
                position: { top: positionElement.css('top'), left: positionElement.css('left') },
                logo: { top: logoElement.css('top'), left: logoElement.css('left') },
                cardOwnerName: { top: cardOwnerNameElement.css('top'), left: cardOwnerNameElement.css('left') },
                testimony: { top: testimonyElement.css('top'), left: testimonyElement.css('left') },
                phone: { top: phoneElement.css('top'), left: phoneElement.css('left') },
                email: { top: emailElement.css('top'), left: emailElement.css('left') },
                address: { top: addressElement.css('top'), left: addressElement.css('left') }
            };
            console.log(positions); // You can send this data to your server or store it as needed

            // Convert positions object to JSON string
            const jsonData = JSON.stringify(positions);

            // Send the data to a server-side script (e.g., save_positions.php)
            $.ajax({
                type: 'POST',
                url: 'save_positions.php', // Replace with your server-side script URL
                data: { cardData: jsonData },
                success: function(response) {
                    console.log('Positions saved successfully.');
                },
                error: function(error) {
                    console.error('Error saving positions:', error);
                }
            });
            }
    </script>



    <!-- <script>
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

            // Convert positions object to JSON string
            const jsonData = JSON.stringify(positions);

            // Send the data to a server-side script (e.g., save_positions.php)
            $.ajax({
                type: 'POST',
                url: 'save_positions.php', // Replace with your server-side script URL
                data: { cardData: jsonData },
                success: function(response) {
                    console.log('Positions saved successfully.');
                },
                error: function(error) {
                    console.error('Error saving positions:', error);
                }
            });
        }
    </script> -->
</body>
</html>
