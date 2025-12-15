<?php
// index.php
$title = "Portfolio - Munendrasinh Baghel";
include 'header.php';
?>


<section class="hero" id="home" 
    style="display:flex;align-items:center;justify-content:space-between;
    background: #292514ff;
           padding:80px 10%;gap:40px;flex-wrap:wrap;">

    <!-- Text -->
    <div class="hero-text" data-aos="fade-right" style="max-width:500px;">
        
        <h1 style="font-size:42px;font-weight:700;line-height:1.3;margin-bottom:20px;">
            Hello, I'm <span style="color:#eed0ff;">Munendrasinh Radheshyam Baghel</span><br>
            Full-Stack Developer
        </h1>

        <p style="font-size:18px;color:#dcdcdc;margin-bottom:30px;">
            I build modern, scalable, and responsive web applications that solve real-world problems.
        </p>

        <a class="btn" href="Resume.pdf" download
           style="display:inline-block;padding:12px 28px;background:#00d0ff;
                  color:#fff;font-size:18px;font-weight:600;border-radius:8px;
                  text-decoration:none;transition:0.3s;">
            Download Resume
        </a>
    </div>

    <!-- Profile Image -->
    <div data-aos="fade-left">
        <img src="profile.png"
             style="width:300px;height:300px;object-fit:cover;border-radius:50%;
                    border:4px solid #00d0ff;box-shadow:0 4px 18px rgba(57, 224, 233, 0.3);">
    </div>
</section>

<style>
.hero a:hover {
    background: #c51111ff;a6f2;
}
@media (max-width:768px) {
    .hero {
        text-align:center;
        justify-content:center;
        padding:60px 5%;
    }
    .hero-text {
        text-align:center !important;
    }
}
</style>


<section class="section" id="about" style="padding:80px 20px;background:#0d0d0d;color:#fff;">
  <div class="container" data-aos="fade-up">

    <h2 class="section-title" style="text-align:center;font-size:36px;font-weight:700;margin-bottom:20px;">
      About Me
    </h2>

    <p style="max-width:900px;margin:auto;text-align:center;font-size:18px;line-height:1.8;color:#dcdcdc;">
      My name is <strong>Baghel Munendrasinh Radheshyam</strong>, and I am currently pursuing my 
      <strong>Master of Computer Applications (MCA) – Third Year</strong> at Ganpat University.
      <br><br>
      I am passionate about technology and skilled in 
      <strong>HTML, CSS, JavaScript, PHP, Java, Python, Android Development, .NET</strong>, 
      and currently expanding my expertise in 
      <strong>Artificial Intelligence and Machine Learning</strong>.
      <br><br>
      I enjoy building modern web applications, Android apps, and software solutions. 
      I love working on challenging projects such as 
      <strong>Online Examination Systems</strong> and 
      <strong>Virtual Classroom Applications</strong>.
      <br><br>
      I am always eager to explore new tools, learn modern technologies, and grow as a developer 
      while building innovative, real-world solutions.
    </p>

  </div>
