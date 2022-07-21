 @include('partials.headingtemplate') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ ('style.css') }}" /> 
    <title>Document</title>
</head>
<body>
    <div class="header_1">
    <a href="#default" class="logo"><img src="University of Cape Coast Logo.png" alt="ucc logo "></a>
    <span class="header-center_1">UCC PROGRAMME REQUIREMENT CHECKER</span>
{{-- <div>
      {{-- <a class="active" href="#home">Home</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a> 
</div>--}} 
</div>
    <div class="container">

                <!-- left-page -->
       @include('partials.left-page')
        <!-- rigth page -->

        {{-- <div class="right right-page">
            <div class="header">
                <h4>Congratulations!</h4>
            </div> --}}

            <table id="customers">
                <tr>
                    <th>According on your high school electives, these programmes are accessible for reading at the University of Cape Coast.</th>
                    {{-- <th>Name</th>
                    <th>Department</th>
                    <th>Population</th> --}}

                    {{-- <th>Class</th>
                  {{-- <th>Session</th> --}}
                </tr>
                @foreach($elect2 as $data )
                {{-- @while ($regdatas < 15) --}}
                <tr>
                    <td>{{$data->name }}</td>
                    {{-- <td>{{$data->title }}</td>
                    <td>{{$data->short_name }}</td>
                    <td>{{$data->count()}}</td>  --}}
                </tr>
                {{-- @endwhile --}}
                @endforeach
                @foreach($elect as $data )
                {{-- @while ($regdatas < 15) --}}
                <tr>
                    <td>{{$data->name }}</td>
                    {{-- <td>{{$data->title }}</td>
                    <td>{{$data->short_name }}</td>
                    <td>{{$data->count()}}</td>  --}}
                </tr>
                {{-- @endwhile --}}
                @endforeach


            </table>

        </div>
    </div>
            {{-- <!-- rigth page -->

        <div class="right right-page">
            <div class="header">
                <h4>Courses</h4>
            </div>

            <div class="table">
                <div class="table-header course-header">
                    <p>Course</p>
                    <p>Name</p>
                    <p>Department</p>
                    <p>Population</p>
                    <p>Edit</p>
                </div>
                @foreach ($regdatas as $regdata)
                <div class="table-body">    
                    <p>{{$regdata->code }}</p>
                    <p>{{$regdata->title }}</p>
                    <p>{{$regdata->short_name }}</p>
                    <p>{{$regdatas->count()}}</p>
                    <button class="edit-button">Edit</button>
                </div>
                @endforeach

            </div>

        </div>
    </div> --}}

</body>

</html>