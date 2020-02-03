<?php

namespace App\Http\Controllers\Room;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
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
            $room = Room::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $room = Room::latest()->paginate($perPage);
        }
        return view('room.room.index', compact('room'));
    }

    public function create()
    {
        return view('room.room.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        Room::create($requestData);
        return redirect('room')->with('flash_message', 'Room added!');
    }

    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('room.room.show', compact('room'));
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('room.room.edit', compact('room'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        $room = Room::findOrFail($id);
        $room->update($requestData);
        return redirect('room')->with('flash_message', 'Room updated!');
    }


    public function destroy($id)
    {
        Room::destroy($id);
        return redirect('room')->with('flash_message', 'Room deleted!');
    }
}
