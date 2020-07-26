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
                    <li><a href="job-post.html">Giới thiệu</a></li>
                    <li><a href="listing.html">Dịch Vụ</a></li>
                    <li><a href="job-details.html">Danh sách ứng Viên <span style="color:#ffffff;background:orangered;padding: 2px;border-radius: 5px;text-trasform: none">HOT</span></a></li>
                    <li><a href="#">Liên Hệ</a>
                    </li>
                </ul>

            </div>
            <div class="navbar-right">

                <ul class="sign-in tr-list">
                    <li><i class="fa fa-user"></i></li>
                    <li><a href="{{URL::to('/signin-users')}}">Đăng nhập</a></li>
                    <li><a href="{{URL::to('/signup')}}">Đăng Ký</a></li>
                </ul>
                <a href="job-post.html" class="btn btn-primary">Người Tìm Việc<br>
                    <span style="text-transform: capitalize">Tìm Việc & Tạo Hồ Sơ</span>
                </a>
            </div>
        </div>
    </nav>
</header>
