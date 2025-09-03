<?php

$content = file_get_contents("subList.txt");
$emails = array_filter(array_map('trim', explode(PHP_EOL, $content)));

echo "<h2>Subscribed Emails</h2>";
if (empty($emails)) {
    echo "<p>No subscriptions yet.</p>";
} else {
    echo "<ul>";
    foreach ($emails as $email) {
        echo "<h3>" . htmlspecialchars($email) . "</h3>";
    }
    echo "</ul>";
}