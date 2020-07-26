<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\company_users;
use App\jobs;
use App\zones;
use App\formalitys;
use App\job_categories;


class CompanyController extends Controller
{
    public function index(){
        $profile = company_users::all();
        $zones = zones::all();
        $jobs = jobs::all()->count();
        return view('frontend.company.company_user.profile',['profile' => $profile,'zones'=>$zones,'jobs'=>$jobs]);
    }
    public function getEditProfile($id){
        $profile = company_users::find($id);
        $zones = zones::all();
        return view ('frontend.company.company_user.edit-profile',['profile'=>$profile,'zones'=>$zones]);
    }
    public function postEditProfile(Request $request,$id){
        $profile = company_users::find($id);
//        if ($profile['name'] == $request['name'] && $profile['phone'] == $request['phone'] && $profile['website'] ==
//            $request['website'] && $profile['scales'] == $request['scales'] && $profile['address'] == $request['address'] &&
//            $profile['desc'] == $request['desc'] && $profile['email'] == $request['email']  && $profile['province'] == $request['province']){
//
//            $profile['name'] = $request['name'];
//            $profile['website'] = $request['website'];
//            $profile['scales'] = $request['scales'];
//            $profile['email'] = $request['email'];
//            $profile['province'] = $request['province'];
//            $profile['avatar'] = $request['avatar'];
//            $profile['phone'] = $request['phone'];
//            $profile['address'] = $request['address'];
//            $profile['desc'] = $request['desc'];
//            $profile->save();
//
//            return redirect()->route('company.get.index');
//
//        }

        $this->validate($request,[
            'name' => 'required|min:5|max:50',
            'phone' => 'required|numeric',
//            'id_zone' => 'required',
            'email' => 'required',
//             'avatar' => 'required',
            'scales' => 'required',
            'address' => 'required|max:150',
            'desc' => 'required',


        ],[
            'name.required' => 'Vui lòng điền tên công ty của bạn',
            'name.min' => 'Tên công ty không được ít hơn 5 ký tự',
            'name.max' => 'Tên công ty không được quá 50 ký tự',
            'phone.required' => 'Vui lòng điền số điện thoại ',
//            'id_zone.required' => 'Vui lòng chọn khu vực của bạn',
            'desc.required' => 'Thêm mô tả về công ty',
            'email.required' => 'Vui lòng điền địa chỉ email',
            'address.required' => 'Vui lòng điền địa chỉ của bạn',
            // 'avatar.required' => 'Vui lòng thêm ảnh đại diện',

        ]);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = "avatar_" . Str::random(4). $name;
                if (file_exists($profile['avatar'])) {
                    unlink($profile['avatar']);
                    $profile['avatar'] = "";
                }
                $file->move('frontend/images/avatarcompany/', $AvatarName);
                $urlAvatar = 'frontend/images/avatarcompany/' . $AvatarName;
                $profile['avatar'] = $urlAvatar;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
        $profile['name'] = $request['name'];
        $profile['website'] = $request['website'];
        $profile['scales'] = $request['scales'];
        $profile['email'] = $request['email'];
        $profile['id_zone'] = $request['id_zone'];
        $profile['phone'] = $request['phone'];
        $profile['address'] = $request['address'];
        $profile['desc'] = $request['desc'];
        $profile->save();

        return redirect()->route('company.get.index');
    }
    public function getJob(){
        $job = jobs::all();
        $zones = zones::all();
        return view('frontend.company.jobs.list-job',['job'=>$job,'zones'=> $zones]);
    }
    public function getAddJob(){
        $zones = zones::all();
        $job_categories = job_categories::all();
        $profile = company_users::all('id');
        return view('frontend.company.jobs.add-job',['zones'=>$zones,'job_categories'=> $job_categories,'profile'=>$profile]);
    }
    public function postAddJob(Request $request){
        $this->validate($request,[
//            'job_name' => 'required',
//            'address' => 'required',
//            'deadline_job' => 'required',
//            'amount_people' => 'required',
//            'id_formality' => 'required',
//            'gender' => 'required',
//            'job_desc' => 'required',
//            'salary' => 'required|',
//            'interest' => 'required',
//            'request' => 'required',
//            'images' => 'required',
//            'email_get_cv' => 'required',

        ],[
//            'job_name.required' => 'Điền vào chỗ trống',
//            'company_user_id.required' => 'Điền vào chỗ trống',
//            'job_category_id.required' => 'Điền vào chỗ trống',
//            'zone_id.required' => 'Điền vào chỗ trống',
//            'address.required' => 'Điền vào chỗ trống',
//            'deadline_job.required' => 'Điền vào chỗ trống',
//            'amount_people.required' => 'Điền vào chỗ trống',
//            'id_formality.required' => 'Điền vào chỗ trống',
//            'experience.required' => 'Điền vào chỗ trống',
//            'gender.required' => 'Điền vào chỗ trống',
//            'job_desc.required' => 'Điền vào chỗ trống',
//            'salary.required' => 'Điền vào chỗ trống',
//            'interest.required' => 'Điền vào chỗ trống',
//            'request.required' => 'Điền vào chỗ trống',
//            'images.required' => 'Điền vào chỗ trống',
//            'email_get_cv.required' => 'Điền vào chỗ trống',
        ]);

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = "images_" . Str::random(4). $name;
                $file->move('frontend/images-job/', $AvatarName);
                $urlAvatar = 'frontend/images-job/' . $AvatarName;
                $jobs = new jobs;
                $jobs['job_name'] = $request['job_name'];
                $jobs['company_user_id'] = $request['company_user_id'];
                $jobs['job_category_id'] = $request['job_category_id'];
                $jobs['id_zone'] = $request['id_zone'];
                $jobs['address'] = $request['address'];
                $jobs['deadline_job'] = $request['deadline_job'];
                $jobs['amount_people'] = $request['amount_people'];
                $jobs['formality'] = $request['formality'];
                $jobs['experience'] = $request['experience'];
                $jobs['gender'] = $request['gender'];
                $jobs['job_desc'] = $request['job_desc'];
                $jobs['salary_type'] = $request['salary_type'];
                $jobs['salary_form'] = $request['salary_form'];
                $jobs['salary_to'] = $request['salary_to'];
                $jobs['interest'] = $request['interest'];
                $jobs['request'] = $request['job_desc'];
                $jobs['email_get_cv'] = $request['email_get_cv'];
                $jobs['status'] = 0;
                $jobs['slug_name'] = 0;
                $jobs['images'] = $urlAvatar;

                $jobs->save();


                return redirect()->route('job.get.list')->with('thanhcong', 'Thêm việc làm thành công');
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
    }
    public function getEditJob($id){
        $jobs = jobs::find($id);
        $zones = zones::all();
        $job_categories = job_categories::all();
        $profile = company_users::all('id');
        return view('frontend.company.jobs.edit-job',['zones'=>$zones,'job_categories'=> $job_categories,'profile'=>$profile,'jobs'=>$jobs]);

    }
    public function postEditJob(Request $request,$id){
        $jobs = jobs::find($id);
        $this->validate($request,[
//            'job_name' => 'required',
//            'address' => 'required',
//            'deadline_job' => 'required',
//            'amount_people' => 'required',
//            'id_formality' => 'required',
//            'gender' => 'required',
//            'job_desc' => 'required',
//            'salary' => 'required|',
//            'interest' => 'required',
//            'request' => 'required',
//            'images' => 'required',
//            'email_get_cv' => 'required',

        ],[
//            'job_name.required' => 'Điền vào chỗ trống',
//            'company_user_id.required' => 'Điền vào chỗ trống',
//            'job_category_id.required' => 'Điền vào chỗ trống',
//            'zone_id.required' => 'Điền vào chỗ trống',
//            'address.required' => 'Điền vào chỗ trống',
//            'deadline_job.required' => 'Điền vào chỗ trống',
//            'amount_people.required' => 'Điền vào chỗ trống',
//            'id_formality.required' => 'Điền vào chỗ trống',
//            'experience.required' => 'Điền vào chỗ trống',
//            'gender.required' => 'Điền vào chỗ trống',
//            'job_desc.required' => 'Điền vào chỗ trống',
//            'salary.required' => 'Điền vào chỗ trống',
//            'interest.required' => 'Điền vào chỗ trống',
//            'request.required' => 'Điền vào chỗ trống',
//            'images.required' => 'Điền vào chỗ trống',
//            'email_get_cv.required' => 'Điền vào chỗ trống',
        ]);
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = "images_" . Str::random(4). $name;
                if (file_exists($jobs['images'])) {
                    unlink($jobs['images']);
                    $jobs['images'] = "";
                }
                $file->move('frontend/images-job/', $AvatarName);
                $urlAvatar = 'frontend/images-job/' . $AvatarName;
                $jobs['images'] = $urlAvatar;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
             }
            }
                $jobs['job_name'] = $request['job_name'];
                $jobs['company_user_id'] = $request['company_user_id'];
                $jobs['job_category_id'] = $request['job_category_id'];
                $jobs['id_zone'] = $request['id_zone'];
                $jobs['address'] = $request['address'];
                $jobs['deadline_job'] = $request['deadline_job'];
                $jobs['amount_people'] = $request['amount_people'];
                $jobs['formality'] = $request['formality'];
                $jobs['experience'] = $request['experience'];
                $jobs['gender'] = $request['gender'];
                $jobs['job_desc'] = $request['job_desc'];
                $jobs['salary_type'] = $request['salary_type'];
                $jobs['salary_form'] = $request['salary_form'];
                $jobs['salary_to'] = $request['salary_to'];
                $jobs['interest'] = $request['interest'];
                $jobs['request'] = $request['job_desc'];
                $jobs['email_get_cv'] = $request['email_get_cv'];
                $jobs['status'] = 0;
                $jobs['slug_name'] = 0;
                $jobs->save();
                return redirect()->route('job.get.list');
            }
    public function getDeleteJob($id){
        $jobs = jobs::find($id);
        $jobs->delete();
        return redirect()->route('job.get.list')->with('thanhcong', 'Bạn đã xóa việc làm thành công');
    }



}

