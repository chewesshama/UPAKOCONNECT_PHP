<?php
// index.php
require_once 'includes/base.php';
?>

<!-- Hero Section -->
<section id="hero" class="hero section light-background">
  <img src="/UPAKOCONNECT_PHP/assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
  <div class="container position-relative">
    <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
      <h2>WELCOME TO UPAKOCONNECT</h2>
      <p>Manage patient records and documents efficiently with our secure system.</p>
    </div>
    <div class="content row gy-4">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
          <h3>Why Choose UPAKOCONNECT?</h3>
          <p>Our platform provides seamless patient and document management, ensuring data security and ease of access for healthcare professionals.</p>
          <div class="text-center">
            <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="d-flex flex-column justify-content-center">
          <div class="row gy-4">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                <i class="bi bi-clipboard-data"></i>
                <h4>Patient Management</h4>
                <p>Easily add, edit, and delete patient records.</p>
                <a href="/modules/clinic/patients.php" class="btn btn-primary">Manage Patients</a>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                <i class="bi bi-folder"></i>
                <h4>Document Management</h4>
                <p>Securely store and manage patient documents.</p>
                <a href="/modules/clinic/documents.php" class="btn btn-primary">Manage Documents</a>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                <i class="bi bi-calendar-check"></i>
                <h4>Appointments</h4>
                <p>Schedule and track patient appointments.</p>
                <a href="#appointment" class="btn btn-primary">Schedule Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4 gx-5">
      <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
        <img src="/UPAKOCONNECT_PHP/assets/img/about.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <h3>About UPAKOCONNECT</h3>
        <p>
          UPAKOCONNECT is a web-based platform designed to streamline patient and document management for healthcare providers, ensuring efficient and secure operations.
        </p>
        <ul>
          <li>
            <i class="fa-solid fa-vial-circle-check"></i>
            <div>
              <h5>Secure Data Handling</h5>
              <p>Protect patient information with robust security measures.</p>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-pump-medical"></i>
            <div>
              <h5>User-Friendly Interface</h5>
              <p>Intuitive design for easy navigation and management.</p>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-heart-circle-check"></i>
            <div>
              <h5>Scalable Solution</h5>
              <p>Adaptable to growing healthcare needs.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Reach out to us for any inquiries or support.</p>
  </div>
  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Location</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>info@example.com</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <form action="/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Appointment Section -->
<section id="appointment" class="appointment section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Make an Appointment</h2>
    <p>Schedule a consultation with our healthcare professionals.</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <form action="/forms/appointment.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="col-md-4 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 form-group mt-3">
          <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="department" id="department" class="form-select" required>
            <option value="">Select Department</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Neurology">Neurology</option>
            <option value="Pediatrics">Pediatrics</option>
          </select>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="doctor" id="doctor" class="form-select" required>
            <option value="">Select Doctor</option>
            <option value="Dr. White">Dr. Walter White</option>
            <option value="Dr. Jhonson">Dr. Sarah Jhonson</option>
            <option value="Dr. Anderson">Dr. William Anderson</option>
          </select>
        </div>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
      </div>
      <div class="mt-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </div>
    </form>
  </div>
</section>

  