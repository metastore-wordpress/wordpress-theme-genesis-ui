<?php

get_template_part( 'ext-functions/field/document', 'storage' );

function block_document_storage() {
	$storage = field_document_storage();
	$out     = '';

	if ( $storage ) {
		$out .= '<section class="document-storage">';
		$out .= '<h4>' . esc_html__( 'Хранилище', 'wp-ext-document' ) . '</h4>';
		$out .= '<div class="document-storage-content">';

		foreach ( $storage as $file ) {
			$file_title       = esc_html( $file['file']['title'] );
			$file_caption     = esc_html( $file['file']['caption'] );
			$file_description = esc_html( $file['file']['description'] );
			$file_url         = esc_url( $file['file']['url'] );
			$hash             = esc_html( $file['hash'] );

			$out .= '<div class="field">';

			if ( $file_title ) {
				$out .= '<div class="field-value file-title"><a href="' . $file_url . '">' . $file_title . '</a></div>';
			}

			if ( $file_caption ) {
				$out .= '<div class="field-value file-caption">' . $file_caption . '</div>';
			}

			if ( $file_description ) {
				$out .= '<div class="field-value file-description">' . $file_description . '</div>';
			}

			if ( $hash ) {
				$out .= '<div class="field-value file-hash"><div>' . $hash . '</div><div><i title="' . esc_html__( 'SHA-256', 'wp-ext-document' ) . '" class="far fa-question-circle fa-fw"></i></div></div>';
			}

			$out .= '</div>';
		}

		$out .= '</div>';
		$out .= '</section>';
	}

	echo $out;
}
