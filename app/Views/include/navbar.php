<nav class="navbar">
    <div class="logo"><a href="/">Logo</a></div>
    <div class="links" id="menuContainer">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="<?php echo base_url('course') ?>">Course</a></li>
            <li><a href="<?php echo base_url('/#event') ?>">Event</a></li>
            <li><a href="<?php echo base_url('/#about') ?>">About us</a></li>
            <li><a href="<?php echo base_url('/contact') ?>">contact us</a></li>
        </ul>
        <i class="bi bi-x-lg close-btn" onclick="toggleMenu()"></i>

    </div>
    <i class="bi bi-list toggle-btn" onclick="toggleMenu()"></i>
</nav>