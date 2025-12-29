<!--?php
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'includes/helpers.php';

// Brand constants
define('BRAND_NAME', 'ReiseWelt Premium');
define('PRIMARY_DOMAIN', 'reisewelt-premium.de');
define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN);
define('BRAND_ADDRESS', 'Unter den Linden 15, 10117 Berlin, Deutschland');
define('BRAND_PHONE', '+49 30 123 456 789');

// Set page variables
$pageTitle = 'Reisedienstleistungen - ' . BRAND_NAME;
$pageDescription = 'Entdecken Sie unsere umfassenden Tourismusdienstleistungen: maßgeschneiderte Reisepläne, exklusive Touren, Luxusunterkünfte und unvergessliche Erlebnisse in Deutschland.';
$pageKeywords = 'Tourismusdienstleistungen, Reisepläne, exklusive Touren, Luxusreisen, Deutschland Tourismus, maßgeschneiderte Reisen';

include INCLUDES_PATH . 'header.php';
?-->
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
  <div class="container py-4 py-md-5">
   <!-- Page Header -->
   <div class="row mb-5" style="scroll-margin-top: var(--nav-h);" id="services-header">
    <div class="col-12">
     <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Startseite</a></li>
       <li class="breadcrumb-item active" aria-current="page">Dienstleistungen</li>
      </ol>
     </nav>
    </div>
    <div class="col-lg-8 mx-auto text-center">
     <h1 class="display-4 fw-bold mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Unsere Premium-Dienstleistungen</h1>
     <p class="lead text-muted mb-4">Erleben Sie Deutschland mit unseren maßgeschneiderten Tourismusdienstleistungen – von exklusiven Stadttouren bis hin zu unvergesslichen kulturellen Erlebnissen.</p>
    </div>
   </div>
   <!-- Services Grid -->
   <div class="row g-4 mb-5">
    <!-- Service 1: Custom Travel Plans -->
    <div class="col-lg-4 col-md-6">
     <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #f8f6f0 0%, #e6e1d8 100%); border-radius: 12px; overflow: hidden;">
      <div class="card-body p-4 d-flex flex-column">
       <div class="ratio ratio-1x1 mb-3" style="max-width: 80px;">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary">
         <path d="M9 11H15M9 15H15M11 19L12 17L13 19M5 21C3.89 21 3 20.1 3 19V5C3 3.89 3.89 3 5 3H19C20.1 3 21 3.89 21 5V19C21 20.1 20.1 21 19 21H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
       </div>
       <h3 class="h4 mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Maßgeschneiderte Reisepläne</h3>
       <p class="text-muted flex-grow-1">Individuelle Reiserouten, die perfekt auf Ihre Wünsche und Interessen abgestimmt sind. Von kulturellen Highlights bis zu versteckten Geheimtipps – wir planen Ihre perfekte Deutschland-Reise.</p>
       <div class="mt-auto">
        <a href="#contact-form" class="btn btn-outline-primary btn-sm" style="border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Jetzt anfragen</a>
       </div>
      </div>
     </div>
    </div>
    <!-- Service 2: Exclusive Tours -->
    <div class="col-lg-4 col-md-6">
     <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #f2f0f8 0%, #d8d4e8 100%); border-radius: 12px; overflow: hidden;">
      <div class="card-body p-4 d-flex flex-column">
       <div class="ratio ratio-1x1 mb-3" style="max-width: 80px;">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary">
         <path d="M8 6.00067L21 12L8 18L8 13.5L16 12L8 10.5L8 6.00067Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
       </div>
       <h3 class="h4 mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Exklusive Stadttouren</h3>
       <p class="text-muted flex-grow-1">Private Führungen durch Deutschlands faszinierendste Städte mit erfahrenen lokalen Guides. Entdecken Sie Berlin, München, Hamburg und Dresden aus einer ganz neuen Perspektive.</p>
       <div class="mt-auto">
        <a href="#contact-form" class="btn btn-outline-primary btn-sm" style="border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Tour buchen</a>
       </div>
      </div>
     </div>
    </div>
    <!-- Service 3: Luxury Accommodations -->
    <div class="col-lg-4 col-md-6">
     <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #f8f6f0 0%, #e6e1d8 100%); border-radius: 12px; overflow: hidden;">
      <div class="card-body p-4 d-flex flex-column">
       <div class="ratio ratio-1x1 mb-3" style="max-width: 80px;">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary">
         <path d="M3 21V12L12 3L21 12V21H16V16H8V21H3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
       </div>
       <h3 class="h4 mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Luxusunterkünfte</h3>
       <p class="text-muted flex-grow-1">Handverlesene Premium-Hotels, Schlösser und Boutique-Unterkünfte für den anspruchsvollen Reisenden. Jede Unterkunft wird sorgfältig nach Qualität und Charakter ausgewählt.</p>
       <div class="mt-auto">
        <a href="#contact-form" class="btn btn-outline-primary btn-sm" style="border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Verfügbarkeit prüfen</a>
       </div>
      </div>
     </div>
    </div>
    <!-- Service 4: Cultural Experiences -->
    <div class="col-lg-4 col-md-6">
     <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #f2f0f8 0%, #d8d4e8 100%); border-radius: 12px; overflow: hidden;">
      <div class="card-body p-4 d-flex flex-column">
       <div class="ratio ratio-1x1 mb-3" style="max-width: 80px;">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary">
         <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
       </div>
       <h3 class="h4 mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Kulturelle Erlebnisse</h3>
       <p class="text-muted flex-grow-1">Einzigartige kulturelle Erfahrungen: Privatführungen in Museen, exklusive Konzerte, Begegnungen mit lokalen Künstlern und Handwerkern. Tauchen Sie tief in die deutsche Kultur ein.</p>
       <div class="mt-auto">
        <a href="#contact-form" class="btn btn-outline-primary btn-sm" style="border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Erlebnis buchen</a>
       </div>
      </div>
     </div>
    </div>
    <!-- Service 5: Culinary Tours -->
    <div class="col-lg-4 col-md-6">
     <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #f8f6f0 0%, #e6e1d8 100%); border-radius: 12px; overflow: hidden;">
      <div class="card-body p-4 d-flex flex-column">
       <div class="ratio ratio-1x1 mb-3" style="max-width: 80px;">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary">
         <path d="M6 6H18L19.5 19H4.5L6 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> <path d="M6 6C6 4.4 7.4 3 9 3H15C16.6 3 18 4.4 18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
       </div>
       <h3 class="h4 mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Kulinarische Entdeckungsreisen</h3>
       <p class="text-muted flex-grow-1">Gastronomische Touren durch Deutschlands Genussregionen: von traditionellen Brauhäusern bis zu Sternerestaurants. Entdecken Sie die Vielfalt der deutschen Küche mit unseren Experten.</p>
       <div class="mt-auto">
        <a href="#contact-form" class="btn btn-outline-primary btn-sm" style="border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Geschmack erleben</a>
       </div>
      </div>
     </div>
    </div>
    <!-- Service 6: Transportation -->
    <div class="col-lg-4 col-md-6">
     <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #f2f0f8 0%, #d8d4e8 100%); border-radius: 12px; overflow: hidden;">
      <div class="card-body p-4 d-flex flex-column">
       <div class="ratio ratio-1x1 mb-3" style="max-width: 80px;">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary">
         <path d="M7 17C6.45 17 6 16.55 6 16V8C6 7.45 6.45 7 7 7H17C17.55 7 18 7.45 18 8V16C18 16.55 17.55 17 17 17H7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> <circle cx="9" cy="19" r="2" stroke="currentColor" stroke-width="2" /> <circle cx="15" cy="19" r="2" stroke="currentColor" stroke-width="2" /> <path d="M7 7L5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" /> <path d="M19 5L17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
       </div>
       <h3 class="h4 mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Premium-Transport</h3>
       <p class="text-muted flex-grow-1">Komfortabler und stilvoller Transport mit unserer Luxusflotte: von eleganten Limousinen bis zu geräumigen Premium-Vans. Reisen Sie bequem und sicher zwischen allen Destinationen.</p>
       <div class="mt-auto">
        <a href="#contact-form" class="btn btn-outline-primary btn-sm" style="border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Transport buchen</a>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- Team Expertise Section -->
   <section class="py-4 py-md-5" style="background: linear-gradient(135deg, #f8f6f0 0%, #f2f0f8 100%); border-radius: 16px; margin: 2rem 0;">
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-4">
       <h2 class="display-5 fw-bold mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Unser Expertenteam</h2>
       <p class="lead text-muted">Vertrauen Sie auf die Erfahrung und Leidenschaft unseres Teams von Reiseexperten</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-lg-4 col-md-6 text-center">
       <div class="mb-3">
        <div class="ratio ratio-1x1 mx-auto" style="max-width: 120px; border-radius: 50%; overflow: hidden; background: linear-gradient(135deg, #e6e1d8, #d8d4e8);">
         <div class="d-flex align-items-center justify-content-center">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary" style="width: 60px; height: 60px;">
           <path d="M20 21V19C20 17.9 19.1 17 18 17H6C4.9 17 4 17.9 4 19V21M12 13C14.21 13 16 11.21 16 9C16 6.79 14.21 5 12 5C9.79 5 8 6.79 8 9C8 11.21 9.79 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
         </div>
        </div>
       </div>
       <h4 style="font-family: 'Courier New', monospace; color: #2c1810;">Dr. Anna Müller</h4>
       <p class="text-primary mb-2">Leitende Reiseberaterin</p>
       <p class="text-muted small">15 Jahre Erfahrung im Luxustourismus, spezialisiert auf kulturelle und historische Reisen durch Deutschland.</p>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
       <div class="mb-3">
        <div class="ratio ratio-1x1 mx-auto" style="max-width: 120px; border-radius: 50%; overflow: hidden; background: linear-gradient(135deg, #d8d4e8, #e6e1d8);">
         <div class="d-flex align-items-center justify-content-center">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary" style="width: 60px; height: 60px;">
           <path d="M20 21V19C20 17.9 19.1 17 18 17H6C4.9 17 4 17.9 4 19V21M12 13C14.21 13 16 11.21 16 9C16 6.79 14.21 5 12 5C9.79 5 8 6.79 8 9C8 11.21 9.79 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
         </div>
        </div>
       </div>
       <h4 style="font-family: 'Courier New', monospace; color: #2c1810;">Thomas Weber</h4>
       <p class="text-primary mb-2">Kulinarischer Experte</p>
       <p class="text-muted small">Sommelier und Gastronom mit umfassendem Wissen über deutsche Weine und regionale Küche.</p>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
       <div class="mb-3">
        <div class="ratio ratio-1x1 mx-auto" style="max-width: 120px; border-radius: 50%; overflow: hidden; background: linear-gradient(135deg, #e6e1d8, #d8d4e8);">
         <div class="d-flex align-items-center justify-content-center">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary" style="width: 60px; height: 60px;">
           <path d="M20 21V19C20 17.9 19.1 17 18 17H6C4.9 17 4 17.9 4 19V21M12 13C14.21 13 16 11.21 16 9C16 6.79 14.21 5 12 5C9.79 5 8 6.79 8 9C8 11.21 9.79 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
         </div>
        </div>
       </div>
       <h4 style="font-family: 'Courier New', monospace; color: #2c1810;">Sarah Schmidt</h4>
       <p class="text-primary mb-2">Kulturhistorikerin</p>
       <p class="text-muted small">Expertin für deutsche Geschichte und Kultur, führt exklusive Privattouren zu historischen Stätten.</p>
      </div>
     </div>
    </div>
   </section>
   <!-- Subscription Plans -->
   <section class="py-4 py-md-5" style="scroll-margin-top: var(--nav-h);" id="subscription-plans">
    <div class="row mb-4">
     <div class="col-lg-8 mx-auto text-center">
      <h2 class="display-5 fw-bold mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Unsere Service-Pakete</h2>
      <p class="lead text-muted">Wählen Sie das perfekte Paket für Ihre individuellen Reisewünsche</p>
     </div>
    </div>
    <div class="row g-4">
     <!-- Basic Package -->
     <div class="col-lg-4">
      <div class="card h-100 border-0 shadow-sm" style="border-radius: 16px; overflow: hidden;">
       <div class="card-header bg-light text-center py-4 border-0">
        <h3 class="h4 mb-2" style="font-family: 'Courier New', monospace; color: #2c1810;">Entdecker</h3>
        <div class="display-6 fw-bold text-primary mb-1">€299</div>
        <small class="text-muted">pro Person</small>
       </div>
       <div class="card-body p-4">
        <ul class="list-unstyled">
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Grundlegende Reiseplanung</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Hotelreservierungen</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Transport-Koordination</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>24/7 Support-Hotline</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Reiseführer &amp; Karten</li>
        </ul>
       </div>
       <div class="card-footer bg-transparent border-0 p-4">
        <a href="#contact-form" class="btn btn-outline-primary w-100" style="border-radius: 8px;">Paket wählen</a>
       </div>
      </div>
     </div>
     <!-- Premium Package -->
     <div class="col-lg-4">
      <div class="card h-100 border-0 shadow-lg position-relative" style="border-radius: 16px; overflow: hidden; background: linear-gradient(135deg, #f2f0f8 0%, #e6e1d8 100%);">
       <div class="position-absolute top-0 start-50 translate-middle">
        <span class="badge bg-primary px-3 py-2" style="border-radius: 20px;">Beliebt</span>
       </div>
       <div class="card-header text-center py-4 border-0" style="background: transparent;">
        <h3 class="h4 mb-2" style="font-family: 'Courier New', monospace; color: #2c1810;">Premium</h3>
        <div class="display-6 fw-bold text-primary mb-1">€599</div>
        <small class="text-muted">pro Person</small>
       </div>
       <div class="card-body p-4">
        <ul class="list-unstyled">
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Vollständige Reiseplanung</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Luxusunterkünfte</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private Stadtführungen</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kulturelle Erlebnisse</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Persönlicher Reisebegleiter</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Premium-Transport</li>
        </ul>
       </div>
       <div class="card-footer bg-transparent border-0 p-4">
        <a href="#contact-form" class="btn btn-primary w-100" style="border-radius: 8px;">Paket wählen</a>
       </div>
      </div>
     </div>
     <!-- Luxury Package -->
     <div class="col-lg-4">
      <div class="card h-100 border-0 shadow-sm" style="border-radius: 16px; overflow: hidden;">
       <div class="card-header bg-dark text-white text-center py-4 border-0">
        <h3 class="h4 mb-2" style="font-family: 'Courier New', monospace;">Exklusiv</h3>
        <div class="display-6 fw-bold mb-1">€1299</div>
        <small class="text-white-50">pro Person</small>
       </div>
       <div class="card-body p-4">
        <ul class="list-unstyled">
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP Rundumbetreuung</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Exklusive Schlossunterkünfte</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private Kunst &amp; Kultur-Touren</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gourmet-Dining Experiences</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Helikopter-Transfers</li>
         <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Persönlicher Butler-Service</li>
        </ul>
       </div>
       <div class="card-footer bg-transparent border-0 p-4">
        <a href="#contact-form" class="btn btn-dark w-100" style="border-radius: 8px;">Paket wählen</a>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Contact Form Section -->
   <section class="py-4 py-md-5 mt-5" style="scroll-margin-top: var(--nav-h); background: linear-gradient(135deg, #f8f6f0 0%, #f2f0f8 100%); border-radius: 16px;" id="contact-form">
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mx-auto">
       <div class="text-center mb-4">
        <h2 class="display-5 fw-bold mb-3" style="font-family: 'Courier New', monospace; color: #2c1810;">Kontaktieren Sie uns</h2>
        <p class="lead text-muted">Lassen Sie uns Ihre Traumreise planen</p>
       </div>
       <form method="POST" action="contact.php" class="needs-validation" novalidate>
        <input type="hidden" name="csrf_token" value="&lt;?php echo generateCSRFToken(); ?&gt;"> <input type="hidden" name="service_inquiry" value="true">
        <div class="row g-3">
         <div class="col-md-6">
          <label for="name" class="form-label fw-bold">Vollständiger Name *</label> <input type="text" class="form-control" id="name" name="name" required minlength="2" maxlength="100" style="border-radius: 8px; border: 2px solid #e9ecef;">
          <div class="invalid-feedback">Bitte geben Sie Ihren vollständigen Namen ein.</div>
         </div>
         <div class="col-md-6">
          <label for="email" class="form-label fw-bold">E-Mail Adresse *</label> <input type="email" class="form-control" id="email" name="email" required style="border-radius: 8px; border: 2px solid #e9ecef;">
          <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail Adresse ein.</div>
         </div>
        </div>
        <div class="row g-3 mt-2">
         <div class="col-md-6">
          <label for="phone" class="form-label fw-bold">Telefonnummer</label> <input type="tel" class="form-control" id="phone" name="phone" style="border-radius: 8px; border: 2px solid #e9ecef;">
         </div>
         <div class="col-md-6">
          <label for="service_type" class="form-label fw-bold">Interessiert an *</label> <select class="form-select" id="service_type" name="service_type" required style="border-radius: 8px; border: 2px solid #e9ecef;"> <option value="">Bitte wählen...</option> <option value="custom_travel">Maßgeschneiderte Reisepläne</option> <option value="exclusive_tours">Exklusive Stadttouren</option> <option value="luxury_accommodations">Luxusunterkünfte</option> <option value="cultural_experiences">Kulturelle Erlebnisse</option> <option value="culinary_tours">Kulinarische Touren</option> <option value="premium_transport">Premium-Transport</option> <option value="package_entdecker">Entdecker-Paket</option> <option value="package_premium">Premium-Paket</option> <option value="package_exklusiv">Exklusiv-Paket</option> </select>
          <div class="invalid-feedback">Bitte wählen Sie einen Service aus.</div>
         </div>
        </div>
        <div class="mt-3">
         <label for="message" class="form-label fw-bold">Ihre Nachricht *</label> <textarea class="form-control" id="message" name="message" rows="5" required minlength="10" maxlength="5000" placeholder="Erzählen Sie uns mehr über Ihre Reisewünsche..." style="border-radius: 8px; border: 2px solid #e9ecef;"></textarea>
         <div class="invalid-feedback">Bitte beschreiben Sie Ihre Anfrage (mindestens 10 Zeichen).</div>
        </div>
        <div class="mt-3">
         <div class="form-check">
          <input class="form-check-input" type="checkbox" id="privacy_consent" name="privacy_consent" required> <label class="form-check-label" for="privacy_consent"> Ich stimme der <a href="privacy.php" class="text-primary text-decoration-none">Datenschutzerklärung</a> zu und bin damit einverstanden, dass meine Daten zur Bearbeitung meiner Anfrage gespeichert werden. * </label>
          <div class="invalid-feedback">Bitte stimmen Sie der Datenschutzerklärung zu.</div>
         </div>
        </div>
        <div class="d-grid gap-2 col-12 col-md-6 mx-auto mt-4">
         <button type="submit" class="btn btn-primary btn-lg" style="border-radius: 12px; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 12px rgba(13, 110, 253, 0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">Anfrage senden</button>
        </div>
        <p class="text-center text-muted mt-3"><small>* Pflichtfelder</small></p>
       </form>
      </div>
     </div>
    </div>
   </section>
   <!-- Live Chat Widget -->
   <div class="position-fixed bottom-0 end-0 m-4" style="z-index: 1000;">
    <div class="card shadow-lg" style="width: 300px; border-radius: 16px; overflow: hidden; display: none;" id="chat-widget">
     <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
      <h6 class="mb-0">Live-Chat Support</h6>
      <button type="button" class="btn-close btn-close-white" onclick="toggleChat()"></button>
     </div>
     <div class="card-body p-3">
      <div class="mb-3">
       <small class="text-muted">Unser Support-Team ist online</small>
      </div>
      <div class="mb-3">
       <div class="d-flex">
        <div class="flex-shrink-0">
         <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
          <i class="fas fa-user" style="font-size: 14px;"></i>
         </div>
        </div>
        <div class="flex-grow-1 ms-2">
         <div class="bg-light p-2 rounded" style="font-size: 14px;">Hallo! Wie können wir Ihnen bei der Planung Ihrer Reise helfen?</div>
        </div>
       </div>
      </div>
      <div class="input-group">
       <input type="text" class="form-control" placeholder="Nachricht eingeben..." style="border-radius: 20px 0 0 20px;">
       <button class="btn btn-primary" type="button" style="border-radius: 0 20px 20px 0;"><i class="fas fa-paper-plane"></i></button>
      </div>
     </div>
    </div>
    <!-- Chat Trigger Button -->
    <button class="btn btn-primary rounded-circle shadow-lg" style="width: 60px; height: 60px;" onclick="toggleChat()" id="chat-trigger"><i class="fas fa-comments fa-lg"></i></button>
   </div>
  </div>
  <!--?php include INCLUDES_PATH . 'footer.php'; ?-->
  <script>
// Form validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

// Chat functionality
function toggleChat() {
    const chatWidget = document.getElementById('chat-widget');
    const chatTrigger = document.getElementById('chat-trigger');
    
    if (chatWidget.style.display === 'none' || chatWidget.style.display === '') {
        chatWidget.style.display = 'block';
        chatTrigger.style.display = 'none';
    } else {
        chatWidget.style.display = 'none';
        chatTrigger.style.display = 'block';
    }
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'fadeInUp 0.6s ease-out';
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.card, .display-4, .display-5').forEach(el => {
    observer.observe(el);
});

// Add CSS for animations
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
    
    .btn:focus {
        outline: 2px solid #0d6efd;
        outline-offset: 2px;
    }
    
    @media (prefers-reduced-motion: reduce) {
        *, *::before, *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
`;
document.head.appendChild(style);
</script>
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