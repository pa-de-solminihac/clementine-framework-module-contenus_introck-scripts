<?php
/**
 * Script non interactif d'installation du module contemus_introck
 */

// deja appele par l'installer
// $db->beginTransaction();

$sql = <<<SQL

-- -----------------------------------------------------
-- Table `clementine_cms_contenu_html_introck`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clementine_cms_contenu_html_introck` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contenu_html` text NOT NULL,
  `contenu_html_introck` text NOT NULL,
  `lang` char(2) NOT NULL DEFAULT 'fr',
  PRIMARY KEY (`id`,`lang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

SQL;

if (!$db->prepare($sql)->execute()) {
    $db->rollBack();
    return false;
}

// deja appele par l'installer
// $db->commit();
return true;
?>
