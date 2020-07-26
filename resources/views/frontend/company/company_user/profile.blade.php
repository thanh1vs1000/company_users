@extends('frontend.company.layout-company')
@section('title','Thông Tin Công Ty')
@section('content')
    @foreach( $profile as $pro)
        <div class="tr-breadcrumb bg-image section-before">
            <div class="container">
                <div class="breadcrumb-info text-center">
                    <div class="breadcrumb-logo">
                        <img src="frontend/images/others/company-logo.png" alt="Logo" class="img-fluid">
                    </div>
                    <div class="page-title">
                        <h1 style="text-transform: capitalize; font-size: 35px;">{{$pro['name']}}</h1>
                    </div>
                    <ul class="job-meta tr-list list-inline">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$pro->address}}</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{$pro->phone}}</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>{{$pro->email}}</li>
                        <li><i class="fa fa-black-tie" aria-hidden="true"></i>{{$pro->scales}}</li>
                    </ul>
                </div>
            </div>
        </div>
s
        <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('frontend.company.company_user.siderbar')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">
                            <div class="tr-fun-fact">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="fun-fact media">
                                            <div class="fun-fact-icon">
                                                <img src="frontend/images/icons/fun-fact4.png" alt="images" class="img-fluid">
                                            </div>
                                            <div class="media-body">
                                                <h1 class="counter" style="text-align: center">{{$pro->count()}}</h1>
                                                <span style="text-align: center">Công Việc</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="fun-fact media">
                                            <div class="fun-fact-icon">
                                                <img src="frontend/images/icons/fun-fact5.png" alt="images" class="img-fluid">
                                            </div>
                                            <div class="media-body">
                                                <h1 class="counter">23,563</h1>
                                                <span>Ứng Viên</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="fun-fact media">
                                            <div class="fun-fact-icon">
                                                <img src="frontend/images/icons/fun-fact6.png" alt="images" class="img-fluid">
                                            </div>
                                            <div class="media-body">
                                                <h1 class="counter">27</h1>
                                                <span>Call for interview</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section display-information">
                                <div class="title title-after">
                                    <div class="icon"><img src="frontend/images/icons/2.png" alt="Icon" class="img-fluid"></div>
                                    <span>Thông Tin công ty</span>
                                </div>
                                <div class="change-photo">
                                    <div class="user-image">
                                        <img src="{{$pro->avatar}}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="upload-photo">
                                        <a href="{{route('company.get.editprofile',$pro->id)}}"><label class="btn btn-primary" for="upload-photo">
                                                Chỉnh sửa thông tin
                                            </label></a>
                                    </div>
                                </div>

                                <ul class="tr-list account-details">

                                    <label for="">Tên Công Ty:</label><br>
                                    <span style="font-weight: bold">{{$pro ->name }}</span>
                                    <hr>
                                    <label for="">Mô tả công ty</label><br>
                                    <span>{!! $pro ->desc !!}</span>
                                    <hr>
                                    <label for="">Email:</label><br>
                                    <span style="font-weight: bold">{{$pro ->email }}</span>
                                    <hr>
                                    <label for="">Số điện thoại:</label><br>
                                    <span style="font-weight: bold">{{$pro ->phone }}</span>
                                    <hr>
                                    <label for="">Quy mô công ty:</label><br>
                                    <span style="font-weight: bold">{{$pro ->scales }}</span>
                                    <hr>
                                    <label for="">Khu vực:</label><br>
                                    <span style="font-weight: bold">
                                        @foreach($zones as $zo)
                                            @if($pro['id_zone'] == $zo['id'])
                                    {{$zo['name_zone']}}@endif
                                    @endforeach

                                    </span>
                                    <hr>
                                    <label for="">Địa Chỉ:</label><br>
                                    <span style="font-weight: bold">{{$pro ->address }}</span>
                                    <hr>
                                    <label for="">Website:</label><br>
                                    <span style="color: #1d75b3">{{$pro ->website }}</span>
                                    <hr>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
