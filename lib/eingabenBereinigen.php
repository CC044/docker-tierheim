<?php
function bereinigeEingabe($eingabe) {
    // Erlaubte Zeichen: A-Z, a-z, 0-9
    $erlaubteZeichen = '/^[a-zA-Z0-9]+$/';

    // Entferne fuehrende und endende Leerzeichen
    $eingabe = trim($eingabe);
    // Entferne HTML- und PHP-Tags
    $eingabe = strip_tags($eingabe);
    // Überprüfe, ob die Eingabe nur erlaubte Zeichen enthaelt, sonst leere $eingabe zurueckgeben
    $eingabe = preg_match($erlaubteZeichen, $eingabe) ? $eingabe : '';

    // Verwende htmlspecialchars, um HTML-Sonderzeichen zu escapen
    // ENT_QUOTES konvertiert Anführungszeichen gegen XSS
    $eingabe = htmlspecialchars($eingabe, ENT_QUOTES, 'UTF-8');
    return $eingabe;
}
?>
