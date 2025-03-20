<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">

    <header>
    <div class="container_header">
        <h1>My Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <button onclick="window.location.href='index.php'">Back</button>
    </div>
</header>
</head>

<body>
    
<div class="container">
    <section  id="home" class="hero">
        <div class="hero-text">
            <h3>Hi, I am</h3>
            <h3>Raymund C. Valerio</h3>
            <h1><span class="highlight">Web Developer</span></h1>
            <p>Crafting Seamless & Engaging Experiences</p>
            <div class="hero-buttons">
                <button>Let's Connect</button>
            </div>
        </div>
        <div class="hero-image">    
            <img src="/todo_list/image/Profile.jpg" alt="Profile Image">
        </div>
    </section>

    <h2>Services</h2>
    <section id="services" class="services">
        <div class="service-card">
            <h3>Web Developer</h3>
            <p>A technical professional who builds and maintains websites and web applications.</p>
        </div>
        <div class="service-card">
            <h3>Website Design</h3>
            <p>Building modern and intuitive web applications.</p>
        </div>
        <div class="service-card">
            <h3>App Design</h3>
            <p>Developing seamless mobile application experiences.</p>
        </div>
    </section>
</div>

<section id="about" class="about-me">
    <div class="container">
        <div class="about-image">
            <img src="/todo_list/image/raymund.png" alt="Profile Picture">
        </div>
        <div class="about-text">
            <h2>About Me</h2>
            <h3>Full Stack Web Developer</h3>
            <p>
                I am a passionate Web Developer with expertise in front-end and back-end development. 
                I specialize in creating dynamic, high-performance web applications using modern 
                technologies such as HTML, CSS, JavaScript, PHP, Laravel, and MySQL.
            </p>
            <p>
                I focus on building scalable, secure, and user-friendly websites that solve real-world problems. 
                Whether it's designing intuitive interfaces or developing robust backend systems, I ensure 
                high-quality code and seamless user experiences.
            </p>
        </div>
    </div>

    <div class="skills">
        <div class="skill">
            <img src="/todo_list/image/html.png" alt="HTML">
            <p>100%<br>HTML</p>
        </div>
        <div class="skill">
            <img src="/todo_list/image/css.png" alt="CSS">
            <p>80%<br>CSS</p>
        </div>
        <div class="skill">
            <img src="/todo_list/image/js.png" alt="JavaScript">
            <p>75%<br>JavaScript</p>
        </div>
        <div class="skill">
            <img src="/todo_list/image/php.png" alt="PHP">
            <p>80%<br>PHP</p>
        </div>
        <div class="skill">
            <img src="/todo_list/image/mysql.png" alt="MySQL">
            <p>75%<br>MySQL</p>
        </div>
        <div class="skill">
            <img src="/todo_list/image/git.png" alt="Git">
            <p>70%<br>Git & GitHub</p>
        </div>
        <div class="skill">
            <img src="/todo_list/image/xammp.png" alt="XAMPP">
            <p>75%<br>XAMPP</p>
        </div>
    </div>
</section>



<section id="portfolio" class="portfolio">
    <div class="container">
        <h2>My Portfolio</h2>
        <p>Here are some of my works showcasing my design and development skills.</p>
        
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="/todo_list/image/portfiliopic.png" alt="Personal Portfolio Website">
                <h3>Personal Portfolio Website</h3>
                <p>A modern and visually appealing personal portfolio website designed to highlight my projects, skills, and experience.</p>
            </div>

            <div class="portfolio-item">
                <img src="/todo_list/image/todo_list.png" alt="To-Do List Project">
                <h3>To-Do List Project</h3>
                <p>A functional to-do list web application that allows users to manage their daily tasks efficiently with an intuitive UI.</p>
            </div>

            <div class="portfolio-item">
                <img src="/todo_list/image/Mindewellfigma.png" alt="MindWell Mental Health App">
                <h3>MindWell Mental Health App (Figma)</h3>
                <p>A conceptual UI/UX design for a mental health support application, created using Figma, featuring AI-driven health support and crisis management tools.</p>
            </div>
        </div>
    </div>
</section>



    <section id="testimonials" class="testimonials">
    <h2>Testimonials</h2>
    <p>Customer Testimonials Showcase Genuine Experiences And Satisfaction With A Product Or Service.</p>
    
    <div class="testimonial-container">
        <div class="testimonial">
            <div class="user-info">
                <img src="/todo_list/image/Joshua.jpeg" alt="User 1">
                <div>
                    <h4>Joshua Disgrasya</h4>
                    <p>⭐⭐⭐⭐⭐ 5.0</p>
                </div>
            </div>
            <p class="testimonial-text">
                Working with Raymund Valerio was an amazing experience. They transformed our vision into a sleek and user-friendly website. 
                Highly recommended for anyone looking to elevate their digital product! ang galing!
            </p>
        </div>

        <div class="testimonial">
            <div class="user-info">
                <img src="/todo_list/image/MangKepweng.jpg" alt="User 2">
                <div>
                    <h4>Mang Kepweng</h4>
                    <p>⭐⭐⭐⭐⭐ 5.0</p>
                </div>
            </div>
            <p class="testimonial-text">
                They took the time to understand our needs and crafted a beautiful, functional website. The interface is intuitive and responsive.
                Our overall user experience has improved significantly.
            </p>
        </div>
    </div>
</section>


<section id="contact" class="contact">
    <h2>Contact Me</h2>
    <p>Reach Me Out And Connect With Me</p>
    
    <form action="contact.php" method="POST">
        <div class="form-group">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="text" name="phone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder="Address">
            <input type="text" name="project_details" placeholder="Project Details">
        </div>
        <button type="submit">Send</button>
    </form>
</section>


    

</body>

<footer>
    <div class="footer-content">
        <h2>My Portfolio</h2>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>
        <div class="social-icons">
            <a href="https://www.facebook.com/raycasva"><img src="/todo_list/image/facebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/inasal_2k/?fbclid=IwY2xjawJGJaxleHRuA2FlbQIxMAABHR0VOCSOJS_SInYI35w5dG6B8tKq9g9RPkd2x7xctpkVhH7GrKrBP6SI3Q_aem_tY8CDLommg1Uw6D0rmdWag#"><img src="/todo_list/image/instagram.png" alt="Instagram"></a>
            <a href="https://www.linkedin.com/in/raymund-valerio-236480236/"><img src="/todo_list/image/linkedn.png" alt="Linkedn"></a>
        </div>
        <p>&copy; 2025 Raymund Valerio - Web Developer</p>
    </div>
</footer>

</html>
