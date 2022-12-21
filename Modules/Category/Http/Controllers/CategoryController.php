<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Ebook\Events\ShowingEbookList;
use Modules\Ebook\Entities\Ebook;
use Modules\Ebook\Filters\EbookFilter;
use Modules\Category\Entities\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public function index()
    {
        return view('public.categories.single-categories', [
            'categories' => Category::all()->nest(),
        ]);
    }
    
    public function show($slug,Ebook $model, EbookFilter $ebookFilter)
    {
        $ebookIds = [];
        request()->merge(['category' => $slug]);
        $category = Category::findBySlug($slug);
        
        if (request()->has('query')) {
            $model = $model->search(request('query'));
            $ebookIds = $model->keys();
        }
       
        $query = $model->filter($ebookFilter);

        $ebookIds = (clone $query)->select('ebooks.id')->resetOrders()->pluck('id');
        
        if (request()->has('category')) {
            $ebookIds = (clone $query)->select('ebooks.id')->resetOrders()->pluck('id');
        }

        $ebooks = $query->paginate(9)->appends(request()->query());

        if (request()->wantsJson()) {
            return response()->json($ebooks);
        }

        event(new ShowingEbookList($ebooks));
        
        $view_category = Category::findBySlug($slug);
        return view('public.ebooks.index', compact('ebooks', 'ebookIds','slug','view_category'));
        

       
    }

  

    
    
}
