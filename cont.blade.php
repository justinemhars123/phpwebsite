<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f3f3f3;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(135deg, #7b2ff7, #feb47b);
}

.contact-form-container {
    background-color: #ffffff;
    width: 50%;
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 40px;
    max-width: 800px;
}

.contact-form-box {
    text-align: center;
}

.contact-form-box h2 {
    font-weight: 600;
    font-size: 28px;
    margin-bottom: 10px;
}

.contact-form-box p {
    margin-bottom: 30px;
    color: #666;
}

form {
    width: 100%;
}

.input-row {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Add gap for spacing between inputs */
}

.input-group {
    margin-bottom: 20px;
    width: 50%; /* Ensure both input fields take 50% of the available space */
    padding-right: 0; /* Remove padding on the right to avoid misalignment */
}

.input-group input {
    width: 100%;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 2px;
    outline: none;
}

.input-group label {
    display: block;
    font-size: 16px;
    font-weight: 600;
    text-align: left;
    color: #333;
}

input:focus {
    border-color: #17a2b8;
}

small {
    display: block;
    color: #999;
    font-size: 12px;
    margin-top: 5px;
    text-align: left;
}

.btn-submit {
    background-color: #17a2b8;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
}

.btn-submit:hover {
    background-color: #138496;
}

.additional-info {
    margin-top: 20px;
    color: #666;
    font-size: 14px;
}

@media (max-width: 768px) {
    .contact-form-container {
        width: 90%;
    }

    .input-row {
        flex-direction: column;
    }

    .input-group {
        padding-right: 0;
    }
}

</style>
<body>

    <div class="contact-form-container">
        <div class="contact-form-box">
            <h2>Contact Us</h2>
            <p>We will get back to you asap!</p>
            <form>
                <div class="input-row">
                    <div class="input-group">
                        <label for="first-name">Name</label>
                        <input type="text" id="first-name" placeholder="First Name" required>
                    </div>
                    <div class="input-group">
                        <input type="text" id="last-name" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email" required>
                    <small>example@example.com</small>
                </div>
                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" placeholder="Phone" required>
                </div>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
            <div class="additional-info">
                <p>You may also call us at 333-33-33</p>
            </div>
        </div>
    </div>

</body>
</html>
