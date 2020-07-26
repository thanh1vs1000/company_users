@extends('frontend.company.layout-company')
@section('title','Thông Tin Công Ty')
@section('content')

    @include('frontend.company.company_user.header-company')
    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('frontend.company.company_user.siderbar')
                <div class="col-md-8 col-lg-9" style="background:#ffffff">
                    <div class="tab-content">
                        <div role="tabpanel">
                            <div class="tr-fun-fact">
                                    <div class="media-body">
                                        <div class="">
                                            <span class="tr-title" style="font-size: 25px;padding:20px 0px;text-transform: uppercase">Chỉnh sửa thông tin công ty</span>
                                            <p>Cập nhật thông tin công ty giúp các ứng viên có thể dễ dàng tìm thấy </p>
                                            <form method="post" action="{{route('company.post.editprofile',$profile->id)}}" class="tr-form"  enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="">Tên công ty</label>
                                                        <input type="text"  class="form-control" name="name" @if(isset($profile['name']))
                                                            value="{{$profile['name']}}"  @endif>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Thay logo</label><br>
                                                        <input type="file" name="avatar"
                                                        @if(isset($profile['avatar']))
                                                            value="{{$profile['avatar']}}" @endif
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="">Số điện thoại</label>
                                                            <input type="text" class="form-control" name="phone" @if(isset($profile['phone']))
                                                            value="{{$profile['phone']}}"  @endif>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <label for="">Email</label>
                                                            <input type="text" class="form-control" name="email" @if(isset($profile['email']))
                                                            value="{{$profile['email']}}"  @endif>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Địa Chỉ</label>
                                                    <input type="text" class="form-control" name="address" @if(isset($profile['address']))
                                                    value="{{$profile['address']}}"  @endif>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Website</label>
                                                    <input type="text" class="form-control" name="website" @if(isset($profile['website']))
                                                    value="{{$profile['website']}}"  @endif>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Quy Mô Công Ty</label><br>
                                                    <select class="form-control" name="scales">
                                                        <option value="{{$profile['scales']}}">
                                                            @if(isset($profile['scales']))
                                                                {{$profile['scales']}}
                                                            @endif</option>
                                                        <option value="Dưới 10 nhân viên">Dưới 10 nhân viên</option>
                                                        <option value="Từ 10-24 nhân viên">Từ 10-24 nhân viên</option>
                                                        <option value="Từ 25-99 nhân viên">Từ 25-99 nhân viên</option>
                                                        <option value="Từ 100-499 nhân viên">Từ 100-499 nhân viên</option>
                                                        <option value="Từ 500-1000 nhân viên">Từ 500-1000 nhân viên</option>
                                                        <option value="Trên 1000 nhân viên">Trên 1000 nhân viên</option>
                                                        <option value="Trên 5000 nhân viên">Trên 5000 nhân viên</option>
                                                        <option value="Trên 10000 nhân viên">Trên 10000 nhân viên</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Khu vực</label><br>
                                                    <select id="custorm_form" name="id_zone">
                                                        @foreach($zones as $zo)
                                                            <option
                                                                @if($profile['id_zone'] == $zo['id'])
                                                                {{"selected"}}
                                                                @endif
                                                                value="{{$zo->id}}">{{$zo->name_zone}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Mô tả công ty ( hiển trị với mọi người)</label>
                                                    <textarea name="desc" class="ckeditor form-control" id="desc">@if(isset($profile['desc']))
                                                            {{$profile['desc']}} @endif</textarea>
                                                    <script src="./../../../../../frontend/ckeditor/ckeditor.js"></script>
                                                    <script>
                                                        CKEditor.replace('desc');
                                                    </script>
                                                </div>
                                                @if (count($errors) > 0)
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    @foreach ($errors->all() as $error)
                                                        {{ $error }}<br>
                                                    @endforeach
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                @endif
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary pull-right">Cập nhật thông tin</button>
                                                    <a href="{{route('company.get.index')}}" class="btn button-cancle">Cancle</a>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                            </ul>
                            {{--                        <div class="buttons pull-right">--}}
                            {{--                            <a href="#" class="btn button-cancle">Cancle</a>--}}
                            {{--                            <a href="#" class="btn btn-primary">Update Profile</a>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection




