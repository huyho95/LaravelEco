<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $ratings = Rating::with('user:id,name', 'product:id,pro_name')->paginate(10);

        $viewData = [
            'ratings' => $ratings,
        ];
        return view('admin::rating.index', $viewData);
    }
    public function action($action, $id)
    {
        if ($action) {
            $messages = '';
            $ratings = Rating::find($id);
            switch ($action) {
                case 'delete':
                    $ratings->delete();
                    $messages = 'Xóa dữ liệu thành công';
                    break;

            }
        }

        return redirect()->back()->with('success', $messages);

    }

}
