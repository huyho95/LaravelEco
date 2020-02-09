<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\RequestContact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $contacts = Contact::paginate(10);

        $viewData = [
            'contacts' => $contacts
        ];
        
        return view('admin::contact.index',$viewData);
    }


    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin::contact.update',compact('contact'));
    }

    public function update(RequestContact $requestContact,$id)
    {
        $this->insertOrUpdate($requestContact,$id);

        return redirect()->back()->with('success','Cập nhật dữ liệu thành công');
    }

    public function insertOrUpdate($requestContact,$id = '')
    {

        $contact = new Contact();

        if($id) $contact = Contact::find($id);
        
        $contact->c_name = $requestContact->c_name;
        $contact->c_email = $requestContact->c_email;
        $contact->c_title = $requestContact->c_title ? $requestContact->c_title : $requestContact->c_name;
        $contact->c_content = $requestContact->c_content ? $requestContact->c_content : $requestContact->c_content;

        $contact->save();   
    }

    public function action($action,$id)
    {
        if ($action)
        {
            $contact = Contact::find($id);
            switch($action)
            {
                case 'active':
                    $contact->c_status = $contact->c_status == 1 ? 0 : 1;
                    $contact->save();
                 break;
            }
             return redirect()->back(); 
        }
        
    }
   
}
