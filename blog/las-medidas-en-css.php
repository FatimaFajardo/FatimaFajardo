<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>

        <section id="article">
                <h1>Las medidas en CSS</h1>
                    <div class="introduccion">
                        <p>Antes de comenzar a ver aspectos mucho más técnicos de CSS, debemos de aprender a usar las diferentes unidades de medida en CSS</p>
                    </div>
                    <div class="cuerpo">
                            <table>
                                <tr>
                                    <th style="color:blueviolet;">Medidas absolutas</th>
                                    <th style="color: brown">Medidas relativas</th>
                                </tr>
                                <tr>
                                    <td class="cm">Centimetros = cm</td>
                                    <td class="em">em=Multiplicador del tamaño de la fuente</td>
                                </tr>
                                <tr>
                                    <td class="mm">Milimetros= mm</td>
                                    <td class="rem">rem = Multiplicador del tamaño de la fuente del elemento root</td>
                                </tr>
                                <tr>
                                    <td class="pulgadas">Pulgadas (96 px o 2,54cm)</td>
                                    <td class="vh">vh = Porcentaje del alto del viewport</td>
                                </tr>
                                <tr>
                                    <td class="px">Px = Pixeles </td>
                                    <td class="vw">vw = Porcentaje del ancho del viewport</td>
                                </tr>
                                <tr>
                                    <td class="pt">Pt = Puntos</td>
                                    <td class="Porcentaje"> % = Porcentaje del tamaño del elemento padre</td>
                                </tr>
                                <tr>
                                    <td class="pc">Pc = Picas</td>
                                    <td>none</td>
                                </tr>
                            </table>
                    </div>
                    <img src="/imagenes/marketing-digital.jpg" loading="lazy" alt="marketing-digital" width="600" height="400">
                    <div class="conclusion">
                    </div>
        </section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>