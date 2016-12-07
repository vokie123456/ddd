<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>{{$title}}</h1>
	<p>{{$content}}</p>

	{{$score}}
	@if($score >= 60)
		及格
	@else
	 	不及格<br>
	@endif

	@for($i=0; $i<=10; $i++)
		{{$i}}<br> 
	@endfor

	@foreach($user as $u)
		{{$u}}<br>
	@endforeach

	@forelse($user as $u)
		{{$u}}
	@empty
		没有数据
	@endforelse
</body>
@include('footer')
</html>