<?php

namespace App\Http\Controllers\event_organizer;

use App\Models\RequestedEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestedEventRequest;
use App\Models\Event;

class RequestedEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = RequestedEvent::with('category')
        ->with('place')
        ->with('user')
        ->where('status','P')
        ->get();
        return response()->json([
            'message'=>'Success Get Requested Event',
            'data'=>$events,
        ],200);
    }
    public function getAll()
    {
        $events = RequestedEvent::with('category')
        ->with('place')
        ->with('user')
        ->get();
        return response()->json([
            'message'=>'Success Get All Requested Event',
            'data'=>$events,
        ],200);
    }
    public function actionEvent(Request $request, $id){
        $requestedEvent = RequestedEvent::find($id);
        $requestedEvent->status = $request->status;
        
        if($request->status == "Y"){
            $message = "Success Accepted Event";
            $event = new Event();
            $event->name = $requestedEvent->name;
            $event->image = $requestedEvent->image;
            $event->description= $requestedEvent->description;
            $event->start_time = $requestedEvent->start_time;
            $event->end_time = $requestedEvent->end_time;
            $event->user_id = $requestedEvent->user_id;
            $event->admin_id = $request->admin_id;
            $event->category_id = $requestedEvent->category_id;
            $event->place_id = $requestedEvent->place_id;
            $event->save();
        }else{
            $message = "Success Rejected Event";
        }
        $requestedEvent->save();
        
        $events = RequestedEvent::with('category')
        ->with('place')
        ->with('user')
        ->where('status','P')
        ->get();
        return response()->json([
            'message'=>$message,
            'data'=>$events,
        ],200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestedEventRequest $request)
    {   
        $validateData = $request->validated();
        $image = $request->file('image')->store('img-event');
        $validateData['status'] = "P";
        $validateData['image'] = $image;
        RequestedEvent::create($validateData);
        $events = RequestedEvent::with('category')
        ->with('place')
        ->with('user')
        ->get();
        return response()->json([
            'message'=>'Success Requested Event',
            'data'=>$events,
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestedEvent  $requestedEvent
     * @return \Illuminate\Http\Response
     */
    public function show(RequestedEvent $requestedEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestedEvent  $requestedEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestedEvent $requestedEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestedEvent  $requestedEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestedEvent $requestedEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestedEvent  $requestedEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestedEvent $requestedEvent)
    {
        //
    }
}
