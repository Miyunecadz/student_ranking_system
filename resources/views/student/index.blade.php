@extends('layout.app')
@section('content')
<div class="container mt-3">
    <div class="d-flex">
        <div class="ms-auto">
            <a class="btn btn-secondary" href="{{route('student.index')}}">Refresh</a>
            <a class="btn btn-primary" href="{{route('student.create')}}">Add Student</a>
        </div>
    </div>
    <h3 class="text-center">Phase 2 ranking in BTLEd Program (1st Sem 2022-2023)</h3>
    <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr class="table-dark">
            <th scope="col">Name</th>
            <th scope="col">Score (100 points) </th>
          </tr>
        </thead>
        <tbody>
          <tr>
              @forelse ($students as $student)
              <tr>
                  <td>{{$student->name}}</td>
                  <td>{{$student->score}}</td>
              </tr>
              @empty
                <td colspan="2" class="text-center">No record found</td>
              @endforelse
          </tr>
        </tbody>
      </table>
</div>
<script>
       function activityWatcher(){
        var secondsSinceLastActivity = 0;

        var maxInactivity = 10;

        setInterval(function(){
            secondsSinceLastActivity++;
            console.log(secondsSinceLastActivity + ' seconds since the user was last active');
            if(secondsSinceLastActivity > maxInactivity){
                window.location.reload();
            }
        }, 1000);

        function activity(){
            secondsSinceLastActivity = 0;
        }

        var activityEvents = [
            'mousedown', 'mousemove', 'keydown',
            'scroll', 'touchstart'
        ];

        activityEvents.forEach(function(eventName) {
            document.addEventListener(eventName, activity, true);
        });


        }

activityWatcher();

</script>
@endsection
