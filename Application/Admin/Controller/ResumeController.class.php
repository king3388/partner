<?php
namespace Admin\Controller;
use Think\Controller;
//use Admin\Model\LoginModel;
class ResumeController extends Controller {
	function index(){//加载主页
        //reset_authed(I('param.id',"1"));//session设置
        $user_id['user_id'] = user_id();
        $data                   = M('resume')->where($user_id)->order("id desc")->select();
        //dump($data);
        $this->assign('data',$data);
        $this->display('resume:list');
	}
   function test(){
       echo 'welcome to yijianyi partner!' ;
   }
   function  resume_list(){
       //$data = M('resume','yijiayi')->order("id desc")->select();
       //dump($data);
       //$this->assign('data',$data);
       $this->display('resume:resume_list');
   }

    // todo;
    // function introduction(){//招聘信息简介
    //     $id['id']               = I('param.pid');
    //     $data                   = M('position')->where($id)->find();
    //     $this->assign('data',$data);
    //     $this->display('admin:introduction');
    // }

    // function resume(){//点击我要应聘，检测是否存在用户,是否登录
    //     $check                  = session('authed');
    //     if($check==''){
    //         $res_c['msg']       = "need_login";
    //     }else{
    //         $id['user_id']      = $check;
    //         $id['position_id']    =I('param.resume_id');
    //         $res = M('resume','yijiayi.')->where($id)->find();            
    //         if($res==''){
    //             $res_c['msg']   = "need_create";
    //         }
    //         else{
    //             $res_c['msg']   = "sure";
    //         }
    //     }
    //     $this->ajaxReturn($res_c);
    // }


    // function push_check(){//点击推荐用户时是检测是否登录
    //     $check = session('authed');
    //     if($check==''){
    //         $res_p['msg']       = "need_login";
    //     }else{
    //         $res_p['msg']       = "sure";
    //     }
    //     $this->ajaxReturn($res_p);
    // }

    // function create_resume(){//创建简历页面加载
    //     $position_id            = I('param.pid','');
    //     if($position_id==''){
    //         $this->error('信息错误', '/Admin/job/index');
    //     }else{
    //         $this->assign('position_id',$position_id);
    //         $this->display('admin:resume');
    //     }        
    // }

    // function pushsomeone(){//推荐人页面加载
    //     $position_id            = I('param.pid','');
    //     if($position_id==''){
    //         $this->error('信息错误', '/Admin/job/index');
    //     }else{
    //         $this->assign('position_id',$position_id);
    //         $this->display('admin:recommend');
    //     }
    // }

    
    // function new_resume(){//创建个人简历后台处理

    //     user_session('job/index');//检测是否已经登录
    //     $data['user_id']        = user_id();
    //     $data['phone']          = I('param.phone');
    //     $data['name']           = I('param.name');
    //     $data['age']            = I('param.age');
    //     $data['degree']         = I('param.degree');
    //     $data['email']          = I('param.email');
    //     $data['about']          = I('param.about');
    //     $data['position_id']    = I('param.position_id');        
    //     $res_create_resume  = M('resume','yijiayi.')->data($data)->add();
    //     if($res_create_resume!=''){
    //         $res_date['msg']    = 'ok';
    //         $res_date['re_id']  = $res_create_resume;
    //     }
    //     else{
    //         $res_date['msg']    = 'false';
    //     }
    //     $this->ajaxReturn($res_date);
    // }

    
    // function look_resume(){//查看简历信息以及招聘信息页面
    //     $position_msg['id']       = I('param.pid');//简历的id
    //     $resume_msg['user_id']    = user_id();//用户sessionid
    //     $resume_msg['position_id']= I('param.pid');//简历的id

    //     $position                 = M('position','yijiayi.')->where($position_msg)->find(); //查询简历
        
    //     $resume                   = M('resume','yijiayi.')->where($resume_msg)->order('id desc')->find(); 

    //     $this->assign('position',$position);
    //     $this->assign('resume',$resume);
    //     $this->display('admin:look_resume');
    // }

    // function application(){
    //     $data_a['date_of_create']   = date('y-m-d',time());
    //     $data_a['owner_id']         = user_id();
    //     $data_a['position_id']      = I('param.position_id');
    //     $data_a['resume_id']        = I('param.resume_id');
    //     $res = M('application','yijiayi.')->data($data_a)->add();
    //     if($res!=''){
    //         $rt_da['msg'] = 'ok';
    //     }
    //     else{
    //         $rt_da['msg'] = 'false';
    //     }
    //     $this->ajaxReturn($rt_da);        
    // }

    // //清楚session函数
    // function test(){
    //     unset_session('authed');
    //     unset_session('id');
    // }

    // function publish(){
    //     $this->display('admin:publish');
    // }

    // function create_publish(){
    //     $data['describe']       = I('param.describe');
    //     $data['need']           = I('param.need');
    //     $data['salary']         = I('param.salary');
    //     $data['job']            = I('param.job');
    //     $data['degree']         = I('param.degree');
    //     $data['work_place']     = I('param.work_place');
    //     $data['number']         = I('param.number');
    //     $data['experience']     = I('param.experience');
    //     $data['time']           = date('y-m-d h',time());
    //     $data['territory']      = I('param.territory');
    //     $res = M('position','yijiayi.')->data($data)->add();
    //     if($res!=''){
    //         $rrturn_create['msg'] = 'ok';
    //     }
    //     else{
    //         $rrturn_create['msg'] = 'false';
    //     }
    //     $this->ajaxReturn($rrturn_create);        
    // }
}