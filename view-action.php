<?php
// Define a mapping of POST values to redirection parameters
$roomMappings = [
    'view1' => ['room' => 'Junior Suite', 'card' => 'room1'],
    'view2' => ['room' => 'Deluxe Queen', 'card' => 'room2'],
    'view3' => ['room' => 'Superior Twin', 'card' => 'room3'],
    'view4' => ['room' => 'Superior King', 'card' => 'room4'],
    'view5' => ['room' => 'Deluxe Twin', 'card' => 'room5']
];

// Check if a valid POST value was submitted
if (isset($_POST['view1']) || isset($_POST['view2']) || isset($_POST['view3']) || isset($_POST['view4']) || isset($_POST['view5'])) {
    // Determine which POST value was submitted
    $selectedValue = isset($_POST['view1']) ? 'view1' : (isset($_POST['view2']) ? 'view2' : (isset($_POST['view3']) ? 'view3' : (isset($_POST['view4']) ? 'view4' : 'view5')));

    // Use the selected POST value to fetch the corresponding redirection parameters
    $redirectionParams = $roomMappings[$selectedValue];

    // Build the redirection URL using the parameters
    $redirectionURL = 'rooms.php?' . http_build_query($redirectionParams);

    // Perform the redirection
    header("Location: $redirectionURL");
}

?>