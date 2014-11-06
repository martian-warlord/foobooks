<!-- app/views/layouts/base.blade.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>


<!-- includes default content that can be over written by child later-->
    @section('head')
        <link rel="stylesheet" href="style.css" />
    @show
</head>




<body>
	<!-- a section here that we can 
	fill in content for later.  -->
    @yield('body')
</body>
</html>