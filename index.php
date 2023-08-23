<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Teman-Teman</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1 class="mt-4">GITS Studi Independen 5 - Web Developer</h1>
        
        <?php
        // Sample biodata data
        $friends = array(
            array("Arya Nanda", "Universitas Mulawarman", "Teknik Informatika"),
        );
        
        // Loop through the friends array and create cards for each friend
        foreach ($friends as $friend) {
            echo '<div class="card friend-card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $friend[0] . '</h5>';
            echo '<p class="card-text">Tempat Kuliah: ' . $friend[1] . '</p>';
            echo '<p class="card-text">Jurusan: ' . $friend[2] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Link to Bootstrap JS (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
