<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
</head>
<body>
    @foreach($data as $data)
        <iframe src="{{ asset($data->lampiran_file) }}" style="width:800px; height:1000px;">
    @endforeach
</body>
</html>