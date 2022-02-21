<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationRequest;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\FindAndCountTrait;

class NotificationConstroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Notification $notifications)
    {
        $notifications = $notifications->findAndCount();
        return view('notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role_id', '!=', '1')->get();
        return view('notifications.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotificationRequest $request)
    {
        Notification::create($request->validated());

        return redirect()->route('notifications.index')->with(['flash_type' => 'success', 'flash_message' => 'Role Created Successfuly.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notification = Notification::find($id);
        return view('notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notification = Notification::find($id);
        return view('notifications.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', "unique:roles,name,$id"],
            'value' => ['required', 'string', 'max:255', "unique:roles,value,$id"],
        ]);

        Notification::find($id)->update($request->only(['name', 'value']));

        return redirect()->route('notifications.index')->with(['flash_type' => 'success', 'flash_message' => 'Notification Updated Successfuly.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notification::find($id)->delete();
        return redirect()->route('notifications.index')->with(['flash_type' => 'success', 'flash_message' => 'Notification Deleted Successfuly.']);
    }

    public static function latestNotifications()
    {
        return Notification::where(function ($notification) {
            $notification->whereNull('user_id')->orWhere('user_id', auth()->id());
        })->limit(5)->latest()->get();
    }

    public function myNotifications()
    {
        $query = Notification::where(function ($notification) {
            $notification->whereNull('user_id')->orWhere('user_id', auth()->id());
        });
        $notifications = FindAndCountTrait::FindAndCount($query);
        return view('notifications.my', compact('notifications'));
    }
}
