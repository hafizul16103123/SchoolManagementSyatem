<?php

namespace App\Http\Controllers\Notice;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $notice = Notice::where('notice', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $notice = Notice::latest()->paginate($perPage);
        }

        return view('Notice.notice.index', compact('notice'));
    }


    public function create()
    {
        return view('Notice.notice.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Notice::create($requestData);

        return redirect('notice')->with('flash_message', 'Notice added!');
    }


    public function show($id)
    {
        $notice = Notice::findOrFail($id);

        return view('Notice.notice.show', compact('notice'));
    }


    public function edit($id)
    {
        $notice = Notice::findOrFail($id);

        return view('Notice.notice.edit', compact('notice'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $notice = Notice::findOrFail($id);
        $notice->update($requestData);

        return redirect('notice')->with('flash_message', 'Notice updated!');
    }


    public function destroy($id)
    {
        Notice::destroy($id);

        return redirect('notice')->with('flash_message', 'Notice deleted!');
    }

}
