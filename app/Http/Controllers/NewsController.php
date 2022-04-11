<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list() {
        $news = News::all();

        if(empty($news)) {
            return response()->json([
                'status' => false,
                'message' => 'No se tienen noticias registradas',
            ]);
        } else {
            try {
                return response()->json([
                    'status' => true,
                    'message' => 'Listado de noticias consultado correctamente',
                    'data' => $news
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar listado de noticias',
                    'error' => $th
                ]);
            }
        }

    }

    public function show(Request $newsData) {

        // function getJsonLength($jsonData) {
        //     $length = 0;

        //     foreach ($jsonData as $key => $json) {
        //         $length++;
        //     }
        //     return $length;
        // }
        
        // return getJsonLength($reportData);

        // consulting a report, by its id; or consulting several reports according to the student's id
        if(empty($newsData)) {

        } else if(isset($newsData->id)) {
            try {
                $news = News::find($newsData->id);
                if($news) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Consulta de noticia exitosa',
                        'data' => $news
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Noticia inexistente',
                    ]);
                }
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar noticia',
                    'error' => $th
                ]);
            }

        } else if($newsData->admin_id) {
            try {
                $news = News::where('admin_id', $newsData->admin_id)->get();
                return response()->json([
                    'status' => true,
                    'message' => 'Consulta de noticias exitosa',
                    'data' => $news
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar noticias',
                    'error' => $th
                ]);
            }
        } else {
            return response()->json([
                // validate that the validation of the empty json and the json with only one data type is working, as well as that the names of the fields passed are as they should be
                'status' => false,
                'message' => 'Favor de validar el tipo de consulta a realizar: id o admin_id',
            ]);

        }
    }

    public function create(Request $newsData) {
        try {
            $user = auth()->user();
            $news = new News();

            $news->admin_id = $user->id; 
            $news->description = $newsData->description; 
            $news->image = $newsData->image; 
            $news->num_of_reactions = $newsData->num_of_reactions; 
            $news->num_of_comments = $newsData->num_of_comments; 
            $news->save();
            
            return response()->json([
                'status' => true,
                'message' => 'Noticia creada exitosamente',
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Error al intentar crear la noticia',
                'error' => $th
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
