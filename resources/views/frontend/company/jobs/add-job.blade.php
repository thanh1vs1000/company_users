@extends('frontend.company.layout-company')
@section('title','Thêm Công Việc')
@section('content')
<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Post Your Job</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Job Post</li>
            </ol>
        </div>
    </div>
</div>
<div class="tr-post-job page-content">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <form action="{{route('job.post.add')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="short-info code-edit-small">
                    <div class="section">
                        <span class="tr-title">THÔNG TIN CÔNG VIỆC</span>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Tên Công Việc</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="custorm_form" name="job_name"  placeholder="Tuyển dụng lập trình PHP ,JAVA v.v">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Danh mục</label>
                            </div>
                            <div class="col-sm-9">
                                    <select id="custorm_form"  name="job_category_id">
                                        @foreach($job_categories as $job_cate)
                                            <option value="{{$job_cate->id}}">{{$job_cate->job_category_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="row job-category">
                            <div class="col-sm-3">
                                <label>Hình Thức Công Việc</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="job-type">
                                    <input type="radio" name="formality" value="Full Time" id="full-time"> <label for="full-time">Full Time</label>
                                    <input type="radio" name="formality" value="Part-time" id="part-time"> <label for="part-time">Part Time</label>
                                    <input type="radio" name="formality" value="Freelance" id="freelance"> <label for="freelance">Freelance</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Kinh Nghiệm</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="custorm_form" name="experience">
                                    <option value="Dưới 1 năm">Dưới 1 Năm</option>
                                    <option value="2 năm">2 Năm</option>
                                    <option value="3 năm">3 Năm</option>
                                    <option value="4 năm">4 Năm</option>
                                    <option value="5 năm">5 Năm</option>
                                    <option value="Trên 5 năm">Trên 5 Năm</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Nơi Làm Việc</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="address" id="custorm_form" placeholder="Số nhà - Đường - Quận,Huyện - Thành phố">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select id="custorm_form" name="id_zone">
                                            @foreach($zones as $zo)
                                            <option value="{{$zo->id}}">{{$zo->name_zone}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Mức Lương</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input type="radio" name="salary_type" value="Từ" id="checkvnd" onclick="show1();"> <label for="checkvnd">Từ</label>
                                        <input type="radio" name="salary_type"  value="Trong Khoảng" id="checkusd" onclick="show2();"> <label for="checkusd">Trong Khoảng</label>
                                        <input type="radio" name="salary_type"  value="Lên Đến" id="checkuss" onclick="show3();"> <label for="checkuss">Lên Đến</label>
                                        <div id="div1" class="">
                                            <input type="text" name="salary_form" class="code-edit" class="hide">
                                        </div>
                                        <div id="div2" class="hide">
                                            <span>-</span><input type="text" name="salary_to" class="code-edit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Hạn Nộp Hồ Sơ</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="calendar">
                                    <input type="date" class="form-control" name="deadline_job">
                                </div>
                            </div>
                        </div>
                        <div class="row exprience-level">
                            <div class="col-sm-3">
                                <label>Giới Tính</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="exprience">
                                    <input type="radio" name="gender" value="Nam" id="boy-gender"> <label for="boy-gender">Nam</label>
                                    <input type="radio" name="gender" value="Nữ" id="girl-gender"> <label for="girl-gender">Nữ</label>
                                    <input type="radio" name="gender" value="Không yêu cầu" id="all-gender"> <label for="all-gender">Không Yêu Cầu</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <label>Số lượng cần tuyển</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" name="amount_people" class="code-edit" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Email nhận CV</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="email" name="email_get_cv" class="code-edit" >
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-3">
                            <label>Banner/poster</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="file" name="images" >
                        </div>
                    </div>
                    </div>
                </div>
                <div class="job-description section">
                    <span class="tr-title">Chi tiết công việc</span>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Mô tả công việc</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea name="job_desc" id="" cols="75" rows="20"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Yêu Cầu:</label>
                        </div>
                        <div class="col-sm-9">
                            <div>
                                <textarea name="request" id="" cols="75" rows="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Quyền Lợi</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea name="interest"  id="" cols="75" rows="20"></textarea>
                        </div>
                    </div>
                    @foreach($profile as $pro)
                    <input type="hidden" name="company_user_id" value="{{$pro->id}}">
                        @endforeach
                </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger span8">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif
                <div class="section agreement">
                    <button type="submit" class="btn btn-primary" id="btn">ĐĂNG CÔNG VIỆC</button>
                    <button type="reset" class="btn btn-info">LÀM MỚI</button>
                </div>
                </form>
            </div>

            <div class="col-md-3">
                <div class="section quick-rules">
                    <span class="tr-title">Quick Rules</span>
                    <p>Posting an ad on <a href="#">Seeker.com</a> is free! However, all post must follow our rules:</p>
                    <ul class="tr-list">
                        <li>Make sure you post in the correct category.</li>
                        <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                        <li>Do not upload pictures with watermarks.</li>
                        <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        <li>Do not put your email or phone numbers in the title or description.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<script !src="">
    function show1(){
        document.getElementById('div1').style.display ='block';
        document.getElementById('div2').style.display ='none';
    }
    function show2(){
        document.getElementById('div2').style.display = 'block';
    }
    function show3(){
        document.getElementById('div1').style.display ='block';
        document.getElementById('div2').style.display ='none';
    }
</script>
@endsection
