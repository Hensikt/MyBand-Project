<?php
/**
 * Dit is de Front controller
 * ALLE requests die naar de webserver worden gedaan worden via de .htaccess naar dit script gestuurd.
 * Zo voorkom je dat je heel veel PHP bestanden hebt met dubbele code en logica.
 *
 * Alle urls hebben de volgende structuur: http://localhost/<controller>/<actie>/<optionele parameters>
 *
 * Bijv: http://localhost/page/show/about-us
 * (roept de show functie aan in de page controller met de parameter 'about-us')
 *
 * controller: page
 * actie: show
 * parameter: about-us
 *
 * De Front Controller (dit bestand) doorloopt elke keer de volgende procedure:
 *
 * 1. Inspecteert de URL die wordt opgevraagd
 * 2. Zoekt op in een "routing" tabel of hij deze URL of dit URL patroon kent
 * 3. Zo niet, dan is het een 404 oagina, want de website kent deze url niet
 * 4. Als de url wel wordt herkend en er een "route" is naar de juiste code dan:
 *  A. Wordt de juiste controller actie aangeroepen
 *  B. De controller krijgt alle gegevens door (de url, $_GET, $_POST, $_FILES etc)
 *  C. De controller haalt eventueel gegevens op via de Model laag (database queries e.d.)
 *  D. De controller geeft de gegevens aan de juiste view
 *  E. De view toont de gegevens op de juiste manier (met behulp van een foreach, if, switch e.d.)
 *  F. De complete view (met data) wordt door de controller teruggestuurd naar de gebruiker (dit is de Response)
 *
 */

// ALL requests are handle here now, so we have to determine WHICH controller to call, based on the URL that was requested
$parts = pathinfo($_SERVER['SCRIPT_NAME']);
$script_name = $_SERVER['SCRIPT_NAME']; // = app.php
$full_uri = str_replace($parts['dirname'], '', $_SERVER['REQUEST_URI']);
$uri = parse_url($full_uri, PHP_URL_PATH);

define('HOME_URL', $parts['dirname']);

require "../private/functions.php";
require "../private/model.php";
require "../private/controllers.php";

// Check the URI information en call the right "controller" script
if ('/' === $uri) {
    homepage_action();
} elseif ('/homepage' === $uri) {
    generate_name_action();
}

