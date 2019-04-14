<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Surname;
use App\Character;

class AdminController extends Controller
{
    public function dashboard(){
        $characters = Character::get(['character']);
        $surnames = Surname::get(['character']);

        return view('admin.dashboard',compact('characters','surnames'));
    }

    public function importCSV(Request $request,$type){

        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $header = $data[0];
        $values = array_slice($data, 1);
        $storeArray = [];

        $storeArray = $this->formatArray($header,$values);

        // remove all data from table and store it again
        if($type==='surname'){
            Surname::query()->truncate();
            Surname::insert($storeArray);
        }else if($type==='character'){
            Character::query()->truncate();
            if(count($storeArray)>=5000){
                foreach (array_chunk($storeArray, 1000) as $chunk) {
                    Character::insert($chunk);
                }
            }   
        }

        return back()->with(['status'=>ucfirst($type) . ' imported']);         
    }

    private function formatArray($header,$values){
        $storeArray =[];
        // format array to use only 1 query to bulk insert
        foreach ($values as $val) {
            $tmp['id'] = (string) Uuid::uuid4();
            for ($i=0; $i < count($header) ; $i++) { 
                if($header[$i]==='radical'){
                    $tmp[$header[$i]] = preg_replace('/[ 0-9\.]+/', '', $val[$i]);
                }else{
                    $tmp[$header[$i]] = $val[$i];
                }
            }
            array_push($storeArray, $tmp);
        }

        return $storeArray;
    }
}
