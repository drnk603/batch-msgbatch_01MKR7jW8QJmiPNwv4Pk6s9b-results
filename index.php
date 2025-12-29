<!--?php
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'includes/helpers.php';

// Brand constants
define('BRAND_NAME', 'AlpenReisen');
define('PRIMARY_DOMAIN', 'alpenreisen.de');
define('SUPPORT_EMAIL', 'info@domain.com');
define('BUSINESS_ADDRESS', 'Bergstraße 123, 80331 München, Deutschland');
define('BUSINESS_PHONE', '+49 89 123456789');

// Set page variables
$pageTitle = BRAND_NAME . ' - Exklusive Alpentouren und Bergerlebnisse in Deutschland';
$pageDescription = 'Entdecken Sie die Schönheit der deutschen Alpen mit unseren exklusiven Touren. Professionelle Bergführung, unvergessliche Erlebnisse und nachhaltige Reiseerfahrungen.';
$pageKeywords = 'Alpentouren, Bergtouren Deutschland, Wanderreisen Alpen, Bergführer München, Bergerlebnisse Bayern';

// Generate CSRF Token
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

session_start();
$csrfToken = generateCSRFToken();
?-->
<!doctype html>
<html lang="de">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- SEO Meta Tags -->
  <title>&lt;?php echo htmlspecialchars($pageTitle); ?&gt;</title>
  <meta name="description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta name="keywords" content="&lt;?php echo htmlspecialchars($pageKeywords); ?&gt;">
  <meta name="author" content="&lt;?php echo htmlspecialchars(BRAND_NAME); ?&gt;">
  <!-- Open Graph Tags -->
  <meta property="og:title" content="&lt;?php echo htmlspecialchars($pageTitle); ?&gt;">
  <meta property="og:description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta property="og:image" content="https://domain.com/images/alpen-hero.jpg">
  <meta property="og:url" content="https://domain.com">
  <meta property="og:type" content="website">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="&lt;?php echo htmlspecialchars($pageTitle); ?&gt;">
  <meta name="twitter:description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta name="twitter:image" content="https://domain.com/images/alpen-hero.jpg">
  <!-- Canonical URL -->
  <link rel="canonical" href="https://domain.com">
  <!-- Bootstrap CSS -->
  <!-- Custom CSS -->
  <!-- Favicon -->
  <!-- JSON-LD Schema -->
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
  <!-- Skip to main content -->
  <a href="#main-content" class="skip-to-main visually-hidden-focusable">Zum Hauptinhalt springen</a> <!-- Header -->
  <main id="main-content" role="main">
   <!-- Hero Section -->
   <section class="hero-section py-4 py-md-5" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row align-items-center min-vh-100">
      <div class="col-lg-6" data-aos="fade-right">
       <h1 class="display-3 fw-bold mb-4 text-primary">Entdecken Sie die Magie der deutschen Alpen</h1>
       <p class="lead mb-4">Erleben Sie unvergessliche Bergabenteuer mit unseren erfahrenen Bergführern. Von sanften Wanderungen bis zu anspruchsvollen Gipfeltouren – wir bringen Sie sicher ans Ziel.</p>
       <div class="d-flex gap-3 flex-wrap">
        <a href="#tours" class="btn btn-primary btn-lg">Touren Entdecken</a> <a href="#about" class="btn btn-outline-primary btn-lg">Mehr Erfahren</a>
       </div>
      </div>
      <div class="col-lg-6 text-center" data-aos="fade-left">
       <div class="ratio ratio-4x3">
        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Majestätische Alpenlandschaft mit schneebedeckten Gipfeln" class="img-fluid rounded shadow-lg" loading="lazy" width="800" height="600">
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Special Offers Section -->
   <section id="offers" class="py-4 py-md-5 bg-light" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up">
       <h2 class="display-4 fw-bold mb-3">Exklusive Angebote</h2>
       <p class="lead text-muted">Profitieren Sie von unseren Sonderaktionen für unvergessliche Alpenerlebnisse</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-lg-4 col-md-6">
       <div class="card h-100 d-flex flex-column shadow-sm" data-aos="fade-up" data-aos-delay="100">
        <div class="ratio ratio-16x9">
         <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Morgendliche Bergwanderung" class="card-img-top" loading="lazy" width="600" height="400">
        </div>
        <div class="card-body d-flex flex-column">
         <div class="badge bg-success mb-2 align-self-start">30% Rabatt</div>
         <h3 class="card-title h5">Sunrise Alpine Tour</h3>
         <p class="card-text">Erleben Sie den Sonnenaufgang auf 2.500m Höhe mit spektakulärem Panoramablick über die Bayerischen Alpen.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
           <span class="text-muted text-decoration-line-through">€149</span> <span class="h5 text-primary mb-0">€99</span>
          </div>
          <a href="#contact" class="btn btn-primary w-100">Jetzt Buchen</a>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6">
       <div class="card h-100 d-flex flex-column shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <div class="ratio ratio-16x9">
         <img src="https://images.unsplash.com/photo-1464822759844-d150baec04ec?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Klettertour in den Alpen" class="card-img-top" loading="lazy" width="600" height="400">
        </div>
        <div class="card-body d-flex flex-column">
         <div class="badge bg-warning mb-2 align-self-start">Limitiert</div>
         <h3 class="card-title h5">Alpine Kletter-Expedition</h3>
         <p class="card-text">3-tägige geführte Klettertour für Fortgeschrittene mit Übernachtung in einer authentischen Berghütte.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
           <span class="text-muted">3 Tage</span> <span class="h5 text-primary mb-0">€389</span>
          </div>
          <a href="#contact" class="btn btn-primary w-100">Anfrage Senden</a>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6">
       <div class="card h-100 d-flex flex-column shadow-sm" data-aos="fade-up" data-aos-delay="300">
        <div class="ratio ratio-16x9">
         <img src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Familienwanderung in den Bergen" class="card-img-top" loading="lazy" width="600" height="400">
        </div>
        <div class="card-body d-flex flex-column">
         <div class="badge bg-info mb-2 align-self-start">Familienfreundlich</div>
         <h3 class="card-title h5">Familien-Bergabenteuer</h3>
         <p class="card-text">Sanfte Wanderungen für die ganze Familie mit kindergerechten Aktivitäten und Naturerlebnissen.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
           <span class="text-muted">Ab 6 Jahren</span> <span class="h5 text-primary mb-0">€59</span>
          </div>
          <a href="#contact" class="btn btn-primary w-100">Familie Anmelden</a>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Team Intro Section -->
   <section id="team" class="py-4 py-md-5" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up">
       <h2 class="display-4 fw-bold mb-3">Unser Expertenteam</h2>
       <p class="lead text-muted">Erfahrene Bergführer mit jahrzehntelanger Expertise in den deutschen Alpen</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-lg-4 col-md-6">
       <div class="card h-100 d-flex flex-column text-center shadow-sm" data-aos="fade-up" data-aos-delay="100">
        <div class="card-body d-flex flex-column">
         <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 120px;">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=300&amp;q=80" alt="Porträt von Hans Bergmann" class="rounded-circle" style="object-fit: cover;" loading="lazy" width="120" height="120">
         </div>
         <h3 class="card-title h5">Hans Bergmann</h3>
         <p class="text-muted mb-3">Chefbergführer</p>
         <p class="card-text">25 Jahre Erfahrung in der Alpenführung. Spezialist für anspruchsvolle Hochtouren und Winterbergsteigen.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-center gap-2">
           <span class="badge bg-primary">Hochtouren</span> <span class="badge bg-primary">Winterklettern</span>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6">
       <div class="card h-100 d-flex flex-column text-center shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body d-flex flex-column">
         <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 120px;">
          <img src="https://images.unsplash.com/photo-1494790108755-2616b612b647?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=300&amp;q=80" alt="Porträt von Maria Alpenrose" class="rounded-circle" style="object-fit: cover;" loading="lazy" width="120" height="120">
         </div>
         <h3 class="card-title h5">Maria Alpenrose</h3>
         <p class="text-muted mb-3">Wanderführerin</p>
         <p class="card-text">Expertin für Familienwanderungen und Naturpädagogik. Macht die Berge für Jung und Alt erlebbar.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-center gap-2">
           <span class="badge bg-success">Familien</span> <span class="badge bg-success">Naturkunde</span>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6">
       <div class="card h-100 d-flex flex-column text-center shadow-sm" data-aos="fade-up" data-aos-delay="300">
        <div class="card-body d-flex flex-column">
         <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 120px;">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=300&amp;q=80" alt="Porträt von Stefan Gipfelstürmer" class="rounded-circle" style="object-fit: cover;" loading="lazy" width="120" height="120">
         </div>
         <h3 class="card-title h5">Stefan Gipfelstürmer</h3>
         <p class="text-muted mb-3">Kletterguide</p>
         <p class="card-text">Professioneller Kletterguide mit Fokus auf Sicherheit und Techniktraining für alle Schwierigkeitsgrade.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-center gap-2">
           <span class="badge bg-warning">Klettern</span> <span class="badge bg-warning">Techniktraining</span>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Testimonials Section -->
   <section id="testimonials" class="py-4 py-md-5 bg-light" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up">
       <h2 class="display-4 fw-bold mb-3">Was Unsere Gäste Sagen</h2>
       <p class="lead text-muted">Authentische Erfahrungen von begeisterten Bergsteigern</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-lg-4">
       <div class="card h-100 shadow-sm" data-aos="fade-up" data-aos-delay="100">
        <div class="card-body">
         <div class="d-flex mb-3">
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
         </div>
         <blockquote class="blockquote mb-3">
          <p>"Eine absolut unvergessliche Erfahrung! Hans hat uns sicher auf den Gipfel geführt und dabei so viel Wissen über die Berge vermittelt. Professionell und herzlich zugleich."</p>
         </blockquote>
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 50px;">
           <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=150&amp;q=80" alt="Anna Müller" class="rounded-circle" style="object-fit: cover;" loading="lazy" width="50" height="50">
          </div>
          <div>
           <cite class="fw-semibold">Anna Müller</cite>
           <div class="text-muted small">München</div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4">
       <div class="card h-100 shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
         <div class="d-flex mb-3">
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
         </div>
         <blockquote class="blockquote mb-3">
          <p>"Mit unseren drei Kindern hatten wir einen wundervollen Tag in den Bergen. Maria hat die Tour perfekt an die Familie angepasst und allen gezeigt, wie spannend die Natur sein kann."</p>
         </blockquote>
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 50px;">
           <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=150&amp;q=80" alt="Thomas Weber" class="rounded-circle" style="object-fit: cover;" loading="lazy" width="50" height="50">
          </div>
          <div>
           <cite class="fw-semibold">Thomas Weber</cite>
           <div class="text-muted small">Augsburg</div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4">
       <div class="card h-100 shadow-sm" data-aos="fade-up" data-aos-delay="300">
        <div class="card-body">
         <div class="d-flex mb-3">
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <svg class="text-warning me-1" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
         </div>
         <blockquote class="blockquote mb-3">
          <p>"Stefan ist ein fantastischer Kletterlehrer! Dank seiner geduldigen Art und seiner Expertise konnte ich meine Klettertechnik erheblich verbessern. Sehr empfehlenswert!"</p>
         </blockquote>
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 50px;">
           <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=150&amp;q=80" alt="Michael Schmidt" class="rounded-circle" style="object-fit: cover;" loading="lazy" width="50" height="50">
          </div>
          <div>
           <cite class="fw-semibold">Michael Schmidt</cite>
           <div class="text-muted small">Nürnberg</div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Customer Stories Section -->
   <section id="stories" class="py-4 py-md-5" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up">
       <h2 class="display-4 fw-bold mb-3">Erfolgsgeschichten</h2>
       <p class="lead text-muted">Inspirierende Bergerlebnisse unserer Gäste</p>
      </div>
     </div>
     <div class="row g-4 align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
       <div class="ratio ratio-4x3">
        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Erfolgreiche Gipfelbesteigung bei Sonnenaufgang" class="img-fluid rounded shadow" loading="lazy" width="800" height="600">
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
       <div class="ps-lg-4">
        <h3 class="h2 fw-bold mb-4">Von der Couch zum Gipfel</h3>
        <p class="lead mb-4">Julia hatte noch nie einen Berg bestiegen, als sie sich für unsere Anfänger-Tour anmeldete. Heute ist sie eine begeisterte Bergsteigerin.</p>
        <div class="mb-4">
         <blockquote class="blockquote fst-italic">"Ich hätte nie gedacht, dass ich einmal auf einem 3000er stehen würde. Das AlpenReisen-Team hat mir nicht nur die Technik beigebracht, sondern auch den Mut gegeben, meine Grenzen zu überwinden."</blockquote>
         <cite class="fw-semibold">— Julia Hoffmann, München</cite>
        </div>
        <div class="d-flex gap-3">
         <div class="text-center">
          <div class="h2 fw-bold text-primary">15</div>
          <small class="text-muted">Gipfel bestiegen</small>
         </div>
         <div class="text-center">
          <div class="h2 fw-bold text-primary">2</div>
          <small class="text-muted">Jahre Erfahrung</small>
         </div>
         <div class="text-center">
          <div class="h2 fw-bold text-primary">100%</div>
          <small class="text-muted">Zufriedenheit</small>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Newsletter Signup Section -->
   <section id="newsletter" class="py-4 py-md-5 bg-primary text-white" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row justify-content-center text-center">
      <div class="col-lg-8" data-aos="fade-up">
       <h2 class="display-4 fw-bold mb-3">Bleiben Sie Informiert</h2>
       <p class="lead mb-4">Erhalten Sie exklusive Angebote, Tourentipps und Neuigkeiten direkt in Ihr Postfach</p>
       <form class="row g-3 justify-content-center align-items-end" method="POST" action="newsletter.php">
        <input type="hidden" name="csrf_token" value="&lt;?php echo $csrfToken; ?&gt;">
        <div class="col-md-6">
         <label for="newsletter-email" class="visually-hidden">E-Mail Adresse</label> <input type="email" class="form-control form-control-lg" id="newsletter-email" name="email" placeholder="Ihre E-Mail Adresse" required aria-describedby="newsletter-help">
        </div>
        <div class="col-auto">
         <button type="submit" class="btn btn-light btn-lg">Anmelden</button>
        </div>
       </form>
       <small id="newsletter-help" class="form-text text-white-50 mt-3 d-block"> Keine Sorge, wir spammen Sie nicht zu. Abmeldung jederzeit möglich. <a href="privacy.php" class="text-white">Datenschutzerklärung</a> </small>
      </div>
     </div>
    </div>
   </section>
   <!-- Contact Form Section -->
   <section id="contact" class="py-4 py-md-5 bg-light" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up">
       <h2 class="display-4 fw-bold mb-3">Kontaktieren Sie Uns</h2>
       <p class="lead text-muted">Bereit für Ihr nächstes Bergabenteuer? Lassen Sie uns gemeinsam Ihre perfekte Tour planen!</p>
      </div>
     </div>
     <div class="row justify-content-center">
      <div class="col-lg-8">
       <form method="POST" action="contact.php" class="needs-validation" novalidate data-aos="fade-up">
        <input type="hidden" name="csrf_token" value="&lt;?php echo $csrfToken; ?&gt;">
        <div class="row g-3">
         <div class="col-md-6">
          <label for="contact-name" class="form-label fw-semibold">Vollständiger Name *</label> <input type="text" class="form-control" id="contact-name" name="name" required minlength="2" maxlength="100">
          <div class="invalid-feedback">Bitte geben Sie Ihren vollständigen Namen ein.</div>
         </div>
         <div class="col-md-6">
          <label for="contact-email" class="form-label fw-semibold">E-Mail Adresse *</label> <input type="email" class="form-control" id="contact-email" name="email" required>
          <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail Adresse ein.</div>
         </div>
         <div class="col-12">
          <label for="contact-phone" class="form-label fw-semibold">Telefonnummer</label> <input type="tel" class="form-control" id="contact-phone" name="phone" placeholder="+49 123 456789">
         </div>
         <div class="col-12">
          <label for="contact-tour" class="form-label fw-semibold">Gewünschte Tour</label> <select class="form-select" id="contact-tour" name="tour_type"> <option value="">Bitte wählen Sie eine Tour</option> <option value="sunrise-tour">Sunrise Alpine Tour</option> <option value="climbing-expedition">Alpine Kletter-Expedition</option> <option value="family-adventure">Familien-Bergabenteuer</option> <option value="custom">Individuelle Tour</option> </select>
         </div>
         <div class="col-12">
          <label for="contact-message" class="form-label fw-semibold">Nachricht *</label> <textarea class="form-control" id="contact-message" name="message" rows="5" required minlength="10" maxlength="1000" placeholder="Erzählen Sie uns von Ihren Wünschen und Ihrem Erfahrungslevel..."></textarea>
          <div class="invalid-feedback">Bitte geben Sie eine Nachricht mit mindestens 10 Zeichen ein.</div>
         </div>
         <div class="col-12">
          <div class="form-check">
           <input class="form-check-input" type="checkbox" id="privacy-consent" name="privacy_consent" required> <label class="form-check-label" for="privacy-consent"> Ich stimme der Verarbeitung meiner Daten gemäß der <a href="privacy.php" class="text-decoration-none">Datenschutzerklärung</a> zu. * </label>
           <div class="invalid-feedback">Sie müssen der Datenschutzerklärung zustimmen.</div>
          </div>
         </div>
         <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg px-5">
           <svg class="me-2" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
            <path d="M2 21l21-9L2 3v7l15 2-15 2v7z" />
           </svg>
           Anfrage Senden
          </button>
         </div>
        </div>
       </form>
      </div>
     </div>
     <!-- Contact Information -->
     <div class="row mt-5 pt-5 border-top">
      <div class="col-lg-4 text-center mb-4" data-aos="fade-up" data-aos-delay="100">
       <div class="mb-3">
        <svg class="text-primary" width="48" height="48" fill="currentColor" viewBox="0 0 24 24">
         <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
        </svg>
       </div>
       <h3 class="h5 fw-bold">Unser Standort</h3>
       <p class="text-muted mb-0"><!--?php echo htmlspecialchars(BUSINESS_ADDRESS); ?--></p>
      </div>
      <div class="col-lg-4 text-center mb-4" data-aos="fade-up" data-aos-delay="200">
       <div class="mb-3">
        <svg class="text-primary" width="48" height="48" fill="currentColor" viewBox="0 0 24 24">
         <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
        </svg>
       </div>
       <h3 class="h5 fw-bold">Rufen Sie Uns An</h3>
       <p class="text-muted mb-0"><a href="tel:&lt;?php echo str_replace(' ', '', BUSINESS_PHONE); ?&gt;" class="text-decoration-none text-muted"> <!--?php echo htmlspecialchars(BUSINESS_PHONE); ?--> </a></p>
      </div>
      <div class="col-lg-4 text-center mb-4" data-aos="fade-up" data-aos-delay="300">
       <div class="mb-3">
        <svg class="text-primary" width="48" height="48" fill="currentColor" viewBox="0 0 24 24">
         <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
        </svg>
       </div>
       <h3 class="h5 fw-bold">E-Mail Uns</h3>
       <p class="text-muted mb-0"><a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-decoration-none text-muted"> <!--?php echo htmlspecialchars(SUPPORT_EMAIL); ?--> </a></p>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <!-- Bootstrap JS -->
  <!-- AOS Animation Library -->
  <!-- Custom JavaScript -->
  <script>
        // Initialize AOS
        AOS.init({
            once: false,
            duration: 600,
            easing: 'ease-out',
            offset: 120,
            mirror: false
        });
        
        // Respect prefers-reduced-motion
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            AOS.init({
                disable: true
            });
        }
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