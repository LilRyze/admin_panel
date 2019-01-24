<?php

namespace AdminPanel\Http\Controllers;

use Illuminate\Http\Request;
use AdminPanel\Destination;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function showCreateDestination() {
        return view('create_destination');
    }

    public function showUpdateDestination($id) {
        $destinations = Destination::where('id', $id)->get();
        return view('update_destination',['destinations' => $destinations, 'id' => $id]);
    }

    public function showReadDestinations() {
        $destinations = Destination::all();
        return view('read_destinations', ['destinations' => $destinations]);
    }


    public function createDestination(Request $request) {
            Destination::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'hotel' => $request->hotel,
                'included' => $request->included,
                'ticket_included' => $request->ticket_included,
                'guided_visits' => $request->guided_visits,
            ]);
//            $request->image->store(storage_path());

    }

    public function updateDestination(Request $request) {
        try {
            Destination::where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'hotel' => $request->hotel,
                    'included' => $request->included,
                    'ticket_included' => $request->ticket_included,
                    'guided_visits' => $request->guided_visits,
                ]);
        } catch (\Exception $e) {
            echo $e;
        }
        return 'correct';
    }

    public function deleteDestination(Request $request) {
        try {
            Destination::where('id', $request->id)
                ->delete();
        } catch (\Exception $e) {
            echo $e;
        }
        return redirect('/');
    }
}
