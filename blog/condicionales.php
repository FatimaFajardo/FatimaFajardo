<?php
$metadescripcion ='¿Cuáles son las diferentes medidas en CSS?';
$page='categoria blog';
$titulo = "Las medidas en CSS";
define("pagina", "directorio blog");
define("newarticle","/que-es-el-marketing-digital");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>


<div id="cambiante"></div>
<script>
let tiempo = new Date().getHours();
let educacion;
if (tiempo < 14){
educacion = "buenos días";
}
else if (tiempo < 21){
educacion = "buenas tardes";
}
else if (tiempo > 21){
educacion = "buenas noches";
}

let dia;
    switch (new Date().getDay()){
    case 0 : dia="Domingo";
    break;
    case 1: dia="Lunes";
    break;
    case 2: dia="Martes";
    break;
    case 3: dia="Miercoles";
    break;
    case 4: dia="Jueves";
    break;
    case 5: dia="Viernes";
    break;
    case 6: dia="Sábado";
    break;
    }
    document.getElementById("cambiante").innerHTML = "Hola " + educacion + " .Hoy es " + dia;
</script>



<div id="meses"></div>
<script>
    let franja = dia;
    let temperatura;
if (franja != dia) {
    temperatura = " viento";
} else {
    temperatura = " sol";
}
let mes;
    switch (new Date().getMonth()){
    case 0 : mes="diciembre";
    break;
    case 1: mes="enero";
    break;
    case 2: mes="febrero";
    break;
    case 3: mes="marzo";
    break;
    case 4: mes="abril";
    break;
    case 5: mes="mayo";
    break;
    case 6: mes="junio";
    break;
    case 7: mes="julio";
    break;
    case 8: mes="agosto";
    break;
    case 9: mes="septiembre";
    break;
    case 10: mes="octubre";
    break;
    case 11: mes="noviembre";
    break;
    }
    document.getElementById("meses").innerHTML = "Estamos en el mes de " + mes + " Hoy hace" + temperatura;
</script>

<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>