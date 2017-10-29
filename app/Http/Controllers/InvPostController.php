<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPost;
use App\Invoice;
use App\InvContent;
use App\InvDiamond;
use App\Jewellry;
use App\Tag;
use File;


class InvPostController extends Controller
{


    public function bladeIndex($locale)
    {
      App()->setLocale($locale);


      return view('customerJewellry.index', compact(''));
 
    }


    public function bladeShow($locale, $id)
    {
      App()->setLocale($locale);

      return view('customerJewellry.show', compact(''));
 
    }

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

    public function index()
    {
        $posts = InvPost::orderBy('created_at', 'desc')
                ->with(['contents' => function($query){
                    $query->where('locale',app()->getLocale())->get();}])
                ->get(['cover', 'id'])->chunk(3);

        return response()
            ->json([
                'posts' => $posts
                ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            // 'video' => 'required | max:255',
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
        $request->cover->move(base_path('public/images'), $cover);


        $image1 = '';
        if ($request->hasFile('image1')) {
        	$image1 = $this->getFileName($request->image1);
        	$request->image1->move(base_path('public/images'), $image1);
        }
        
        $image2 = '';
        if ($request->hasFile('image2')) {
        	$image2 = $this->getFileName($request->image2);
        	$request->image2->move(base_path('public/images'), $image2);
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
    		return str_random(). '.' .$file->extension();
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
                    'locale' =>app()->getLocale()
    				]);

    }

    public function edit($id, Request $request)
        {
            
        $form = InvPost::with(['contents'])
                ->findOrFail($id);

        

            // $form = $requ()
            //     ->with(['ingredients' => function($query){
            //         $query->get(['id', 'name', 'qty']);
            //     }, 'directions' =>function($query){
            //         $query->get(['id', 'description']);
            //     }])
            //     ->findOrFail($id, [
            //         'id', 'name', 'description', 'image'
            //         ]);

            return response()
                    ->json([
                        'form' =>$form,
                        'select' => Invoice::orderBy('id')
                        ->get()
                        ]);
        }


        public function update($id, Request $request)
        {
            $this->validate($request, [
                'video' => 'required | max:255',
                'invoice_id' => 'required | max:255',
                'cover' => 'required',
                'contents' => 'required | array | min:1',
                'contents.*.locale' => 'required | max:3000',
                'contents.*.content' => 'required | max:3000'
                ]);

            $post = InvPost::with(['contents'])
                ->findOrFail($id);

            $contents = [];
            $contentsUpdated = [];

            foreach ($request->contents as $content ) {
                if(isset($content['id'])){
                    InvContent::where('inv_post_id', $post->id)
                        ->where('id', $content['id'])
                        ->update($content);

                    $contentsUpdated [] = $content['id'];
                }else{
                    $contents [] = new InvContent($content);
                }
            }

            $post->video = $request->video;
            $post->invoice_id = $request->invoice_id;

            $cover ='';
             if ($request->hasFile('cover')) {
                $cover = $this->getFileName($request->cover);
                $request->cover->move(base_path('public/images'), $cover);
                File::delete(base_path('public/images/'. $post->cover));
                $post->cover = $cover;
                }
        

            $image1= '';
            if ($request->hasFile('image1')) {
                $image1 = $this->getFileName($request->image1);
                $request->image1->move(base_path('public/images'), $image1);
                File::delete(base_path('public/images/'. $post->image1));
                $post->image1 = $image1;
                }

            $image2= '';
            if ($request->hasFile('image2')) {
                $image2 = $this->getFileName($request->image2);
                $request->image2->move(base_path('public/images'), $image2);
                File::delete(base_path('public/images/'. $post->image2));
                $post->image2 = $image2;
                }

            $post->save();

            //delete all ids except updated
            InvContent::whereNotIn('id', $contentsUpdated)
                    ->where('inv_post_id', $post->id)
                    ->delete();


            if (count($contents)) {
                $post->contents()->saveMany($contents);
            }


            return response()
                ->json([
                    'saved' =>true,
                    'id' => $post->id,
                    'message' =>'You have successfully updated recipe!'
                    ]);
        }

        public function destroy($id, Request $request)
        {
            $post = InvPost::findOrFail($id);

            InvContent::where('inv_post_id', $post->id)->delete();


            File::delete(base_path('public/images/'), $post->cover);
            File::delete(base_path('public/images/'), $post->image1);

            $post->delete();

            return response()
                ->json([
                    'deleted' =>true
                    ]);
        }
}
