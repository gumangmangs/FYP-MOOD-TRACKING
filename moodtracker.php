<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mood Tracker</title>

    <style>
  /* Add your CSS styles here */
  .li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: var(--primary-color);
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
    <header>
        <nav class="header__nav">
            <div class="header__logo">
            <a href="moodtracker-1.php"><h4 data-aos="fade-down">Mood Tracker</h4></a>
                <div class="header__logo-overlay"></div>
            </div>

            <ul class="header__menu" data-aos="fade-down">
                <li class="dropdown">
                    <a class="dropbtn">Mood</a>
                    <div class="dropdown-content">
                        <a href="track.php">Track Mood</a>
                        <a href="graph.php">Mood Graph</a>
                        <a href="journal.php">Journaling</a>
                    </div>
                </li>
                <li>
                <a href="journal-history.php">Journals</a>
                </li>
                <li>
                    <a href="about.php">About Us</a>
                </li>
                <li>
                  <a href="signout.php"><img src="assets/log-out.png" width="20" height="20"></a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>
