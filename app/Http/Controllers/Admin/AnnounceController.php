<?php

namespace App\Http\Controllers\Admin;

use App\Announce;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AnnounceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('admin.announces.index');
    }

    public function datatable(Request $request)
    {
        $announces = Announce::with('user')->get()->sortByDesc('id');

        return Datatables::of($announces)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.announce.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('admin.announce.destroy', $model->id).'" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }

    public function destroy(Request $request, Announce $announce)
    {
        $announce->delete();

        return redirect()->back();
    }
}
