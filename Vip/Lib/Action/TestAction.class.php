<?php

class TestAction extends CommonAction {

    public function _initialize() {
        header("Content-Type:text/html; charset=utf-8");
    }

    public function xxx() {
        $fck = D('Fck');
        $fck->rifenhong();
        $this->_clearing();
        echo "<p style='text-align:center; margin-top:50px;color:blue'>日分红成功!</p>";
    }

    public function ss() {
        $fck = D('Fck');
        $fck_rs=$fck->where("re_id in (select id from xt_fck where re_id=1)")->field('user_id')->find();
        echo $fck->get_f4(1,3);
    }

    public function xxxx($user_id) {
        $data = array(
            shop_id => 1,
            shop_name => '100000',
            re_id => 1,
            re_name => '100000',
            re_level => '1',
            user_id => $user_id, //新点位账号
            bind_account => '3333',
            last_login_ip => '',
            verify => '0',
            status => '1',
            type_id => '0',
            last_login_time => '0',
            login_count => '0',
            info => '信息',
            name => '名称',
            password => '96e79218965eb72c92a549dd5a330112',
            passopen => 'e3ceb5881a0a1fdaad01296d7554868d',
            pwd1 => 111111,
            pwd2 => 222222,
            wenti => '你爱人叫什么名字？',
            wenti_dan => 'xx',
            bank_name => '农业银行',
            bank_card => '11122',
            user_name => '222',
            nickname => '483615',
            bank_province => '请选择',
            bank_city => '请选择',
            bank_address => '4554',
            user_code => '888',
            user_address => '888',
            email => '888',
            qq => '8888',
            user_tel => '138',
            is_pay => 0,
            rdt => time(),
            u_level => '1',
            cpzj => 5000,
            f4 => '1',
            wlf => '0',
            pdt => time(),
            open => 1,
            p_path => '',
            treeplace => 0,
            p_level => 0,
            father_id => 0,
            father_name => '',
            real_name => '',
            real_id => 0
        );
        $fck = M('fck');
        $fck->add($data);
    }

    public function test() {
        for ($i = 1; $i <= 100; $i++) {
            $this->xxxx($i);
        }
    }

}

?>