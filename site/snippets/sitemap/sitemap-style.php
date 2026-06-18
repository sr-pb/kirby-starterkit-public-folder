<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9">
  <xsl:output method="html" encoding="UTF-8" indent="yes"/>
  <xsl:template match="/">
    <html lang="en">
      <head>
        <title>Sitemap</title>
        <style>
          body { font-family: monospace; background: white; color: #333; padding: 20px }
          h1 { font-size: 1.5rem; margin-bottom: 1rem; font-weight: normal }
          table { width: 100%; border-collapse: collapse; }
          th, td { padding: 10px 0; border-bottom: 1px solid #0000001f; text-align: left; }
          th { background: white; }
        </style>
      </head>
      <body>
        <h1><?= site()->title() ?></h1>
        <table>
          <tr>
            <th>URL</th>
            <th>Last Modified</th>
          </tr>
          <xsl:for-each select="//sitemap:url | //url">
            <tr>
              <td><a href="{sitemap:loc | loc}"><xsl:value-of select="sitemap:loc | loc"/></a></td>
              <td><xsl:value-of select="sitemap:lastmod | lastmod"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
