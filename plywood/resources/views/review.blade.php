@extends("layout")

@section("title")Reviews
@endsection

@section("main_content")

    <h1>Feedback</h1>
    @if ($errors->any())
        <div class='alert-danger'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Enter subject" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Enter message" class="form-control"></textarea>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
    <h1>Все отзывы</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{$el->subject}}</h3>
        </div>
    @endforeach
@endsection
