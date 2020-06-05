<!DOCTYPE html>
<html lang="en">
<head>
    <title>Livewire</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <livewire:styles />
    <livewire:scripts />
</head>
<body class="flex justify-center">
    <div class="flex w-10/12 my-10">
        <div class="w-5/12 p-2 border rounded">
            <livewire:tickets />
        </div>
        <div class="w-7/12 p-2 mx-2 border rounded">
            <livewire:comments />
        </div>
    </div>

</body>
</html>
