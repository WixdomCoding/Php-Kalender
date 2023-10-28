<!DOCTYPE html>
<html>
<head>
    <title>Resultat</title>
</head>
<body>
    <h1>Countdown till fredag</h1>
    <?php
    if (isset($_POST['chosen_date'])) {
        $chosen_date = strtotime($_POST['chosen_date']); // Konvertera det valda datumet till en tidsstämpel
        $today = strtotime(date('Y-m-d')); // Dagens tidsstämpel

        $days_until_friday = 5 - date('w', $chosen_date); // Räkna ut antalet dagar kvar till fredag (0 är fredag)

        if ($days_until_friday < 0) {
            $days_until_friday += 7; // Om det är senare än fredag, lägg till dagar för att komma till nästa fredag
        }

        if ($days_until_friday == 0) {
            echo "<p>Det är fredag!</p>";
            echo '<img src="friday.gif" alt="Fredag GIF">';
        } else {
            echo "<p>Det är $days_until_friday dagar kvar till fredag.</p>";
        }
    } else {
        echo "<p>Välj ett datum ovan och klicka på 'Räkna ut' för att se hur många dagar det är kvar till närmaste fredag.</p>";
    }
    ?>
</body>
</html>