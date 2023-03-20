<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use App\Models\User;

class CategoriesController extends Controller
{
    public function show(Category $category, Request $request, Topic $topic, User $user)
    {
        // 读取分类ID关联的话题，并按每页20条分页
        $topics = $topic->withOrder($request->order)
                        ->where('category_id', $category->id)
                        ->with('user', 'category') // 预加载 防止n+1问题
                        ->paginate(20);
        // 活跃用户列表
        $active_users = $user->getActiveUsers();

        // 传参变量话题和分类到模版中
        return view('topics.index', compact('topics', 'category', 'active_users'));
    }
}
