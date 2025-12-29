<!--?php
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'includes/helpers.php';

// Brand Constants
define('BRAND_NAME', 'ReiseZauber');
define('PRIMARY_DOMAIN', 'reise-zauber.de');
define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN);
define('COMPANY_ADDRESS', 'Unter den Linden 10, 10117 Berlin, Deutschland');
define('COMPANY_PHONE', '+49 30 12345678');

// Page SEO Variables
$pageTitle = 'Datenschutzerklärung - ' . BRAND_NAME;
$pageDescription = 'Datenschutzerklärung von ' . BRAND_NAME . '. Erfahren Sie, wie wir Ihre Daten sammeln, verwenden und schützen.';
$pageKeywords = 'datenschutz, privacy policy, datenverarbeitung, cookies, gdpr, dsgvo';
$pageImage = SITE_URL . '/assets/images/privacy-hero.jpg';

// Get current date for last updated
$lastUpdated = date('d. F Y', time());

include 'includes/header.php';
?-->
<!-- Breadcrumbs -->
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
  <div class="container">
   <nav aria-label="breadcrumb" class="py-3">
    <ol class="breadcrumb mb-0">
     <li class="breadcrumb-item"><a href="index.php">Startseite</a></li>
     <li class="breadcrumb-item active" aria-current="page">Datenschutzerklärung</li>
    </ol>
   </nav>
  </div>
  <!-- Main Content -->
  <div class="container py-4 py-md-5">
   <div class="row justify-content-center">
    <div class="col-lg-10 col-xl-8">
     <!-- Header -->
     <header class="text-center mb-5" data-animate>
      <h1 class="display-4 mb-3">Datenschutzerklärung</h1>
      <p class="lead text-muted">Ihre Privatsphäre ist uns wichtig. Erfahren Sie, wie wir Ihre Daten schützen.</p>
      <p class="text-muted"><small>Zuletzt aktualisiert: <!--?php echo $lastUpdated; ?--></small></p>
     </header>
     <!-- Introduction -->
     <section class="mb-5" data-animate>
      <div class="card bg-light border-0 p-4">
       <h2 class="h4 mb-3">Einleitung</h2>
       <p class="mb-3">Willkommen bei <!--?php echo BRAND_NAME; ?-->. Der Schutz Ihrer persönlichen Daten ist für uns von höchster Bedeutung. Diese Datenschutzerklärung informiert Sie über die Art, den Umfang und den Zweck der Verarbeitung personenbezogener Daten durch uns als Verantwortliche.</p>
       <p class="mb-0">Wir halten uns strikt an die Bestimmungen der Datenschutz-Grundverordnung (DSGVO) und des Bundesdatenschutzgesetzes (BDSG).</p>
      </div>
     </section>
     <!-- Responsible Entity -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Verantwortliche Stelle</h2>
      <div class="card border-start border-primary border-4 ps-4 py-3">
       <p class="mb-2"><strong><!--?php echo BRAND_NAME; ?--></strong></p>
       <p class="mb-2"><!--?php echo COMPANY_ADDRESS; ?--></p>
       <p class="mb-2">Telefon: <!--?php echo COMPANY_PHONE; ?--></p>
       <p class="mb-0">E-Mail: <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;"><!--?php echo SUPPORT_EMAIL; ?--></a></p>
      </div>
     </section>
     <!-- Data Collection -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Welche Daten sammeln wir?</h2>
      <div class="row g-4">
       <div class="col-md-6">
        <div class="card h-100">
         <div class="card-body">
          <h3 class="h5 card-title text-primary"><i class="fas fa-user-circle me-2"></i> Persönliche Daten</h3>
          <ul class="list-unstyled mb-0">
           <li class="mb-2">• Name und Vorname</li>
           <li class="mb-2">• E-Mail-Adresse</li>
           <li class="mb-2">• Telefonnummer (optional)</li>
           <li class="mb-0">• Nachrichteninhalte</li>
          </ul>
         </div>
        </div>
       </div>
       <div class="col-md-6">
        <div class="card h-100">
         <div class="card-body">
          <h3 class="h5 card-title text-primary"><i class="fas fa-chart-line me-2"></i> Technische Daten</h3>
          <ul class="list-unstyled mb-0">
           <li class="mb-2">• IP-Adresse</li>
           <li class="mb-2">• Browser-Informationen</li>
           <li class="mb-2">• Betriebssystem</li>
           <li class="mb-0">• Besuchszeiten und -dauer</li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </section>
     <!-- Data Usage -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Wie verwenden wir Ihre Daten?</h2>
      <div class="accordion" id="dataUsageAccordion">
       <div class="accordion-item">
        <h3 class="accordion-header">
         <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Kontaktformular und Kommunikation</button>
        </h3>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#dataUsageAccordion">
         <div class="accordion-body">Wenn Sie unser Kontaktformular nutzen, verwenden wir Ihre Daten zur Bearbeitung Ihrer Anfrage und zur Kommunikation mit Ihnen. Die Rechtsgrundlage hierfür ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse).</div>
        </div>
       </div>
       <div class="accordion-item">
        <h3 class="accordion-header">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Website-Optimierung</button>
        </h3>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#dataUsageAccordion">
         <div class="accordion-body">Wir verwenden anonymisierte Daten zur Verbesserung unserer Website-Performance und Benutzererfahrung. Diese Daten helfen uns zu verstehen, wie unsere Website genutzt wird.</div>
        </div>
       </div>
       <div class="accordion-item">
        <h3 class="accordion-header">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Rechtliche Verpflichtungen</button>
        </h3>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#dataUsageAccordion">
         <div class="accordion-body">In bestimmten Fällen können wir verpflichtet sein, Ihre Daten aufgrund gesetzlicher Bestimmungen zu verarbeiten oder an Behörden weiterzugeben.</div>
        </div>
       </div>
      </div>
     </section>
     <!-- Cookies -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Cookies und ähnliche Technologien</h2>
      <div class="alert alert-info" role="alert">
       <h3 class="h5 alert-heading"><i class="fas fa-cookie-bite me-2"></i> Was sind Cookies?</h3>
       <p class="mb-0">Cookies sind kleine Textdateien, die von Ihrem Browser auf Ihrem Gerät gespeichert werden. Sie helfen uns dabei, die Website funktionsfähig zu halten und Ihre Benutzererfahrung zu verbessern.</p>
      </div>
      <div class="row g-3 mt-3">
       <div class="col-md-4">
        <div class="card border-success">
         <div class="card-header bg-success text-white">
          <h4 class="h6 mb-0">Notwendige Cookies</h4>
         </div>
         <div class="card-body">
          <p class="card-text small">Diese Cookies sind für die Grundfunktionen der Website erforderlich und können nicht deaktiviert werden.</p>
         </div>
        </div>
       </div>
       <div class="col-md-4">
        <div class="card border-warning">
         <div class="card-header bg-warning text-dark">
          <h4 class="h6 mb-0">Funktionale Cookies</h4>
         </div>
         <div class="card-body">
          <p class="card-text small">Diese Cookies ermöglichen erweiterte Funktionalitäten und eine personalisierte Nutzererfahrung.</p>
         </div>
        </div>
       </div>
       <div class="col-md-4">
        <div class="card border-info">
         <div class="card-header bg-info text-white">
          <h4 class="h6 mb-0">Analyse-Cookies</h4>
         </div>
         <div class="card-body">
          <p class="card-text small">Diese Cookies helfen uns zu verstehen, wie Besucher mit der Website interagieren (nur mit Ihrer Zustimmung).</p>
         </div>
        </div>
       </div>
      </div>
     </section>
     <!-- Third Party Disclosures -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Weitergabe an Dritte</h2>
      <div class="card bg-light border-0">
       <div class="card-body">
        <p class="mb-3">Wir geben Ihre personenbezogenen Daten grundsätzlich nicht an Dritte weiter, es sei denn:</p>
        <ul class="list-unstyled">
         <li class="mb-3">
          <div class="d-flex">
           <div class="flex-shrink-0">
            <i class="fas fa-check-circle text-success me-2"></i>
           </div>
           <div>
            <strong>Einverständnis:</strong> Sie haben ausdrücklich eingewilligt
           </div>
          </div>
         </li>
         <li class="mb-3">
          <div class="d-flex">
           <div class="flex-shrink-0">
            <i class="fas fa-gavel text-primary me-2"></i>
           </div>
           <div>
            <strong>Rechtliche Verpflichtung:</strong> Wir sind gesetzlich dazu verpflichtet
           </div>
          </div>
         </li>
         <li class="mb-0">
          <div class="d-flex">
           <div class="flex-shrink-0">
            <i class="fas fa-tools text-warning me-2"></i>
           </div>
           <div>
            <strong>Dienstleister:</strong> Vertrauenswürdige Partner zur Erbringung unserer Dienste (unter strengen Datenschutzauflagen)
           </div>
          </div>
         </li>
        </ul>
       </div>
      </div>
     </section>
     <!-- User Rights -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Ihre Rechte</h2>
      <div class="row g-4">
       <div class="col-lg-6">
        <div class="card h-100 border-primary">
         <div class="card-header bg-primary text-white">
          <h3 class="h5 mb-0"><i class="fas fa-info-circle me-2"></i> Auskunftsrecht</h3>
         </div>
         <div class="card-body">
          <p class="card-text">Sie haben das Recht zu erfahren, welche personenbezogenen Daten wir über Sie gespeichert haben.</p>
         </div>
        </div>
       </div>
       <div class="col-lg-6">
        <div class="card h-100 border-success">
         <div class="card-header bg-success text-white">
          <h3 class="h5 mb-0"><i class="fas fa-edit me-2"></i> Berichtigung</h3>
         </div>
         <div class="card-body">
          <p class="card-text">Sie können die Korrektur unrichtiger oder die Vervollständigung unvollständiger Daten verlangen.</p>
         </div>
        </div>
       </div>
       <div class="col-lg-6">
        <div class="card h-100 border-danger">
         <div class="card-header bg-danger text-white">
          <h3 class="h5 mb-0"><i class="fas fa-trash-alt me-2"></i> Löschung</h3>
         </div>
         <div class="card-body">
          <p class="card-text">Unter bestimmten Umständen können Sie die Löschung Ihrer personenbezogenen Daten verlangen.</p>
         </div>
        </div>
       </div>
       <div class="col-lg-6">
        <div class="card h-100 border-warning">
         <div class="card-header bg-warning text-dark">
          <h3 class="h5 mb-0"><i class="fas fa-ban me-2"></i> Widerspruch</h3>
         </div>
         <div class="card-body">
          <p class="card-text">Sie können der Verarbeitung Ihrer Daten aus Gründen, die sich aus Ihrer besonderen Situation ergeben, widersprechen.</p>
         </div>
        </div>
       </div>
      </div>
      <div class="mt-4 p-3 bg-light rounded">
       <p class="mb-0"><strong>Kontakt für Datenschutzanfragen:</strong>
        <br>
        E-Mail: <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;"><!--?php echo SUPPORT_EMAIL; ?--></a>
        <br>
        Betreff: "Datenschutzanfrage"</p>
      </div>
     </section>
     <!-- Data Security -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Datensicherheit</h2>
      <div class="card border-success">
       <div class="card-body">
        <div class="row align-items-center">
         <div class="col-md-2 text-center mb-3 mb-md-0">
          <i class="fas fa-shield-alt fa-3x text-success"></i>
         </div>
         <div class="col-md-10">
          <p class="mb-3">Wir setzen technische und organisatorische Sicherheitsmaßnahmen ein, um Ihre Daten vor Verlust, Manipulation und unbefugtem Zugriff zu schützen.</p>
          <ul class="list-unstyled mb-0">
           <li class="mb-1">• SSL-Verschlüsselung für alle Datenübertragungen</li>
           <li class="mb-1">• Regelmäßige Sicherheitsupdates und -überprüfungen</li>
           <li class="mb-1">• Zugriffskontrollen und Berechtigungsmanagement</li>
           <li class="mb-0">• Sichere Server in deutschen Rechenzentren</li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </section>
     <!-- Data Retention -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Speicherdauer</h2>
      <div class="table-responsive">
       <table class="table table-striped table-hover">
        <thead class="table-dark">
         <tr>
          <th scope="col">Datentyp</th>
          <th scope="col">Speicherdauer</th>
          <th scope="col">Rechtsgrundlage</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <td>Kontaktformular-Daten</td>
          <td>2 Jahre nach letztem Kontakt</td>
          <td>Berechtigtes Interesse</td>
         </tr>
         <tr>
          <td>Server-Log-Dateien</td>
          <td>7 Tage</td>
          <td>Berechtigtes Interesse</td>
         </tr>
         <tr>
          <td>Cookie-Daten</td>
          <td>Je nach Cookie-Typ (max. 2 Jahre)</td>
          <td>Einwilligung</td>
         </tr>
        </tbody>
       </table>
      </div>
     </section>
     <!-- Contact for Privacy -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Kontakt zum Datenschutz</h2>
      <div class="card bg-primary text-white">
       <div class="card-body">
        <div class="row align-items-center">
         <div class="col-md-8">
          <h3 class="h5 card-title">Haben Sie Fragen zum Datenschutz?</h3>
          <p class="card-text mb-0">Zögern Sie nicht, uns bei Fragen oder Anliegen zum Datenschutz zu kontaktieren. Wir helfen Ihnen gerne weiter.</p>
         </div>
         <div class="col-md-4 text-md-end mt-3 mt-md-0">
          <a href="contact.php" class="btn btn-light btn-lg"> <i class="fas fa-envelope me-2"></i> Kontakt aufnehmen </a>
         </div>
        </div>
       </div>
      </div>
     </section>
     <!-- Changes to Privacy Policy -->
     <section class="mb-5" data-animate>
      <h2 class="h3 mb-4">Änderungen dieser Datenschutzerklärung</h2>
      <div class="alert alert-warning" role="alert">
       <h3 class="h5 alert-heading"><i class="fas fa-exclamation-triangle me-2"></i> Aktualität der Datenschutzerklärung</h3>
       <p class="mb-0">Diese Datenschutzerklärung kann bei Bedarf aktualisiert werden. Wir empfehlen Ihnen, diese Seite regelmäßig zu besuchen, um über eventuelle Änderungen informiert zu bleiben. Das Datum der letzten Aktualisierung finden Sie am Anfang dieser Erklärung.</p>
      </div>
     </section>
     <!-- Footer CTA -->
     <div class="text-center" data-animate>
      <div class="border-top pt-4">
       <p class="text-muted mb-3">Weitere Informationen zu unseren rechtlichen Bestimmungen:</p>
       <a href="terms.php" class="btn btn-outline-primary me-2">Allgemeine Geschäftsbedingungen</a> <a href="about.php" class="btn btn-outline-secondary">Über uns</a>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!--?php include 'includes/footer.php'; ?-->
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