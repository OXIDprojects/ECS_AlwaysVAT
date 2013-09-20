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
                <br>
        <div style="background: #f2f2f2;padding: 10px;color:green;max-width:600px;">
        Wenn Sie mit diesem Gratismodul zufrieden sind, unterst&uuml;tzen Sie bitte die Weiterentwicklung und die Anpassung an zuk&uuml;nftige Shopversionen:<br><br>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="WUMDX4N78SCJS">
        <input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Danke">
        <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
        </form><br>
        Besuchen Sie auch unseren Internetshop: <a href="http://ecomstyle.de/" target="_blank"><strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong></a><br>
        Folgende Leistungen bieten wir Ihnen an:
        <table style="width:100%">
        <td style="width:50%">
        <li>Shopthemes- und Templates</li>
        <li>Shopmodule</li>
        <li>Shopupdates</li>
        <li>Individuelle Templateanpasssungen</li>
        </td><td style="width:50%">
        <li>Theme- und Modulinstallationen</li>
        <li>Shopinstallationen</li>
        <li>Anbindung an Warenwirtschaftsysteme</li>
        <li>Beratung und Support</li>
        </td>
        </table>
        </div>
        ',
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