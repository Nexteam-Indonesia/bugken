<x-app-layout>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-2 order-last">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('project.index') }}">Project</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create New Project</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form method="POST" action="{{ route('project.store') }}" class="form form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>User Name</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <div class="form-group">
                                    <select id="user_id" name="user_id" class="choices form-select">
                                        @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Title</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="col-md-4">
                                <label>Description</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
