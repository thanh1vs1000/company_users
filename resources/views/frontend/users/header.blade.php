<header class="tr-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('/index')}}"><img class="img-fluid" src="frontend/images/logo.png" alt="Logo"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    </li>
                    <li><a href="job-post.html">Việc Làm <span style="color:#ffffff;background:orangered;padding: 2px;border-radius: 5px;text-transform: none">HOT</span></a></li>
                    <li><a href="listing.html">Quản Lý CV</a></li>
                    <li><a href="job-details.html">Công Ty</a></li>
                    <li><a href="#">Khám phá</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-right">

                <ul class="sign-in tr-list">
                    <li><i class="fa fa-user"></i></li>
                    <li><a href="{{URL::to('/signin-users')}}">Đăng nhập</a></li>
                    <li><a href="{{URL::to('/signup')}}">Đăng Ký</a></li>
                </ul>
                <a href="job-post.html" class="btn btn-primary">NHÀ TUYỂN DỤNG <br>
                    <span>Đăng tuyển & tìm hồ sơ</span>
                </a>

            </div>
        </div>
    </nav>
</header>
