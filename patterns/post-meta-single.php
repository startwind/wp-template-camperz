<?php
/**
 * Title: Post Meta Single
 * Slug: twentytwentythree/post-meta-single
 * Categories: query
 * Keywords: post meta
 * Block Types: core/template-part/post-meta
 */
?>

<!-- wp:group -->
<div style="clear: both"></div>
<div style="padding-top: 20px;">
    <!-- wp:post-author {"showAvatar":false} /-->
    <!-- wp:post-date /-->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group">
        <!-- wp:post-terms {"term":"post_tag", "separator":" "} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
