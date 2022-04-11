<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function list() {
        $comments = Comment::all();

        if(empty($comments)) {
            return response()->json([
                'status' => false,
                'message' => 'No se tienen comentarios registrados',
            ]);
        } else {
            try {
                return response()->json([
                    'status' => true,
                    'message' => 'Comentarios consultados correctamente',
                    'data' => $comments
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar comentarios',
                    'error' => $th
                ]);
            }
        }

    }

    public function show(Request $commentData) {
        if(empty($commentData)) {

        } else if(isset($commentData->id)) {
            try {
                $comment = Comment::find($commentData->id);
                if($comment) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Consulta de comentario exitosa',
                        'data' => $comment
                    ]);
                } else {
                    return response()->json([
                        'status' => true,
                        'message' => 'Comentario inexistente',
                    ]);
                }
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar comentario',
                    'error' => $th
                ]);
            }

        } else if($commentData->news_id) {
            try {
                $comment = Comment::where('news_id', $commentData->news_id)->get();
                return response()->json([
                    'status' => true,
                    'message' => 'Consulta de comentarios exitosa',
                    'data' => $comment
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar comentarios',
                    'error' => $th
                ]);
            }
        } else if($commentData->student_id) {
            try {
                $comment = Comment::where('student_id', $commentData->student_id)->get();
                return response()->json([
                    'status' => true,
                    'message' => 'Consulta de comentarios exitosa',
                    'data' => $comment
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar comentarios',
                    'error' => $th
                ]);
            }
        } else {
            return response()->json([
                // validate that the validation of the empty json and the json with only one data type is working, as well as that the names of the fields passed are as they should be
                'status' => false,
                'message' => 'Favor de validar el tipo de consulta a realizar: id o news_id o student_id',
            ]);
        }
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
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