</section>
<section id="skills" style="padding:90px 20px;background: #3c3939ff;f9;color:#fff;">
  <div class="container" data-aos="fade-up">

    <h2 style="text-align:center;font-size:40px;font-weight:800;margin-bottom:55px;">
      Professional Skills
    </h2>

    <style>
      .skill-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 32px;
        max-width: 1200px;
        margin: auto;
      }

      .skill-card {
        padding: 25px;
        border-radius: 18px;
        text-align: center;
        position: relative;
        background: rgba(226, 179, 179, 0.05);
        border: 2px solid transparent;
        background-clip: padding-box;
        transition: 0.4s;
        backdrop-filter: blur(12px);
        cursor: pointer;
      }

      .skill-card:hover {
        transform: translateY(-10px) scale(1.03);
        background: rgba(255, 255, 255, 0.10);
        border-image: linear-gradient(45deg, #dbf6f8ff, #ff00f7, #bcd9c8ff) 1;
        box-shadow: 0 0 25px rgba(193, 218, 218, 0.4);
      }

      .skill-icon {
        width: 55px;
        height: 55px;
        margin-bottom: 15px;
        filter: drop-shadow(0 0 4px rgba(233, 217, 217, 0.3));
      }

      .skill-name {
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 0.5px;
      }
    </style>

    <div class="skill-grid">

      <!-- Java -->
      <div class="skill-card">
        <img src="assets/icons/java.png" class="skill-icon">
        <div class="skill-name">Java Programming</div>
      </div>

      <!-- Python -->
      <div class="skill-card">
        <img src="assets/icons/python.webp" class="skill-icon">
        <div class="skill-name">Python Programming</div>
      </div>

      <!-- PHP -->
      <div class="skill-card">
        <img src="assets/icons/php.png" class="skill-icon">
        <div class="skill-name">PHP  Programming</div>
      </div>

      <!-- .NET -->
      <div class="skill-card">
        <img src="assets/icons/net.png" class="skill-icon">
        <div class="skill-name">.NET </div>
      </div>

      <!-- Android -->
      <div class="skill-card">
        <img src="assets/icons/android.png" class="skill-icon">
        <div class="skill-name">Android Development</div>
      </div>

      <!-- HTML CSS -->
      <div class="skill-card">
        <img src="assets/icons/html.png" class="skill-icon">
        <div class="skill-name">HTML </div>
      </div>

      <!-- JavaScript -->
      <div class="skill-card">
        <img src="assets/icons/javascript.png" class="skill-icon">
        <div class="skill-name">JavaScript</div>
      </div>

      <!-- SQL -->
      <div class="skill-card">
        <img src="assets/icons/css.png" class="skill-icon">
        <div class="skill-name">Css</div>
      </div>

      <!-- Spring -->
      <div class="skill-card">
        <img src="assets/icons/spring.png" class="skill-icon">
        <div class="skill-name">Spring Framework</div>
      </div>

      <!-- Machine Learning -->
      <div class="skill-card">
        <img src="assets/icons/ml.jpeg" class="skill-icon">
        <div class="skill-name">Machine Learning</div>
      </div>

      <!-- Full Stack -->
      <div class="skill-card">
        <img src="assets/icons/full.webp" class="skill-icon">
        <div class="skill-name">Full-Stack Development</div>
      </div>

      <!-- laravel -->
      <div class="skill-card">
        <img src="assets/icons/laravel.webp" class="skill-icon">
        <div class="skill-name">Laravel Framework</div>
      </div>

    </div>
  </div>
</section>

<section id="education" style="padding:90px 20px;background:#050505;color:#fff;">
  <div class="container" data-aos="fade-up">

    <h2 style="text-align:center;font-size:40px;font-weight:800;margin-bottom:50px;">
      Education
    </h2>

    <style>
      .edu-box {
        max-width: 900px;
        margin: auto;
        display: grid;
        gap: 25px;
      }
      .edu-card {
        padding: 25px;
        border-radius: 16px;
        background: rgba(255,255,255,0.05);
        border: 2px solid transparent;
        backdrop-filter: blur(10px);
        transition: 0.35s;
      }
      .edu-card:hover {
        transform: translateY(-8px);
        border-image: linear-gradient(45deg,#00f0ff,#ff00f7,#00ff7a) 1;
        background: rgba(255,255,255,0.10);
        box-shadow: 0 0 25px rgba(0,255,255,0.25);
      }
      .edu-title {
        font-size: 24px;
        font-weight: 700;
      }
      .edu-year {
        font-size: 16px;
        opacity: 0.7;
      }
    </style>

    <div class="edu-box">

     <div class="edu-card">
    <div class="edu-title">Master of Computer Applications (MCA)</div>
    <div class="edu-year">2024 – 2026 | Ganpat University</div>
    <p style="margin-top:10px;font-size:16px;">
      CGPA (till Semester 2): <strong>7.77</strong><br>
      Studied advanced computer science including Cloud Computing, Advanced Programming, Data Science, AI, and Software Engineering.
    </p>
  </div>

  <div class="edu-card">
    <div class="edu-title">Bachelor of Computer Applications (BCA)</div>
    <div class="edu-year">2021 – 2024 | Shri Sarvajanik BCA & Pgdca College</div>
    <p style="margin-top:10px;font-size:16px;">
      CGPA: <strong>7.64</strong><br>
      Studied Programming, DBMS, Operating Systems, Web Development, Networking, and Software Engineering.
    </p>
  </div>
    </div>
  </div>
</section>

<section id="journey" style="padding:90px 20px;background: #1e1d1dff;0a0a;color:#fff;">
  <div class="container" data-aos="fade-up">

    <h2 style="text-align:center;font-size:40px;font-weight:800;margin-bottom:50px;">
      My Journey
    </h2>

    <style>
      .timeline {
        max-width: 900px;
        margin: auto;
        position: relative;
      }
      .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        width: 4px;
        height: 100%;
        background: linear-gradient(#00ffff,#ff00ff);
        transform: translateX(-50%);
      }
      .timeline-item {
        width: 50%;
        padding: 20px 30px;
        position: relative;
      }
      .timeline-item:nth-child(odd) {left: 0;}
      .timeline-item:nth-child(even) {left: 50%;}
      .timeline-content {
        background: rgba(255,255,255,0.06);
        padding: 22px;
        border-radius: 16px;
        backdrop-filter: blur(10px);
        border: 2px solid transparent;
        transition: 0.3s;
      }
      .timeline-content:hover {
        border-image: linear-gradient(45deg,#00f0ff,#ff00f7,#00ff7a) 1;
        background: rgba(255,255,255,0.15);
        transform: translateY(-6px);
      }
    </style>
<div class="timeline">

  <div class="timeline-item">
    <div class="timeline-content">
      <h3>2021 — Started BCA Journey</h3>
      <p>Began my academic journey into Computer Applications and programming.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-content">
      <h3>2022 — Web Development Foundation</h3>
      <p>Started working on websites using HTML, CSS, PHP, JavaScript & MySQL.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-content">
      <h3>2023 — Python & Machine Learning</h3>
      <p>Learned Python programming, data analysis, and machine learning basics.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-content">
      <h3>2024 — Completed BCA Successfully</h3>
      <p>Graduated with a solid foundation in programming, database, and web technologies.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-content">
      <h3>2024 — Started MCA Journey</h3>
      <p>Began Master of Computer Applications to gain deep knowledge in advanced computing, AI, ML, cloud & software development.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-content">
      <h3>2025 — MCA Semester 2 Completed</h3>
      <p>Focused on Data Science, Cloud Computing, Advanced Java, and AI projects.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-content">
      <h3>2025 — Php& Live Projects</h3>
      <p>Started developing real-world PHP </p>
    </div>
  </div>

</div>
  </div>
</section>
<section id="experience" style="padding:90px 20px;background: #0d1102ff;0505;color:#fff;">
  <div class="container" data-aos="fade-up">

    <h2 style="text-align:center;font-size:40px;font-weight:800;margin-bottom:50px;">
      Experience
    </h2>

    <style>
      .exp-box {
        max-width: 950px;
        margin: auto;
        display: grid;
        gap: 28px;
      }
      .exp-card {
        padding: 25px;
        border-radius: 16px;
        background: rgba(255,255,255,0.05);
        border: 2px solid transparent;
        backdrop-filter: blur(10px);
        transition: 0.35s;
      }
      .exp-card:hover {
        transform: translateY(-8px);
        border-image: linear-gradient(45deg,#00f0ff,#ff00f7,#00ff7a) 1;
        background: rgba(255,255,255,0.13);
        box-shadow: 0 0 25px rgba(0,255,255,0.25);
      }
      .exp-role {
        font-size: 22px;
        font-weight: 700;
      }
      .exp-company {
        font-size: 18px;
        opacity: 0.8;
      }
    </style>

    <div class="exp-box">

      <div class="exp-card">
        <div class="exp-role">Freelance Web Developer</div>
        <div class="exp-company">2023 – Present</div>
        <p style="margin-top:10px;font-size:16px;">
          Built responsive websites, PHP applications, dashboards, and custom web solutions for clients.
        </p>
      </div>
      
      <div class="exp-card">
        <div class="exp-role">Full Stack Project Developer</div>
        <div class="exp-company">2024 – Present</div>
        <p style="margin-top:10px;font-size:16px;">
          Developed full-stack applications using PHP, MySQL, JavaScript, Python, and Android.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Projects Section -->
<section class="section" id="projects">
<h2>Projects</h2>
<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:30px">
<div style="background:#fff;padding:15px;border-radius:12px;box-shadow:0 4px 12px rgba(142, 24, 24, 0.1);text-align:center;">
    <img src="slide1.jpg" style="width:100%;border-radius:10px;">

    <h3 style="margin-top:15px;font-weight:600;">Online Exam System</h3>

    <div style="margin-top:12px;">
        <a href="https://mohit123.rf.gd/" target="_blank"
           style="padding:10px 18px;background:#007bff;color:#fff;
                  border-radius:8px;margin-right:10px;text-decoration:none;font-weight:600;">
            🔗 Live Demo
        </a>

        <a href="https://github.com/munendra878/Online-Examination-System-by-mb" target="_blank"
           style="padding:10px 18px;background:#333;color:#fff;
                  border-radius:8px;text-decoration:none;font-weight:600;">
            📦 GitHub
        </a>
    </div>
</div>

<div style="background:#fff;padding:15px;border-radius:12px;box-shadow:0 4px 12px rgba(196, 90, 90, 0.1);text-align:center;">
    <img src="project2.jpeg" style="width:100%;border-radius:10px;">
`
    <h3 style="margin-top:15px;font-weight:600;">Online Exam System</h3>

    <div style="margin-top:12px;">
        <a href="https://mohit123.rf.gd/" target="_blank"
           style="padding:10px 18px;background:#007bff;color:#fff;
                  border-radius:8px;margin-right:10px;text-decoration:none;font-weight:600;">
            🔗 Live Demo
        </a>

        <a href="https://github.com/munendra878/Online-Examination-System-by-mb" target="_blank"
           style="padding:10px 18px;background:#333;color:#fff;
                  border-radius:8px;text-decoration:none;font-weight:600;">
            📦 GitHub
        </a>
    </div>
</div>
</div>
</section>

<section class="section" id="blog" style="padding:60px 0;background:#e9c8c8ff;">
    <div class="container" style="max-width:900px;margin:auto;text-align:center;">

        <h2 style="font-size:32px;font-weight:700;margin-bottom:30px;">
            Latest Blog
        </h2>

        <!-- Blog Card -->
        <div style="background:#fff;border-radius:12px;box-shadow:0 4px 14px rgba(193, 174, 174, 0.1);
                    overflow:hidden;max-width:700px;margin:auto;text-align:left;">

            <img src="blog1.avif" alt="Blog Image" style="width:100%;height:auto;">

            <div style="padding:20px;">
                <h3 style="font-size:24px;font-weight:600;margin-bottom:10px;">
                    Understanding Online Examination Systems
                </h3>

                <p style="font-size:16px;color:#666;margin-bottom:20px;">
                    Online exam systems make education easier, faster, and more transparent.
                    Here’s how modern systems work and how they benefit students and institutions...
                </p>

                <a href="blog1.php"
                    style="display:inline-block;padding:10px 20px;background:#00bfff;color:#fff;
                           border-radius:8px;text-decoration:none;font-size:16px;font-weight:600;
                           transition:0.3s;">
                    Read More →
                </a>
            </div>

        </div>

    </div>
</section>

<!--Contact Section-->
<section class="section" id="contact" style="padding:60px 0;background: #c48080ff;">
    <div class="container" style="max-width:650px;margin:auto;text-align:center;">

        <h2 style="font-size:32px;font-weight:700;margin-bottom:30px;">
            Contact Me
        </h2>

        <form action="send_mail.php" method="POST" 
              style="background:#fff;padding:30px;border-radius:12px;
                     box-shadow:0 4px 14px rgba(0,0,0,0.1);">

            <!-- Name -->
            <input name="name" placeholder="Your Name" required
                style="width:100%;padding:12px 15px;margin-bottom:15px;
                       border:1px solid #ddd;border-radius:8px;font-size:16px;">

            <!-- Email -->
            <input name="email" placeholder="Your Email" type="email" required
                style="width:100%;padding:12px 15px;margin-bottom:15px;
                       border:1px solid #ddd;border-radius:8px;font-size:16px;">

            <!-- Message -->
            <textarea name="message" rows="5" placeholder="Message" required
                style="width:100%;padding:12px 15px;margin-bottom:20px;
                       border:1px solid #ddd;border-radius:8px;font-size:16px;"></textarea>

            <!-- Button -->
            <button type="submit" 
                style="width:100%;padding:12px 20px;
                       background:#00bfff;color:white;font-size:18px;
                       border:none;border-radius:8px;font-weight:600;
                       cursor:pointer;transition:0.3s;">
                Send Message
            </button>

        </form>
    </div>
</section>

<style>
#contact button:hover {
    background:#0095cc;
}
#contact input:focus,
#contact textarea:focus {
    border-color:#00bfff;
    outline:none;
}
</style>


<style>
/* Icon hover effect */
#social-icons img:hover {
    transform: scale(1.1);
}
</style>

<?php include 'footer.php'; ?>