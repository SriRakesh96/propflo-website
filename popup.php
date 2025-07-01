
    <style>


        /* Popup container */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* Popup content */
        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            max-width: 90%;
            box-sizing: border-box;
        }


        /* Close button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #08CF65;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .close-btn:hover {
            background: #ff2f20;
        }
        #p-img{

width: 400px;
}

        @media (max-width: 768px) {
            .popup-content {
                padding: 15px;
            }

            .close-btn {
                width: 25px;
                height: 25px;
                font-size: 14px;
            }

            #p-img{

                width: 330px;
            }
        }
    </style>

    <div id="popup" class="popup">
        <div class="popup-content">
            <button class="close-btn" onclick="closePopup()">&times;</button>
            <img src="https://www.propflo.ai/assets/img/awarded.png" alt="Awarded" id="p-img">
        </div>
    </div>

    <script>
        // Check localStorage to determine if the popup should be shown
        if (!localStorage.getItem('popupClosed')) {
            // Show popup after 10 seconds
            setTimeout(function() {
                document.getElementById('popup').style.display = 'flex';
            }, 10000);
        }

        // Function to close popup
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            localStorage.setItem('popupClosed', 'true');
        }
    </script>

