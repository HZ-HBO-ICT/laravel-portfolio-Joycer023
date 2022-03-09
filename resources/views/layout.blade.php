<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>Joyce Roth | PORTFOLIO
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=EB+Garamond&family=Karma:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/style.css') }}"/>

</head>
<header>
    <nav>
        <div class="logo">Joyce Roth</div>
        <label for="btn" class="icon">
            <span class="fas fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" >Home</a></li>
            <li><a href="profile" >Profile</a></li>
            <li><a href="dashboard">Dashboard</a></li>
            <li><a href="grade">Grades</a></li>
            <li>
                <label for="btn-1" class="show">Profession +</label>
                <a href="profession">Profession</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="nordwave" >Nordwave Security</a></li>
                    <li><a href="capgemini">Capgemini</a></li>
                    <li><a href="centric">Centric</a></li>
                    <li><a href="ing">ING Group</a></li>
                    <li><a href="bol">Bol.com</a></li>
                    <li><a href="macaw">Macaw</a></li>
                    <li><a href="yoursurprise">YourSurprise</a></li>
                    <li><a href="veracode">VeraCode</a></li>
                </ul>
            </li>
            <li><a href="motivation">Motivation</a></li>
            <li><a href="articles">Blog</a></li>
            <li><a href="faq">FAQ</a></li>
        </ul>
    </nav>
</header>
<body>
    @yield('content')
</body>

</body>
</html>
