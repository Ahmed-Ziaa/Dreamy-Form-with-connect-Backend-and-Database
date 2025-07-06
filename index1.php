<?php
// error_reporting(0);
 include 'connection.php';

if (isset($_POST['submit'])){
  
//collect post variables
    $username = $_POST ['username'];
    $email = $_POST ['email'];
    $message = $_POST ['message'];
    
    
     $sql = "INSERT INTO `dream`.`love` (username, email, message) VALUES ('$username', '$email', '$message')";

     $result = mysqli_query($connection,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dreamy Contact Form</title>
  <!-- Bootstrap CSS + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1618166224148-d1fc734c9d3a?auto=format&fit=crop&w=1500&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      animation: slideBackground 20s ease-in-out infinite alternate;
    }

    @keyframes slideBackground {
      0% { background-position: 0% 50%; }
      100% { background-position: 100% 50%; }
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(255, 255, 255, 0.4);
      backdrop-filter: blur(5px);
      z-index: 1;
    }

    .contact-form {
      background-color: white;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 500px;
      z-index: 2;
      position: relative;
      animation: fadeInUp 1s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.25rem rgba(255, 102, 204, 0.5);
      border-color: #ff66cc;
    }

    .btn-custom {
      background-color: #ff66cc;
      border: none;
      color: white;
      transition: 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #e055bb;
      transform: scale(1.05);
    }

    .success-message {
      display: none;
      margin-top: 15px;
      color: green;
      font-weight: 500;
      text-align: center;
    }

    .is-invalid {
      border-color: red !important;
    }

    .header-icon {
      font-size: 1.5rem;
      color: #ff66cc;
    }
  </style>
</head>
<body>
  <!-- dreamy overlay -->
  <div class="overlay"></div>

  <form class="contact-form needs-validation" id="myForm" method="POST" novalidate>
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="text-danger m-0">
        <i class="bi bi-stars header-icon"></i> Dreamy Contact Form
      </h3>
    </div>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" id="username" name = "username" class="form-control" placeholder="Enter your name" required>
      <div class="invalid-feedback">Please enter your name.</div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" id="email" name = "email" class="form-control" placeholder="Enter your email" required>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea id="message" name = "message" rows="4" class="form-control" placeholder="Your magical message..." required></textarea>
      <div class="invalid-feedback">Please enter a message.</div>
    </div>

    <button type="submit" name = "submit" class="btn btn-custom w-100">
      <i class="bi bi-send-heart-fill"></i> Send Love
    </button>
  
    <div class="success-message" id="successMsg">
    <i class="bi bi-check-circle-fill"></i> Message sent with sparkles! 🌟
  </div>

    
  </form>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Form Validation -->
   <script>
const form = document.getElementById("myForm");
const successMsg = document.getElementById("successMsg");

form.addEventListener("submit", function (e) {
  let isValid = true;

  const username = document.getElementById("username");
  const email = document.getElementById("email");
  const message = document.getElementById("message");

  if (username.value.trim() === "") {
    username.classList.add("is-invalid");
    isValid = false;
  } else {
    username.classList.remove("is-invalid");
  }

  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!email.value.match(emailPattern)) {
    email.classList.add("is-invalid");
    isValid = false;
  } else {
    email.classList.remove("is-invalid");
  }

  if (message.value.trim() === "") {
    message.classList.add("is-invalid");
    isValid = false;
  } else {
    message.classList.remove("is-invalid");
  }

  if (!isValid) {
    e.preventDefault(); // sirf galat inputs par rok do
  }
  // agar valid hai, to e.preventDefault nahi chalega, form naturally PHP ko bhej dega
});
</script>
 
</body>
</html>
