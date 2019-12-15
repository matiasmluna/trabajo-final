
@extends('layout')
@section('title')
  Didi Tienda Deportiva
@endsection

@section('main')



@foreach($categories as $category)
<tr class="gradeX">
    <td class="center"><a href="">{{ $category->name }}</a></td>
</tr>
@endforeach

@endsection
