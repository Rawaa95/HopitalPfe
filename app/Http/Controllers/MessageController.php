<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; 
use App\Models\User; 

class MessageController extends Controller
{
    

    // Envoyer un message
  
    public function userAddMessagePost(Request $request)
    { 
            
        $message = new Message(); 
        $message->emetteur_id=\Auth::user()->id;
        $message->recepteur_id=$request->recepteur_id;
        $message->datetime=\Carbon\Carbon::now(); 
        $message->message=$request->message;
        $message->save();

          
        return redirect()->route('usermessages')->with(['success' => 'Un message a été ajouté avec succès']);
    }


   
      
}
