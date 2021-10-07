<x-app-layout>
    <div class="page-heading">
        <div class="page-title mb-10">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 class="mb-4">{{ucfirst($project->title)}}</h3>
                    <p class="mb-4">{{$project->description}}</p>
                    <span class="badge bg-primary">Key : {{ $project->key }}</span>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                            <li class="breadcrumb-item active" aria-current="page">Intiflex</li>
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
                        <th style="width: 25%">Id</th>
                        <th style="width: 50%">Log</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($project->exceptions as $exception)
                        <tr>
                            <td>{{ $exception->id }}</td>
                            <td>{{ $exception->log }}</td>
                            <td>{{ $exception->created_at }}</td>
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
    </x-slot>
</x-app-layout>

