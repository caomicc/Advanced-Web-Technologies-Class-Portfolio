<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


    <xsl:template match="/">
        <html>
            <head>
                <title>Student Data</title>
            </head>
            <body>
            <h1>XML Table</h1>
                <table  class="table">
                    <tr>
                        <th>Name</th>
                        <th>SSN</th>
                        <th>DOB</th>
                        <th>Sex</th>
                        <th>Address</th>
                        <th>Class</th>
                    </tr>
                    <xsl:apply-templates /> 
                </table>
                
            </body>
        </html>
    </xsl:template>

    <xsl:template match="student">
        <tr>
            <td>
                <xsl:apply-templates select="name" />
            </td>
            <td>
                <xsl:value-of select="ssn" />
            </td>
            <td>
                <xsl:value-of select="dob" />
            </td>
            <td style="text-align: center;">
                <xsl:if test="sex = 'Female'">
                    <span style="color: magenta;">&#9792;</span>
                </xsl:if>
                <xsl:if test="sex = 'Male'">
                    <span style="color: blue;">&#9794;</span>
                </xsl:if>
            </td>
            <td>
                <xsl:value-of select="address" />
            </td>
            <td style="text-align: center;">
                <xsl:choose>
                    <xsl:when test="class = 'SN'">
                        <span style="color: red;"><xsl:value-of select="class" /></span>
                    </xsl:when>
                    <xsl:otherwise>
                        <xsl:value-of select="class" />
                    </xsl:otherwise>
                </xsl:choose>
            </td>
        </tr>
    </xsl:template>
    <xsl:template match="name">
        <xsl:value-of select="first" />
        <xsl:text> </xsl:text>
        <xsl:value-of select="last" />
    </xsl:template>
</xsl:stylesheet>