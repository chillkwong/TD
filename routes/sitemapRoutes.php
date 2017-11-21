<?php

    $sitemap = App::make('sitemap');


	// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
	// by default cache is disabled
	$sitemap->setCache('laravel.sitemap', 1);

	// check if there is cached sitemap and build new only if is not
	if (!$sitemap->isCached()) {
		// add item to the sitemap (url, date, priority, freq)
		$sitemap->add(URL::to('/'), '2017-08-25T20:10:00+02:00', '1.0', 'daily');

		$translations = [
			['language' => 'en', 'url' => URL::to('/en/')],
			['language' => 'hk', 'url' => URL::to('/hk/')],
			['language' => 'cn', 'url' => URL::to('/cn/')],
		];

		$pages = DB::table('pages')
                ->orderBy('created_at','desc')
                    ->get();

		foreach ($translations as $translation ) {

			foreach ($pages as $page ) {
			$sitemap->add(url($translation['language'] .'/'. $page->url), $page->created_at, '0.9', 'daily', [], null, $translations);
			}
		}


		$diamonds = DB::table('diamonds')
                ->orderBy('created_at','desc')
                    ->get(['id','created_at']);

		foreach ($translations as $translation ) {

			foreach ($diamonds as $diamond ) {
			$sitemap->add(url($translation['language'] .'/gia-loose-diamonds/'. $diamond->id), $diamond->created_at, '0.8', 'daily', [], null, $translations);
			}
		}

		$engagementRings = DB::table('engagement_rings')
                ->orderBy('created_at','desc')
                    ->get(['id','created_at']);

		foreach ($translations as $translation ) {

			foreach ($engagementRings as $engagementRing ) {
			$sitemap->add(url($translation['language'] .'/engagement-rings/'. $engagementRing->id), $engagementRing->created_at, '0.9', 'daily', [], null, $translations);
			}
		}

		$weddingRings = DB::table('wedding_ring_pairs')
                ->orderBy('created_at','desc')
                    ->get(['id','created_at']);

		foreach ($translations as $translation ) {

			foreach ($weddingRings as $weddingRing ) {
			$sitemap->add(url($translation['language'] .'/wedding-rings/'. $weddingRing->id), $weddingRing->created_at, '0.9', 'daily', [], null, $translations);
			}
		}
		


	}

	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	return $sitemap->render('xml');