<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
        <body>
                <table>
                    <tr style="background-color:tomato">
                        <th>Nombre</th>
                        <th>Entendador</th>
                        <th>Presupuesto</th>
                    </tr>
                    <xsl:for-each select="liga/equipo">
                        <xsl:if test="position()=2"> 
                        <tr style="background-color:grey;">
                            <td><xsl:value-of select="nombre"/></td>
                            <td><xsl:value-of select="entrenador"/></td> 
                            <td><xsl:value-of select="presupuesto"/></td> 
                        </tr>
                        </xsl:if>
                        <xsl:if test="position()=4"> 
                        <tr >
                            <td><xsl:value-of select="nombre"/></td>
                            <td><xsl:value-of select="entrenador"/></td> 
                            <td><xsl:value-of select="presupuesto"/></td> 
                        </tr>
                        </xsl:if>
                       
                    </xsl:for-each>
                     
                </table>
        </body>
</html>

</xsl:template>
</xsl:stylesheet>