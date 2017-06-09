<?php
print_unescaped($l->t("Hey there,\n\njust letting you know that you now have an %s account.\n\nYour username: %s\nAccess it: %s\n\n", [$theme->getName(), $_['username'], $_['link']]));

// TRANSLATORS term at the end of a mail
p($l->t("Cheers!"));
?>

	--
<?php p($theme->getName() . ' - ' . $theme->getSlogan()); ?>
<?php print_unescaped("\n".$theme->getBaseUrl());
