<?php

/**
 * StringValidator类
 * @author 刘健 <code.liu@qq.com>
 */

namespace mix\validator;

class StringValidator extends BaseValidator
{

    // 允许的功能集合
    protected $allowActions = ['length', 'minLength', 'maxLength', 'filter'];

    // 过滤处理
    protected function filter($param)
    {
        foreach ($param as $value) {
            switch ($value) {
                case 'trim':
                    $this->attributes[$this->attribute] = trim($this->attributes[$this->attribute]);
                    break;
                case 'strip_tags':
                    $this->attributes[$this->attribute] = strip_tags($this->attributes[$this->attribute]);
                    break;
                case 'htmlspecialchars':
                    $this->attributes[$this->attribute] = htmlspecialchars($this->attributes[$this->attribute]);
                    break;
            }
        }
        return true;
    }

}
