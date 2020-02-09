<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::whereRaw(1);

        $users = $users->orderBy('id', 'DESC')->paginate(10);

        $viewData = [
            'users' => $users,
        ];

        return view('admin::user.index', $viewData);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin::user.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->insertOrUpdate($request, $id);

        return redirect()->back()->with('success', 'Cập nhật dữ liệu thành công');
    }

    public function insertOrUpdate($request, $id = '')
    {

        $user = new User();

        if ($id) {
            $user = User::find($id);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone ? $request->phone : $request->phone;

        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');
            if (isset($file['name'])) {
                $user->avatar = $file['name'];
            }
        }
        $user->save();
    }

    public function action($action, $id)
    {
        if ($action) {
            $messages = '';
            $user = User::find($id);
            switch ($action) {
                case 'delete':
                    $user->delete();
                    $messages = 'Xóa dữ liệu thành công';
                    break;

            }
        }

        return redirect()->back()->with('success', $messages);

    }
}
