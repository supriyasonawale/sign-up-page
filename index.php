<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluestock Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <!-- Include reCAPTCHA API script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container">
        <img src="bluestock-logo.png" alt="Bluestock Logo" class="logo">
        <div class="login-container">
            <img src="bluestock-icon.png" alt="Bluestock Icon" class="icon">
            <h1>Bluestock</h1>
            <?php?>
            include("process_form.php")
            <?
    
            
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="**********" required>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                <div class="input-group checkbox recaptcha-group">
                    <!-- reCAPTCHA widget -->
                    <div class="g-recaptcha" data-sitekey="6LdkpyYqAAAAAGyftbX8GEhli16xiu-GyaxyYGjB"></div>
                </div>
                <div class="input-group checkbox">
                    <input type="checkbox" id="keep-signed-in" name="keep-signed-in">
                    <label for="keep-signed-in">Keep me signed in</label>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <div class="divider">or sign in with</div>
            <button class="google-button">
                <img src="google-icon.png" alt="Google Icon">
                Continue with Google
            </button>
            <a href="#" class="create-account">Create an account</a>
        </div>
    </div>
</body>
</html>
