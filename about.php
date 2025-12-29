<!--?php
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'includes/helpers.php';

// Definiere Marken-Konstanten
$brand_name = 'Alpen Wanderlust';
$primary_domain = 'alpen-wanderlust.de';
$support_email = 'info@domain.com';
$business_address = 'Bergstraße 42, 80801 München, Deutschland';
$business_phone = '+49 89 123456789';

// Seitenvariablen für SEO
$pageTitle = 'Über uns - ' . $brand_name;
$pageDescription = 'Erfahren Sie mehr über ' . $brand_name . ' - Ihr Experte für Bergtouren und Wanderabenteuer in den Alpen. Seit über 15 Jahren führen wir Sie sicher zu den schönsten Gipfeln.';
$pageKeywords = 'Über uns, Bergführer, Alpentouren, Wanderführer, München, Erfahrung, Team';
$pageAuthor = $brand_name;

include 'includes/header.php';
?-->
<!-- Breadcrumb Navigation -->
<html>
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  <header class="navbar navbar-expand-md sticky-top bg-white border-bottom" role="banner">
   <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/" aria-label="&lt;?php echo BRAND_NAME; ?&gt; Homepage"> 
     <svg class="ratio" width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M14 6l-3.75 5 2.85 3.8-1.6 1.2C9.81 13.75 7 10 7 10l-6 8h22l-9-12z" fill="currentColor" />
     </svg> 
     <!--?php echo BRAND_NAME; ?--> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Navigationsmenü umschalten"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <nav class="navbar-nav ms-auto" role="navigation">
      <a class="nav-link" href="/" aria-current="page">Start</a> <a class="nav-link" href="about.php">Über Uns</a> <a class="nav-link" href="services.php">Touren</a> <a class="nav-link" href="privacy.php">Datenschutz</a> <a class="nav-link" href="terms.php">AGB</a>
     </nav>
     <a href="#contact" class="btn btn-primary ms-3">Jetzt Buchen</a>
    </div>
   </div>
  </header>
  <nav aria-label="breadcrumb" class="py-3 bg-light">
   <div class="container">
    <ol class="breadcrumb mb-0">
     <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Startseite</a></li>
     <li class="breadcrumb-item active" aria-current="page">Über uns</li>
    </ol>
   </div>
  </nav>
  <!-- Hero Section -->
  <section class="py-5 bg-gradient-primary text-white position-relative overflow-hidden">
   <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); opacity: 0.9;"></div>
   <div class="container position-relative">
    <div class="row align-items-center">
     <div class="col-lg-6" data-aos="fade-right">
      <h1 class="display-4 fw-bold mb-3">Über <!--?php echo htmlspecialchars($brand_name); ?--></h1>
      <p class="lead mb-4">Seit über 15 Jahren führen wir passionierte Bergsteiger und Naturliebhaber zu den spektakulärsten Gipfeln der Alpen. Unsere Mission ist es, unvergessliche Bergerlebnisse zu schaffen und dabei höchste Sicherheitsstandards zu gewährleisten.</p>
      <a href="services.php" class="btn btn-light btn-lg shadow" role="button"> <i class="fas fa-mountain"></i> Unsere Touren entdecken </a>
     </div>
     <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
      <div class="ratio ratio-4x3">
       <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Bergpanorama der Alpen" class="img-fluid rounded-3 shadow-lg" style="object-fit: cover;" loading="lazy">
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Unsere Geschichte -->
  <section class="py-5">
   <div class="container">
    <div class="row">
     <div class="col-lg-8 mx-auto">
      <div class="text-center mb-5" data-aos="fade-up">
       <h2 class="display-5 fw-bold mb-3">Unsere Geschichte</h2>
       <p class="text-muted lead">Von der Leidenschaft zum Beruf - Eine Reise durch 15 Jahre Bergerfahrung</p>
      </div>
      <div class="timeline" data-aos="fade-up">
       <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
         <div class="row align-items-center">
          <div class="col-md-3 text-center text-md-start">
           <span class="badge bg-primary fs-6 px-3 py-2">2009</span>
          </div>
          <div class="col-md-9">
           <h4 class="fw-bold">Die Anfänge</h4>
           <p class="text-muted mb-0">Gründung von <!--?php echo htmlspecialchars($brand_name); ?--> durch unseren Geschäftsführer Michael Bergmann. Was als persönliche Leidenschaft für die Berge begann, wurde zu einer professionellen Berufung.</p>
          </div>
         </div>
        </div>
       </div>
       <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
         <div class="row align-items-center">
          <div class="col-md-3 text-center text-md-start">
           <span class="badge bg-success fs-6 px-3 py-2">2015</span>
          </div>
          <div class="col-md-9">
           <h4 class="fw-bold">Expansion &amp; Wachstum</h4>
           <p class="text-muted mb-0">Erweiterung unseres Teams um zertifizierte Bergführer und Aufbau eines umfassenden Tourangebots. Über 1000 zufriedene Gäste haben bereits unsere Touren erlebt.</p>
          </div>
         </div>
        </div>
       </div>
       <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
         <div class="row align-items-center">
          <div class="col-md-3 text-center text-md-start">
           <span class="badge bg-warning fs-6 px-3 py-2">Heute</span>
          </div>
          <div class="col-md-9">
           <h4 class="fw-bold">Führend in den Alpen</h4>
           <p class="text-muted mb-0">Als einer der renommiertesten Anbieter für Bergtouren in den deutschen Alpen blicken wir stolz auf über 5000 erfolgreich durchgeführte Touren zurück.</p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Unsere Werte -->
  <section class="py-5 bg-light">
   <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
     <h2 class="display-5 fw-bold mb-3">Unsere Kernwerte</h2>
     <p class="text-muted lead">Diese Prinzipien leiten uns bei jeder Tour und jedem Abenteuer</p>
    </div>
    <div class="row g-4">
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
         <i class="fas fa-shield-alt fs-4"></i>
        </div>
        <h4 class="fw-bold mb-3">Sicherheit</h4>
        <p class="text-muted">Höchste Sicherheitsstandards und professionelle Ausrüstung stehen bei uns an erster Stelle. Jede Tour wird sorgfältig geplant und durchgeführt.</p>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
         <i class="fas fa-heart fs-4"></i>
        </div>
        <h4 class="fw-bold mb-3">Leidenschaft</h4>
        <p class="text-muted">Unsere Liebe zu den Bergen und zur Natur spiegelt sich in jeder Tour wider. Diese Begeisterung möchten wir mit unseren Gästen teilen.</p>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
         <i class="fas fa-users fs-4"></i>
        </div>
        <h4 class="fw-bold mb-3">Gemeinschaft</h4>
        <p class="text-muted">Wir schaffen unvergessliche Erlebnisse und fördern den Zusammenhalt zwischen Bergfreunden aus aller Welt.</p>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
         <i class="fas fa-leaf fs-4"></i>
        </div>
        <h4 class="fw-bold mb-3">Nachhaltigkeit</h4>
        <p class="text-muted">Respekt vor der Natur und nachhaltiger Bergtourismus sind zentrale Bestandteile unserer Unternehmensphilosophie.</p>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="bg-danger text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
         <i class="fas fa-award fs-4"></i>
        </div>
        <h4 class="fw-bold mb-3">Qualität</h4>
        <p class="text-muted">Höchste Qualitätsansprüche in der Tourplanung, -durchführung und im Kundenservice zeichnen uns aus.</p>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="bg-dark text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
         <i class="fas fa-compass fs-4"></i>
        </div>
        <h4 class="fw-bold mb-3">Expertise</h4>
        <p class="text-muted">15 Jahre Erfahrung, zertifizierte Bergführer und fundierte Ortskenntnis garantieren unvergessliche und sichere Bergerlebnisse.</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Unser Team -->
  <section class="py-5">
   <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
     <h2 class="display-5 fw-bold mb-3">Unser Expertenteam</h2>
     <p class="text-muted lead">Lernen Sie die Menschen kennen, die Ihre Bergabenteuer zu unvergesslichen Erlebnissen machen</p>
    </div>
    <div class="row g-4">
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="ratio ratio-1x1 mb-3">
         <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80" alt="Michael Bergmann - Geschäftsführer" class="img-fluid rounded-circle" style="object-fit: cover;" loading="lazy">
        </div>
        <h4 class="fw-bold mb-2">Michael Bergmann</h4>
        <p class="text-primary mb-3">Geschäftsführer &amp; Bergführer</p>
        <p class="text-muted small">Staatlich geprüfter Bergführer mit über 20 Jahren Erfahrung in den Alpen. Spezialist für Hochtourenführung und Klettersteige.</p>
        <div class="mt-auto">
         <span class="badge bg-light text-dark me-1">Hochtouren</span> <span class="badge bg-light text-dark me-1">Klettersteige</span> <span class="badge bg-light text-dark">Führung</span>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="ratio ratio-1x1 mb-3">
         <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80" alt="Sarah Müller - Wanderführerin" class="img-fluid rounded-circle" style="object-fit: cover;" loading="lazy">
        </div>
        <h4 class="fw-bold mb-2">Sarah Müller</h4>
        <p class="text-primary mb-3">Wanderführerin &amp; Naturpädagogin</p>
        <p class="text-muted small">Zertifizierte Wanderführerin mit Schwerpunkt auf Flora und Fauna der Alpen. Begeisterte Fotografin und Naturschützerin.</p>
        <div class="mt-auto">
         <span class="badge bg-light text-dark me-1">Wandertouren</span> <span class="badge bg-light text-dark me-1">Naturkunde</span> <span class="badge bg-light text-dark">Fotografie</span>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="ratio ratio-1x1 mb-3">
         <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80" alt="Thomas Schneider - Bergführer" class="img-fluid rounded-circle" style="object-fit: cover;" loading="lazy">
        </div>
        <h4 class="fw-bold mb-2">Thomas Schneider</h4>
        <p class="text-primary mb-3">Bergführer &amp; Rettungsspezialist</p>
        <p class="text-muted small">Erfahrener Bergführer und Mitglied der Bergwacht. Spezialist für anspruchsvolle Klettertouren und Winterbergsteigen.</p>
        <div class="mt-auto">
         <span class="badge bg-light text-dark me-1">Klettern</span> <span class="badge bg-light text-dark me-1">Wintertouren</span> <span class="badge bg-light text-dark">Rettung</span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Unternehmenskultur -->
  <section class="py-5 bg-gradient-light">
   <div class="container">
    <div class="row align-items-center">
     <div class="col-lg-6" data-aos="fade-right">
      <div class="ratio ratio-16x9">
       <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Teambuilding in den Bergen" class="img-fluid rounded-3 shadow-lg" style="object-fit: cover;" loading="lazy">
      </div>
     </div>
     <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
      <h2 class="display-5 fw-bold mb-3">Unsere Unternehmenskultur</h2>
      <p class="lead text-muted mb-4">Bei <!--?php echo htmlspecialchars($brand_name); ?--> pflegen wir eine Kultur der Offenheit, des Respekts und der kontinuierlichen Weiterentwicklung.</p>
      <div class="row g-3">
       <div class="col-12">
        <div class="d-flex align-items-center">
         <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">
          <i class="fas fa-handshake"></i>
         </div>
         <div>
          <h5 class="fw-bold mb-1">Teamgeist</h5>
          <p class="text-muted mb-0 small">Zusammenhalt und gegenseitige Unterstützung prägen unser Arbeitsklima</p>
         </div>
        </div>
       </div>
       <div class="col-12">
        <div class="d-flex align-items-center">
         <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">
          <i class="fas fa-graduation-cap"></i>
         </div>
         <div>
          <h5 class="fw-bold mb-1">Weiterbildung</h5>
          <p class="text-muted mb-0 small">Regelmäßige Schulungen und Zertifizierungen halten uns auf dem neuesten Stand</p>
         </div>
        </div>
       </div>
       <div class="col-12">
        <div class="d-flex align-items-center">
         <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">
          <i class="fas fa-balance-scale"></i>
         </div>
         <div>
          <h5 class="fw-bold mb-1">Work-Life-Balance</h5>
          <p class="text-muted mb-0 small">Flexible Arbeitszeiten und Respekt vor der Freizeit unserer Mitarbeiter</p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Zahlen & Fakten -->
  <section class="py-5 bg-dark text-white">
   <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
     <h2 class="display-5 fw-bold mb-3">Zahlen &amp; Fakten</h2>
     <p class="text-white-50 lead">Unsere Erfolge in Zahlen</p>
    </div>
    <div class="row g-4 text-center">
     <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="h-100">
       <div class="display-4 fw-bold text-primary mb-2">15+</div>
       <h4 class="fw-bold mb-2">Jahre Erfahrung</h4>
       <p class="text-white-50 mb-0">Über anderthalb Jahrzehnte Expertise in der Bergführung</p>
      </div>
     </div>
     <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="h-100">
       <div class="display-4 fw-bold text-success mb-2">5000+</div>
       <h4 class="fw-bold mb-2">Erfolgreiche Touren</h4>
       <p class="text-white-50 mb-0">Sicher durchgeführte Bergabenteuer mit zufriedenen Gästen</p>
      </div>
     </div>
     <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="h-100">
       <div class="display-4 fw-bold text-warning mb-2">98%</div>
       <h4 class="fw-bold mb-2">Kundenzufriedenheit</h4>
       <p class="text-white-50 mb-0">Außergewöhnlich hohe Bewertungen unserer Gäste</p>
      </div>
     </div>
     <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="h-100">
       <div class="display-4 fw-bold text-info mb-2">12</div>
       <h4 class="fw-bold mb-2">Zertifizierte Guides</h4>
       <p class="text-white-50 mb-0">Professionelle Bergführer mit offiziellen Qualifikationen</p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Kontakt & Standort -->
  <section class="py-5">
   <div class="container">
    <div class="row g-4 align-items-center">
     <div class="col-lg-6" data-aos="fade-right">
      <h2 class="display-5 fw-bold mb-3">Besuchen Sie uns</h2>
      <p class="lead text-muted mb-4">Unser Büro befindet sich im Herzen Münchens, nur wenige Minuten von den Alpen entfernt.</p>
      <div class="row g-3">
       <div class="col-12">
        <div class="d-flex align-items-start">
         <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">
          <i class="fas fa-map-marker-alt"></i>
         </div>
         <div>
          <h5 class="fw-bold mb-1">Adresse</h5>
          <p class="text-muted mb-0"><!--?php echo htmlspecialchars($business_address); ?--></p>
         </div>
        </div>
       </div>
       <div class="col-12">
        <div class="d-flex align-items-start">
         <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">
          <i class="fas fa-phone"></i>
         </div>
         <div>
          <h5 class="fw-bold mb-1">Telefon</h5>
          <p class="text-muted mb-0"><a href="tel:&lt;?php echo htmlspecialchars(str_replace(' ', '', $business_phone)); ?&gt;" class="text-decoration-none text-muted"><!--?php echo htmlspecialchars($business_phone); ?--></a></p>
         </div>
        </div>
       </div>
       <div class="col-12">
        <div class="d-flex align-items-start">
         <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">
          <i class="fas fa-envelope"></i>
         </div>
         <div>
          <h5 class="fw-bold mb-1">E-Mail</h5>
          <p class="text-muted mb-0"><a href="mailto:&lt;?php echo htmlspecialchars($support_email); ?&gt;" class="text-decoration-none text-muted"><!--?php echo htmlspecialchars($support_email); ?--></a></p>
         </div>
        </div>
       </div>
      </div>
      <div class="mt-4">
       <a href="services.php" class="btn btn-primary me-2" role="button"> <i class="fas fa-mountain"></i> Unsere Touren </a> <a href="#" class="btn btn-outline-primary" role="button"> <i class="fas fa-phone"></i> Jetzt anrufen </a>
      </div>
     </div>
     <div class="col-lg-6" data-aos="fade-left">
      <div class="ratio ratio-16x9">
       <img src="https://images.unsplash.com/photo-1555880722-4ea7accd8b2f?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Unser Büro in München" class="img-fluid rounded-3 shadow-lg" style="object-fit: cover;" loading="lazy">
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Call to Action -->
  <section class="py-5 bg-primary text-white">
   <div class="container text-center">
    <div class="row justify-content-center">
     <div class="col-lg-8" data-aos="fade-up">
      <h2 class="display-5 fw-bold mb-3">Bereit für Ihr nächstes Abenteuer?</h2>
      <p class="lead mb-4">Lassen Sie uns gemeinsam unvergessliche Momente in den Bergen schaffen. Kontaktieren Sie uns noch heute für eine persönliche Beratung.</p>
      <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
       <a href="#" class="btn btn-light btn-lg shadow"> <i class="fas fa-phone me-2"></i> <!--?php echo htmlspecialchars($business_phone); ?--> </a> <a href="mailto:&lt;?php echo htmlspecialchars($support_email); ?&gt;" class="btn btn-outline-light btn-lg"> <i class="fas fa-envelope me-2"></i> E-Mail senden </a>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!--?php include 'includes/footer.php'; ?-->
  <!-- JSON-LD Strukturierte Daten -->
  <footer class="bg-dark text-white py-4 py-md-5" role="contentinfo">
   <div class="container">
    <div class="row g-4">
     <div class="col-lg-4">
      <h5 class="fw-bold mb-3"><!--?php echo BRAND_NAME; ?--></h5>
      <p class="text-white-50 mb-3">Ihr vertrauensvoller Partner für unvergessliche Alpenabenteuer in Deutschland. Seit über 20 Jahren führen wir Bergliebhaber sicher zu den schönsten Gipfeln.</p>
      <div class="d-flex gap-2">
       <a href="#" class="btn btn-outline-light btn-sm" aria-label="Facebook" title="Facebook"> 
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
         <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
        </svg> 
       </a> <a href="#" class="btn btn-outline-light btn-sm" aria-label="Instagram" title="Instagram"> 
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
         <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg> 
       </a> <a href="#" class="btn btn-outline-light btn-sm" aria-label="YouTube" title="YouTube"> 
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
         <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
        </svg> 
       </a>
      </div>
     </div>
     <div class="col-lg-2 col-md-3">
      <h6 class="fw-semibold mb-3">Navigation</h6>
      <ul class="list-unstyled">
       <li class="mb-2"><a href="/" class="text-white-50 text-decoration-none">Start</a></li>
       <li class="mb-2"><a href="about.php" class="text-white-50 text-decoration-none">Über Uns</a></li>
       <li class="mb-2"><a href="services.php" class="text-white-50 text-decoration-none">Touren</a></li>
       <li class="mb-2"><a href="#contact" class="text-white-50 text-decoration-none">Kontakt</a></li>
      </ul>
     </div>
     <div class="col-lg-3 col-md-4">
      <h6 class="fw-semibold mb-3">Rechtliches</h6>
      <ul class="list-unstyled">
       <li class="mb-2"><a href="privacy.php" class="text-white-50 text-decoration-none">Datenschutzerklärung</a></li>
       <li class="mb-2"><a href="terms.php" class="text-white-50 text-decoration-none">Allgemeine Geschäftsbedingungen</a></li>
       <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Impressum</a></li>
      </ul>
     </div>
     <div class="col-lg-3 col-md-5">
      <h6 class="fw-semibold mb-3">Kontakt</h6>
      <address class="text-white-50 mb-0">
       <div class="mb-2">
        <!--?php echo htmlspecialchars(BUSINESS_ADDRESS); ?-->
       </div>
       <div class="mb-2">
        Tel: <a href="tel:&lt;?php echo str_replace(' ', '', BUSINESS_PHONE); ?&gt;" class="text-white-50 text-decoration-none"><!--?php echo htmlspecialchars(BUSINESS_PHONE); ?--></a>
       </div>
       <div>
        E-Mail: <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-white-50 text-decoration-none"><!--?php echo htmlspecialchars(SUPPORT_EMAIL); ?--></a>
       </div>
      </address>
     </div>
    </div>
    <hr class="my-4 border-secondary">
    <div class="row align-items-center">
     <div class="col-md-6">
      <p class="text-white-50 mb-0">© <!--?php echo date('Y'); ?--> <!--?php echo BRAND_NAME; ?-->. Alle Rechte vorbehalten.</p>
     </div>
     <div class="col-md-6 text-md-end mt-2 mt-md-0">
      <small class="text-white-50">Made with ❤️ in Bayern</small>
     </div>
    </div>
   </div>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>