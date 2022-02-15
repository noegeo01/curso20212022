<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
        <head>
            <title>Brazil</title>
            <style>
                td{
                    border: 2px black solid;
                }
            </style>
        </head>
        <body>  
                <h1>Datos de la pelicula: Brazil.</h1>
                <table style="border: 2px black solid;">
                    <tr style="background-color:green">
                        <th>Fecha de estreno</th>
                        <th>Duracion</th>
                    </tr>
                    <tr>
                        <td><xsl:value-of select="//@estreno"/></td>
                        <td><xsl:value-of select="//@minutos"/> min</td>
                    </tr>
                </table>
                <!--<p><b>Realizado por:</b> <xsl:value-of select="//creado/creador"/></p>-->
                <p><b>Realizado por:</b> <xsl:value-of select="pelicula/creado/creador"/></p>
        </body>
</html>

</xsl:template>
</xsl:stylesheet>