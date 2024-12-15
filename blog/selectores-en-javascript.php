<?php 
$metadescripcion ='Los selectores en JavaScript se utilizan para fijar ciertas funcionalidades según el tipo y clase de elemento';
$page='categoria blog';
$titulo = "Los selectores en JavaScript";
define("pagina", "directorio blog");
define("newarticle","/las-medidas-en-css");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>
<section id="articulo">
    <h1>¿Qué son los selectores en JavaScript?</h1>
<div class="introduccion"> 
    Los selectores en JavaScript son fundamentales para acceder a elementos del DOM (Document Object Model) y manipular su contenido, atributos o estilos. En esta guía, exploraremos qué son los selectores, cómo usarlos, y los diferentes métodos disponibles para seleccionar elementos en el DOM.
    Los selectores en JavaScript permiten identificar y seleccionar elementos específicos dentro del documento HTML, para poder trabajar con ellos. Estos selectores se utilizan principalmente en combinación con métodos como getElementById, getElementsByClassName, querySelector y querySelectorAll, que facilitan la interacción con los elementos de la página.
</div>
<div class="cuerpo">
    <h2>Tipos de Selectores en JavaScript</h2>
         <p id="id">El selector getElementById() </p>
        El método getElementById() se utiliza para seleccionar un único elemento mediante su identificador único (id). Este es uno de los métodos más rápidos y sencillos para obtener un elemento.
        <script>document.getElementById("id").innerHTML="1. getElementById()";</script>
        
        <p class="class">El selector getElementsByClassName()</p>
        El método getElementsByClassName() permite seleccionar todos los elementos que tengan una clase específica. Este método devuelve una colección de nodos (no un array), que puede ser recorrida mediante un bucle.
        <script>document.getElementsByClassName("class")[0].innerHTML="2. getElementsByClassName()";</script>
        
        <p>3. getElementsByTagName()</p>
        El método getElementsByTagName() selecciona todos los elementos con una etiqueta HTML específica. Al igual que getElementsByClassName(), devuelve una colección de nodos.
        <script>document.getElementsByTagName("h1")[0].innerHTML="¿Cuáles son los selectores que usamos en JavaScript?";</script>
        
        <p class="parrafo">4. querySelector()</p>
        El método querySelector() selecciona el primer elemento que coincide con la característica que le hemos proporcionado. proporcionado. 
        Este método es muy <strong class="strong">flexible</strong>, ya que puedes usar cualquier tipo de selector CSS, como clases, ID, etiquetas, atributos y combinaciones complejas.
        <script>document.querySelector('.strong').innerHTML="Parrafo4";</script>

        <p>5. querySelectorAll()</p>
        A diferencia de querySelector(), el método querySelectorAll() selecciona todos los elementos que coinciden con el selector CSS. Devuelve una NodeList (no un array), pero es posible recorrerla utilizando forEach().

    <h2>¿Cuáles son las ventajas de usar selectores en JavaScript?</h2>
    
        <ul>
            <li class="punto">Flexibilidad y poder de los selectores CSS</li>
            Una de las grandes ventajas de usar querySelector() y querySelectorAll() es que puedes emplear toda la potencia de los selectores CSS. Esto significa que puedes usar combinaciones de clases, atributos, pseudo-clases, y pseudo-elementos para seleccionar elementos de manera muy precisa.

            <li class="punto">Mejor rendimiento</li>
            En general, el uso de getElementById() y getElementsByClassName() puede ofrecer un mejor rendimiento en situaciones de selección simple, ya que están optimizados para realizar búsquedas rápidas en el DOM.

            <li class="punto">Facilidad de uso</li>
            querySelector() y querySelectorAll() permiten seleccionar elementos con más flexibilidad y facilidad, ya que aceptan cualquier tipo de selector CSS válido.
        </ul>
        <script>
            const collection = document.querySelectorAll('.punto');
            for (let i = 0; i < collection.length; i++) {
            collection[i].setAttribute("class","li");}
            var ejemplo='Variable con var';
            let testeo='Variable con let';
            const constante='ejemplo de constante';
        </script>
        <h2>¿Cómo utilizar los selectores en JavaScript para manipular el DOM?</h2>
        Una vez que has seleccionado un elemento, puedes utilizarlo para manipular el DOM. Algunos ejemplos incluyen cambiar el contenido del elemento, modificar sus atributos o estilos, o agregar o quitar clases.

        <p>Modificar el contenido de un elemento</p>
        const elemento = document.querySelector("#miElemento");
        elemento.textContent = "Nuevo contenido";

        <p>Cambiar los estilos de un elemento</p>
        const elemento = document.querySelector(".miClase");
        elemento.style.color = "red";

        <p>Agregar o eliminar clases</p>
        const elemento = document.querySelector("#miElemento");
        elemento.classList.add("nuevaClase");
        elemento.classList.remove("miClase");

    <h2>Consideraciones y mejores prácticas</h2>
        <p>Evitar el uso excesivo de selectores universales (*) ya que pueden afectar el rendimiento en documentos grandes.</p>
        <p>Utilizar siempre identificadores únicos (id) cuando sea posible, ya que los selectores de ID son más rápidos.</p>
        <p>Preferir el uso de querySelector y querySelectorAll para selecciones más complejas y precisas.</p>
</div>
<div class="conclusion">
    <p>Conclusión<p>
        Los selectores en JavaScript son una herramienta clave para interactuar con el DOM y manipular dinámicamente los elementos de una página web. Al comprender los diferentes tipos de selectores y cómo utilizarlos de manera efectiva, puedes crear aplicaciones más dinámicas y fáciles de mantener.
</div>
</section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>
  <script> const collection = document.getElementsByTagName("h2");
                for (let i = 0; i < collection.length; i++) {
                collection[i].style.backgroundColor = "white";}
    </script>

    
