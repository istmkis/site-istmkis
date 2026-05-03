<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Configuration SEO par page
$seo = [
    'home' => [
        'title' => "ISTM Kisangani | Excellence en Sciences de Santé en RDC",
        'desc'  => "Bienvenue sur le portail officiel de l'ISTM Kisangani. Formation d'élite en sciences infirmières, sage-femme, et biomédicales en RD Congo."
    ],
    'documents' => [
        'title' => "Documents Officiels | ISTM Kisangani",
        'desc'  => "Téléchargez les règlements, guides de l'étudiant et formulaires administratifs officiels de l'ISTM Kisangani."
    ],
    'coge' => [
        'title' => "Direction et COGE | ISTM Kisangani",
        'desc'  => "Découvrez le Comité de Gestion et la structure organisationnelle de l'Institut Supérieur des Techniques Médicales de Kisangani."
    ],
    'contact' => [
        'title' => "Contactez-nous | ISTM Kisangani",
        'desc'  => "Une question sur nos filières ou les inscriptions ? Contactez le secrétariat ou le service technique de l'ISTM Kisangani."
    ],
    'portail' => [
        'title' => "Portail Étudiant | ISTM Kisangani",
        'desc'  => "Espace numérique de l'ISTM-KIS : accédez à vos cours, résultats et informations académiques en temps réel."
    ],
    'biblio' => [
        'title' => "Bibliothèque Numérique | ISTM Kisangani",
        'desc'  => "Accédez à des milliers d'ouvrages, mémoires et recherches scientifiques en santé pour les étudiants de l'ISTM."
    ],
    'verification' => [
        'title' => "Vérification de Diplôme | ISTM Kisangani",
        'desc'  => "Service en ligne de vérification d'authenticité des titres académiques délivrés par l'ISTM Kisangani."
    ],
    'inscription' => [
        'title' => "Inscriptions 2026 | ISTM Kisangani",
        'desc'  => "Rejoignez l'ISTM Kisangani. Découvrez les conditions d'admission et préinscrivez-vous en ligne pour l'année académique."
    ]
];

// Valeurs par défaut si la page n'existe pas dans le tableau
$current_title = isset($seo[$page]) ? $seo[$page]['title'] : $seo['home']['title'];
$current_desc = isset($seo[$page]) ? $seo[$page]['desc'] : $seo['home']['desc'];

if(!empty($page)){
    // Tu peux maintenant utiliser $current_description dans ton header.php
    require "pages/header.php";

    switch ($page) {
        case "home": require "src/screens/home.php"; break;
        case "documents": require "src/screens/documents.php"; break;
        case "coge": require "src/screens/coge.php"; break;
        case "contact": require "src/screens/contact.php"; break;
        case "portail": require "src/screens/portail.php"; break;
        case "connexion": require "src/screens/connexion.php"; break;
        case "inscription": require "src/screens/inscription.php"; break;
        case "biblio": require "src/screens/biblio.php"; break;
        case "verification": require "src/screens/verification.php"; break;
        default: require "src/screens/home.php"; break;
    }

    require "pages/footer.php";
}