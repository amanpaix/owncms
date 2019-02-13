<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agencyfy is a html template for agency and business consulting" />
    <meta name="keywords" content="Agency, Landing, Business, Onepage, Html" />
    <title>OWN CMS</title>
    @include('elements.header')
</head>
<body class="home-alt" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">
    @include('elements.navbar')
    @yield("content");
    @include('elements.footer')

</body>
</html>