<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Bjørn Emmaneel">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo url_to('/css/master.css')?>">
    <title>Mt Pantheon</title>
</head>
<body>
<div class="nav-container">
    <nav class="navbar">
        <div class="navbar-items">
            <div class="navbar-img">
                <img src="#" alt="#">
            </div>
            <div class="navbar-input">
                <input class="navbar-search" type="text" placeholder="Search bar">
            </div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="header.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pantheons</a>
                </li>
                <li class="nav-item login">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="intro">
        <div class="tekst">
            <h1>Dit is een titel</h1>
            <p>Dit is een beetje tekst</p>
        </div>
    </div>
</div>
<div class="About-Us">
    <h2>About Me</h2>
    <p>I am a Student that made this page for a school <br> project where you had to chose a subject and <br>make a page out of it where you
        display <br> information about your subject,<br> i chose for the acient Pantheons becuase <br> i read a lot of mythologie in my free time.</p>
</div>
<div class="CYP">
    <form action="">
        <select name="Pantheons" id="pant">
            <option value="Incan"></option>
            <option value="Norse"></option>
            <option value="Greek"></option>
            <option value="Aztec"></option>
            <option value="Celtic"></option>
            <option value="Egyptian"></option>
            <option value="Hindu"></option>
            <option value="Maya"></option>
            <option value="Inca"></option>
            <option value="Rigvedic"></option>
        </select>
    </form>

</div>
</body>
</html>