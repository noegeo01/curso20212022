<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html>
        <head>
            <title>Covocatoria</title>

            <xsl:element name="link">
                <xsl:attribute name="rel">stylesheet</xsl:attribute>
                <xsl:attribute name="type">text/css</xsl:attribute>
                <xsl:attribute name="href">
                    <xsl:value-of select="Calificaciones/parametros/hoja_estilos"/>
                </xsl:attribute> 
            </xsl:element>
        </head>
        <body>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nombre del modulo</th>
                    <th>Curso</th>
                    <th>Convocatoria</th>
                    <th>Nota</th>
                </tr>
               
                <xsl:choose>
                    <xsl:when test="Calificaciones/parametros/orden='nota'">
                        <xsl:for-each select="Calificaciones/calificacion">
                        <xsl:sort select="nota"/>
                            <xsl:choose>

                
                                <xsl:when test="nota&gt;5">
                                    <tr class="aprobado">
                                        <td><xsl:value-of select="nombre"/></td>
                                        <td><xsl:value-of select="apellidos"/></td>
                                        <td><xsl:value-of select="nombre_modulo"/></td>
                                        <td><xsl:value-of select="curso_modulo"/></td>
                                        <td><xsl:value-of select="convocatoria"/></td>
                                        <td><xsl:value-of select="nota"/></td>
                                    </tr>
                                </xsl:when>
                                <xsl:when test="nota&lt;5">
                                    <tr class="suspenso">
                                        <td><xsl:value-of select="nombre"/></td>
                                        <td><xsl:value-of select="apellidos"/></td>
                                        <td><xsl:value-of select="nombre_modulo"/></td>
                                        <td><xsl:value-of select="curso_modulo"/></td>
                                        <td><xsl:value-of select="convocatoria"/></td>
                                        <td><xsl:value-of select="nota"/></td>
                                    </tr>
                             </xsl:when>
                            </xsl:choose>
                        </xsl:for-each>
                    </xsl:when>
                    <xsl:when test="Calificaciones/parametros/orden='modulo'">
                        
                        <xsl:for-each select="Calificaciones/calificacion">
                           <xsl:sort select="nombre_modulo"/>
                            <xsl:choose>

                
                                <xsl:when test="nota&gt;5">
                                    <tr class="aprobado">
                                        <td><xsl:value-of select="nombre"/></td>
                                        <td><xsl:value-of select="apellidos"/></td>
                                        <td><xsl:value-of select="nombre_modulo"/></td>
                                        <td><xsl:value-of select="curso_modulo"/></td>
                                        <td><xsl:value-of select="convocatoria"/></td>
                                        <td><xsl:value-of select="nota"/></td>
                                    </tr>
                                </xsl:when>
                                <xsl:when test="nota&lt;5">
                                    <tr class="suspenso">
                                        <td><xsl:value-of select="nombre"/></td>
                                        <td><xsl:value-of select="apellidos"/></td>
                                        <td><xsl:value-of select="nombre_modulo"/></td>
                                        <td><xsl:value-of select="curso_modulo"/></td>
                                        <td><xsl:value-of select="convocatoria"/></td>
                                        <td><xsl:value-of select="nota"/></td>
                                    </tr>
                             </xsl:when>
                            </xsl:choose>
                        </xsl:for-each>
                    </xsl:when>
                    <xsl:when test="Calificaciones/parametros/orden='apellidos'">
                        
                        <xsl:for-each select="Calificaciones/calificacion">
                        <xsl:sort select="apellidos"/>
                            <xsl:choose>
                                
                
                                <xsl:when test="nota&gt;5">
                                    <tr class="aprobado">
                                        <td><xsl:value-of select="nombre"/></td>
                                        <td><xsl:value-of select="apellidos"/></td>
                                        <td><xsl:value-of select="nombre_modulo"/></td>
                                        <td><xsl:value-of select="curso_modulo"/></td>
                                        <td><xsl:value-of select="convocatoria"/></td>
                                        <td><xsl:value-of select="nota"/></td>
                                    </tr>
                                </xsl:when>
                                <xsl:when test="nota&lt;5">
                                    <tr class="suspenso">
                                        <td><xsl:value-of select="nombre"/></td>
                                        <td><xsl:value-of select="apellidos"/></td>
                                        <td><xsl:value-of select="nombre_modulo"/></td>
                                        <td><xsl:value-of select="curso_modulo"/></td>
                                        <td><xsl:value-of select="convocatoria"/></td>
                                        <td><xsl:value-of select="nota"/></td>
                                    </tr>
                             </xsl:when>
                            </xsl:choose>
                        </xsl:for-each>
                    </xsl:when> 


                </xsl:choose>
                
            </table>
        </body>
    </html>
</xsl:template>
</xsl:stylesheet>