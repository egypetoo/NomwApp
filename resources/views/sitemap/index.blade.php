<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc>{{ url('/about-us') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc>{{ url('/contact-us') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc>{{ url('/blogs') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc>{{ url('/projects') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc>{{ url('/services') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    
    <!--<url>-->
    <!--    <loc>{{ url('/galleryImages') }}</loc>-->
    <!--    <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>-->
    <!--    <changefreq>daily</changefreq>-->
    <!--    <priority>0.6</priority>-->
    <!--</url>-->
</urlset>
