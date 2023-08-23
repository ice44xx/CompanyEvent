<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::where('category', 'Eventos')->get();
        $parties = Event::where('category', 'Festa e Shows')->get();
        $tours = Event::where('category', 'Tours')->get();
        return view('index', ['events' => $events, 'parties' => $parties, 'tours' => $tours]);
    }
    public function store(Request $request) {
        $event = new Event;
        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $event->image = str_replace('public/', '', $imagePath);
        }

        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->category = $request->category;
        $event->feature = $request->feature;
        $event->private = $request->private;

        $event->save();

        return redirect('/');
    }
}
