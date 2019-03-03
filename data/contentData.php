<?php
include 'contentEntryClass.php';
$blog_array = [];
// SLUG - Urlvennlig streng

//<p>  paragragf </p>
$blog_array[] = new ContentEntryClass(
    "MorkeOgVinterMeditasjon", "Mørke og Vintermeditasjon", 
    "Årstidens stillhet, den iboende sakteheten gir nødvendige pauser i naturens så vel som vår egen livsrytmen – hvis vi tillater oss å kjenne etter og ta imot. Mørketid er god meditasjonstid.", 
    "1_morke_og_vintermeditasjon.php",
    "Januar 2019", "Blogg_1_Bilde.jpg", "blog", null, true);

$blog_array[] = new ContentEntryClass(
    "MorkeOgVinterMeditasjon", "Mørke og Vintermeditasjon", 
    "Årstidens stillhet, den iboende sakteheten gir nødvendige pauser i naturens så vel som vår egen livsrytmen – hvis vi tillater oss å kjenne etter og ta imot. Mørketid er god meditasjonstid.", 
    "1_morke_og_vintermeditasjon.php",
    "Januar 2019", "Blogg_1_Bilde.jpg", "blog" ,null, true);
    
$article_array = [];


$article_array[] = new ContentEntryClass(
    "Pustepause", "Pustepause", "Pust for livet ! Det er gratis medisin uten bivirkninger for ren nytelse til å leve her-og-nå.", "null", "Publisert i tidsskriftet Mat og Helse", "01_pustepause.jpg", "pdf", "01_pustepause.pdf");

$article_array[] = new ContentEntryClass(
    "VennlighetForDegSelv", "Vennlighet for deg selv", "Hvis ikke du er vennlig mot deg selv, hvem skal da være det? Vennlighet letter byrden du bærer.", "null", "Publisert i tidsskriftet Mat og Helse", "02_vennlig_for_deg_selv.jpg", "pdf", "02_vennlig_for_deg_selv.pdf");

$article_array[] = new ContentEntryClass(
        "JaktenPaaLykken", "Jakten på lykken", "Lykken ligger kanskje ikke hos andre? Lær å skape ditt eget lykkemodus.", "null", "Publisert i tidsskriftet Mat og Helse", "03_jakten_pa_lykken.jpg", "pdf", "03_jakten_pa_lykken.pdf");

$article_array[] = new ContentEntryClass(
    "LykkenEr", "Lykken er?", "Det er vår natur å være lykkelige”, sier buddhistene. Det er som om å ta vare på kroppen, du må gjøre noe.", "null", "Publisert i tidsskriftet Visjon", "04_lykken_er.jpg", "pdf", "04_lykken_er.pdf");


    


?>
