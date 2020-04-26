# The code below show PHP function that return human readable URL from the given string. The further section explain the work flow of this code.

function friendlyURL($inputString){
	$url = strtolower($inputString);      # lower case the input using PHP build-in function strtolower
	$patterns = $replacements = array();  # declare $patterns and $replacement as Array
	$patterns[0] = '/(&amp;|&)/i';        # match ‘& or &amp;’ and replace with ‘-and-‘
	$replacements[0] = '-and-';           
	$patterns[1] = '/[^a-zA-Z01-9]/i';    # match non Alphabets or number and replace with ‘-‘
	$replacements[1] = '-';
	$patterns[2] = '/(-+)/i';             # match the single or repeated en dash (—-) and replace with single en dash (-)
	$replacements[2] = '-';               
	$patterns[3] = '/(-$|^-)/i';          # match en dash at the beginning of phase ($-) or en dash the end of phase (^-) and delete
	$replacements[3] = '';
	$url = preg_replace($patterns, $replacements, $url);  
	return $url;
	}
