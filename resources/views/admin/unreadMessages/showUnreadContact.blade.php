<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container mt-3">
        <h2>{{ $contact->name }}</h2>
        <table class="table table-borderless">
            <tbody>
            <tr>
                <td>Email</td>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>{{ $contact->subject }}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td style="word-break:break-all;">{{ $contact->message }}</td>
            </tr>
            <tr>
                <td>Created at</td>
                <td>{{ $contact->created_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
