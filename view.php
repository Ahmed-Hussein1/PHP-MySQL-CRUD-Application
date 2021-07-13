<html> 
    <head>
    <style>
        table tr:nth-child(odd) {
            background-color: #fde4d0;
        }


        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0px 0px;
            font-size: 12px;
        }

        th {
            background: #f79646;
            color: #fff;
            padding: 10px 5px;
            text-align: center;
            border-right: 1px solid #f9b074;
            border-left: 1px solid #f9b074;
            letter-spacing: 1px;
            font-weight: bold;
            text-transform: uppercase;

        }


        td {
            padding: 10px 5px;
            border-bottom: 1px solid #f9b074;
            vertical-align: middle;
            letter-spacing: .5px;
            text-align: center;
            border-left: 1px solid #f9b074;
            border-right: 1px solid #f9b074;

        }

        tr {
            background: #fff;
        }

        td * {
            padding: 10px 20px 10px 20px;
        }
    </style>
    </head>
<?php 
//conecction
$connect = new PDO("mysql:host=localhost;dbname=phptrack" ,"root","");
//query
$studentData = $connect -> query("select * from students where id='{$_GET['id']}'");
$result = $studentData ->fetch(PDO::FETCH_ASSOC);
echo "<table>
<tr>
<th>StudentID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
</tr>
";

echo "<tr>";
echo "<td>{$result['id']}</td>";
echo "<td>{$result['fname']}</td>";
echo "<td>{$result['lname']}</td>";
echo "<td>{$result['email']}</td>";
echo "<td>{$result['address']}</td>";
echo "</tr>";
    echo "</table>";
?>
</body>
</html>