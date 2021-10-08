<x-app-layout>
    <div class="page-heading">
        <div class="page-title mb-10">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h4 class="mb-4">{{ $exception->title }}</h4>
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
    </div>
    <div>
        <section class="section">
            <form action="">
                <div class="form-group">
                    <pre>
                        <code class="language-json" id="error_form">
                            {{ $exception->log }}
                        </code>
                    </pre>
                </div>
            </form>
        </section>
    </div>

    <x-slot name="styles">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css">
    </x-slot>

    <x-slot name="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
        <script>
            hljs.highlightAll();
        </script>
    </x-slot>
</x-app-layout>
