<!DOCTYPE html>
<html>
<head>
    <title>Rujukan PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Rujukan Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        <tr>
            <td>{{ $rujukan->id }}</td>
            <td>{{ $rujukan->name }}</td>
            <td>{{ $rujukan->description }}</td>
            <td>{{ $rujukan->created_at }}</td>
            <td>{{ $rujukan->updated_at }}</td>
        </tr>
    </table>
</body>
</html>