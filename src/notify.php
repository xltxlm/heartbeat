<?php
/**
 * Created by PhpStorm.
 * User: xialintai
 * Date: 2017/1/11
 * Time: 9:24.
 */

namespace xltxlm\heartbeat;

use xltxlm\heartbeat\Config\Mail;
use xltxlm\mail\MailSmtp;
use xltxlm\mail\Util\MailUserInfo;

include __DIR__.'/../vendor/autoload.php';

final class notify
{
    public function __invoke()
    {
        while (true) {
            $ipconfig = shell_exec('ipconfig /all');
            (new MailSmtp())
                ->setTitle('工作机心跳')
                ->setMailConfig(new Mail())
                ->setBody($ipconfig)
                ->setTo(
                    (new MailUserInfo())
                        ->setEmail('xltxlm@qq.com')
                        ->setNickname('夏琳泰')
                )
                ->__invoke();
            sleep(3600);
        }
    }
}

(new notify())();
