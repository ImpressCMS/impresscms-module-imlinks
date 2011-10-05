<?php
function imlinks_tag_block_cloud_show( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( iml_tag_module_included() ) {
          include_once ICMS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_cloud_show( $options, $mydirname );
        }
}

function imlinks_tag_block_cloud_edit( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( iml_tag_module_included() ) {
          include_once ICMS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_cloud_edit( $options );
        }
}

function imlinks_tag_block_top_show( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( iml_tag_module_included() ) {
          include_once ICMS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_top_show( $options, $mydirname );
        }
}

function imlinks_tag_block_top_edit( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( iml_tag_module_included() ) {
          include_once ICMS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_top_edit( $options );
        }
}
?>