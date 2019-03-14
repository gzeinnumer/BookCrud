{{--todo 22 test di browser--}}

{{--todo 23--}}
{{--memanggil layout --}}
{{--buat extends dan section saja lalu test browser post/create--}}
@extends('layouts.app')

@section('content')
    {{--todo 24 isi section--}}
    <div class="container">
        <form action="{{ route('post.store') }}" class="" method="pots">
            @csrf
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" name="title" placeholder="Post Title">
            </div>
            <div class="form-group">
                <label for="">title</label>
                <select name="categori_id" id="" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Contene</label>
                <textarea name="content" rows="5" class="form-control" placeholder="post Content"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
    {{--end todo--}}
@endsection

