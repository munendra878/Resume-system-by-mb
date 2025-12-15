<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo isset($title) ? $title : 'Portfolio - Munendrasinh Baghel'; ?></title>

<!-- Meta -->
<meta name="description" content="Professional Full-Stack Developer Portfolio - Munendrasinh Baghel" />
<meta property="og:title" content="Portfolio - Munendrasinh Baghel" />
<meta property="og:description" content="Professional Full-Stack Developer Portfolio" />

<!-- Icons + AOS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

<!-- Styles -->
<style>
body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#141516;
    color:#fff;
    transition:0.3s;
}

body.light{
    background:#f6f6f6;
    color:#000;
}

/* Header */
header{
    padding:20px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(10px);
    border-bottom:1px solid rgba(255,255,255,0.1);
    position:sticky;
    top:0;
    z-index:10;
}

/* Logo */
.logo{
    font-size:22px;
    font-weight:700;
    letter-spacing:1px;
}

/* Navigation Menu */
nav a{
    margin-left:25px;
    color:inherit;
    text-decoration:none;
    font-size:16px;
    transition:0.3s;
}

nav a:hover{
    color:#00d0ff;
}

/* Sections */
.section{
    padding:80px 50px;
}

.section h2{
    text-align:center;
    font-size:36px;
    margin-bottom:40px;
}

/* Theme Toggle */
.theme-toggle{
    cursor:pointer;
    font-size:20px;
    padding:8px 10px;
    border-radius:50%;
    background:rgba(255,255,255,0.08);
    transition:0.3s;
}

.theme-toggle:hover{
    background:rgba(183, 140, 140, 0.2);
}
</style>
</head>

<body>
<header>
    <div class="logo">Munendra Portfolio</div>

    <nav>
        <a href="index.php#home">Home</a>
        <a href="index.php#about">About</a>
        <a href="index.php#skills">Skills</a>
        <a href="index.php#projects">Projects</a>
        <a href="blog1.php">Blogs</a>
        <a href="index.php#education">Education</a>
        <a href="index.php#journey">Journey</a>
        <a href="index.php#experience">Experience</a>
        <a href="index.php#contact">Contact</a>
    </nav>

    <div class="theme-toggle" id="themeToggle">
        <i class="fa fa-moon"></i>
    </div>
</header>
