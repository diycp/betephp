<?php

return [
    'after'                => ':attribute必须是一个晚于:date的日期.',
    'alpha'                => ':attribute仅能包含字母.',
    'alnum'                => ':attribute仅能包含字母、数字.',
    'alnum_dash'           => ':attribute仅能包含字母、数字、下划线.',
    'array'                => ':attribute必须是一个数组.',
    'before'               => ':attribute必须是一个早于:date的日期.',
    'between'              => [
        'numeric' => ':attribute必须在:min到:max之间.',
        'string'  => ':attribute字符长度必须在:min到:max之间.',
        'array'   => ':attribute必须有:min到:max个元素.',
    ],
    'boolean'              => ':attribute必须是0或者1.',
    'chinese'              => ':attribute仅能包含中文.',
    'date'                 => ':attribute不是一个合法的日期.',
    'date_format'          => ':attribute不匹配:format的日期格式.',
    'different'            => ':attribute和:other必须是不相同的.',
    'digits'               => ':attribute必须是:digits位数.',
    'digits_between'       => ':attribute必须是:min位到:max位数之间.',
    'email'                => ':attribute必须是一个可用的邮箱地址.',
    'id_card'              => ':attribute必须是一个身份证号码.',
    'in'                   => ':attribute不是一个合法值.',
    'integer'              => ':attribute必须是一个整数.',
    'ip'                   => ':attribute必须是一个合法的IP地址.',
    'json'                 => ':attribute必须是一个合法的JSON字符串.',
    'max'                  => [
        'numeric' => ':attribute不能大于:max.',
        'string'  => ':attribute不能多于:max个字符.',
        'array'   => ':attribute不能多于:max个元素.',
    ],
    'min'                  => [
        'numeric' => ':attribute不能小于:min.',
        'string'  => ':attribute不能少于:min个字符.',
        'array'   => ':attribute至少包含:min个元素.',
    ],
    'mobile'               => ':attribute必须是一个可用的手机号码.',
    'not_in'               => ':attribute不是一个合法值.',
    'numeric'              => ':attribute必须是一个数字.',
    'regex'                => ':attribute格式校验失败.',
    'required'             => ':attribute必填.',
    'same'                 => ':attribute和:other必须是相同的.',
    'size'                 => [
        'numeric' => ':attribute必须是:size.',
        'string'  => ':attribute必须是:size个字符.',
        'array'   => ':attribute必须包含:size个元素.',
    ],
    'string'               => ':attribute必须是一个字符串.',
    'url'                  => ':attribute必须是一个URL.',
];
