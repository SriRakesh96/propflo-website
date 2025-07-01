<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .error-message {
            color: red;
            font-size: 0.9em;
            display: none;
        }
        input.invalid,
        textarea.invalid {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <form id="demo-form" action="submit_form.php" method="POST">
        <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
        
        <label for="name">Full Name</label>
        <input id="name" type="text" name="name" placeholder="Enter your name here" required maxlength="30">
        <small id="name-error" class="error-message"></small>

        <label for="email">Email Address</label>
        <input id="email" type="email" name="email" placeholder="Enter your email address" required>
        <small id="email-error" class="error-message"></small>

        <label for="phone">Phone</label>
        <input id="phone" type="tel" name="phone" placeholder="Enter Phone Number" required maxlength="10">
        <small id="phone-error" class="error-message"></small>

        <label for="company-name">Company Name</label>
        <input id="company-name" type="text" name="company" placeholder="Enter your company name here" required maxlength="30">
        <small id="company-error" class="error-message"></small>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Enter your message here" required maxlength="150"></textarea>
        <small id="message-error" class="error-message"></small>

        <div class="col-md-12" style="margin-bottom:20px;">
                                 <div class="g-recaptcha" data-sitekey="6LfTQooqAAAAAHTb9TYtaAGGsrOoqfuBKO38Pn8v"></div>
                                 <small id="recaptchaValidationMessage1" style="color: red;"></small>
                              </div>
                              <br />



        <button type="submit">Submit</button>
    </form>

   
</body>
</html>
