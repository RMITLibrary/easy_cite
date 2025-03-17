<?php
// Function to get last modified time of a file
function getFileModifiedTime($filePath)
{
    return file_exists($filePath) ? filemtime($filePath) : time();
}

/**
 * get_base_url()
 *
 * This function returns the base URL for the application, handling
 * different environments including local development.
 *
 * @return string The base URL for the application.
 */
function get_base_url()
{
    $server_name = $_SERVER['SERVER_NAME'];
    $request_uri = $_SERVER['REQUEST_URI'];

    // Check if we are in the preview environment
    if (strpos($request_uri, '/preview/easy-cite') !== false) {
        return '/preview/easy-cite';
    }
    // Check if the site is running on localhost or a local IP address.
    elseif ($server_name === 'localhost' || $server_name === 'easy_cite.test' || filter_var($server_name, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        // Return an empty string for local development, assuming the site is at the root.
        return '';
    } else {
        // Default to the production environment
        return '/easy-cite';
    }
}
