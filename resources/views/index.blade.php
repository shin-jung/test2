@extends('layouts.app')

@section('title', '所有文章')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4>
				@auth
					<div class="float-right">
						<a href="{{ route('articles.create') }}" class="btn btn-md btn-successs ml-2">
							<i class="fas fa-plus"></i>
							<span class="p1-1">新增文章</span>
						</a>
					</div>
				@endauth
{{-- 				@isset($keyword)
					搜尋:{{ $keyword }}
				@else
					所有文章
				@endisset --}}
			</h4>
			<hr>
			$if(count($posts) == 0)
				<p class="text-center">
					沒有任何文章
				</p>
			@endif
			@foreach($articles as $data)
				<div class="card mb-3">
					<div class="card-body">
						<div class="container-fluid p-0">
							<div class="row">
								<div class="col-md-12">
									<h4 class="card-title">{{ $data->title }} </h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									@if($post->)
								</div>
							</div>
					</div>
				</div>
		</div>
	</div>
</div>