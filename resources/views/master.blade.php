<!DOCTYPE html>
<html>
<head>
    <title>Roomates</title>
    @include("includes/head")
</head>
<body>
<div class="main-wrap">
@include("includes/nav")
    <div class="main-container">
@yield("content")
    </div>
@include("includes/footer")
</div>
@include("includes/scripts")
</body>
</html>