<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                        <title>Dashboard</title>
                    </head>
                    <body>
                    
                    <h3></h3>
                    <div class="mytable">
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($form_complain as $ts)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $ts->title }}</td>
                                <td>{{ $ts->content }}</td>
                                <td>{{ $ts->date }}</td>
                                <td>@if($ts->status==0)
                                        Waiting for Validation
                                    @elseif($ts->status==1)
                                        Validated
                                    @elseif($ts->status==2)
                                        Rejected
                                    @elseif($ts->status==3)
                                        In Progress
                                    @elseif($ts->status==4)
                                        Resolved
                                    @endif
                                    </td>
                                <!-- <td>{{ $ts->status }}</td> -->
                                <td>
                                <a class="btn btn-info" href="/fc-show/{{ $ts->id }}">Show</a>
                                @if($ts->status==0)
                                <a class="btn btn-success" href="/fc-validate/{{ $ts->id }}">Validate</a>
                                @elseif($ts->status==1)
                                <a class="btn btn-warning" href="/fc-undo/{{ $ts->id }}">Undo</a>
                                @endif 
                                @if($ts->status==2)
				                <a class="btn btn-danger" href="/fc-unreject/{{ $ts->id }}">Undo</a>
                                @else
                                <a class="btn btn-danger" href="/fc-reject/{{ $ts->id }}">Reject</a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </body>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
