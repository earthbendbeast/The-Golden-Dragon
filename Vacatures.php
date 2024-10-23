<body>
<?php
include "inc/header.php";
?>
<section class="main1">
    <article class="reserveer1">
        <h2>Vacatures</h2>
        <form action="confirm.php" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="persons">Woonplaats:</label>
            <input type="number" id="persons" name="persons" required>

            <label for="date">Datum:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Tijd:</label>
            <input type="time" id="time" name="time" required>

            <label for="comment">Opmerking:</label>
            <textarea id="comment" name="comment" rows="4"></textarea>

            <input type="submit" value="Reserveer">
        </form>
    </article>
</section>



<?php
include "inc/Footer.php";
?>
</body>

</html>