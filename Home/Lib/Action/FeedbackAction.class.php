<?php

//自定义用户信息反馈信息管理的Action类

class FeedbackAction extends Action{

    //定义意见反馈的函数
    public function addFeedback(){
        $model = D("Feedback");
        $list = $model->create();
        $list['content'] = trim(htmlspecialchars($list['content']));
        $addtime = date("Y-m-d H:i:s",time());
        $list['addtime'] = $addtime;
        if ($model->add($list)) {
            $this->success("反馈成功！等待审核...",U("Index/index"));
        }else{
            $this->error("反馈成功！");
        }
    }
}
