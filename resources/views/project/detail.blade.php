<x-app-layout>
    <div class="page-heading">
        <div class="page-title mb-10">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 class="mb-4">{{ucfirst($project->title)}}</h3>
                    <p class="mb-4">{{$project->description}}</p>
                    <p class="mb-4">Key : {{ $project->key }}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                            <li class="breadcrumb-item active" aria-current="page">{{ucfirst($project->title)}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div>
            <section class="section">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="width: 20%">Reported At</th>
                        <th style="width: 50%">Message</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($project->exceptions as $exception)
                        <tr>
                            <td>{{ $exception->created_at }}</td>
                            <td>{{ $exception->log }}</td>
                            <td>
                                <a href="{{url('/project/'.$project->id)}}">
                                    <i class="bi bi-arrow-up-right-square"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <x-slot name="styles">
    </x-slot>

    <x-slot name="scripts">
        <script>
            console.log('')
        </script>
    </x-slot>
</x-app-layout>

