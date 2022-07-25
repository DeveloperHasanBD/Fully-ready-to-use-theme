<?php

/**
 * Partial template for content in page.php
 *
 * @package urban
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="octgn_comtainer_width">
	<?php
	the_content();
	understrap_link_pages();
	?>
</div>