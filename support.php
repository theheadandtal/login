<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Support - InfinitiSec</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Orbitron', sans-serif;
      background-color: #0a0f1c;
      color: #e0e0e0;
      margin: 0; padding: 0;
      display: flex; justify-content: center; align-items: center;
      min-height: 100vh;
    }
    .contact-container {
      max-width: 700px; width: 100%;
      background: rgba(10, 15, 28, 0.9);
      border: 2px solid #00ffe7;
      border-radius: 15px; box-shadow: 0 0 25px #00ffe7;
      padding: 40px;
    }
    .section-header { text-align: center; margin-bottom: 20px; }
    .company-name { font-size: 22px; font-weight: bold; color: #ff007f; text-shadow: 0 0 8px #ff007f; margin-bottom: 10px; }
    .section-title { font-size: 28px; color: #00ffe7; text-shadow: 0 0 8px #00ffe7; }
    .section-subtitle { font-size: 14px; color: #ccc; }
    .contact-info {
      margin: 20px 0; padding: 15px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 10px; border: 1px solid #00ffe7;
      text-align: center; font-size: 14px; line-height: 1.6;
    }
    .contact-info a { color: #00ffe7; text-decoration: none; }
    .form-group { margin-bottom: 20px; }
    label { display: block; font-size: 14px; margin-bottom: 8px; color: #00ffe7; text-shadow: 0 0 5px #00ffe7; }
    input, textarea {
      width: 100%; padding: 12px; border: 2px solid #00ffe7; border-radius: 10px;
      background: #0d1325; color: #fff; font-size: 14px; outline: none;
    }
    input:focus, textarea:focus { border-color: #ff007f; box-shadow: 0 0 15px #ff007f; }
    .btn-primary {
      background: linear-gradient(90deg, #00ffe7, #ff007f);
      color: #fff; padding: 12px 25px; border: none; border-radius: 10px;
      cursor: pointer; font-size: 16px; font-weight: bold;
      text-transform: uppercase; width: 100%;
    }
    .btn-primary:hover { box-shadow: 0 0 25px #ff007f, 0 0 25px #00ffe7; transform: scale(1.05); }
    .social-icons { text-align: center; margin-top: 20px; }
    .social-icons a { font-size: 22px; margin: 0 10px; color: #00ffe7; transition: 0.3s; }
    .social-icons a:hover { color: #ff007f; }
  </style>
</head>
<body>
  <section class="contact" id="contact">
    <div class="contact-container">
      <div class="section-header">
        <div class="company-name">InfinitiSec</div>
        <h2 class="section-title">Contact Us</h2>
        <p class="section-subtitle">Reach out for cybersecurity audits or inquiries</p>
      </div>

      <div class="contact-info">
        📧 Email: <a href="mailto:support@infinitisec.com">support@infinitisec.com</a><br>
        📞 Phone: <a href="tel:+917735351894">+91 7735351894</a>
      </div>
      
      <!-- Form points to sendmail.php -->
      <form method="POST" enctype="multipart/form-data" action="sendmail.php">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <div class="form-group">
          <label for="file">Attach Files (ZIP, JPG, PNG)</label>
          <input type="file" id="file" name="files[]" accept=".zip,.jpg,.jpeg,.png" multiple>
        </div>
        
        <button type="submit" class="btn-primary">Send Message</button>
      </form>

      <div class="social-icons">
        <a href="https://www.instagram.com/YOUR_USERNAME" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/YOUR_USERNAME" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </section>
</body>
</html>
