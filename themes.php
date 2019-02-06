/* Add this at the bottom of the file themes.php
 * Deferring parsing of JavaScript via functions.php
 */
function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );