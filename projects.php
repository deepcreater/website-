<?php
$projects = [
    ["title" => "Online Voting System", "description" => "An online voting system that securely manages and counts votes using C++."],
    ["title" => "Personal Portfolio", "description" => "A responsive personal portfolio website using HTML, CSS, and JavaScript."],
    ["title" => "E-Commerce Website", "description" => "A PHP-based dynamic e-commerce platform with features like product listings, cart, and payment integration."]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Projects</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>My Project Portfolio</h1>
      <p>Showcasing My Major and Minor Projects</p>
    </div>
  </header>

  <section class="projects">
    <div class="container">
      <h2>Projects</h2>
      <?php foreach ($projects as $project): ?>
      <div class="project-card">
        <h3><?php echo $project['title']; ?></h3>
        <p><?php echo $project['description']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 My Portfolio | All Rights Reserved</p>
  </footer>
</body>
</html>
