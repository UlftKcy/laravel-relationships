<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Exception;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('category', compact('categories'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchSubCategories(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                "category_id" => "required",
            ]);

            if ($validator->fails()) {
                return response()->json(["status" => "warning", "message" => "hata oluştu"]);
            }

            /** @var SubCategory $sub_categories */
            $sub_categories = SubCategory::query()
                ->select("sub_categories.id as id", "sub_categories.name as name")
                ->join("categories", "categories.id", "=", "sub_categories.category_id")
                ->where("categories.id", "=", $request->category_id)
                ->get();


            return \response()->json(["status" => "success", "message" => "İşlem başarıyla tamamlandı.", "data" => [
                "sub_categories" => $sub_categories
            ]]);

        } catch (Exception $exception) {
            return response()->json(["status" => "error", "message" => $exception->getMessage()]);
        }
    }
}
