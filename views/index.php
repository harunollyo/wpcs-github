<?php
/**
 * This is test file
 *
 * @package Test
 * @since 1.0.0
 */

$name = sanitize_text_field( wp_unslash( $_POST['name'] ) );
