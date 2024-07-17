<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application for CCCA 18</title>
    <style>
        body {
            font-family: verdana;
        }
        .main-heading, .sub-heading, .list-heading, .reference-heading {
            background-color: tomato;
            color: black;
            font-size: 200%;
        }
        .main-heading {
            background-color: maroon;
            color: gold;
            font-size: 300%;
        }
        .paragraph {
            background-color: yellow;
            color: black;
            font-size: 150%;
        }
        .list {
            margin-left: 20px;
        }
        a {
            color: blue;
        }
    </style>
</head>
<body>
    <div class="main-heading">Institute of Human Resource Advancement</div>

    <div class="sub-heading">Certificate Course in Computer Applications</div>

    <div class="paragraph">
        IHRA’s Certificate Course in Computer Applications (CCCA) equips individuals with essential computer skills to excel in a technology-driven world. Join us to unlock your potential, broaden your horizons, and embrace technology.
    </div>

    <div class="sub-heading">Objectives</div>

    <div class="paragraph">
        This course provides basic IT knowledge, enhances IT skills in workplaces, manages ICT resources effectively, and addresses IT security and safety issues.
    </div>

    <div class="list-heading">Program Details</div>

    <ul class="list">
        <li>Program Duration: 6 Months</li>
        <li>Program Medium: English & Sinhala</li>
        <li>Program Schedule:
            <ul>
                <li>Weekdays: Friday 8.00 a.m. to 9.00 p.m.</li>
                <li>Weekends: Sunday 8.00 a.m. to 9.00 p.m.</li>
            </ul>
        </li>
    </ul>

    <div class="sub-heading">Online Application</div>

    <form action="your-server-endpoint" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>
        
        <label for="address">Address:</label><br>
        <textarea id="address" name="address"></textarea><br><br>
        
        <label for="mobile">Mobile:</label><br>
        <input type="text" id="mobile" name="mobile"><br><br>
        
        <input type="checkbox" id="declaration" name="declaration">
        <label for="declaration">I declare the above information is true</label><br><br>
        
        <input type="submit" value="Register">
    </form>

    <div class="sub-heading">Reference</div>

    <div class="paragraph">
        For more information, visit <a href="https://www.w3schools.com/">W3Schools Website</a>.
    </div>
</body>
</html>
