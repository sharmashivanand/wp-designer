<?php

/**
 * ScssPhp autoloader compatibility layer
 * This file provides backward compatibility for the old scss.inc.php include pattern
 */

// Check PHP version compatibility
if ( version_compare( PHP_VERSION, '7.4', '<' ) ) {
	throw new Exception( 'ScssPhp requires PHP 7.4 or higher' );
}

// Define the base directory for ScssPhp classes
$scssphp_base = __DIR__ . '/scssphp/src/';

// Manual includes for essential classes to avoid complex dependencies
$essential_files = array(
	'OutputStyle.php',
	'Type.php',
	'CompilationResult.php',
	'Exception/SassException.php',
	'Exception/SassScriptException.php',
	'Exception/CompilerException.php',
	'Exception/ParserException.php',
	'Logger/LoggerInterface.php',
	'Logger/QuietLogger.php',
	'Util.php',
	'Node.php',
	'ValueConverter.php',
	'Compiler.php',
);

// Include essential files
foreach ( $essential_files as $file ) {
	$path = $scssphp_base . $file;
	if ( file_exists( $path ) ) {
		require_once $path;
	}
}

// Simple autoloader for remaining ScssPhp classes
spl_autoload_register(
	function ( $class ) use ( $scssphp_base ) {
		// Only handle ScssPhp classes
		if ( strpos( $class, 'ScssPhp\\ScssPhp\\' ) !== 0 ) {
			return;
		}

		// Convert namespace to file path
		$relativePath = str_replace( 'ScssPhp\\ScssPhp\\', '', $class );
		$relativePath = str_replace( '\\', '/', $relativePath );
		$filePath     = $scssphp_base . $relativePath . '.php';

		// Include the file if it exists
		if ( file_exists( $filePath ) ) {
			require_once $filePath;
		}
	}
);

// For backward compatibility, also register the old class name
if ( ! class_exists( 'scssc', false ) ) {
	class_alias( 'ScssPhp\\ScssPhp\\Compiler', 'scssc' );
}
