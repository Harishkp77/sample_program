<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div.table-container {
            margin-top: 10px;
            text-align: center;
            max-width: 100%;
        }


        div.table-container table {
            width: 99%;
            margin: 5px;
            border-collapse: collapse;
        }





        div.table-container td {
            border: 1px solid black;
            padding: 8px;
        }


        div.table-container tr:nth-child(even) {
            background-color: #beb6a1;
        }

        div.table-container tr:nth-child(odd) {
            background-color: #bbc7d8;
        }
</style>

<body>
<div class="right-bottom">
                            <div class="table-container">
                                <h2>Student database</h2>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "webproject";

                                        $conn = new mysqli($servername, $username, $password, $database);

                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $query = "SELECT * FROM student";
                                        $result = $conn->query($query);

                                        while ($row = $result->fetch_assoc()) {
                                            echo "
                                                <tr>
                                                    <td>" . $row['student_id'] . "</td>
                                                    <td>" . $row['stu_first_name'] . "</td>
                                                    <td>" . $row['stu_last_name'] . "</td>
                                                    <td>" . $row['stu_email_id'] . "</td>
                                                    <td>" . $row['stu_phone_number'] . "</td>
                                                    <td>" . $row['stu_address'] . "</td>
                                                    <td>" . $row['stu_dateofbirth'] . "</td>
                                                    <td>" . $row['stu_gender'] . "</td>
                                                </tr>";
                                        }
                                        $conn->close();
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
</body>
</html>