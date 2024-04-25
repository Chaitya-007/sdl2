<html>
<body>
<?php
// Numeric Arrays
$examCenters = ["Delhi", "Mumbai", "Kolkata", "Chennai"];
$examDates = ["2024-03-01", "2024-03-02", "2024-03-03", "2024-03-04"];

// Associative Arrays
$examDetails = [
    ["center" => "Delhi", "date" => "2024-03-01", "time" => "09:00 AM"],
    ["center" => "Mumbai", "date" => "2024-03-02", "time" => "09:00 AM"],
    ["center" => "Kolkata", "date" => "2024-03-03", "time" => "09:00 AM"],
    ["center" => "Chennai", "date" => "2024-03-04", "time" => "09:00 AM"]
];

// Multi-dimensional Arrays
$examCenterDetails = [
    [
        "center" => "Delhi",
        "contact" => "011-1234567",
        "address" => "Delhi University Campus, Delhi"
    ],
    [
        "center" => "Mumbai",
        "contact" => "022-1234567",
        "address" => "Mumbai University Campus, Mumbai"
    ],
    [
        "center" => "Kolkata",
        "contact" => "033-1234567",
        "address" => "Kolkata University Campus, Kolkata"
    ],
    [
        "center" => "Chennai",
        "contact" => "044-1234567",
        "address" => "Chennai University Campus, Chennai"
    ]
];
?>
<h1>Available Exam Centers: </h1>
    <ul>
        <?php foreach ($examCenters as $center): ?>
            <li><?= $center ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Exam Details:</h1>
    <ul>
        <?php foreach ($examDetails as $detail): ?>
            <li><?= $detail['center'] ?> - <?= $detail['date'] ?> - <?= $detail['time'] ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Exam Center Details:</h1>
    <?php foreach ($examCenterDetails as $centerDetail): ?>
        <h2><?= $centerDetail['center'] ?></h2>
        <p>Contact: <?= $centerDetail['contact'] ?></p>
        <p>Address: <?= $centerDetail['address'] ?></p>
    <?php endforeach; ?>

</body>
</html>

