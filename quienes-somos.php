<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
$h1 = '¿Quiénes somos?';
define("h1", "¿Quiénes somos?");
?>
        <section id="quienes-somos">
            <h1><?php echo h1;?></h1>
            <details>
                <summary><h2>¿Dónde eres?<h2></summary>
                Soy de un pueblo de Granada, Lentegí, pero actualmente estoy viviendo en la capital
            </details>
            <details class="intro">
                <summary><h2>¿Cuántos años tienes?</h2></summary>
                22
            </details> 
        </section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>
