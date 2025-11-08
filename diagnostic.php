<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Diagnostic Test</h1>";

// Test 1: Check if files exist
echo "<h2>File Check</h2>";
$files = ['dbobjects.php', 'constant.php'];
foreach ($files as $file) {
    if (file_exists($file)) {
        echo "✅ $file exists<br>";
    } else {
        echo "❌ $file NOT FOUND<br>";
        echo "Looking in: " . __DIR__ . "/$file<br>";
    }
}

// Test 2: Try including dbobjects
echo "<h2>Database Connection Test</h2>";
try {
    if (file_exists('dbobjects.php')) {
        include('dbobjects.php');
        echo "✅ dbobjects.php included successfully<br>";
        
        if (class_exists('dboperation')) {
            echo "✅ dboperation class exists<br>";
            $obj = new dboperation();
            echo "✅ dboperation object created<br>";
            $obj->connect();
            echo "✅ Database connected successfully!<br>";
        } else {
            echo "❌ dboperation class NOT FOUND<br>";
        }
    }
} catch (Exception $e) {
    echo "❌ ERROR: " . $e->getMessage() . "<br>";
}

// Test 3: PHP Info
echo "<h2>PHP Configuration</h2>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Short tags: " . (ini_get('short_open_tag') ? 'Enabled' : 'Disabled') . "<br>";
?>
