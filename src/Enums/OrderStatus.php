<?php

namespace Weijiajia\Saloonphp\FiveSim\Enums;

//PENDING - Preparation  待定 - 准备
// RECEIVED - Waiting of receipt of SMS 已收到 - 等待接收短信
// CANCELED - Is cancelled  CANCELED - 已取消
// TIMEOUT - A timeout  超时 - 超时
// FINISHED - Is complete  FINISHED - 已完成
// BANNED - Number banned, when number already used BANNED - 号码已被使用，则禁止使用

enum OrderStatus: string
{
    case PENDING = 'PENDING';
    case RECEIVED = 'RECEIVED';
    case CANCELED = 'CANCELED';
    case TIMEOUT = 'TIMEOUT';
    case FINISHED = 'FINISHED';
    case BANNED = 'BANNED';
}