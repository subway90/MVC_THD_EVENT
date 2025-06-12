<?php


# [RENDER]
if(!get_action_uri(1) || get_action_uri(1) == 'step-1') view('user','Chọn địa điểm','get-pricing-serivce-step-1',null);
if(get_action_uri(1) == 'step-2') view('user','Chọn dịch vụ','get-pricing-serivce-step-2',null);
if(get_action_uri(1) == 'step-3') view('user','Chọn ngày giờ, số lượng','get-pricing-serivce-step-3',null);
if(get_action_uri(1) == 'step-4') view('user','Thông tin & liên hệ','get-pricing-serivce-step-4',null);
if(get_action_uri(1) == 'step-5') view('user','Hoàn thành','get-pricing-serivce-step-5',null);