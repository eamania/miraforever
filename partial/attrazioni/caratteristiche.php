
<?php
/**
 * Created by PhpStorm.
 * User: eamania
 * Date: 30/12/2015
 * Time: 16:10
 */


$altezza = get_post_meta($post->ID, 'Altezza', true);
$lunghezza = get_post_meta($post->ID, 'Lunghezza', true);
$nome_completo = get_post_meta($post->ID, 'Nome Completo', true);
$anno_costruzione = get_post_meta($post->ID, 'Anno Costruzione', true);
$velocita = get_post_meta($post->ID, 'Velocita', true);

?>

<?php
if ($nome_completo != NULL) {echo "Nome: " . $nome_completo . "</br>";}
if ($velocita != NULL) {echo "Velocità: " . $velocita. "</br>";}
if ($anno_costruzione != NULL) {echo "Anno di Costruzione: " . $anno_costruzione. "</br>";}
if ($altezza != NULL) {echo "Altezza: " . $altezza. "</br>";}
if ($lunghezza != NULL) {echo "Lunghezza: " . $lunghezza. "</br>";}


?>


