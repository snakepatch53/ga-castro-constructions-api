<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Form Email</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .message {
            margin-top: 20px;
        }

        .message p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Form Submission</h1>
        <table>
            <tr>
                <th>Fullname: </th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th>Email: </th>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <th>Address: </th>
                <td>{{ $address }}</td>
            </tr>
            <tr>
                <th>Phone: </th>
                <td>{{ $phone }}</td>
            </tr>
        </table>
        <div class="message">
            <h2>Message:</h2>
            <p>{{ $message_text }}</p>
        </div>
    </div>
</body>

</html>
