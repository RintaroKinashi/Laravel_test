<!-- 投稿フォーム -->
<!-- includeで別テンプレートを呼出し -->
@include("parts.bbs_entry_form")

<h2>記事一覧</h2>

<!-- $item_list分ループ処理 -->
@foreach ($item_list as $item)
<div class="entry">
	<h5>題名：{{ $item->title }}</h5>
    <p>投稿者：{{ $item->author }}</p>
	<div>
        {!! nl2br(e($item->body)) !!}
	</div>
</div>
@endforeach

@if(count($item_list) < 1)
<p>投稿がありません</p>
@endif
