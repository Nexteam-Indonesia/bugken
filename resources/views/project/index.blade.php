<x-app-layout>
    <div class="page-heading">
        <div class="page-title mb-10">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <div class="flex-row justify-content-between align-content-end">
                        <h3 class="mb-4">Project</h3>
                        <a href="{{ route('project.create') }}" class="btn btn-primary">Add New</a>
                    </div>
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
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->created_at }}</td>
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
</x-app-layout>
