<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/userProfile.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">PR10</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container__info d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="upper"><img src="/img/1.jpg" class="img-fluid"></div>
        <div class="user text-center">
            <div class="profile"><img src="/img/2.jpg" class="rounded-circle" width="80"></div>
        </div>
        <div class="mt-5 text-center">
            <h4 class="mb-0">Vitalik Vasylykha</h4> <span class="text-muted d-block mb-2">Perechyn</span>
            <button class="btn btn-primary btn-sm follow">Follow</button>
            <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                <div class="stats">
                    <h6 class="mb-0">Followers</h6> <span>100</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Following</h6> <span>129</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Projects</h6> <span>10</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
