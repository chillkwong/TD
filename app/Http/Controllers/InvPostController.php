<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPost;
use App\Invoice;
use App\InvContent;
use App\InvDiamond;
use App\Jewellry;


class InvPostController extends Controller
{
    public function create()
    {
        $form = InvPost::form();

        return response()
            ->json([
                'form' =>$form,
                'select' => Invoice::orderBy('id')
                ->get()
                ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'video' => 'required | max:255',
            'invoice_id' => 'required | max:255',
            'cover' => 'required | image',
            'contents' => 'required | array | min:1',
            'contents.*.locale' => 'required | max:3000',
            'contents.*.content' => 'required | max:3000'
            ]);


        // $post = ;

        $contents = [];
        foreach ($request->contents as $content) {
            $contents[] = new InvContent($content);
        }
                // dd($request->cover);

        // $images = [];
        $cover = $this->getFileName($request->cover);
        $request->cover->move(base_path('public/images/').$request->invoice_id, $cover);


        $image1 = '';
        if ($request->hasFile('image1')) {
        	$image1 = $this->getFileName($request->image1);
        	$request->image1->move(base_path('public/images/').$request->invoice_id, $image1);
        }
        
        $image2 = '';
        if ($request->hasFile('image2')) {
        	$image2 = $this->getFileName($request->image2);
        	$request->image2->move(base_path('public/images/').$request->invoice_id, $image2);
        }
        

        $post = new InvPost($request->all());
        
        $post->cover = $cover;
        $post->image1 = $image1;
        $post->image2 = $image2;

        Invoice::findOrFail($post->invoice_id)->invPosts()->save($post);

        
        $post->contents()
            ->saveMany($contents);


        return response()
            ->json([
                'saved' => true,
                'id' => $post->id,
                'message' => 'You have successfully created recipe!'
                ]);
    }

    protected function getFileName($file)
    {
    		return $file->getClientOriginalName();
    }

    public function show($id)
    {
    		$post = InvPost::with(['contents'=> function($query){$query->where('locale',app()->getLocale())->get();}])
    				->findOrFail($id);

    		if (Invoice::whereId($post->invoice_id)->with(['invDiamonds','jewellries'])->get()) {
    			$invoice = Invoice::whereId($post->invoice->id)->with(['invDiamonds','jewellries'])->get();
    		}

    		// if (Jewellry::invoices($post->invoice->id)->get()) {
    		// 	$jewellries = Jewellry::invoices($post->invoice->id)->get();
    		// }

    		return response()
    			->json([
    				'post' => $post,
    				'invoice' =>$invoice,
    				]);

    }
}
