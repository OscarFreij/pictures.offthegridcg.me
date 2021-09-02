<div class="navbar">
    <a href='/' class="navbar-item"><img src='static/media/icon.png' alt='OF_ICON'><span>Pictures</span></a>
    <a href='/' class="navbar-item"><span>Login/Logout</span></a>
    <?php
        if (isset($_GET['image']))
        {
            ?>
            <a href='/?album=<?=$_GET['album']?>' class="navbar-item"><span>Go Back</span></a>
            <?php
        }
    ?>
</div>