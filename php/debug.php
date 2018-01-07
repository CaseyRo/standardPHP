<?php

function debug($response)
{
	highlight_string("<?php\n\$data =\n" . var_export($response, true) . ";\n?>");
	// error_log($response);
}

function debug_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

?>
