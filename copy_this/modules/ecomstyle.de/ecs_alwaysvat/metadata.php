<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'alwaysvat',
    'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>AlwaysVAT</i>',
    'description'  => array(
        'de' => 'Ist diese Modul aktiv, wird immer Umsatzsteuer berechnet.<br>Umsatzsteuerfreie Bestellungen gibt es nicht mehr.<br>ACHTUNG: F&uuml;r die Rechtssicherheit &uuml;bernehmen wir keine Verantwortung.<br>Der Einsatz dieses Moduls erfolgt auf eigene Gefahr!
                <br><iframe frameborder="no" width="600px" height="400px" src="http://tinyurl.com/m23ozfo"></iframe>',
    ),

    'version'      => '1.0',
    'thumbnail'    => 'ecomstyle.png',
    'author'       => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'        => 'info@ecomstyle.de',
    'url'          => 'http://ecomstyle.de',
    'extend'       => array(
        'oxvatselector'     => 'ecomstyle.de/ecs_alwaysvat/alwaysvat',
    ),

);
?>