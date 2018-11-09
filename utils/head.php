<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- stylesheets -->
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/skeleton.css">
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/svg.css">
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/font.css">
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/shake.css">
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/RP-W-57ce8262e4b95e89f6000024.css">
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/genericons.css">
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/style.css">
  <link rel="stylesheet" href="<?=$config->urls->templates;?>styles/main.css">

  <!-- by default, the body has a 'no-js' class. This mini script replaces that with 'js'. This allows specific styling for the case where js is disabled  -->
  <script>(function(html){html.className = html.className.replace(/\bno-js\b/, 'js')})(document.documentElement);</script>

  <!-- Basic meta -->
  <title><?=$page->title?></title>
  <meta name="description" content="<?=$page->simple_description?>">
  <link rel="canonical" href="<?=$page->httpUrl;?>">
  <link rel="shortlink" href="<?=$page->httpUrl;?>">

  <!-- opengraph -->
  <meta property="og:locale" content="de_DE">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?=$page->title?>">
  <meta property="og:description" content="<?=$page->simple_description?>">
  <meta property="og:url" content="<?=$page->httpUrl?>">
  <meta property="og:site_name" content="<?=$page->title?>">
  <meta property="og:image" content="<?=$page->image->httpUrl?>">
  
  <!-- twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="<?=$page->simple_description?>">
  <meta name="twitter:title" content="<?=$page->title?>">
  <script type="application/ld+json">
    {
      "@context":"http://schema.org",
      "@type":"WebSite",
      "@id":"#website",
      "url":"<?=$page->httpUrl?>",
      "name":"<?=$page->title?>"
    }
  </script>

  <!-- dns prefetch -->
  <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
  
  <!-- rss feeds -->
  <link rel="alternate" type="application/rss+xml" title="<?=$page->title?> » Feed" href="<?=$page->httpUrl;?>feed/">
  <link rel="alternate" type="application/rss+xml" title="<?=$page->title?> » Kommentar-Feed" href="<?=$page->httpUrl;?>comments/feed/">
  <link rel="alternate" type="application/rss+xml" title="<?=$page->title?> » D5–4 Kommentar-Feed" href="<?=$page->httpUrl;?>beispiel-seite/feed/">

  <script type="text/javascript" src="<?=$config->urls->templates;?>scripts/jquery.js"></script>
  <script type="text/javascript" src="<?=$config->urls->templates;?>scripts/jquery-migrate.min.js"></script>
</head>