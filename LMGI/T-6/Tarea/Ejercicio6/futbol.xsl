<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
    <html lang="es">
        <head>
            <title>clasificacion</title>
        <link rel="stylesheet" href="estilo.css"/>
        </head>
    <body>
        <table>
            <tr >
                <th>Nombre</th>
                <th>gol afavor</th>
                <th>gol en contra</th>
                <th>puntos</th>
            </tr>
            <xsl:for-each select="equipos/equipo">  
                <xsl:sort select="puntos" order="descending"/>
                <xsl:choose>
                    <xsl:when test="position()&lt;5">
                        <!--Los cuatro-->
                        <tr class="verde" >
                            <td><xsl:value-of select="nombre"/></td>
                            <td><xsl:value-of select="golesafavor"/></td>
                            <td><xsl:value-of select="golescontra"/></td>
                            <td><xsl:value-of select="puntos"/></td>
                        </tr>
                    </xsl:when>
                </xsl:choose>
                    <xsl:if test="position()&gt;4 and position()&lt;12 ">
                        <tr class="blanco">
                            <td><xsl:value-of select="nombre"/></td>
                            <td><xsl:value-of select="golesafavor"/></td>
                            <td><xsl:value-of select="golescontra"/></td>
                            <td><xsl:value-of select="puntos"/></td>
                        </tr>
                    </xsl:if>
                <xsl:choose>
                    <xsl:when test="position()&gt;11">
                        <tr class="rojo" >
                            <td><xsl:value-of select="nombre"/></td>
                            <td><xsl:value-of select="golesafavor"/></td>
                            <td><xsl:value-of select="golescontra"/></td>
                            <td><xsl:value-of select="puntos"/></td>
                        </tr>
                    </xsl:when>
                </xsl:choose>
            </xsl:for-each>
        </table>
        
    </body>
    </html>
    </xsl:template>
</xsl:stylesheet>