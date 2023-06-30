<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*master page css*/
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .container {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 20vh;
            background-color: rgb(250, 135, 45);
            border-bottom: 1px solid black;
            background-image: url(/img/header-bg.jpg);
            background-repeat: no-repeat;
        }

        .header h1 {
            padding-left: 50px;
            align-items: center;
        }

        .titlebar {
            display: flex;
            flex-direction: column;
            margin-right: 20px;
        }

        .navbar {
            display: inline-flex;
            justify-content: flex-end;
            gap: 20px;
            list-style-type: none;
        }


        .navbar li a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #ccc;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar li a:hover {
            background-color: #D6CC94;
            font-weight: bolder;
            color: #fff;
        }

        .navbar li a.active {
            background-color: #aaaaaa;
        }

        .content {
            margin-top: 20vh;
            overflow-y: scroll;
        }





        /*content  page css*/




        .container-stu {
            display: grid;
            grid-template-columns: 15% 1fr;
            grid-template-rows: 100vh;
            max-width: 100%;
        }


        .menu-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            width: 99.5%;
            height: 99vh;
        }

        .menu-list li {
            flex-grow: 1;
            border-bottom: 2px solid #0b0a0a;
            text-decoration: none;
        }

        .menu-list li a {
            text-decoration: none;
            display: block;
            text-align: center;
            height: 100%;
            transition: background-color 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 18px;
        }

        .menu-list li:nth-child(odd) a {
            background-color: #bbc7d8;
        }

        .menu-list li:nth-child(even) a {
            background-color: #beb6a1;
        }

        .menu-list li a:hover {
            background-color: #0fe877;
        }



        .right-side {
            display: flex;
            flex-direction: column;
            margin: 0 4px;
        }


        .right-top {
            border: 1px solid #0b0a0a;
            display: flex;
            background-color: #bbc7d8;
            height: 40vh;
            width: 100%;
        }


        .right-bottom {
            flex: 1;
        }

        .container-reg {
            display: flex;
            flex-direction: column;
            height: 100%;

        }

        .container-reg h3 {
            text-align: center;
            font-size: 22px;
            margin: 10px;
        }

        .registration-form {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            padding: 10px;
            grid-column-gap: 50px;
            margin: 10px 10px;
            width: 100%;
            height: 100%;
        }




        .form-group {
            grid-column: span 1;

        }

        .form-group label {
            display: block;
            font-size: 18px;
            margin-bottom: 2px;
        }

        .form-group input[type="number"],
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group input[type="date"],
        .form-group select {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-submit {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-reset {
            background-color: #ed645a;
            padding: 8px 30px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submit:hover,
        .btn-reset:hover {
            background-color: #139819;

        }


        .message {
            color: green;
            font-weight: bold;
        }


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
</head>

<body>
    <form action="registration.php" method="POST">

        <div class="container">
            <div class="header">
                <div>
                    <h1>Himalia Engineering College</h1>
                </div>

                <div class="titlebar">
                    <ul class="navbar">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="StudentPage.php">ADMIN</a></li>
                        <li><a href="#">STUDENTS</a></li>
                        <li><a href="#">STAFFS</a></li>

                    </ul>
                </div>

            </div>
            <div class="content">
                <div class="container-stu">
                    <div class="left-side">
                        <ul class="menu-list">
                            <li><a href="StudentPage.html">Student Entity</a></li>
                            <li><a href="#staff">Staff Entity</a></li>
                            <li><a href="#course">Course Entity</a></li>
                            <li><a href="#subject">Subject Entity</a></li>
                            <li><a href="#attendance">Attendance Entity</a></li>
                            <li><a href="#exam">Exam Entity</a></li>
                            <li><a href="#mark">Mark Entity</a></li>
                            <li><a href="#salary">Salary Entity</a></li>
                            <li><a href="#leave">Leave Entity</a></li>
                            <li><a href="#logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="right-side">
                        <div class="right-top">
                            <div class="container-reg">
                                <h3>Student Registration</h3>
                                <div class="registration-form">
                                    <div class="form-group">
                                        <label for="ID">Student Id:</label>
                                        <input type="number" id="id" name="id" runat="server" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fname">First Name:</label>
                                        <input type="text" id="fname" name="fname" runat="server" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last Name:</label>
                                        <input type="text" id="lname" name="lname" runat="server" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" runat="server" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number:</label>
                                        <input type="tel" id="phone" name="phone" runat="server" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" id="address" name="address" runat="server" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="date-of-birth">Date of Birth:</label>
                                        <input type="date" id="date-of-birth" name="date-of-birth" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender:</label>
                                        <select id="gender" name="gender" required>
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>


                                    <div class="form-group inputsend">
                                        <input type="submit" class="btn-submit" value="Submit" name="submit">
                                        <input type="reset" class="btn-reset" value="Reset" name="reset">

                                    </div>
                                    <div>
                                        <asp:Label ID="lblMessage" runat="server" CssClass="message"></asp:Label>
                                    </div>



                                </div>


                            </div>
                        </div>
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
                    </div>
                </div>


            </div>
        </div>
        </div>
    </form>
</body>

</html>