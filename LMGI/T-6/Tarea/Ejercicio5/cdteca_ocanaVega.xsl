<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html>
        <body>
            <xsl:for-each select="cdteca/cd">
                <xsl:choose>
                    <xsl:when test="cancion[@tiempo>200]">
                        <h1>Album : <xsl:value-of select="titulo"/></h1>
                        <xsl:element name="a">
                            <xsl:attribute name="href"><xsl:value-of select="artista[@wiki]"></xsl:value-of></xsl:attribute>
                         </xsl:element>  
                         <xsl:element name="img">
                             <xsl:attribute name="src"><xsl:value-of select="artista[@foto]"></xsl:value-of></xsl:attribute>
                         </xsl:element> 
                       
                        
                    </xsl:when>
                </xsl:choose>
                
                
            </xsl:for-each>
        </body>
    </html>
</xsl:template>
</xsl:stylesheet>