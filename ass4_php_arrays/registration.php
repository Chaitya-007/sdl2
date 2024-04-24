<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<?php
// Simple array of student names
$student_names = array("John", "Jane", "Alice", "Bob", "Charlie");

// Associative array of student information
$student_info = array(
    "John" => array(
        "age" => 20,
        "major" => "Computer Science",
        "grade" => "A"
    ),
    "Jane" => array(
        "age" => 21,
        "major" => "Engineering",
        "grade" => "B"
    ),
    "Alice" => array(
        "age" => 19,
        "major" => "Mathematics",
        "grade" => "A+"
    ),
    "Bob" => array(
        "age" => 22,
        "major" => "Physics",
        "grade" => "B+"
    ),
    "Charlie" => array(
        "age" => 20,
        "major" => "Biology",
        "grade" => "C"
    )
);

// Multidimensional associative array of student contact information
$student_contacts = array(
    array(
        "name" => "John",
        "email" => "john@example.com",
        "phone" => "123-456-7890"
    ),
    array(
        "name" => "Jane",
        "email" => "jane@example.com",
        "phone" => "987-654-3210"
    ),
    array(
        "name" => "Alice",
        "email" => "alice@example.com",
        "phone" => "456-789-0123"
    ),
    array(
        "name" => "Bob",
        "email" => "bob@example.com",
        "phone" => "789-012-3456"
    ),
    array(
        "name" => "Charlie",
        "email" => "charlie@example.com",
        "phone" => "321-654-9870"
    )
);
?>

<h2>Student Names:</h2>
<ul>
    <?php
    // Display student names from simple array
    foreach ($student_names as $name) {
        echo "<li>$name</li>"; // Output each student name as a list item
    }
    ?>
</ul>

<h2>Student Information:</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Major</th>
        <th>Grade</th>
    </tr>
    <?php
    // Display student information from associative array
    foreach ($student_info as $name => $info) {
        echo "<tr>";
        echo "<td>$name</td>"; // Output student name in table cell
        echo "<td>{$info['age']}</td>"; // Output student age in table cell
        echo "<td>{$info['major']}</td>"; // Output student major in table cell
        echo "<td>{$info['grade']}</td>"; // Output student grade in table cell
        echo "</tr>";
    }
    ?>
</table>

<h2>Student Contact Information:</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php
    // Display student contact information from multidimensional associative array
    foreach ($student_contacts as $contact) {
        echo "<tr>";
        echo "<td>{$contact['name']}</td>"; // Output student name in table cell
        echo "<td>{$contact['email']}</td>"; // Output student email in table cell
        echo "<td>{$contact['phone']}</td>"; // Output student phone in table cell
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
