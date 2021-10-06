<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Project</h3>
                    <p class="text-subtitle text-muted">List of project</p>
                    <a href="{{ route('project.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Change</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->user->name }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                            <td>Offenburg</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</x-app-layout>
