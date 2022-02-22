<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html>
        <body>
            <xsl:for-each select="cdteca/cd">
                
                    
                        <h1>Album : <xsl:value-of select="titulo"/></h1>
                        
                        <a><xsl:for-each select="artista">
                            <xsl:attribute name="href">
                                <xsl:value-of select="@wiki"/>
                            </xsl:attribute>
                            </xsl:for-each>
                            <xsl:value-of select="artista"/>
                        </a>
                        <img style="widht:100px;height:100px">
                            <xsl:for-each select="artista">
                            <xsl:attribute name="src">
                                <xsl:value-of select="@foto"/>
                            </xsl:attribute>
                            </xsl:for-each>
                        </img>
                    
                    <ul>
                        <xsl:for-each select="cancion">
                        <xsl:sort select="@tiempo" order="descending"/>
                        <xsl:if test="@tiempo>200">
                            <li>
                        <xsl:value-of select="."/> - <xsl:value-of select="round(@tiempo)"/>m</li> 
                        </xsl:if>
                        </xsl:for-each>
                    </ul>
                   
                    

                   
                
                
            </xsl:for-each>
        </body>
    </html>
</xsl:template>
</xsl:stylesheet>