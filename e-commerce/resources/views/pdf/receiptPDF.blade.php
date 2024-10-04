<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .content {
            text-align: left;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="header">{{ $title }}</div>
    <div class="content">
        <p>This is a sample PDF generated using dompdf in Laravel.</p>
        <p>Feel free to add more content here and style it as needed.</p>
    </div>
</body>
</html>
