<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarymanagementdb"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['search'])) {
    $search = $conn->real_escape_string($_POST['search']);
    
    // Query to search for books based on Book_Title or Author_Name
    $sql = $search ? 
        "SELECT id, Book_Title, Author_Name FROM books WHERE Book_Title LIKE '%$search%' OR Author_Name LIKE '%$search%'" : 
        "SELECT id, Book_Title, Author_Name FROM books";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $book_id = $row['id'];
            $book_title = htmlspecialchars($row['Book_Title'], ENT_QUOTES, 'UTF-8');
            $author_name = htmlspecialchars($row['Author_Name'], ENT_QUOTES, 'UTF-8');

            // Adjusted relative link to point to book_view.php in the main directory
            echo "<tr>
                    <td><a href='book_view2.php?id=$book_id'>$book_title</a></td>
                    <td><a href='book_view2.php?id=$book_id'>$author_name</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No results found.</td></tr>";
    }
}

$conn->close();
?>
