@extends('frontend.company.layout-company')
@section('title','Thêm Công Việc')
@section('content')
    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('frontend.company.company_user.siderbar')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <a href="{{route('job.get.add')}}"><span id="btn-addjob" class="btn btn btn-info"><i class="fa fa-plus-square-o"></i>CÔNG VIỆC MỚI</span></a>
                        @if(session('thanhcong'))
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Success!</strong>{{session('thanhcong')}}
                            </div>
                        @endif
                        <div role="tabpanel" class="tab-pane open-role active show" id="open-role">
                            @foreach($job as $jobs)
                            <div class="role remove-item">
                                <div class="left-content">
                                    <div class="clearfix">
                                            <span class="tr-title">
                                            <a href="#" style="text-transform: capitalize">{{$jobs->job_name}}</a>
                                            </span>
                                        <span><a href="#" class="btn btn-primary">{{$jobs->formality}}</a></span>
                                    </div>
                                    <span class="deadline">Hạn Nộp : {{$jobs->deadline_job}}</span>
                                    <ul class="tr-list job-meta">

                                        <li><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                @foreach($zones as $zo)
                                            </span>@if($jobs['id_zone'] == $zo['id'])
                                        {{$zo['name_zone']}}@endif
                                            @endforeach
                                        </li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>{{$jobs->experience}}</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>{{$jobs->salary_type}} : {{$jobs->salary_form}}tr
                                                @if($jobs['salary_to'] != null)
                                                    <span>-</span>
                                                    @endif
                                            {{$jobs->salary_to}}@if($jobs['salary_to'] != null)
                                                <span>tr</span>
                                            @endif</li>
                                    </ul>
                                </div>
                                <div class="right-content">
                                    <span><a href="{{route('job.get.edit',$jobs->id)}}"><i class="fa fa-pencil"></i></a></span>
                                    <span class="remove-icon">
                                        <a onclick="return xoaSanPham();" href="{{route('job.get.delete',$jobs->id)}}" >
                                            <i class="fa fa-trash-o"></i></a></span>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);
    </script>

@endsection

