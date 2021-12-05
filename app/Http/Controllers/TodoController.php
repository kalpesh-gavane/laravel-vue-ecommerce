<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tasks  = Todo::latest()->paginate(2);

        // print_r($tasks);
        // exit;
        return response()->json($tasks,200);
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
    public function store(Request $request)
    {
     
        $validator =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);

        // print_r($validator);
        // exit;

        if($validator->fails()){

            $validator = ['the name field is required','the name field is required'];
            return response()->json($validator,422);
        }

     $data = new Todo();
     $data->name = $request->name;
     $data->description = $request->description;
     $data->save();

     if($data){
        $tasks  = Todo::latest()->paginate(2);
        return response()->json($tasks,200);
     }
    }

    public function show($id){
        $tasks  = Todo::latest()->paginate(2);

        // print_r($tasks);
        // exit;
        return response()->json($tasks,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function search($term = null)
    {
    
        if($term != null){
            $tasks['data'] = Todo::where('name','like','%'.$term.'%')->get();
            return response()->json($tasks,200);
        }

        $tasks  = Todo::latest()->paginate(2);
        return response()->json($tasks,200);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $task  = Todo::find($id);
        return response()->json($task,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    //    print_r($id);
    //    exit;

    $validator =  Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
    ]);

    // print_r($validator);
    // exit;

    if($validator->fails()){

        $validator = ['the name field is required','the name field is required'];
            return response()->json($validator,422);
        }

    $data =  Todo::find($id);
    $data->name = $request->name;
    $data->description = $request->description;
    $data->update();

    if($data){
        $tasks  = Todo::latest()->paginate(2);
        return response()->json($tasks,200);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Todo::find($id);
        $data->delete();

   
            $tasks  = Todo::latest()->paginate(2);
            return response()->json($tasks,200);
        
    }
}
