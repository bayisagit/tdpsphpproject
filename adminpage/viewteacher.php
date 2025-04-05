<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/viewteacher.css">
    <link rel="stylesheet" href="partials/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <?php
    include("partials/header.php");
    ?>
    <main class="main-content">
    <section class="view-teachers-table">
            <h2>View Registered Teachers</h2>
            <!-- Table for Displaying Teachers -->
            <table>
                <thead>
                    <tr>
                        <th>Teacher ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data for Teachers -->
                    <tr>
                        <td>101</td>
                        <td>John</td>
                        <td>Michael</td>
                        <td>Doe</td>
                        <td>john.doe@example.com</td>
                        <td>1234567890</td>
                        <td>Male</td>
                        <td>Class 1</td>
                        <td>Mathematics</td>
                        <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Jane</td>
                        <td>Marie</td>
                        <td>Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>0987654321</td>
                        <td>Female</td>
                        <td>Class 2</td>
                        <td>English</td>
                        <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>Tom</td>
                        <td>Allen</td>
                        <td>Johnson</td>
                        <td>tom.johnson@example.com</td>
                        <td>1122334455</td>
                        <td>Male</td>
                        <td>Class 3</td>
                        <td>History</td>
                        <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td>104</td>
                        <td>Emily</td>
                        <td>Rose</td>
                        <td>Williams</td>
                        <td>emily.williams@example.com</td>
                        <td>5566778899</td>
                        <td>Female</td>
                        <td>Class 4</td>
                        <td>Science</td>
                        <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>