<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Update your html tag to include the itemscope and itemtype attributes. --> 
        <html itemscope itemtype="http://schema.org/Article">

        <!-- Place this data between the <head> tags of your website --> 
        <title>{{trans('searchDiamond.Search Diamonds')}} - {{trans('home.webTitle')}}</title>
        <meta name="description" content="{{trans('searchDiamond.Search Diamonds')}}" />

        <!-- Google Authorship and Publisher Markup --> 
        <link rel="author" href=" https://plus.google.com/[Google+_Profile]/posts"/>
        <link rel="publisher" href=” https://plus.google.com/[Google+_Page_Profile]"/>

        <!-- Schema.org markup for Google+ --> 
        <meta itemprop="name" content="The Name or Title Here"> 
        <meta itemprop="description" content="This is the page description"> 
        <meta itemprop="image" content=" http://www.example.com/image.jpg">

        <!-- Twitter Card data --> 
        <meta name="twitter:card" content="summary_large_image"> 
        <meta name="twitter:site" content="@publisher_handle"> 
        <meta name="twitter:title" content="Page Title"> 
        <meta name="twitter:description" content="Page description less than 200 characters"> 
        <meta name="twitter:creator" content="@author_handle"> 
        <!-- Twitter summary card with large image must be at least 280x150px --> 
        <meta name="twitter:image:src" content=" http://www.example.com/image.html">

        <!-- Open Graph data --> 
        <meta property="og:title" content="Title Here" /> 
        <meta property="og:type" content="article" /> 
        <meta property="og:url" content=" http://www.example.com/" />
        <meta property="og:image" content=" http://example.com/image.jpg" />
        <meta property="og:description" content="Description Here" /> 
        <meta property="og:site_name" content="Site Name, i.e. Moz" /> 
        <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" /> 
        <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" /> 
        <meta property="article:section" content="Article Section" /> 
        <meta property="article:tag" content="Article Tag" /> 
        <meta property="fb:admins" content="Facebook numberic ID" />

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
        <link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">
        <style>
        #carousel  {
            background-image: url("/front_end/home/dreamstime.jpg");
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat;
            padding: 150px;
        }

        #education {
            background-color: rgb(250, 250, 250);
        }

        </style>
       
    </head>

    @include('layouts.frontHeader')
    <body>
        <div id="home">
            
  		<h1 style="text-align: center;">HOLLOWAY CUT ADVISER</h1>
		<p><span style="color: #330066; font-size: small;">Holloway  Cut Adviser ，HCA（何奴偉切割查詢器）( <a href="http://patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO1&amp;Sect2=HITOFF&amp;d=PALL&amp;p=1&amp;u=%2Fnetahtml%2FPTO%2Fsrchnum.htm&amp;r=1&amp;f=G&amp;l=50&amp;s1=7,251,619.PN.&amp;OS=PN/7,251,619&amp;RS=PN/7,251,619" target="_blank">U.S. Patent 7,251,619</a> ) 估計一個圓形鑽石，基於其潛在的光反射，火，閃爍和直徑大小。</span></p>
		<p>大多數人會想尋找範圍1-2之間的鑽石，其中：0-2優秀，2-4非常好，4-6好，6-8博覽會，和8-10差。零幾乎是不可能的，是因為許多因素各有衝突。</p>
		<p>你需要4個數字。總深度％（Total Depth %），枱面％（Table %）和冠部角度（Crown deg）和亭部角度（Pavilion deg）。從2006年AGS和GIA和IGI報告。迴聲“一些報告列出不準確的樹冠圓形％和Pavilion％的;運行石頭，如果分數在2.0，要求零售商取到您報告與角度。</p>
		<p>HCA沒有對稱（symmetry），拋光（polish）和切割面（minor facets）的資料;只用它來過容濾一些表現比較差的鑽石，縮小您的最終選擇。<a href="http://tingdiamond.com/hk/education-diamond-grading/hearts-and-arrows/"> 八心八箭</a>筒都能有幫助。</p>
		<p>本網站有介紹了更多關於<a href="http://tingdiamond.com/hk/education-diamond-grading/4cs/cut/">切割</a>鑽石的資訊。HCA的詳細說明，請瀏覽  <a href="http://www.diamond-cut.com.au/" target="_blank"><u>www.diamond-cut.com.au</u></a>.</p>
		</div>
		</div> </div></div></div></div></div><div class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<form id="hca-form" class="hca-form" accept-charset="UTF-8" action="//www.pricescope.com/tools/hca" method="post">
		<div class="form-item" style="text-align: center;">
		<div class="form-item">Depth % <input id="edit-depth-textbox" class="form-text required" maxlength="128" name="depth_textbox" size="4" type="text" value="60" /></div>
		<div class="form-item"><a href="http://www.pricescope.com/wiki/diamonds/diamond-table-size">Table</a> % <input id="edit-table-textbox" class="form-text required" maxlength="128" name="table_textbox" size="4" type="text" value="57" /></div>
		<div class="form-item">
		<p><a href="http://www.pricescope.com/wiki/diamonds/diamond-crown-and-pavilion">Crown</a> <select id="edit-crown-listbox" class="form-select" name="crown_listbox"><option selected="selected" value="0">Angle</option><option value="1">%</option></select> <input id="edit-crown-textbox" class="form-text required" maxlength="128" name="crown_textbox" size="4" type="text" value="34" /></p>
		</div>
		<div class="form-item">
		<p><a href="http://www.pricescope.com/wiki/diamonds/diamond-crown-and-pavilion">Pavilion</a> <select id="edit-pavilion-listbox" class="form-select" name="pavilion_listbox"><option selected="selected" value="0">Angle</option><option value="1">%</option></select> <input id="edit-pavilion-textbox" class="form-text required" maxlength="128" name="pavilion_textbox" size="4" type="text" value="40.5" /></p>
		</div>
		<div class="form-item"><a href="http://www.pricescope.com/wiki/diamonds/diamond-culet">Culet*</a> % <input id="edit-cutlet-textbox" class="form-text required" maxlength="128" name="cutlet_textbox" size="4" type="text" value="0" /></div>
		<p><input id="edit-send-quote1" class="form-submit" name="op" type="submit" value="Go" /></p>
		</div>
		</form>
		</div>
		</div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p><img src="//www.pricescope.com/sites/all/modules/hca/images/scheme.gif" alt="" /></p>
		</div>
		</div> </div></div></div></div></div><div class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>*如果你有底尖％。</p>
		<table border="1" width="100%" cellspacing="2" cellpadding="2">
		<tbody>
		<tr valign="top">
		<td>Carat</td>
		<td>尖</td>
		<td>非常細</td>
		<td>細</td>
		<td>中度</td>
		<td>輕微大</td>
		<td>大</td>
		<td>非常大</td>
		<td>極大</td>
		</tr>
		<tr>
		<td>0 &#8211; 1</td>
		<td>0% &#8211; 0.45%</td>
		<td>0.45% &#8211; 1.15%</td>
		<td>1.15% &#8211; 1.95%</td>
		<td>1.95% &#8211; 3.75%</td>
		<td>3.75% &#8211; 4.455%</td>
		<td>4.455% &#8211; 8.05%</td>
		<td>8.05% &#8211; 12.05%</td>
		<td>12.05% &#8211; 99.05%</td>
		</tr>
		<tr>
		<td>1 &#8211; 5</td>
		<td>0% &#8211; 0.35%</td>
		<td>0.35% &#8211; 1.05%</td>
		<td>1.05% &#8211; 1.75%</td>
		<td>1.75% &#8211; 3.15%</td>
		<td>3.15% &#8211; 3.75%</td>
		<td>3.75% &#8211; 6.65%</td>
		<td>6.65% &#8211; 10.05%</td>
		<td>10.05% &#8211; 99.05%</td>
		</tr>
		</tbody>
		</table>
		</div>
		</div> </div></div></div></div></div><div class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<div class="content-middle">
		<h2>亭部角度 VS 冠部及亭部％百分比</h2>
		<p>這是最好的輸入冠部和亭部角度，為HCA過那濾麼不太漂亮的鑽石。我們用三角學，從冠部和亭部％的數據計算角度。如果你有他們的角度就最好：</p>
		<ol>
		<li>四捨五入，即13.3％冠部高度經常變成13％或13.5％。</li>
		<li>亭深％時，轉換為亭角常都會低估了由0.15度的亭角</li>
		<li>掃描儀不擅長測量底尖;一個尖底減少亭深％，但並不能改變亭角。</li>
		</ol>
		<p>&nbsp;</p>
		</div>
		</div>
		</div> </div></div></div></div></div><div class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
		<div class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-80 vc_video-align-center">
		<div class="wpb_wrapper">
		<video id="example_video_1" class="video-js vjs-default-skin "
                                  controls preload="auto" width="500" height="264"
                                  poster="/front_end/home/gia_video.jpg"
                                  data-setup='{"example_option":true, "fluid": true}'>
                                 <source src="https://tdpublic.nyc3.digitaloceanspaces.com/public/videos/HCAHolloway%20Cut%20Adviser%20%20Diamond.mp4" type="video/mp4" >
		<div class="wpb_video_wrapper"><iframe width="1060" height="596" src="https://www.youtube.com/embed/PZQ2rWxyCY4?feature=oembed" frameborder="0" allowfullscreen></iframe></div>
		</div>
		</div>
		</div></div></div></div></div><div class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<div class="content-middle">
		<h1 class="forum-title">有時VG會比EX高分，但好難找到"完美切割"～</h1>
		<h1 class="forum-title"><a href="http://www.pricescope.com/forum/rockytalky/gia-excellent-cut-but-5-5-hca-what-gives-t169515.html">GIA Excellent Cut but 5.5 HCA? What gives?</a></h1>
                  

        	
    </div>

    @include('layouts.frontFooter')


<script src="//vjs.zencdn.net/5.19/video.min.js"></script>
</body>






</html>