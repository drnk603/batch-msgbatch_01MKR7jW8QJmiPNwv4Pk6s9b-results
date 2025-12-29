<!--?php
require_once 'config/config.php';
require_once 'includes/helpers.php';

// Define Brand Constants
define('BRAND_NAME', 'AlpenWander');
define('PRIMARY_DOMAIN', 'alpenwander.de');
define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN);
define('BUSINESS_ADDRESS', 'Bergstraße 42, 80331 München, Deutschland');
define('BUSINESS_PHONE', '+49 89 123456789');

// Set page variables
$pageTitle = 'Nutzungsbedingungen - ' . BRAND_NAME;
$pageDescription = 'Nutzungsbedingungen und Geschäftsbedingungen für ' . BRAND_NAME . '. Erfahren Sie mehr über unsere Richtlinien für die Nutzung unserer Tourismus-Services.';
$pageKeywords = 'Nutzungsbedingungen, AGB, Geschäftsbedingungen, Tourismus, Deutschland';
$pageImage = 'domain.com/assets/images/terms-og.jpg';

// Current date for last updated
$lastUpdated = new DateTime('now', new DateTimeZone('Europe/Berlin'));

include 'includes/header.php';
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
   <div class="row justify-content-center">
    <div class="col-lg-10 col-xl-9">
     <!-- Breadcrumbs -->
     <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Startseite</a></li>
       <li class="breadcrumb-item active" aria-current="page">Nutzungsbedingungen</li>
      </ol>
     </nav>
     <header class="mb-5" data-animate>
      <h1 class="display-4 fw-bold text-dark mb-3">Nutzungsbedingungen</h1>
      <p class="lead text-muted mb-0">Allgemeine Geschäftsbedingungen für die Nutzung der Services von <!--?php echo BRAND_NAME; ?--></p>
      <p class="text-muted small mt-2"><i class="fas fa-calendar-alt me-2"></i> Zuletzt aktualisiert: <!--?php echo $lastUpdated--->format('d. F Y'); ?&gt;</p>
     </header>
     <main class="terms-content">
      <!-- Introduction -->
      <section class="mb-5" data-animate>
       <div class="alert alert-info">
        <h5 class="alert-heading">Wichtiger Hinweis</h5>
        <p class="mb-0">Diese Nutzungsbedingungen gelten für alle Services und Dienstleistungen von <!--?php echo BRAND_NAME; ?-->. Durch die Nutzung unserer Website und Services stimmen Sie diesen Bedingungen zu.</p>
       </div>
      </section>
      <!-- Table of Contents -->
      <section class="mb-5" data-animate>
       <div class="card border-0 bg-light">
        <div class="card-body">
         <h3 class="h5 card-title mb-3">Inhaltsverzeichnis</h3>
         <nav class="terms-nav">
          <ol class="list-unstyled mb-0">
           <li class="mb-2"><a href="#geltungsbereich" class="text-decoration-none">1. Geltungsbereich</a></li>
           <li class="mb-2"><a href="#vertragsschluss" class="text-decoration-none">2. Vertragsschluss</a></li>
           <li class="mb-2"><a href="#leistungen" class="text-decoration-none">3. Leistungen</a></li>
           <li class="mb-2"><a href="#buchung-storno" class="text-decoration-none">4. Buchung und Stornierung</a></li>
           <li class="mb-2"><a href="#preise-zahlung" class="text-decoration-none">5. Preise und Zahlung</a></li>
           <li class="mb-2"><a href="#pflichten" class="text-decoration-none">6. Pflichten der Teilnehmer</a></li>
           <li class="mb-2"><a href="#haftung" class="text-decoration-none">7. Haftung</a></li>
           <li class="mb-2"><a href="#datenschutz" class="text-decoration-none">8. Datenschutz</a></li>
           <li class="mb-2"><a href="#schlussbestimmungen" class="text-decoration-none">9. Schlussbestimmungen</a></li>
          </ol>
         </nav>
        </div>
       </div>
      </section>
      <!-- Terms Sections -->
      <article class="terms-sections">
       <!-- Section 1 -->
       <section id="geltungsbereich" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">1. Geltungsbereich</h2>
        <div class="terms-content">
         <p>Diese Allgemeinen Geschäftsbedingungen (AGB) gelten für alle Verträge zwischen <!--?php echo BRAND_NAME; ?--> (nachfolgend "Veranstalter") und den Kunden über touristische Leistungen.</p>
         <p>Der Veranstalter ist:</p>
         <address class="ms-3"><strong><!--?php echo BRAND_NAME; ?--></strong>
          <br>
          <!--?php echo BUSINESS_ADDRESS; ?-->
          <br>
          Telefon: <a href="tel:&lt;?php echo str_replace(' ', '', BUSINESS_PHONE); ?&gt;" class="text-decoration-none"><!--?php echo BUSINESS_PHONE; ?--></a>
          <br>
          E-Mail: <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-decoration-none"><!--?php echo SUPPORT_EMAIL; ?--></a></address>
         <p>Abweichende Bedingungen des Kunden werden nicht anerkannt, es sei denn, der Veranstalter stimmt ihrer Geltung ausdrücklich schriftlich zu.</p>
        </div>
       </section>
       <!-- Section 2 -->
       <section id="vertragsschluss" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">2. Vertragsschluss</h2>
        <div class="terms-content">
         <h4 class="h6 fw-semibold mb-2">2.1 Anmeldung</h4>
         <p>Die Anmeldung zu einer Reise erfolgt durch den Kunden. Sie kann schriftlich, telefonisch, elektronisch oder mündlich erfolgen. Mit der Anmeldung bietet der Kunde dem Veranstalter den Abschluss des Reisevertrages verbindlich an.</p>
         <h4 class="h6 fw-semibold mb-2">2.2 Vertragsbestätigung</h4>
         <p>Der Vertrag kommt durch Annahme der Anmeldung durch den Veranstalter zustande. Die Annahme erfolgt durch Übersendung der Reisebestätigung. Bei oder unverzüglich nach Vertragsabschluss wird der Veranstalter dem Kunden eine entsprechende Bestätigung übermitteln.</p>
         <h4 class="h6 fw-semibold mb-2">2.3 Online-Buchungen</h4>
         <ul>
          <li>Bei Online-Buchungen gilt die Bestätigungs-E-Mail als Vertragsannahme</li>
          <li>Der Kunde erhält eine automatische Buchungsbestätigung</li>
          <li>Alle relevanten Reiseunterlagen werden elektronisch übermittelt</li>
         </ul>
        </div>
       </section>
       <!-- Section 3 -->
       <section id="leistungen" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">3. Leistungen</h2>
        <div class="terms-content">
         <p>Der Umfang der vertraglichen Leistungen ergibt sich aus der Reiseausschreibung und der Reisebestätigung, soweit diese auf die Reiseausschreibung Bezug nimmt.</p>
         <h4 class="h6 fw-semibold mb-2">3.1 Enthaltene Leistungen</h4>
         <ul>
          <li>Professionelle Reiseleitung durch qualifizierte Guides</li>
          <li>Alle im Reiseprogramm aufgeführten Aktivitäten</li>
          <li>Notwendige Sicherheitsausrüstung</li>
          <li>Gruppentransporte gemäß Programm</li>
         </ul>
         <h4 class="h6 fw-semibold mb-2">3.2 Nicht enthaltene Leistungen</h4>
         <ul>
          <li>Persönliche Ausgaben und Trinkgelder</li>
          <li>Reiseversicherungen</li>
          <li>Zusätzliche Mahlzeiten (sofern nicht ausdrücklich inkludiert)</li>
          <li>Anreise zum Treffpunkt (sofern nicht anders vereinbart)</li>
         </ul>
        </div>
       </section>
       <!-- Section 4 -->
       <section id="buchung-storno" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">4. Buchung und Stornierung</h2>
        <div class="terms-content">
         <h4 class="h6 fw-semibold mb-2">4.1 Rücktritt durch den Kunden</h4>
         <p>Der Kunde kann jederzeit vor Reisebeginn vom Vertrag zurücktreten. Der Rücktritt ist dem Veranstalter gegenüber zu erklären.</p>
         <div class="table-responsive">
          <table class="table table-striped">
           <thead>
            <tr>
             <th>Zeitpunkt des Rücktritts</th>
             <th>Stornierungsgebühr</th>
            </tr>
           </thead>
           <tbody>
            <tr>
             <td>Bis 30 Tage vor Reisebeginn</td>
             <td>20% des Reisepreises</td>
            </tr>
            <tr>
             <td>29 bis 15 Tage vor Reisebeginn</td>
             <td>50% des Reisepreises</td>
            </tr>
            <tr>
             <td>14 bis 7 Tage vor Reisebeginn</td>
             <td>75% des Reisepreises</td>
            </tr>
            <tr>
             <td>Weniger als 7 Tage oder bei Nichterscheinen</td>
             <td>100% des Reisepreises</td>
            </tr>
           </tbody>
          </table>
         </div>
         <h4 class="h6 fw-semibold mb-2 mt-4">4.2 Absage durch den Veranstalter</h4>
         <p>Der Veranstalter kann eine Reise aus wichtigem Grund absagen, insbesondere wenn:</p>
         <ul>
          <li>Die Mindestteilnehmerzahl nicht erreicht wird</li>
          <li>Unvorhersehbare Umstände die sichere Durchführung gefährden</li>
          <li>Behördliche Anordnungen die Reise verhindern</li>
         </ul>
        </div>
       </section>
       <!-- Section 5 -->
       <section id="preise-zahlung" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">5. Preise und Zahlung</h2>
        <div class="terms-content">
         <h4 class="h6 fw-semibold mb-2">5.1 Reisepreise</h4>
         <p>Die Preise verstehen sich pro Person in Euro und enthalten die gesetzliche Mehrwertsteuer. Preisänderungen bleiben vorbehalten, soweit sie durch Änderungen der Beförderungskosten oder Abgaben für bestimmte Leistungen bedingt sind.</p>
         <h4 class="h6 fw-semibold mb-2">5.2 Zahlungsmodalitäten</h4>
         <ul>
          <li><strong>Anzahlung:</strong> 30% des Reisepreises bei Buchung</li>
          <li><strong>Restzahlung:</strong> 30 Tage vor Reisebeginn</li>
          <li><strong>Zahlungsarten:</strong> Überweisung, Kreditkarte, PayPal</li>
         </ul>
         <div class="alert alert-warning">
          <h5 class="alert-heading">Wichtiger Hinweis</h5>
          <p class="mb-0">Bei Buchungen weniger als 30 Tage vor Reisebeginn ist der gesamte Reisepreis sofort fällig.</p>
         </div>
        </div>
       </section>
       <!-- Section 6 -->
       <section id="pflichten" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">6. Pflichten der Teilnehmer</h2>
        <div class="terms-content">
         <h4 class="h6 fw-semibold mb-2">6.1 Mitwirkungspflichten</h4>
         <p>Der Kunde ist verpflichtet:</p>
         <ul>
          <li>Notwendige Unterlagen (Ausweise, Visa) mitzuführen</li>
          <li>Gesundheitliche Einschränkungen rechtzeitig mitzuteilen</li>
          <li>Den Anweisungen der Reiseleitung zu folgen</li>
          <li>Angemessene Ausrüstung zu verwenden</li>
         </ul>
         <h4 class="h6 fw-semibold mb-2">6.2 Verhalten während der Reise</h4>
         <p>Die Teilnehmer sind verpflichtet, sich so zu verhalten, dass andere Reiseteilnehmer nicht gestört oder gefährdet werden. Bei schwerwiegenden Verstößen kann der Veranstalter den Teilnehmer von der weiteren Teilnahme ausschließen.</p>
        </div>
       </section>
       <!-- Section 7 -->
       <section id="haftung" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">7. Haftung</h2>
        <div class="terms-content">
         <h4 class="h6 fw-semibold mb-2">7.1 Haftungsumfang</h4>
         <p>Der Veranstalter haftet im Rahmen der Sorgfaltspflicht für die ordnungsgemäße Erbringung der vertraglich vereinbarten Reiseleistungen. Die Haftung ist begrenzt auf:</p>
         <ul>
          <li>Vorsatz und grobe Fahrlässigkeit</li>
          <li>Schäden aus der Verletzung des Lebens, des Körpers oder der Gesundheit</li>
          <li>Schäden aus der Verletzung einer wesentlichen Vertragspflicht</li>
         </ul>
         <h4 class="h6 fw-semibold mb-2">7.2 Haftungsausschluss</h4>
         <p>Eine Haftung für Schäden, die nicht am Körper entstehen, ist der Höhe nach begrenzt auf den dreifachen Reisepreis, soweit ein Schaden des Kunden weder vorsätzlich noch grob fahrlässig herbeigeführt wurde.</p>
        </div>
       </section>
       <!-- Section 8 -->
       <section id="datenschutz" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">8. Datenschutz</h2>
        <div class="terms-content">
         <p>Die Verarbeitung personenbezogener Daten erfolgt ausschließlich im Rahmen der gesetzlichen Bestimmungen. Detaillierte Informationen finden Sie in unserer <a href="/privacy.php" class="text-decoration-none fw-semibold">Datenschutzerklärung</a>.</p>
         <h4 class="h6 fw-semibold mb-2">8.1 Datenerhebung</h4>
         <ul>
          <li>Personendaten für die Reiseabwicklung</li>
          <li>Kontaktdaten für die Kommunikation</li>
          <li>Gesundheitsdaten nur bei ausdrücklicher Einwilligung</li>
         </ul>
        </div>
       </section>
       <!-- Section 9 -->
       <section id="schlussbestimmungen" class="mb-5 scroll-margin-top" data-animate>
        <h2 class="h3 fw-bold mb-3">9. Schlussbestimmungen</h2>
        <div class="terms-content">
         <h4 class="h6 fw-semibold mb-2">9.1 Anwendbares Recht</h4>
         <p>Auf das Vertragsverhältnis findet deutsches Recht Anwendung unter Ausschluss des UN-Kaufrechts.</p>
         <h4 class="h6 fw-semibold mb-2">9.2 Gerichtsstand</h4>
         <p>Soweit der Kunde Kaufmann, juristische Person des öffentlichen Rechts oder öffentlich-rechtliches Sondervermögen ist, wird München als Gerichtsstand vereinbart.</p>
         <h4 class="h6 fw-semibold mb-2">9.3 Salvatorische Klausel</h4>
         <p>Sollten einzelne Bestimmungen dieser AGB unwirksam oder undurchführbar sein oder werden, so wird dadurch die Wirksamkeit der übrigen Bestimmungen nicht berührt.</p>
        </div>
       </section>
      </article>
      <!-- Contact Information -->
      <section class="mt-5 pt-4 border-top" data-animate>
       <div class="row">
        <div class="col-lg-6">
         <h3 class="h5 fw-bold mb-3">Fragen zu diesen Bedingungen?</h3>
         <p>Bei Fragen zu unseren Nutzungsbedingungen stehen wir Ihnen gerne zur Verfügung.</p>
         <div class="contact-info">
          <p class="mb-2"><i class="fas fa-envelope text-primary me-2"></i> <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-decoration-none"><!--?php echo SUPPORT_EMAIL; ?--></a></p>
          <p class="mb-2"><i class="fas fa-phone text-primary me-2"></i> <a href="tel:&lt;?php echo str_replace(' ', '', BUSINESS_PHONE); ?&gt;" class="text-decoration-none"><!--?php echo BUSINESS_PHONE; ?--></a></p>
          <p class="mb-0"><i class="fas fa-map-marker-alt text-primary me-2"></i> <!--?php echo BUSINESS_ADDRESS; ?--></p>
         </div>
        </div>
        <div class="col-lg-6">
         <h3 class="h5 fw-bold mb-3">Weitere Informationen</h3>
         <div class="list-group list-group-flush">
          <a href="/privacy.php" class="list-group-item list-group-item-action border-0 px-0"> <i class="fas fa-shield-alt text-primary me-2"></i> Datenschutzerklärung </a> <a href="/about.php" class="list-group-item list-group-item-action border-0 px-0"> <i class="fas fa-info-circle text-primary me-2"></i> Über uns </a> <a href="/services.php" class="list-group-item list-group-item-action border-0 px-0"> <i class="fas fa-mountain text-primary me-2"></i> Unsere Touren </a>
         </div>
        </div>
       </div>
      </section>
      <!-- Revision History -->
      <section class="mt-5 pt-4 border-top" data-animate>
       <details class="mb-4">
        <summary class="h6 fw-bold mb-3" style="cursor: pointer;">Versionshistorie</summary>
        <div class="revision-history">
         <div class="timeline">
          <div class="timeline-item mb-3">
           <div class="d-flex">
            <div class="timeline-marker bg-primary rounded-circle me-3 mt-1" style="width: 12px; height: 12px;"></div>
            <div>
             <h6 class="mb-1"><!--?php echo $lastUpdated--->format('d.m.Y'); ?&gt; - Version 2.1</h6>
             <p class="text-muted mb-0 small">Anpassung an neue EU-Pauschalreiserichtlinie, Aktualisierung der Stornierungsbedingungen</p>
            </div>
           </div>
          </div>
          <div class="timeline-item mb-3">
           <div class="d-flex">
            <div class="timeline-marker bg-secondary rounded-circle me-3 mt-1" style="width: 12px; height: 12px;"></div>
            <div>
             <h6 class="mb-1">15.05.2024 - Version 2.0</h6>
             <p class="text-muted mb-0 small">Überarbeitung der Haftungsbestimmungen, neue Datenschutzrichtlinien</p>
            </div>
           </div>
          </div>
          <div class="timeline-item">
           <div class="d-flex">
            <div class="timeline-marker bg-secondary rounded-circle me-3 mt-1" style="width: 12px; height: 12px;"></div>
            <div>
             <h6 class="mb-1">01.01.2024 - Version 1.0</h6>
             <p class="text-muted mb-0 small">Erste Veröffentlichung der Nutzungsbedingungen</p>
            </div>
           </div>
          </div>
         </div>
        </div>
       </details>
      </section>
     </main>
    </div>
   </div>
  </div>
  <!-- JSON-LD Structured Data -->
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