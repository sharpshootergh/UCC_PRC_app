<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{ ('style.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Laravel 8: Dynamic Dependent Dropdown</title>
    </head>
    <body>
        <div class="header_1">
            <a href="#default" class="logo"><img src="ucc_logo.png" alt="ucc logo "></a>
            <span class="header-center_1">UCC PROGRAMME REQIUREMENT CHECKER</span>
        <div>
              {{-- <a class="active" href="#home">Home</a>
              <a href="#contact">Contact</a>
              <a href="#about">About</a> --}}
        </div>
            
          </div>
        <div class="container my-5">
            <h1 class="fs-5 fw-bold my-4 text-center">Select your electives</h1>
            <div class="row">
                <form method="post" action="{{ route('postData') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="elective " class="form-label">Elective 1 </label>
                        {{-- class="form-control" --}}
                        <select class="form-control" name="elect[]" id="elective ">
                            <option hidden>Choose Elective</option>
                            @foreach ($elective as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="elective " class="form-label">Elective 2 </label>
                        {{-- class="form-control" --}}
                        <select class="form-control" name="elect[]" id="elective ">
                            <option hidden>Choose Elective</option>
                            @foreach ($elective as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="elective " class="form-label">Elective 3 </label>
                        {{-- class="form-control" --}}
                        <select class="form-control" name="elect[]" id="elective ">
                            <option hidden>Choose Elective</option>
                            @foreach ($allelective as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="elective " class="form-label">Elective 4 </label>
                        {{-- class="form-control" --}}
                        <select class="form-control" name="elect[]" id="elective ">
                            <option hidden>Choose Elective</option>
                            @foreach ($allelective as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
    </body>
</html>