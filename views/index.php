<?php
/**
 * This is test file
 *
 * @package Test
 * @since 1.0.0
 */

//phpcs:ignore WordPress.Security.NonceVerification.Missing
$name = sanitize_text_field( wp_unslash( isset( $_POST['name'] ) ? $_POST['name'] : '' ) );
