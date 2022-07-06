
<body>
    <!-- header section start  -->
    <header>
        <div class="fas fa-bars" id="menu-bar"></div>
        <a href="index.php" class="logo">HIDAYAH</a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="#kegiatan">kegiatan</a>
            <a href="#kegiatan">pendaftaran</a>
        </nav>

        <div class="icons">
            <i class="fas fa-user" id="login-btn"></i>
        </div>
    </header>

    

    <!-- header section end -->

    <!-- login form container     -->
    <div class="login-form-container">


        <i class="fas fa-times" id="form-close"></i>
        
        <form action="function/login-form.php" method="post">
            <h3>login</h3>
            <input type="email" class="box" placeholder="Enter you email" name="email">
            <input type="password" class="box" placeholder="Enter you password" name="password">
            <input type="submit" value="login" class="btn" name="login">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password <a href="#">click here</a></p>
            <p>don't have a account ? <a href="register.html">register now</a></p>

        </form>

    </div>
    <!-- login form end     -->
</body>
</html>