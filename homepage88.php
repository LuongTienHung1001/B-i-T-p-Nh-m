<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./click.js">
   <!-- <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        integrity="sha512-1fPmaHba3v4A7PaUsComSM4TBsrrRGs+/fv0vrzafQ+Rw+siILTiJa0NtFfvGeyY5E182SDTaF5PqP+XOHgJag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style>
        section img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    
    <div class="container" style="max-width:1000px; margin:0 auto;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container py-3" style="max-width: 1024px;">
                <a class="navbar-brand flex-grow-1" href="#">𝓘𝓷𝓽𝓪𝓻𝓰𝓻𝓪𝓶</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <div class="d-flex align-items-center">
                            <a href="#" class="px-3"><svg aria-label="Home" class="_8-yf5 " color="#262626" fill="#262626"
                                    height="24" role="img" viewBox="0 0 24 24" width="24">
                                    <path
                                        d="M22 23h-6.001a1 1 0 01-1-1v-5.455a2.997 2.997 0 10-5.993 0V22a1 1 0 01-1 1H2a1 1 0 01-1-1V11.543a1.002 1.002 0 01.31-.724l10-9.543a1.001 1.001 0 011.38 0l10 9.543a1.002 1.002 0 01.31.724V22a1 1 0 01-1 1z">
                                    </path>
                                </svg></a>
                            <a href="#" class="px-3"><svg aria-label="Messenger" class="_8-yf5 " color="#262626" fill="#262626"
                                    height="24" role="img" viewBox="0 0 24 24" width="24">
                                    <path
                                        d="M12.003 2.001a9.705 9.705 0 110 19.4 10.876 10.876 0 01-2.895-.384.798.798 0 00-.533.04l-1.984.876a.801.801 0 01-1.123-.708l-.054-1.78a.806.806 0 00-.27-.569 9.49 9.49 0 01-3.14-7.175 9.65 9.65 0 0110-9.7z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="1.739">
                                    </path>
                                    <path
                                        d="M17.79 10.132a.659.659 0 00-.962-.873l-2.556 2.05a.63.63 0 01-.758.002L11.06 9.47a1.576 1.576 0 00-2.277.42l-2.567 3.98a.659.659 0 00.961.875l2.556-2.049a.63.63 0 01.759-.002l2.452 1.84a1.576 1.576 0 002.278-.42z"
                                        fill-rule="evenodd"></path>
                                </svg></a>
                            <a href="#" class="px-3"><svg aria-label="New Post" class="_8-yf5 " color="#262626" fill="#262626"
                                    height="24" role="img" viewBox="0 0 24 24" width="24">
                                    <path
                                        d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"></path>
                                    <line fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001"
                                        y2="12.001"></line>
                                    <line fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545"
                                        y2="17.455"></line>
                                </svg></a>
                            <a href="#" class="px-3"><svg aria-label="Find People" class="_8-yf5 " color="#262626" fill="#262626"
                                    height="24" role="img" viewBox="0 0 24 24" width="24">
                                    <polygon fill="none"
                                        points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"></polygon>
                                    <polygon fill-rule="evenodd"
                                        points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056">
                                    </polygon>
                                    <circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                </svg></a>
                            <a href="#" class="px-3"><svg aria-label="Activity Feed" class="_8-yf5 " color="#262626" fill="#262626"
                                    height="24" role="img" viewBox="0 0 24 24" width="24">
                                    <path
                                        d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                    </path>
                                </svg></a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="story-icon-main"
                                        src="data:image/jpeg;base64,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"
                                        style="border-radius:50% ; width: 25px; height: 25px;">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./profile.html">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Saved</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Switch Accounts</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="./login.php">Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="main" style="max-width: 500px;margin: 50px  auto">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src="./img/istockphoto-1267194556-170667a.jpg" alt="...">
                        <img src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg" alt="...">
                        <img src="./img/photo-1639318977081-f08ba8e8605d.jpg" alt="...">
                        <img src="./img/photo-1639697724570-e688c7cb5c4e.jpg" alt="...">
                        <img src="./img/photo-1639905517784-b036046b14fc.jpg" alt="...">
                        <img src="./img/photo-1639972584775-e23e861f1595.jpg" alt="...">
                        <img src="./img/istockphoto-1267194556-170667a.jpg" alt="...">
                        <img src="./img/photo-1607670055106-e9280ef1c405.jpg" alt="...">

                    </div>
                    <div class="carousel-item text-center">
                        <img src="./img/photo-1608926712931-c2586dbcc7e5.jpg" alt="...">
                        <img src="./img/photo-1639670788995-6592bbfdd65c.jpg" alt="...">
                        <img src="./img/photo-1639697724570-e688c7cb5c4e.jpg" alt="...">
                        <img src="./img/photo-1639905517784-b036046b14fc.jpg" alt="...">
                        <img src="./img/photo-1639972584775-e23e861f1595.jpg" alt="...">
                        <img src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg" alt="...">
                        <img src="./img/photo-1639670788995-6592bbfdd65c.jpg" alt="...">
                        <img src="./img/istockphoto-1267194556-170667a.jpg" alt="...">

                    </div>
                    <div class="carousel-item text-center">
                        <img src="./img/photo-1520262494112-9fe481d36ec3.jpg" alt="...">
                        <img src="./img/photo-1592899677977-9c10ca588bbd.jpg" alt="...">
                        <img src="./img/photo-1607670055106-e9280ef1c405.jpg" alt="...">
                        <img src="./img/photo-1608926712931-c2586dbcc7e5.jpg" alt="...">
                        <img src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg" alt="...">
                        <img src="./img/photo-1639318977081-f08ba8e8605d.jpg" alt="...">
                        <img src="./img/photo-1639670788995-6592bbfdd65c.jpg" alt="...">
                        <img src="./img/photo-1639905517784-b036046b14fc.jpg" alt="...">

                    </div>
                </div>
                <button class="carousel-control-prev bg-danger" style="top: 10px; width: 20px; height: 20px;"
                    type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">

                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next bg-danger" style="top: 10px; width: 20px; height: 20px;"
                    type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">

                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>


        <div class="wrapper">
            <div class="left-col">


                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="./img/photo-1639972584775-e23e861f1595.jpg" alt=""></div>
                            <p class="username">Porsche</p>
                        </div>
                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                            role="img" viewBox="0 0 24 24" width="24">
                            <circle cx="12" cy="12" r="1.5"></circle>
                            <circle cx="6" cy="12" r="1.5"></circle>
                            <circle cx="18" cy="12" r="1.5"></circle>
                        </svg>                       
                    </div>
                    <img src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <div class="btn_antim">
                            <svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <path
                                    d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                </path>
                            </svg>
                           </div>
                            <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <svg aria-label="Share Post" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22"
                                    x2="9.218" y1="3" y2="10.083"></line>
                                <polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                            <svg aria-label="Save" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                        </div>
                        <p class="like1"> 0 </p>
                        <p class="description"><span>Porsche</span>Merry Christmas  </p>
                        <p class="post-time">1 days ago</p>
                    </div>
                    <div class="comment-wrapper">
                   
                        <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                            viewBox="0 0 24 24" width="24">
                            <path
                                d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                            </path>
                        </svg>
                    
                        <input type="text" class="comment-box" placeholder="  Add a comment...">
                        <button class="comment-btn">Post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="./img/photo-1520262494112-9fe481d36ec3.jpg" alt=""></div>
                            <p class="username">McLaren</p>
                        </div>
                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                            role="img" viewBox="0 0 24 24" width="24">
                            <circle cx="12" cy="12" r="1.5"></circle>
                            <circle cx="6" cy="12" r="1.5"></circle>
                            <circle cx="18" cy="12" r="1.5"></circle>
                        </svg>
                    </div>
                    <img src="./img/photo-1592899677977-9c10ca588bbd.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                        <div class="btn_antim">
                            <svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <path
                                    d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                </path>
                            </svg>
                        </div>
                            <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <svg aria-label="Share Post" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22"
                                    x2="9.218" y1="3" y2="10.083"></line>
                                <polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                            <svg aria-label="Save" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                        </div>
                        <p class="likes">1,5721</p>
                        <p class="description"><span>McLaren </span> Tiền nhiều để làm gì ??? </p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                            viewBox="0 0 24 24" width="24">
                            <path
                                d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                            </path>
                        </svg>
                        <input type="text" class="comment-box" placeholder="  Add a comment...">
                        <button class="comment-btn">Post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="./img/photo-1607670055106-e9280ef1c405.jpg" alt=""></div>
                            <p class="username">Ferrari</p>
                        </div>
                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                            role="img" viewBox="0 0 24 24" width="24">
                            <circle cx="12" cy="12" r="1.5"></circle>
                            <circle cx="6" cy="12" r="1.5"></circle>
                            <circle cx="18" cy="12" r="1.5"></circle>
                        </svg>
                    </div>
                    <img src="./img/photo-1608926712931-c2586dbcc7e5.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <path
                                    d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                </path>
                            </svg>
                            <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <svg aria-label="Share Post" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22"
                                    x2="9.218" y1="3" y2="10.083"></line>
                                <polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                            <svg aria-label="Save" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                        </div>
                        <p class="likes">3,5721</p>
                        <p class="description"><span>Ferrari </span> 26 Sơn La chào anh em nhá :)) </p>
                        <p class="post-time">3 days ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                            viewBox="0 0 24 24" width="24">
                            <path
                                d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                            </path>
                        </svg>
                        <input type="text" class="comment-box" placeholder="  Add a comment...">
                        <button class="comment-btn">Post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="./img/photo-1639318977081-f08ba8e8605d.jpg" alt=""></div>
                            <p class="username">Lamborghini</p>
                        </div>
                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                            role="img" viewBox="0 0 24 24" width="24">
                            <circle cx="12" cy="12" r="1.5"></circle>
                            <circle cx="6" cy="12" r="1.5"></circle>
                            <circle cx="18" cy="12" r="1.5"></circle>
                        </svg>
                    </div>
                    <img src="./img/photo-1639905517784-b036046b14fc.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <path
                                    d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                </path>
                            </svg>
                            <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <svg aria-label="Share Post" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22"
                                    x2="9.218" y1="3" y2="10.083"></line>
                                <polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                            <svg aria-label="Save" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                        </div>
                        <p class="likes">5,5721</p>
                        <p class="description"><span>Lamborghini </span> Giàu vì bạn sang vì vợ :v :v :v </p>
                        <p class="post-time">3 hours ago</p>
                    </div>
                    <div class="comment-wrapper"><svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626"
                            height="24" role="img" viewBox="0 0 24 24" width="24">
                            <path
                                d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                            </path>
                        </svg> 
                        <svg aria-label="Biểu tượng cảm xúc" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z"></path></svg>
                        <input type="text" class="comment-box" placeholder="  Add a comment...">
                        <button class="comment-btn">Post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="./img/istockphoto-1267194556-170667a.jpg" alt=""></div>
                            <p class="username">Bugatti</p>
                        </div>
                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                            role="img" viewBox="0 0 24 24" width="24">
                            <circle cx="12" cy="12" r="1.5"></circle>
                            <circle cx="6" cy="12" r="1.5"></circle>
                            <circle cx="18" cy="12" r="1.5"></circle>
                        </svg>
                    </div>
                    <img src="./img/photo-1607670055106-e9280ef1c405.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <path
                                    d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                </path>
                            </svg>
                            <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <svg aria-label="Share Post" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22"
                                    x2="9.218" y1="3" y2="10.083"></line>
                                <polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                            <svg aria-label="Save" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                        </div>
                        <p class="likes">7,5721</p>
                        <p class="description"><span>Bugatti </span> 29X5 chào anh em nhá :v :v :v </p>
                        <p class="post-time">5 hours ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img"
                            viewBox="0 0 24 24" width="24">
                            <path
                                d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                            </path>
                        </svg>
                        <input type="text" class="comment-box" placeholder="  Add a comment...">
                        <button class="comment-btn">Post</button>
                    </div>
                </div>

            </div>
        </div>
        </section>
    </div>
   <!-- <script src="/Javascrip/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
        // THẢ TIM
        $(".btn_antim").click(function(){
            $(".btn_antim").hide();
            $(".btn_hientim").show();
        })
    </script>
        <script>
            // THẢ TIM
            $(".btn_hientim").click(function(){
                $(".btn_hientim").hide();
                $(".btn_antim").show();
            })
        </script>
</body>

</html>