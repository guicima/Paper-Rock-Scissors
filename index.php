<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pierre Papier Ciseaux</title>
    <?php require('functions.php');
        $userChoice = $_POST['userchoice'];
        $computerChoice = computerChoice();
    ?>
</head>
<body>
    <div class="game">
        <div class="text">
            <?php 
                if (isset($_POST['userchoice'])) {
                    echo '<p class="result">'.comparateur($userChoice, $computerChoice).'</p>';
                    echo "<p>Le robot a joué : $computerChoice</p>";
                    echo "<p>Et vous avez joué : $userChoice</p>";
                }
            ?>
        </div>
        <div class="controls">
            <form action="/index.php" method="post">
            <label class="radio"><input type="radio" name="userchoice" value="Pierre">Pierre</label>
            <label class="radio"><input type="radio" name="userchoice" value="Papier">Papier</label>
            <label class="radio"><input type="radio" name="userchoice" value="Ciseaux">Ciseaux</label>
            <input class="button" type="submit" value="Jouer">
            </form>
        </div>
    </div>
</body>
</html>