<?php

namespace NlpTools\Tokenizers;

/**
 * Simple white space tokenizer.
 * Break on every white space
 */
class WhitespaceTokenizer implements Tokenizer
{
	public function tokenize($str) {
		$arr = array();
		return preg_split('/\s+/',$str,null,PREG_SPLIT_NO_EMPTY);
	}
}

?>
