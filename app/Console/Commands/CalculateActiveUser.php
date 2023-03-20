<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CalculateActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     * 供我们调用命令
     *
     * @var string
     */
    protected $signature = 'larabbs:calculate-active-user';



    /**
     * The console command description.
     * 命令的描述
     * 
     * @var string
     */
    protected $description = '生成活跃用户';

    /**
     * Execute the console command.
     * 最终执行的方法
     *
     * @return int
     */
    public function handle(User $user)
    {
        // 在命令行打印一行信息
        $this->info('开始计算。。。');
        $user->calculateAndCacheActiveUsers();
        $this->info('成功生成！');
    }
}
